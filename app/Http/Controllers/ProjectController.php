<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Requests\SaveProjectRequest;
use App\Models\Category;
use App\Models\Project;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'DESC')->get();
        return view('admin.projects.index', [
            'projects' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $project = new Project();
        $categories = Category::all();
        return view('admin.projects.form', [
            'project' => $project,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(SaveProjectRequest $request, Project $project)
    {
        $post = Project::OrderBy('id', 'DESC')->first();
        if ($post == NULL) $id = 0;
        else $id = $post->id;
        $id++;

        $img = "project-" . $id . ".jpg";
        $path = "assets/img/project/";
        $request->img->move($path, $img);

        $project->create([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'img' => $img,
            'url' => $request['url']
        ]);

        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $categories = Category::all();
        return view('admin.projects.form', [
            'project' => $project,
            'categories' => $categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(SaveProjectRequest $request, Project $project)
    {
//        dd($request['category']);
            $img = "project-" . $project->id . ".jpg";
            $path = "assets/img/project/";
            $request->img->move($path, $img);

        $project->update([
            'name' => $request['name'],
            'category_id' => $request['category'],
            'img' => $img,
            'url' => $request['url']
        ]);
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();
        return redirect()->route('projects.index');
    }
}
