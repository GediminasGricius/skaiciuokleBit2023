<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

       return view("students.index",[

           //"students"=>Student::year(2009)->get(),
          "students"=>Student::with('group')->get()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("students.create",[
            'groups'=>Group::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3|max:32',
            'surname'=>'required|min:3|max:32',
            'year'=>'integer'
        ],[
            'name.required'=>'Vardas yra privalomas',
            'name.min'=> 'Vardas turi būti ne mažiau 3 simboliai',
            'name.max'=> 'Vardas trumpesnis nei 32 simboliai ',
        ]);

        Student::create($request->all());
        return redirect()->route("students.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        return view("students.edit", [
            "student"=>$student,
            "groups"=>Group::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->fill($request->all());
        $student->save();
        return redirect()->route("students.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route("students.index");
    }
}
