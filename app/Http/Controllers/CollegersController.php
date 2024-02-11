<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faculty;
use App\Models\Colleger;
use Illuminate\Support\Facades\DB;

class CollegersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $colleger = Colleger::get();
        return view('colleger.index', ['colleger' => $colleger]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::get();
        return view('colleger.create', ['colleger' => $faculty]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'address' => 'required',
            'faculty_id' => 'required'

        ]);

        $colleger = new Colleger;
 
        $colleger->nim = $request->nim;
        $colleger->name = $request->name;
        $colleger->address = $request->address;
        $colleger->faculty_id = $request->faculty_id;

 
        $colleger->save();
 
        return redirect('/colleger');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $colleger = Colleger::find($id);
        return view('colleger.detail', ['colleger' => $colleger]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colleger = Colleger::find($id);
        $faculty = Faculty::get();

        return view('colleger.edit', ['colleger' => $colleger, 'faculty' => $faculty]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nim' => 'required',
            'name' => 'required',
            'address' => 'required',
            'faculty_id' => 'required'

        ]);
 
        $collegers = Colleger::find($id);

            $collegers->nim = $request['nim'];
            $collegers->name = $request['name'];
            $collegers->address = $request['address'];
            $collegers->colleger_id = $request['colleger_id'];
         
            $collegers->save();
     
            return redirect('/colleger');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $faculty = DB::table('faculty')->where('id', $id)->delete();

        return redirect('/faculty');
    }
}
