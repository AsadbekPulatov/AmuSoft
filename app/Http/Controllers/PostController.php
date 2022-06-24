<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        abort('404');
        $post=Post::Orderby('id','desc')->get();

        return  view('admin.posts.index',['posts'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $post =  Post::OrderBy('id', 'DESC')->first();
//        if ($post == NULL) $id = 0;
//        else $id = $post->id;
//        $id++;


        $post = $request->validate([
            'title_uz' => 'required',
            'description_uz' => 'required',
            'title_ru' => 'required',
            'description_ru' => 'required',
            'title_en' => 'required',
            'description_en' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $img = time().'.jpg';
        $path = 'assets/img/post/';
        $request->img->move($path, $img);


        Post::create([
            'title_uz'=>$request['title_uz'],
            'description_uz'=>$request['description_uz'],
            'title_ru'=>$request['title_ru'],
            'description_ru'=>$request['description_ru'],
            'title_en'=>$request['title_en'],
            'description_en'=>$request['description_en'],
            'img'=>$img
        ]);
            return redirect()->route('posts.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',[
            'posts'=>$post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {

        if ($request->img == NULL) $img = $post->img;
        else {
            File::delete(public_path('assets/img/post/'.$post->img));
            $img = time().'.jpg';
            $path = 'assets/img/post/';
            $request->img->move($path, $img);
        }
            $post->update([
                'title_uz'=>$request['title_uz'],
                'description_uz'=>$request['description_uz'],
                'title_ru'=>$request['title_ru'],
                'description_ru'=>$request['description_ru'],
                'title_en'=>$request['title_en'],
                'description_en'=>$request['description_en'],
                'img'=>$img
            ]);
       return  redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $img=$post->img;
        File::delete(public_path('assets/img/post/'.$img));
        $post->delete();
        return  redirect()->route('posts.index');
    }

}
