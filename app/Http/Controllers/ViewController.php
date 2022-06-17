<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use App\Models\Post;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ViewController extends Controller
{


    public function home(){
        $lang=Session::get('locale');
        $categories = Category::all();
        $about=About::OrderBy('id','DESC')->get();
        $projects = Project::OrderBy('id', 'DESC')->get();
        $services = Service::Orderby('id','DESC')->get();
        return view('w3soft.index',[
            'route' => 'index',
            'categories' => $categories,
            'projects' => $projects,
            'abouts'=>$about,
            'services'=>$services,
            'lang'=>$lang
        ]);
    }
    public function portfolio(){
         $lang=Session::get('locale');
        $categories = Category::all();
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.portfolio',[
            'route' => 'portfolio',
            'categories' => $categories,
            'projects' => $projects,
            'lang'=>$lang
        ]);
    }
    public   function  about(){
         $lang=Session::get('locale');
        $about=About::OrderBy('id','DESC')->get();
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.about',[
            'route'=>'about',
            'abouts' => $about,
            'projects' => $projects,
            'lang'=>$lang
        ]);
    }

    public function contact(){
         $lang=Session::get('locale');
        $projects = Project::OrderBy('id', 'DESC')->get();
        return view('w3soft.contact',[
            'route' => 'contact',
            'projects' => $projects,
            'lang'=>$lang
        ]);
    }

    public function services(){
         $lang=Session::get('locale');
        $projects = Project::OrderBy('id', 'DESC')->get();
        $services = Service::OrderBy('id','DESC')->get();
        return view('w3soft.services',[
            'route' => 'services',
            'projects' => $projects,
            'services' => $services,
            'lang'=>$lang
        ]);
    }
    public function blog(){
         $lang=Session::get('locale');
        $projects = Project::OrderBy('id', 'DESC')->get();
//        $services = Service::OrderBy('id','DESC')->get();
        $blog= Post::OrderBy('id','DESC')->get();
        return view('w3soft.blog',[
            'route' => 'blog',
            'projects' => $projects,
//            'services' => $services,
            'blogs'=>$blog,
            'lang'=>$lang
        ]);
    }
    public function course(){
         $lang=Session::get('locale');
        $courses = Course::OrderBy('id', 'DESC')->get();
        return view('w3soft.course',[
            'route' => 'course',
            'courses' => $courses,
//            'services' => $services
        'lang'=>$lang
        ]);
    }

    public function singlepage(Request $request){
         $lang=Session::get('locale');
        $id = $request->id;
//        dd($id);
        $posts = Post::find($id);
//        dd($posts);
        return view('w3soft.singlepage',[
            'route' => 'singlepage',
            'posts' => $posts,
            'lang'=>$lang
        ]);
    }
}
