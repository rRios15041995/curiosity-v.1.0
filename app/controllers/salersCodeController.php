<?php
class salersCodeController extends BaseController{

   function all(){
      $codes = SalerCode::join("planes", "planes.id", "=", "codigos_vendedores.plan_id")
      ->join("trabajadores", "codigos_vendedores.trabajador_id", "=", "trabajadores.id")
      ->join("puestos", "puestos.id", "=", "trabajadores.puestos_id")
      ->where("trabajadores.active", "=", 1)
      ->where("codigos_vendedores.active", "=", 1)
      ->where("planes.active", "=", 1)
      ->where("puestos.id", "=", 0)
      ->select("trabajadores.*", "codigos_vendedores.*", "planes.*", "codigos_vendedores.id as codigos_vendedoresID")
      ->get();
      return $codes;
   }

	function save(){
      $data = Input::all();
		$rules = array(
			'trabajador_id' => 'required',
         'plan_id' => 'required'
		);
		$msjs = Curiosity::getValidationMessages();
		$validation = Validator::make($data, $rules, $msjs);
		if( $validation->fails()){
			return Response::json(array("status" => "CU-104", 'statusMessage' => "Validation Error", "data" => $validation->messages()));
		}
		else{
			if ($this->hasPlanRelationship($data['trabajador_id'], $data['plan_id']) == true){
				return Response::json(array("status" => "CU-103", 'statusMessage' => "Duplicate Data", "data" => null));
			}
			else{
				$code = new SalerCode($data);
            $code->codigo = $this->makeCode();
				$code->active = 1;
				$code->save();
				return Response::json(array("status" => 200, 'statusMessage' => "success", "data" => null));
			}
		}
	}

	function update(){
      $data = Input::all();
		$rules = array(
         'id' => 'required',
			'trabajador_id' => 'required',
         'plan_id' => 'required'
		);
		$msjs = Curiosity::getValidationMessages();
		$validation = Validator::make($data, $rules, $msjs);
		if( $validation->fails()){
			return Response::json(array("status" => "CU-104", 'statusMessage' => "Validation Error", "data" => $validation->messages()));
		}
      else{
         $rel = SalerCode::where("id", "=", $data["id"])->first();
         $rel->active = 0;
         $rel->save();
         $code = new SalerCode($data);
         $code->codigo = $this->makeCode();
         $code->active = 1;
         $code->save();
         return Response::json(array("status" => 200, 'statusMessage' => "success", "data" => null));
      }
	}

	function delete(){
      $data = Input::all();
      $rel = SalerCode::where("id", "=", $data["id"])->first();
      $rel->active = 0;
      $rel->save();
      return Response::json(array("status" => 200, 'statusMessage' => "success", "data" => null));
	}

   private function hasPlanRelationship($emp, $plan){
		$objs = SalerCode::where('trabajador_id', '=', $emp)->select('plan_id', 'active')->get();
		$toLive = false;
		foreach ($objs as $obj) {
			if($obj->plan_id == $plan && $obj->active == 1){ $toLive = true; }
		}
		return $toLive;
	}

   function makeCode(){
      $characters1 = "abcdefghijklmnopqrstuvwxyz";
      $characters2 = "ABCDEFGHIJKLMNOPQRSTUVWXZ";
      $characters3 = "1234567890";
      $maxCharacters = 3;
      $randomCode1 = "";
      for($i=0; $i < $maxCharacters; $i++){
         $randomCode1 .= substr($characters1, rand(0,strlen($characters1)), 1);
      }
      return "".$randomCode1.rand(100, 999);
   }

   function verifyCodeMatch(){
      $data = Input::all();
      $codePlan = SalerCode::join("planes", "plan_id", "=", "planes.id")
      ->where("codigo", "=", $data["code_val"])
      ->select("planes.*", "codigos_vendedores.active as cod_active")
      ->first();
      if ($codePlan){
         if ($codePlan->active != 1 || $codePlan->cod_active != 1){
            return Response::json(array("status" => "CU-110", 'statusMessage' => "Expired seller code"));
         }
         else {
            $plan = Plan::where("id", "=", $data["plan_id"])
            ->where("active", "=", 1)
            ->first();
            if ($plan){
               if ($plan->currency == $codePlan->currency &&
                   $plan->interval == $codePlan->interval &&
                   $plan->limit == $codePlan->limit &&
                   $plan->amount == $codePlan->amount
               ){
                  $codeaccepted = SalerCode::where("codigo", "=", $data["code_val"])->first();
                  Session::put("codesellerid", $codeaccepted->id);
                  return Response::json(array("status" => 200, 'statusMessage' => "success", 'data' => $codePlan));
               }
               else{
                  return Response::json(array("status" => "CU-109", 'statusMessage' => "Seller code does not match"));
               }
            }
            else {
               return Response::json(array("status" => "CU-111", 'statusMessage' => "Failed to get plan"));
            }
         }
      }
      else {
         return Response::json(array("status" => "CU-108", 'statusMessage' => "Seller code does not exist"));
      }
   }

}
?>
