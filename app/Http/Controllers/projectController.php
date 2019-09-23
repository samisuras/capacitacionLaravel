<?php


namespace App\Http\Controllers;


use App\Project;

class projectController
{
    public function __invoke()
    {
        // TODO: Implement __invoke() method.
        return view('portfolio');
    }

    public function index(){
        return view('projects.index',[
            'projects'=> Project::latest()->paginate()
        ]);
    }

    public function show($index){

        return view('projects.show',[
            'project' => Project::findOrFail($index)
        ]);
    }
}
