<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports = Report::all();
        return view('admin.report.index', compact('reports'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.report.create');
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
            'student_id' => 'required|numeric',
            'group' => 'required|string|min:1|max:3',
            'semester' => 'required|numeric',
            'school_year' => 'required|string',
            'religion_and_moral' => 'required|string',
            'social_emotional_and_autonomy' => 'required|string',
            'language' => 'required|string',
            'cognitive' => 'required|string',
            'physical' => 'required|string',
            'art' => 'required|string',
            'extracurricular' => 'required|string|min:3|max:20',
            'grade_of_extracurricular' => 'required|string|in:A,B,C,K',
            'description' => 'required|string',
            'sick' => 'required|numeric',
            'permit' => 'required|numeric',
            'absent' => 'required|numeric',
            'note_for_parents' => 'required|string',
            'date_of_report' => 'required|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('report.create')->withErrors($validator)->withInput();
        }

        Report::create($request->all());
        return redirect()->route('report.index')->with('success','Report created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        return view('admin.report.show',compact('report'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Report $report)
    {
        return view('admin.report.edit',compact('report'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Report $report)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'nullable|numeric',
            'group' => 'nullable|string|min:1|max:3',
            'semester' => 'nullable|numeric',
            'school_year' => 'nullable|string',
            'religion_and_moral' => 'nullable|string',
            'social_emotional_and_autonomy' => 'nullable|string',
            'language' => 'nullable|string',
            'cognitive' => 'nullable|string',
            'physical' => 'nullable|string',
            'art' => 'nullable|string',
            'extracurricular' => 'nullable|string|min:3|max:20',
            'grade_of_extracurricular' => 'nullable|string|in:A,B,C,K',
            'description' => 'nullable|string',
            'sick' => 'nullable|numeric',
            'permit' => 'nullable|numeric',
            'absent' => 'nullable|numeric',
            'note_for_parents' => 'nullable|string',
            'date_of_report' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('report.edit', $report->id)->withErrors($validator)->withInput();
        }

        $report->update($request->all());
        return redirect()->route('report.index')->with('success','Report updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Report $report)
    {
        $report->delete();
        return redirect()->route('report.index')->with('success','Report deleted successfully');
    }
}
