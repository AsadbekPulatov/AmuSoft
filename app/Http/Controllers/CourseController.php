<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;
use App\Http\Requests\CourseRequest;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::orderBy('id','desc')->get();
        return view('admin.courses.index',[
            'courses'=>$courses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $course = new Course();
        $categories = Category::all();
        $teachers = About::all();
        return  view('admin.courses.form',[
            'course'=>$course,
            'categories'=>$categories,
            'teachers'=>$teachers,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseRequest $request)
    {
        $course =  Course::OrderBy('id', 'DESC')->first();
        if ($course == NULL) $id = 0;
        else $id = $course->id;
        $id++;

        $img="course-".$id.".jpg";
        $path="assets/img/course/";
        $request->img->move($path,$img);

        $course = new Course();
        $course['name']=$request['name'];
        $course['text']=$request['text'];
        $course['teacher_id']=$request['teacher_id'];
        $course['category_id']=$request['category_id'];
        $course['price']=$request['price'];
        $course['time']=$request['time'];
        $course['img']=$img;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $course = Course::find($id);
        $categories = Category::all();
        $teachers = About::all();
        return  view('admin.courses.form',[
            'course'=>$course,
            'categories'=>$categories,
            'teachers'=>$teachers,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseRequest $request, $id)
    {
        $img="course-".$id.".jpg";
        $path="assets/img/course/";
        $request->img->move($path,$img);

        $course = Course::find($id);
        $course['name']=$request['name'];
        $course['text']=$request['text'];
        $course['teacher_id']=$request['teacher_id'];
        $course['category_id']=$request['category_id'];
        $course['price']=$request['price'];
        $course['time']=$request['time'];
        $course['img']=$img;
        $course->save();
        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::find($id)->delete();
        return redirect()->route('courses.index');
    }
}
