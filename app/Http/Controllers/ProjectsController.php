<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;


class ProjectsController extends Controller
{
    private  $model;

    /**
     * [__construct description]
     * @param Project $model [description]
     */
    function __construct(Project $model){
        $this->model = $model;
    }

    /**
     * [index description]
     * @return [type] [description]
     */
    public function index(){
        $projects = $this->model->get();
        return view('projects.index',compact('projects'));
    }

    /**
     * [store description]
     * @return [type] [description]
     */
    public function store(){
        // validate
        // persist
        $this->model->create(request(['title','description']));
        // redirect
        return redirect('/projects');
    }

  
}