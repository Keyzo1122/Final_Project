<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NipController extends Controller
{
    /**
     * Display a listing of Nip data.
     *
     */
    public function index(){
        $datas = DB::table('nips')
        ->select("*")
        ->get();
        // dd($datas);
        return view("nip.nipIndex", [
            "datas" => $datas
        ]);
    }


    /**
     * Display detailed selected of Nip data.
     *
     */
    public function detail($id){        
        $datas = DB::table('lecturers')
        ->select("lecturers.*","nips.nip as kodenip")
        ->join("nips", "nips.id", "=", "lecturers.nip_id")
        ->where("nips.id", $id)
        ->get();
        // dd($datas);
        return view("lecture.lectureDetail", [
            "datas" => $datas
        ]);
    }
}
