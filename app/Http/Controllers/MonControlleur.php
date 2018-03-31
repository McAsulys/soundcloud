<?php

namespace App\Http\Controllers;

use App\Chanson;
use Illuminate\Http\Request;

class MonControlleur extends Controller
{
    public function index(){
      $chansons = Chanson::all();
      return view('index', ['chansons' => $chansons]);
    }
    public function nouvelle(){
      return view('nouvelle');
    }
    public function creer(Request $request){
      var_dump($_FILES);
      die(1);
    }
}
