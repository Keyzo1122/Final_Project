<?php

namespace App\Http\Controllers;

use app\Models\Lesson;
use app\Models\Lecturer;
use app\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $lesson = Lesson::all();
        return view('lesson.index', compact('lesson'));


        // // Belum dibuatkan data dari table relasi
        // $lesson = DB::table('lessons')->get();
        // return view('lesson.index', compact('lesson'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lecturer = Lecturer::get();
        $faculty = Faculty::get();

        return view('lesson.index', compact('lecturer', 'faculty'));


        // // Belum dibuatkan data dari table relasi
        // return view('lesson.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'lecturer_id' => 'required',
            'faculty_id' => 'required',
            'lesson' => 'required',
            'sks' => 'required',
        ]);

        $lesson = new Lesson;
        $lesson->lecturer_id = $request->lecturer_id;
        $lesson->faculty_id = $request->faculty_id;
        $lesson->lesson = $request->lesson;
        $lesson->sks = $request->sks;

        $lesson->save();

        return redirect('/lesson');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);
        return view('lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $lesson = Lesson::find($id);
        $lecturer = Lecturer::get();
        $faculty = Faculty::get();

        return view('lesson.edit', compact('lesson', 'lecturer', 'faculty'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'lecturer_id' => 'required',
            'faculty_id' => 'required',
            'lesson' => 'required',
            'sks' => 'required',
        ]);

        $lesson = Lesson::find($id);
        $lesson->lecturer_id = $request['lecturer_id'];
        $lesson->faculty_id = $request['faculty_id'];
        $lesson->lesson = $request['lesson'];
        $lesson->sks = $request['sks'];

        $lesson->save();

        return redirect('/lesson');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $lesson = Lesson::find($id);
        $lesson->delete();
        return redirect('/lesson');
    }
}
