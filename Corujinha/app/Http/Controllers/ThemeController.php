<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ThemeController extends Controller
{
    public function dark() {
        $user = User::find(auth()->user()->id);
        $user->theme = 'dark';
        $user->save();

        return redirect()->back();
    }

    public function light() {
        $user = User::find(auth()->user()->id);
        $user->theme = 'light';
        $user->save();

        return redirect()->back();
    }
}
