<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Colleger;
use App\Models\Lesson;
use App\Models\Grade;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $grade = Grade::get();
        return view('grade.index', compact('grade'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        $colleger = Colleger::get();
        $lesson = Lesson::get();

        return view('grade.create', compact('colleger', 'lesson'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'colleger_id' => 'required',
            'lesson_id' => 'required',
            'name' => 'required',
            'grade' => 'required',
            'semester' => 'required',
        ]);

        $grade = new Grade;
        $grade->colleger_id = $request->colleger_id;
        $grade->lesson_id = $request->lesson_id;
        $grade->name = $request->name;
        $grade->grade = $request->grade;
        $grade->semester = $request->semester;

        $grade->save();

        return redirect('/grade');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        $grade = Grade::find($id);
        return view('grade.show', compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        $grade = Grade::find($id);
        $colleger = Colleger::get();
        $lesson = Lesson::get();

        return view('grade.edit', compact('grade', 'colleger', 'lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'colleger_id' => 'required',
            'lesson_id' => 'required',
            'name' => 'required',
            'grade' => 'required',
            'semester' => 'required',
        ]);

        $grade = Grade::find($id);
        $grade->colleger_id = $request['colleger_id'];
        $grade->lesson_id = $request['lesson_id'];
        $grade->name = $request['name'];
        $grade->grade = $request['grade'];
        $grade->semester = $request['semester'];

        $grade->save();

        return redirect('/grade');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy($id)
    {
        $grade = Grade::find($id);
        $grade->delete();
        return redirect('/grade');
    }
}
