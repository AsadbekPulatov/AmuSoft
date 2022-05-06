<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        $categories = Category::all();
        $about=About::OrderBy('id','DESC')->get();
        $projects = Project::OrderBy('id', 'DESC')->get();
        $services = Service::Orderby('id','DESC')->get();
        return view('w3soft.index',[
            'route' => 'index',
            'categories' => $categories,
            'projects' => $projects,
            'abouts'=>$about,
            'services'=>$services
        ]);
    }
    public function portfolio(){
        $categories = Category::all();
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.portfolio',[
            'route' => 'portfolio',
            'categories' => $categories,
            'projects' => $projects,
        ]);
    }
    public   function  about(){
        $about=About::OrderBy('id','DESC')->get();
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.about',[
            'route'=>'about',
            'abouts' => $about,
            'projects' => $projects,
        ]);
    }

    public function contact(){
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.contact',[
            'route' => 'contact',
            'projects' => $projects,
        ]);
    }

    public function services(){
        $projects = Project::OrderBy('id', 'DESC')->get();
        $services = Service::OrderBy('id','DESC')->get();
        return view('w3soft.services',[
            'route' => 'services',
            'projects' => $projects,
            'services' => $services
        ]);
    }
}
