<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    // INDEX
    public function index()
    {
        $services = Service::latest()->paginate(10);

        return view('admin.services.index', compact('services'));
    }


    // CREATE
    public function create()
    {
        return view('admin.services.create');
    }


    // STORE
    public function store(Request $request)
    {

        $request->validate([

            'title' => 'required|max:255',

            'description' => 'nullable',

            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',

        ]);


        $imageName = null;


        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/services'), $imageName);
        }


        Service::create([

            'title' => $request->title,

            'description' => $request->description,

            'image' => $imageName

        ]);


        return redirect()->route('admin.services.index')
            ->with('success', 'Service created successfully');
    }



    // SHOW
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }



    // EDIT
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }



    // UPDATE
    public function update(Request $request, Service $service)
    {

        $request->validate([

            'title' => 'required|max:255',

            'description' => 'nullable',

            'image' => 'nullable|image',

        ]);


        $imageName = $service->image;


        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '.' . $image->getClientOriginalExtension();

           $image->move(public_path('uploads/services'), $imageName);
        }


        $service->update([

            'title' => $request->title,

            'description' => $request->description,

            'image' => $imageName

        ]);


        return redirect()->route('admin.services.index')
            ->with('success', 'Service updated successfully');
    }



    // DELETE
    public function destroy(Service $service)
    {

        if ($service->image && file_exists(public_path('uploads/services/'.$service->image))) {

            unlink(public_path('uploads/services/'.$service->image));
        }


        $service->delete();

        return redirect()->route('admin.services.index')
            ->with('success', 'Service deleted successfully');
    }
}
