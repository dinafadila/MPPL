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
        $student = Student::where('user_id', auth()->user()->id)->first();
        return view('pages.biodata', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Student::$rules['create']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $student = Student::create($request->all());

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
        $validator = Validator::make($request->all(), Student::$rules['update']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

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
