<?php
/**
 *
 *All imports here
 */
class Person extends Eloquent{

    protected $table = 'personas';
    protected $fillable = ['nombre','apellido_paterno','apellido_materno','fecha_nacimiento','sexo'];
    /*
     *
     ## One person has child data
    */
    public function User(){
        return $this->belongsTo('User');
    }
    /*
     *
     ## One person has child data
    */
    public function Son(){
        return $this->hasOne('hijo','persona_id');
    }
    /*
     *
     ## A person belongs to an administrative
    */
    public function Administrative(){
        return $this->hasOne('administrativo','persona_id');
    }
    public function Parents(){
      return $this->hasOne('padre','persona_id');
    }
}