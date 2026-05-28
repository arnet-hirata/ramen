<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\foods; 



class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //店舗情報一覧に必要な項目、店名、画像、評価の数、大まか市区町村、カテゴリー
        // 
        $foods = foods::all();//フードテーブルから画像、カテゴリーID(カテゴリー名）、ストアID（店名）取得


        return view('dashboard', compact('foods'));

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
