<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnValue;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::query()->get();
        return view('admin.projects.index',compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('site/images/projects', $image_name);
            $requestData['images'] = $image_name;
        }

        Project::create($requestData);
        return redirect()->route('admin.projects.index')->with('success', 'Project created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        return view('admin.projects.show',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('admin.projects.edit',compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('site/images/projects', $image_name);
            // Eski rasimni o'chirib yuborish
            $old_image_name = $project->images;
            if ($old_image_name) {
                $old_image_path = 'site/images/projects/' . $old_image_name;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }
            }
            // Yangi rasimni qo'shish
            $requestData['images'] = $image_name;
        } else {
            // Agar yangi rasim qo'shilmagan bo'lsa, eski rasimni qaytarib olamiz
            $requestData['images'] = $project->images;
        }

        $project->update($requestData);
        return redirect()->route('admin.projects.index')->with('success', 'Project updated successfully');
    }

    /**

     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $project = Project::findOrFail($id);
        $status = @unlink(public_path('site/images/projects/' . $project->images));
        if (!$status) {
            return redirect()->route('admin.projects.index')->with($project->images);
        }

        $project->delete();
        return redirect()->route('admin.projects.index')->with('Success', "$project->name is deleted");
    }
}
