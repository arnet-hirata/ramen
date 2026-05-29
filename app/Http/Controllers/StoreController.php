<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stores;
class StoreController extends Controller
{
    public function create()
    {
        return view('stores.create');
    }
    
}


