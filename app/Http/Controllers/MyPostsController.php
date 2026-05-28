<?php

namespace App\Http\Controllers;
use App\Models\Myposts;
use Illuminate\Http\Request;

class MyPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users=Users::select('id','store_name','store_place','store_image')
            ->withAvg(
            'user as avg_score','store_user.review'
            )
            ->orderBy('avg_score','desc')
            ->limit(20)
            ->get();
        return view('ranking.index', compact('stores'));

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
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
