<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Faculty;
use App\Models\Colleger;
use File;

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
        $collegers = Colleger::get();
        return view('collegers.index', ['collegers' => $collegers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $faculty = Faculty::get();
        return view('collegers.create', ['collegers' => $faculty]);
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

        $collegers = new Colleger;
 
        $collegers->nim = $request->nim;
        $collegers->name = $request->name;
        $collegers->address = $request->address;
        $collegers->faculty_id = $request->faculty_id;

 
        $collegers->save();
 
        return redirect('/collegers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $collegers = Colleger::find($id);
        return view('collegers.detail', ['collegers' => $collegers]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $collegers = Colleger::find($id);
        $faculty = Faculty::get();

        return view('collegers.edit', ['collegers' => $collegers, 'faculty' => $faculty]);
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
            $collegers->collegers_id = $request['collegers_id'];
         
            $collegers->save();
     
            return redirect('/collegers');

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
