<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Report;
use App\Models\Student;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::where('user_id', auth()->user()->id)->first();
        $report = Report::where('student_id', $student->id)->first();
        return view('pages.report', compact('report'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Report::$rules['create']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $report = Report::create($request->all());

        return $this->responseHandler(['report' => $report], 201, 'Berhasil membuat rapor baru');
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
        $validator = Validator::make($request->all(), Report::$rules['update']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $report = Report::find($id);

        if (!$report) {
            return $this->responseHandler(null, 404, 'Tidak ada rapor dengan id:' . $id);
        }

        $report->fill($request->all())->save();

        return $this->responseHandler(['report' => $report], 201, 'Data rapor berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $report = Report::find($id);

        if (!$report) {
            return $this->responseHandler(null, 404, 'Tidak ada rapor dengan id:' . $id);
        }

        $report->delete();

        return $this->responseHandler(['id' => $id], 200, 'Berhasil menghapus rapor');
    }
}
