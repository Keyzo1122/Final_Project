<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    /**
     * Display a listing of lecture.
     *
     */
    public function index(){
        $datas = DB::table('lecturers')
        ->select("lecturers.*","nips.nip as kodenip")
        ->join("nips", "nips.id", "=", "lecturers.nip_id")
        ->get();
        // dd($datas);
        return view("lecture.lectureIndex", [
            "datas" => $datas
        ]);
    }


    /**
     * Store a newly lecture data.
     *
     */
    public function create(){
        return view("lecture.lectureRegist");
    }
    public function regis(Request $request){
        DB::table('nips')->insert([
            'nip'=>$request["nipsnip"]
            ,'name'=>$request["nipsName"]
        ]);
        // dd(DB::getPdo()->lastInsertId());
        DB::table('lecturers')->insert([
            'nip_id'=>DB::getPdo()->lastInsertId()
            ,'name'=>$request["nipsName"]
            ,'phone_number'=>$request["lecturersPhone"]
            ,'address'=>$request["lecturersAddress"]
        ]);
        return redirect('/lecture');
    }


    /**
     * Update selected lecture's data.
     *
     */
    public function edit($id){  
        $datas = DB::table('lecturers')
        ->select("lecturers.*","nips.nip as kodenip","nips.id as nipsid")
        ->join("nips", "nips.id", "=", "lecturers.nip_id")
        ->where("lecturers.id", $id)
        ->get();
        // dd($datas[0]);
        return view("lecture.lectureEdit", [
            "datas" => $datas
        ]);
    }
    public function update($id, Request $request){
        // dd($request);
        DB::table('nips')->where('id', $request["nipsid"])
        ->update([
            'nip'=>$request["nipsnip"]
            ,'name'=>$request["nipsName"]
        ]);
        DB::table('lecturers')->where('id', $id)
        ->update([
            'name'=>$request["nipsName"]
            ,'phone_number'=>$request["lecturersPhone"]
            ,'address'=>$request["lecturersAddress"]
        ]);
        return redirect('/lecture');
    }
    

    /**
     * Delete Selected lecture's data.
     *
     */
    public function destroy($id){
        $idnip = DB::table('lecturers')->select("lecturers.nip_id")->where("lecturers.id", $id)
        ->value("lecturers.nip_id");
        // dd($idnip); 
        DB::table('lecturers')->where('id', $id)->delete();
        DB::table('nips')->where('id', $idnip)->delete();
        return redirect('/lecture');
    }
}
