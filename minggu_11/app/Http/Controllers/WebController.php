<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
 
class WebController extends Controller
{
   public function index(){
   	 $artikel = Article::all();
    	 return view('article',['artikel' => $artikel]);
   }
}