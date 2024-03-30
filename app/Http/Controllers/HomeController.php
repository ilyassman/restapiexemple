<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Formateur;
use App\Models\Formation;
use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    public function index(){
        $datas=Categorie::take(6)->get();
        $formations=DB::select("select f.*,niveau_etoile from formations f,votes v,sessions s 
        where f.id=s.id_formation");
        $formateurs=Formateur::take(6)->get();
        return view("welcome",compact('datas','formations','formateurs'));

    }
    public function login(){
        $datas=Categorie::take(6)->get();
        return view("login",compact('datas'));
    }
    public function courses(){
        $datas=Categorie::take(6)->get();
        $formations=DB::select("select f.*,niveau_etoile from formations f,votes v,sessions s 
        where f.id=s.id_formation");
        return view("courses",compact('datas','formations'));
    }
    public function course(){
        
        $datas=Categorie::take(6)->get();
        return view("course-single",compact('datas'));
    }
}
