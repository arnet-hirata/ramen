<?php

namespace App\Http\Controllers;
use App\Models\Places;
use Illuminate\Http\Request;
use App\Models\Stores;
use App\Models\StoreUser;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class PlacesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $all_places = places::all();
        return view('place.index', compact('all_places'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd(auth()->user());

        $request->validate([
            // commentを 必須、5文字以上
            'comment' => ['required']
        ]);

                $request->validate([
            // reviewを 必須
            'review' => ['required']
        ]);

        if ($request->has('send')) {

        //$auths=User::where('id',Auth::id())->get();
        $storeuser = new StoreUser();

        //$storeuser->user_id = $request->$auths;
        $storeuser->user_id = Auth::id();
        $storeuser->store_id = $request->store_id;
        $storeuser->review = $request->review;
        $storeuser->comment = $request->comment;
        $storeuser->save();

        return redirect('/place');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $store = Stores::find($id);
        return view('place.show', compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
