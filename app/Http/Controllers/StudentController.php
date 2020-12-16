<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('admin.student.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|numeric',
            'name' => 'required|string|min:3|max:50',
            'gender' => 'required|string|in:Laki-laki,Perempuan',
            'place_of_birth' => 'required|string|min:3|max:20',
            'date_of_birth' => 'required|date',
            'religion' => 'required|string|min:3|max:20',
            'date_of_entry' => 'required|date',
            'address' => 'required|string|min:3|max:1000',
            'phone' => 'required|numeric',
            'father_name' => 'required|string|min:3|max:50',
            'mother_name' => 'required|string|min:3|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->route('student.create')->withErrors($validator)->withInput();
        }

        Student::create($request->all());
        return redirect()->route('student.index')->with('success','Student created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('admin.student.show',compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('admin.student.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'nullable|numeric',
            'name' => 'nullable|string|min:3|max:50',
            'gender' => 'nullable|string|in:Laki-laki,Perempuan',
            'place_of_birth' => 'nullable|string|min:3|max:20',
            'date_of_birth' => 'nullable|date',
            'religion' => 'nullable|string|min:3|max:20',
            'date_of_entry' => 'nullable|date',
            'address' => 'nullable|string|min:3|max:1000',
            'phone' => 'nullable|numeric',
            'father_name' => 'nullable|string|min:3|max:50',
            'mother_name' => 'nullable|string|min:3|max:50',
        ]);

        if ($validator->fails()) {
            return redirect()->route('student.edit', $student->id)->withErrors($validator)->withInput();
        }

        $student->update($request->all());
        return redirect()->route('student.index')->with('success','Student updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with('success','Student deleted successfully');
    }
}
