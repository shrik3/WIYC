<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;

class AdoptionController extends Controller {

    //
    public function index() {
        $adoptions = \App\Adoption::all();
        foreach ($adoptions as $adoption) {
            $img = \App\AdoptionImage::where('adoption_id', $adoption->id)->get();
            $adoption['img'] = $img[0]['filename'];
        }
        return view('adoption.index')->withAdoptions($adoptions);
    }

    public function show($id) {
        $adoption = \App\Adoption::find($id);
        $img = \App\AdoptionImage::where('adoption_id', $adoption->id)->get();
        $adoption['img'] = $img[0]['filename'];
        return view('adoption.show')->withAdoption($adoption)->withComments(\App\Comment::where('adoption_id',$adoption->id)->orderby('id','DESC')->get());
    }

    public function create() {
        return view('adoption.create');
    }

    public function store(Request $request) {
        $user_id = Auth::user()->id;
        $this->validate($request, [
            'detail' => 'required',
            'contact' => 'required',
            'title' => 'required',
            'category' => 'required',
            'vaccination' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $img = new \App\AdoptionImage;
        $adoption = new \App\Adoption;
        $adoption->title = $request->get('title');
        $adoption->user_id = $user_id;
        $adoption->category = $request->get('category');
        $adoption->detail = $request->get('detail');
        $adoption->location = $request->get('location');
        $adoption->contact = $request->get('contact');
        $adoption->requirement = $request->get('requirement');
        $adoption->vaccination = $request->get('vaccination');


        // store the image ...
        $img->filename = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $img->filename);

        if ($adoption->save()) {
            $img->adoption_id = $adoption->id;
            if ($img->save()) {
                return redirect('home');
            } else {
                $adoption->delete;
                return redirect()->back()->withInput()->withErrors('it failed somehow..');
            }
        } else {

            return redirect()->back()->withInput()->withErrors('it failed somehow..');
        }


    }

}
