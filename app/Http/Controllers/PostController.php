<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    //
    public function index() {

        $products = DB::table('products') -> get();

        return view('posts.index' , compact('products'));
    }
    
}
