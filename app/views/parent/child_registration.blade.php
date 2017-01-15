@extends('templates.parent-menu')

@section('title')
	Gestión de Mis Hijos
@stop

@section('css-plus')
<link rel="stylesheet" href="/packages/libs/materialize/css/carousel.css">
@stop
@section('title-baner')
 <i class="fa fa-child"></i> Gestión de Mis Hijos
@stop
@section('content-parent')
<div class="container-fluid" id="upch-container">
<div class="row">
   <div class="col-md-7 col-lg-7 upch-col-children">
      <div class="row">
			<div class="carousel">
			 <a href="javascript:void(0)" class="carousel-item">
				<div class="itemCarousel">
				   <img src="/packages/assets/media/images/parents/profile/mom-def.png" >
				   <h6 class="h6-responsive text-xs-center">Odaliz Ramirez</h6>
				</div>
			 </a>
			 <a href="javascript:void(0)" class="carousel-item">
				<div class="itemCarousel">
				   <img src="/packages/assets/media/images/parents/profile/mom-def.png" >
				   <h6 class="h6-responsive text-xs-center">Odaliz Ramirez</h6>
				</div>
			 </a>
			 <a href="javascript:void(0)" class="carousel-item">
				<div class="itemCarousel">
				   <img src="/packages/assets/media/images/parents/profile/mom-def.png" >
				   <h6 class="h6-responsive text-xs-center">Odaliz Ramirez</h6>
				</div>
			 </a>
			 <a href="javascript:void(0)" class="carousel-item">
				<div class="itemCarousel">
				   <img src="/packages/assets/media/images/parents/profile/mom-def.png" >
				   <h6 class="h6-responsive text-xs-center">Odaliz Ramirez</h6>
				</div>
			 </a>
			 <a href="javascript:void(0)" class="carousel-item">
				<div class="itemCarousel">
				   <img src="/packages/assets/media/images/parents/profile/mom-def.png" >
				   <h6 class="h6-responsive text-xs-center">Odaliz Ramirez</h6>
				</div>
			 </a>
		  </div>

		  <div id="upch-contentInfo" class="text-center upch-carouse-content z-depth-1">
			 <center><div id="upchHome-contentInfo-arrow" class="upch-carousel-arrow"></div></center>
			 <div class="upch-content-card border-bottom texr-justify">
			 	Te mostramos a tus hijos registrados. Puedes modificar los datos de sus cuentas así como dar de baja las mismas. <br>
			 	<span class="tag upch-tag-info">Información: </span> Desplaza a los lados las imagenes.
			 </div>
			 <div class="upch-footer-card">
				<a class="rotate-btn btn btn-border-curiosity" id="upch-btnEdit"><i class="fa fa-pencil"></i> Modificar</a>
				<button type="button" class="rotate-btn btn btn-outline-warning waves-effect waves-light btn-border-curiosity" id="upch-btnDelete"><i class="fa fa-trash"></i> Dar de Baja</button>
			 </div>
		  </div>
      </div>
   </div>
   <div class="col-md-5 col-lg-5 upch-col-upload-child">
     <div class="row">
     	 <!--Rotating card-->
      <div class="card-wrapper">
          <div id="card-1" class="card-rotating effect__click">
              <!--Front Side-->
              <div class="face front">
                  <!-- Image-->
                  <div class="card-up">
                      <img src="packages/assets/media/images/parents/children/ninos.jpg" class="img-fluid">
                  </div>
                  <!--Avatar-->
                  <div class="avatar"><img src="http://mdbootstrap.com/wp-content/uploads/2015/10/team-avatar-1.jpg" alt="papa-curiosity" class="rounded-circle img-responsive">
                  </div>
                  <!--Content-->
                  <div class="card-block">
                      <h4><i class="fa fa-child"></i> Mis hijos registrados</h4>
                      <p>Curiosity Educación</p>
                      <!--Triggering button-->
                      <a class="rotate-btn btn btn-border-curiosity" data-card="card-1" id="upch-btnAdd"><i class="fa fa-plus"></i>  Registrar un nuevo hijo</a>
                  </div>
              </div>
              <!--/.Front Side-->

              <!--Back Side-->
              <div class="face back">
                  <!--Content-->
                  <h4 class="h4-responsive"><i class="fa fa-child"></i> Registro Nuevo Hijo</h4>
                  <hr>
                  <form class="upch-frm-child">
                    <!--Body-->
                    <div class="tab-1 active animated fadeInUpBig">
                      <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="upch-username" name="upch-username" class="form-control">
                        <label for="upch-username">username niño</label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="upch-pass" name="upch-pass" class="form-control">
                        <label for="upch-pass">Contraseña</label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="upch-cpass" name="upch-cpass" class="form-control">
                        <label for="upch-cpass">Confirmar Contraseña</label>
                      </div>
                      <div class="md-form">
                        <h5 class="text-center">
                          <i class="fa"></i>
                          Promedio
                        </h5>
                       <input type="range" id="upch-promedio" min="5" max="10" step=".1" name="upch-promedio" class="form-control" value="5">
                      </div>
                    </div>
                    <div class="tab-2 animated fadeInUpBig">
                      <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="upch-username" name="upch-username" class="form-control">
                        <label for="upch-username">Nombre(s)</label>
                      </div>
                      <div class="md-form">
                        <i class="fa fa-user prefix"></i>
                        <input type="text" id="upch-username" name="upch-username" class="form-control">
                        <label for="upch-username">Apellido(s)</label>
                      </div>
                       <div class="md-form">
                            <select class="mdb-select">
                                <option value="" disabled selected>Sexo</option>
                                <option value="" data-icon="http://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">Hombre</option>
                                <option value="" data-icon="http://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">Mujer</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <div class="text-xs-center">
                      <button type="button" data-card="card-1" class="btn btn-outline-warning waves-effect waves-light btn-cancel btn-border-curiosity rotate-btn upch-btnCalcel">Cancelar</button>
                      <button type="button" class="btn upch-btnNext btn-to-move btn-border-curiosity btn-next">Siguiente</button>
                    </div>
                    <div class="row">
                      <div class="col-md-12 col-xs-12">
                          <ul class="stepper stepper-horizontal p-stepper-user">
                              <li class="active">
                                  <a>
                                      <span class="circle">1</span>
                                  </a>
                              </li>
                              <li>
                                  <a>
                                      <span class="circle">2</span>
                                  </a>
                              </li>
                          </ul>

                      </div>
                    </div>
                  </form>

                  <!--Triggering button-->
              </div>
              <!--/.Back Side-->
          </div>
      </div>
      <!--/.Rotating card-->
     </div>
   </div>
</div>
</div>
@stop

@section('js-plus')
<script src="/packages/libs/materialize/js/materialize.min.js" charset="utf-8"></script>
<script src="/packages/assets/js/parent/child-registration.js" charset="utf-8"></script>
@stop
