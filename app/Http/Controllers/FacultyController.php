<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $faculty = DB::table('facultys')->get();
        return view('faculty.index', compact('faculty'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        return view('faculty.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'faculty' => 'required',
            'major' => 'required',
        ]);

        $query = DB::table('facultys')->insert([
            "faculty" => $request["faculty"],
            "major" => $request["major"],
        ]);

        return redirect('/faculty');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $faculty = DB::table('facultys')->where('id', $id)->first();
        return view('faculty.show', compact('faculty'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $faculty = DB::table('facultys')->where('id', $id)->first();
        return view('faculty.edit', compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'faculty' => 'required',
            'major' => 'required',
        ]);
        $query = DB::table('facultys')->where('id', $id)->update([
            'faculty' => $request['faculty'],
            'major' => $request['major'],
        ]);
        return redirect('/faculty');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $query = DB::table('facultys')->where('id', $id)->delete();
        return redirect('/faculty');
    }
}
