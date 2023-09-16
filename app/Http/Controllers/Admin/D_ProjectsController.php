<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\D_Project;
use Illuminate\Http\Request;

class D_ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $d_projects = D_Project::query()->get();
        return view('admin.d_projects.index',compact('d_projects'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.d_projects.create');
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
            $file->move('site/images/d_projects', $image_name);
            $requestData['images'] = $image_name;
        }

        D_Project::create($requestData);
        return redirect()->route('admin.d_projects.index')->with('success', 'D Project created succuessfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(D_Project  $d_project)
    {
        return view('admin.d_projects.show',compact('d_project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(D_Project $d_project)
    {
        return view('admin.d_projects.edit',compact('d_project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, D_Project $d_project)
    {
        $requestData = $request->all();
        if ($request->hasFile('images')) {
            $file = $request->file('images');
            $image_name = time() . '.' . $file->getClientOriginalExtension();
            $file->move('site/images/d_projects', $image_name);
            // Eski rasimni o'chirib yuborish
            $old_image_name = $d_project->images;
            if ($old_image_name) {
                $old_image_path = 'site/images/d_projects/' . $old_image_name;
                if (file_exists($old_image_path)) {
                    unlink($old_image_path);
                }
            }
            // Yangi rasimni qo'shish
            $requestData['images'] = $image_name;
        } else {
            // Agar yangi rasim qo'shilmagan bo'lsa, eski rasimni qaytarib olamiz
            $requestData['images'] = $d_project->images;
        }

        $d_project->update($requestData);
        return redirect()->route('admin.d_projects.index')->with('success', 'D Project updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $d_project = D_Project::findOrFail($id);
        $status = @unlink(public_path('site/images/d_projects/' . $d_project->images));
        if (!$status) {
            return redirect()->route('admin.d_projects.index')->with($d_project->images);
        }

        $d_project->delete();
        return redirect()->route('admin.d_projects.index')->with('Success', "$d_project->name is deleted");
    }
}
