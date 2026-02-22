<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::latest()->paginate(10);
        return view('admin.projects.index', compact('projects'));
    }

    public function create()
    {
        return view('admin.projects.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'created_date' => 'nullable|date',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string|max:2500',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'video_id' => 'nullable|string|max:75',
        ]);

        $data = $request->only([
            'title',
            'created_date',
            'start_date',
            'end_date',
            'description',
            'video_id'
        ]);
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        Project::create($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project created!');
    }

    public function show(Project $project)
    {
        return view('admin.projects.show', compact('project'));
    }

    public function edit(Project $project)
    {
        return view('admin.projects.edit', compact('project'));
    }

    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title' => 'required|string|max:250',
            'created_date' => 'nullable|date',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
            'description' => 'nullable|string|max:2500',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'video_id' => 'nullable|string|max:75',
        ]);
        $data = $request->only([
            'title',
            'created_date',
            'start_date',
            'end_date',
            'description',
            'video_id'
        ]);
        if ($request->hasFile('image')) {
            if ($project->image) Storage::delete('public/' . $project->image);
            $data['image'] = $request->file('image')->store('projects', 'public');
        }
        $project->update($data);

        return redirect()->route('admin.projects.index')->with('success', 'Project updated!');
    }

    public function destroy(Project $project)
    {
        if ($project->image) Storage::delete('public/' . $project->image);
        $project->delete();
        return redirect()->route('admin.projects.index')->with('success', 'Project deleted!');
    }
}
