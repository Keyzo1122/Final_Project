<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NipController extends Controller
{
    public function index(){
        $datas = DB::table('nips')
        ->select("*")
        ->get();
        // dd($datas);
        return view("nipIndex", [
            "datas" => $datas
        ]);
    }



    public function detail($id){        
        $datas = DB::table('lecturers')
        ->select("lecturers.*","nips.nip as kodenip")
        ->join("nips", "nips.id", "=", "lecturers.nip_id")
        ->where("nips.id", $id)
        ->get();
        // dd($datas);
        return view("lectureDetail", [
            "datas" => $datas
        ]);
    }
}
