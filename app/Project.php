<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $dates = ['fecha_inicio'];
    
	protected $fillable = [
		'nombre','descripcion','logo'
	];
    
    public function categoria()
    {
    	return $this->belongsTo(Categoria::class);
    }

    public function representante()
    {
    	return $this->belongsTo(Representante::class);
    }

     public function servidor()
     {
     	return $this->belongsTo(Servidor::class);
     }

     public function plan()
     {
     	return $this->belongsTo(Plan::class);
     }

     public function emp_dominios()
     {
         return $this->belongsTo(EmpDominio::class);
     }
}
