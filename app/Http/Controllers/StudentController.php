<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        return $this->responseHandler(['students' => $students], 200, 'Berhasil memperoleh seluruh siswa');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $request = $request->validate(Student::$rules['create']);

        $student = Student::create($request);

        return $this->responseHandler(['student' => $student], 201, 'Berhasil membuat siswa baru');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
        $this->validate($request, Student::$rules['update']);

        $student = Student::find($id);

        if (!$student) {
            return $this->responseHandler(null, 404, 'Tidak ada siswa dengan id:' . $id);
        }

        $student->fill($request->all())->save();

        return $this->responseHandler(['student' => $student], 201, 'Data siswa berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $student = Student::find($id);

        if (!$student) {
            return $this->responseHandler(null, 404, 'Tidak ada siswa dengan id:' . $id);
        }

        $student->delete();

        return $this->responseHandler(['id' => $id], 200, 'Berhasil menghapus siswa');
    }
}
