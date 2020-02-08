<?php

namespace App\Http\Controllers;

use App\Categoria;
use App\EmpDominio;
use App\Http\Requests\ProjectFormRequest;
use App\Plan;
use App\Project;
use App\Representante;
use App\Servidor;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    protected $guarded =  [];

    public function proyectosList()
    {
    	$proyectos = Project::all();
    	$titulo    = 'Lista de Proyectos';

        return view('admin.proyectos.index',compact('proyectos','titulo'));
    }

    public function crear_proyecto()
    {
        $titulo         = 'Crear Nuevo Proyecto';
        $planes         = Plan::all();
        $servidores     = Servidor::all();
        $categorias     = Categoria::all();
        $emp_dominios   = EmpDominio::all();
        $representantes = Representante::all();

    	return view('admin.proyectos.crear_proyecto',compact('titulo','representantes','planes','categorias','servidores','emp_dominios'));
    }

    public function store(ProjectFormRequest $request)
    {

        $proj                   = new Project;
        $proj->nombre           = $request->get('nombre');
        $proj->descripcion      = $request->get('descripcion');
        $proj->fecha_inicio     = Carbon::parse($request->get('fecha_inicio'));
        $proj->logo             = $request->get('logo');
        $proj->categoria_id     = $request->get('categoria_id');
        $proj->servidor_id      = $request->get('servidor_id');
        $proj->plan_id          = $request->get('plan_id');
        $proj->representante_id = $request->get('representante_id');
        $proj->emp_dominio_id   = $request->get('emp_dominio_id');
        $proj->save();


        echo "<pre>";
            var_dump($request->get('categoria_id'));
        echo "</pre>";
        return back()->with('flash','El proyecto fue creado corectamente');
    }
}
