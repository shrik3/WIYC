<?php

namespace App\Http\Controllers\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller {
    //
    public function index() {
        $name = Auth::user()->name;
        return 'this is a profile page , your name is ' . $name;
    }

    public function info() {
        $user = Auth::user();
        return view('user/info')->withUser($user);
    }

    public function edit(Request $request) {
        // THIS PART IS NOT COMPLETE
        //
        //
        //
        // FUCK FUCK FUCK ....
        // THIS METHOD IS USED TO UPDATE USER INFO AND UPLOAD AVATAR IMAGE ... 

        $user_id = Auth::user()->id;
        $this->validate($request, [
            'email' => 'required',
            'tel' => 'required|string|regex:/[0-9]{11}/',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = new \App\AdoptionImage;


        // store the image ...
        $img->filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $img->filename);


    }
}
