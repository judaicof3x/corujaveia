<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PhotosController extends Controller
{
    public function view() {
        $photos = Image::where('team_id', '=', auth()->user()->currentTeam->id)->get();
        return view('dashboard', compact('photos'));
    }
    
    public function index() {
        return view('uploads.index');
    }
    
    public function store(Request $req){
        $req->validate([
            'imageFile' => 'required',
            'imageFile.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048'
        ]);

        for ($i = 0; $i < count($req->allFiles()['imageFile']); $i++) {
            
            $file = $req->allFiles()['imageFile'][$i];

            $eventImage = new Image();
            $eventImage->team_id = auth()->user()->currentTeam->id;
            //$eventImage->name = $file->name;
            $eventImage->image_path = $file->store('public/fotos/evento-' . auth()->user()->currentTeam->id);
            $eventImage->save();

            unset($eventImage);
        }

        return redirect()->route('dashboard');
    }
}
