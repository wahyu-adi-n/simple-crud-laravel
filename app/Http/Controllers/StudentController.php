<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data['title'] = 'List Students';
        $data['q'] = $request->get('q');
        $data['students'] = Student::where('student_name', 'like', '%'.$data['q'].'%')->get();
        return view('student.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Students';
        return view('student.create', $data);
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
            'student_id' => 'required|unique:students',
            'student_name' => 'required',
            'email' => 'required|unique:students',
        ]);
        $student = new Student($request->all());
        $student->save();
        return redirect('students')->with('success', 'Student added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        $data['title'] = 'Student Details';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $data['title'] = 'Edit Students';
        $data['student'] = $student;
        return view('student.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        if($request->email != $student->email){
            $request->validate([
                'email' => 'unique:lectures'
            ]);
        }
        $student->student_id = $request->student_id;
        $student->student_name = $request->student_name;
        $student->email = $request->email;
        $student->contact = $request->contact;
        $student->address = $request->address;
        $student->save();
        return redirect('students')->with('success', 'Student updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect('students')->with('success', 'Student deleted succesfully!');
    }
}
