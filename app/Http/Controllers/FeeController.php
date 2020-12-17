<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Fee;
use App\Models\Student;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = Fee::all();
        $student = Student::find(1);
        return view('admin.fee.index', compact('fees', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.fee.create');
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
            'july' => 'required|numeric',
            'august' => 'required|numeric',
            'september' => 'required|numeric',
            'october' => 'required|numeric',
            'november' => 'required|numeric',
            'december' => 'required|numeric',
            'january' => 'required|numeric',
            'february' => 'required|numeric',
            'march' => 'required|numeric',
            'april' => 'required|numeric',
            'may' => 'required|numeric',
            'june' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('fee.create')->withErrors($validator)->withInput();
        }

        Fee::create($request->all());
        return redirect()->route('fee.index')->with('success','Fee created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        return view('admin.fee.show',compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
    {
        return view('admin.fee.edit',compact('fee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fee $fee)
    {
        $validator = Validator::make($request->all(), [
            'student_id' => 'nullable|numeric',
            'july' => 'nullable|numeric',
            'august' => 'nullable|numeric',
            'september' => 'nullable|numeric',
            'october' => 'nullable|numeric',
            'november' => 'nullable|numeric',
            'december' => 'nullable|numeric',
            'january' => 'nullable|numeric',
            'february' => 'nullable|numeric',
            'march' => 'nullable|numeric',
            'april' => 'nullable|numeric',
            'may' => 'nullable|numeric',
            'june' => 'nullable|numeric',
        ]);

        if ($validator->fails()) {
            return redirect()->route('fee.edit', $fee->id)->withErrors($validator)->withInput();
        }

        $fee->update($request->all());
        return redirect()->route('fee.index')->with('success','Fee updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect()->route('fee.index')->with('success','Fee deleted successfully');
    }
}
