<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Image;
use Illuminate\Http\Request;

class EventController extends Controller
{
    private $event, $image;

    public function __construct(Event $event, Image $image)
    {
        $this->event = $event;
        $this->image = $image;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = $this->event->all();
        return view('event.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('event.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif|max:2048'
        ]);

        $event = $this->event;
        $event->name = $request->name;
        $event->description =  $request->description;
        $event->event_photo_path = $request->file()['imageFile']->store('eventos');
        $event->save();

        return redirect()->route('event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $event  = $this->event->where('slug', '=', $slug)->firstOrFail();
        $images = $this->image->all();

        /*foreach($images->event_date as $img) {
            echo $img->name;
        }*/
        return view('event.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $event = $this->event->where('slug', '=', $slug)->firstOrFail();
        return view('event.edit', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $this->event->where('slug', '=', $slug)->firstOrFail()->update($request->except('__token'));
        return redirect()->route('event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $this->event->where('slug', '=', $slug)->firstOrFail()->delete();
        return redirect()->route('event.index');
    }
}
