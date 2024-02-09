<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LectureController extends Controller
{
    public function index(){
        $datas = DB::table('lecturers')
        ->select("lecturers.*","nips.nip as kodenip")
        ->join("nips", "nips.id", "=", "lecturers.nip_id")
        ->get();
        // dd($datas);
        return view("lectureIndex", [
            "datas" => $datas
        ]);
    }



    public function create(){
        return view("lectureRegist");
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


    
    public function edit($id){
        $lecturersByID = DB::table('lecturers')->find($id);
        return view("lectureEdit", [
            "lecturersByID" => $lecturersByID
        ]);
    }
    public function update($id, Request $request){
        DB::table('cast')->where('id', $id)
        ->update([
            'nama'=>$request["castName"]
            ,'umur'=>$request["castUmur"]
            ,'bio'=>$request["castBio"]
        ]);
        return redirect('/cast');
    }
    


    public function destroy($id){
        $del = DB::table('cast')->where('id', $id)->delete();
        return redirect('/cast');
    }



    public function show($id){
        $castByID = DB::table('cast')->find($id);
        return view("castDetail", [
            "cast" => $castByID
        ]);
    }
}
