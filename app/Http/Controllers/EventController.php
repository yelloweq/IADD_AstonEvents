<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response    
     */
    public function index(Request $request)
    {
        $events = Event::get();
        if($request->exists('category'))
        {
            $category = $request->category;
            switch($category)
            {
                case "All": 
                    $events = Event::get();
                    break;
                case "Sports": 
                    $events = Event::where('Category_id', "1")->get();
                    break;
                case "Culture": 
                    $events = Event::where('Category_id', "2")->get();
                    break;
                case "Other": 
                    $events = Event::where('Category_id', "3")->get();
                    break;
            }
        }
        if($request->exists('sort'))
        {
            $sort = $request->sort;
            switch ($sort) {
                case "Likes": 
                    $events = $events->sortByDesc(function($event){
                        return $event->likers->count();
                    });
                    break;
                case "A-z": 
                    $events = $events->sortBy('name');
                    break;
                case "Z-a": 
                    $events = $events->sortByDesc('name');
                    break;
                case "new": 
                    $events = $events->sortByDesc('date');
                    break;
                case "upcomming": 
                    $events = $events->sortBy('date');
                    break;

                
            }

        }
        
        return view('events.index', compact('events'));


    }

    public function create()
    {
        //
    }

    public function store($id)
    {
        $event = Event::where('id', $id)->first();
        $user = Auth::user();
        if($user && !$event->users->contains($user))
        {
            $event->users()->attach($user);
        } else {
            return view('auth.register');
        }
        return redirect()->back();
    }

    public function show($id)
    {
        $event = Event::where('id', $id)->first();
        if($event != null){
            return view('events.details', compact('event'));
        } else {
            return abort(404);
        }

    }

    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        if(Auth::user())
        {
            $event = Event::where('id', $id)->first();
            $event->users()->detach(Auth::user());
        }
        return redirect()->back();
    }

    public function like($id){

        $event = Event::where('id', $id)->first();
        Auth::user()->toggleLike($event);   
        return redirect()->back(); 
    }
}
