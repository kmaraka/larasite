<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use App\Http\Requests\Sliders\StoreSliderRequest;
use App\Http\Requests\Sliders\UpdateSliderRequest;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.sliders.index')->with('sliders', Slider::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSliderRequest $request)
    {
        // upload the image to storage 
        $image = $request->image->store('sliders');

        // create the post

        Slider::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' =>  $image,
            'video_url' => $request->video_url,
        ]);

        // redirect user
    }

    /**
     * Display the specified resource.
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Slider $slider)
    {
        //
    }
}
