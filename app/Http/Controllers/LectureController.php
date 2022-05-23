<?php

namespace App\Http\Controllers;

use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'title' => 'List Lectures',
            'lectures' => Lecture::where('lecture_name', 'like', '%'.$request->get('q').'%')->get()
        ];
        return view('lecture.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Add Lecture';
        return view('lecture.create', $data);
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
            'lecture_id' => 'required|unique:lectures',
            'lecture_name' => 'required',
            'email' => 'required|unique:lectures'
        ]);
        $lecture = new Lecture($request->all());
        $lecture->save();
        return redirect('lectures')->with('success', 'Lecture added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        $data['title'] = 'Lecture Details';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        $data = [
            'title' => 'Edit Lecture',
            'lecture' =>  $lecture
        ];
        return view('lecture.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        //
        if($request->email != $lecture->email){
            $request->validate([
                'email' => 'unique:lectures'
            ]);
        }
        $lecture->lecture_name = $request->lecture_name;
        $lecture->email = $request->email;
        $lecture->contact = $request->contact;
        $lecture->address = $request->address;
        $lecture->save();
        return redirect('lectures')->with('success', 'Lecture updated succesfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        //
        $lecture->delete();
        return redirect('lectures')->with('success', 'Lecture deleted succesfully!');
    }
}
