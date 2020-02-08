<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Plan;
use App\User;
use App\Project;
use App\Servidor;
use App\Categoria;
use App\Representante;
use App\EmpDominio;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Plan::truncate();
        User::truncate();
        Project::truncate();
        Servidor::truncate();
        Categoria::truncate();
        Representante::truncate();
        EmpDominio::truncate();

        $user = new User;
        $user->name = 'Hernando';
        $user->email = 'chaza@hot.com';
        $user->password = bcrypt(123123);
        $user->save();
        
        /*PLAN*/
        $plan = new Plan;
        $plan->nombre = "Básico";
        $plan->save();

        $plan = new Plan;
        $plan->nombre = "Medio";
        $plan->save();

        $plan = new Plan;
        $plan->nombre = "Avanzado";
        $plan->save();

        $plan = new Plan;
        $plan->nombre = "Profesional";
        $plan->save();

        /*CATEGORIAS*/
        $cat = new Categoria;
        $cat->nombre = "Diseño Web";
        $cat->save();
        
        $cat = new Categoria;
        $cat->nombre = "Inmobiliaria";
        $cat->save();
        
        $cat = new Categoria;
        $cat->nombre = "Corporativo";
        $cat->save();
        
        $cat = new Categoria;
        $cat->nombre = "Tienda Virtual";
        $cat->save();

        /*EMPRESA DE DOMINIO*/
        $dom = new EmpDominio();
        $dom->nombre = 'Namecheap';
        $dom->save();

        $dom = new EmpDominio();
        $dom->nombre = 'Go Daddy';
        $dom->save();

        $dom = new EmpDominio();
        $dom->nombre = 'Hostgator';
        $dom->save();

        $dom = new EmpDominio();
        $dom->nombre = 'Mi.com.co';
        $dom->save();
        
        /*SERVIDOR*/
        $ser = new Servidor;
        $ser->nombre = "Hostgaor";
        $ser->save();
        
        $ser = new Servidor;
        $ser->nombre = "Just Host";
        $ser->save();
        
        $ser = new Servidor;
        $ser->nombre = "Namecheap";
        $ser->save();
        
        $ser = new Servidor;
        $ser->nombre = "Godaddy";
        $ser->save();
        
        $ser = new Servidor;
        $ser->nombre = "Blue Host";
        $ser->save();
        
        /*REPRESENTANTE*/
        $rep = new Representante;
        $rep->nombre   = "Fernando Corredor";
        $rep->telefono = "3213653696";
        $rep->correo   = "fdo@hotmail.com";
        $rep->save();
        
        $rep = new Representante;
        $rep->nombre   = "Jorge Mora";
        $rep->telefono = "322696353";
        $rep->correo   = "jorge@gmail.com";
        $rep->save();
        
        $rep = new Representante;
        $rep->nombre   = "Carlos Casas";
        $rep->telefono = "3123865478";
        $rep->correo   = "carlos@hotmail.com";
        $rep->save();
        
        $rep = new Representante;
        $rep->nombre   = "Martha Benavides";
        $rep->telefono = "3224601111";
        $rep->correo   = "martha@yahoo.com";
        $rep->save();
        
        /*PROYECTOS*/
        $project = new Project;
		$project->nombre           = "Casagas";
		$project->descripcion      = "Descripcion del proyeto web Casagas";
		$project->fecha_inicio     = Carbon::now();
		$project->categoria_id     = 1;
		$project->servidor_id      = 1;
		$project->representante_id = 1;
		$project->plan_id          = 4;
        $project->emp_dominio_id   = 4;
        $project->save();
        
        $project = new Project;
		$project->nombre           = "Flexibag";
		$project->descripcion      = "Descripcion del proyeto web Flexibag";
		$project->fecha_inicio     = Carbon::now();
		$project->categoria_id     = 2;
		$project->servidor_id      = 2;
		$project->representante_id = 2;
		$project->plan_id          = 1;
        $project->emp_dominio_id   = 3;
        $project->save();
        
        $project = new Project;
		$project->nombre           = "Rimodel";
		$project->descripcion      = "Descripcion del proyeto web Rimodel";
		$project->fecha_inicio     = Carbon::now();
		$project->categoria_id     = 3;
		$project->servidor_id      = 3;
		$project->representante_id = 3;
		$project->plan_id          = 3;
        $project->emp_dominio_id   = 2;
        $project->save();
        
        $project = new Project;
		$project->nombre           = "Millenniian Tower";
		$project->descripcion      = "Descripcion del proyeto web Millenniian Tower";
		$project->fecha_inicio     = Carbon::now();
		$project->categoria_id     = 1;
		$project->servidor_id      = 1;
		$project->representante_id = 1;
		$project->plan_id          = 2;
        $project->emp_dominio_id   = 1;
        $project->save();
    }
}
