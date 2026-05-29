<?php

namespace App\Http\Controllers;
use App\Models\Myposts;
use Illuminate\Http\Request;
use App\Models\StoreUser;
use App\Models\User;
use App\Models\Store;

// データベースへのレコード追加のために、DBファサードを利用する
use Illuminate\Support\Facades\Auth;

class MyPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $auths=User::where('id',Auth::id())->get();
        return view('myposts.index', compact('auths'));
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
            $new_mypost = new Myposts();
            $new_mypost->review = $request->review;
            $new_mypost->comment = $request->comment;
            $new_mypost->save(); // DBに保存
            // 完了画面を表示
            return redirect('/mypost');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $mypost = Myposts::find($id);

        // 編集画面に、データを表示する
        return view('myposts.show', compact('myposts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        
        $mypost = StoreUser::find($id);
        $store=Stores::find($mypost->store_id);
        // 編集画面に、データを表示する
        return view('myposts.edit', compact('mypost','store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $new_mypost = new Myposts();
        $new_mypost->review = $request->review;
        $new_mypost->comment = $request->comment;
        $new_mypost->save(); // DBに保存
        // 完了画面を表示
        return redirect('/mypost');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $myposts_to_delete = Myposts::find($id);

        // 取得したデータの削除を実行する
        $myposts_to_delete->delete();

        // 一覧画面を表示する
        return redirect('/myposts');
    }
}
