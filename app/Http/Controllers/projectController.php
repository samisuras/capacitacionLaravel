<?php


namespace App\Http\Controllers;


use App\Project;
use http\Env\Request;

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

    public function show(Project $project){

        return view('projects.show',[
            'project' => $project
        ]);
    }

    public function create(){
        return view('projects.create');
    }

    public function store(){
        Project::create([
            'title' => \request('title'),
            'url' => \request('url'),
            'description' => \request('description')
        ]);
        return redirect()->route('portfolio.index');
    }
}
