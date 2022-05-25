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
        $post =  Post::OrderBy('id', 'DESC')->first();
        if ($post == NULL) $id = 0;
        else $id = $post->id;
        $id++;

        $post = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'img' => 'required|image|mimes:jpg,jpeg,png,gif'
        ]);

        $img="post-".$id.".jpg";
        $path="assets/img/post/";
        $request->img->move($path,$img);


        Post::create([
            'title'=>$request['title'],
            'description'=>$request['description'],
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',['posts'=>$post]);
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

        $id=$post->id;
//        dd($id);
        $img="post-".$id.".jpg";
        $path="assets/img/post/";
        $request->img->move($path,$img);

//        $postt=$request->validate([
//           'title'=>$request['title'],
//           'description'=>$request['description'],
//           'img'=>$img
//       ]);
       $post->update([
           'title'=>$request['title'],
           'description'=>$request['description'],
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
