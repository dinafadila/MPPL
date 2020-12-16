<?php

namespace App\Http\Controllers;

use App\Models\Calendar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CalendarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $calendars = Calendar::all();
        return view('admin.calendar.index', compact('calendars'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.calendar.create');
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
            'name_of_event' => 'required|string|min:3|max:30',
            'date_of_start' => 'required|date',
            'date_of_end' => 'required|date',
            'information' => 'required|string',
        ]);

        if ($validator->fails()) {
            return redirect()->route('calendar.create')->withErrors($validator)->withInput();
        }

        Calendar::create($request->all());
        return redirect()->route('calendar.index')->with('success','Calendar created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Calendar $calendar)
    {
        return view('admin.calendar.show',compact('calendar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Calendar $calendar)
    {
        return view('admin.calendar.edit',compact('calendar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Calendar $calendar)
    {
        $validator = Validator::make($request->all(), [
            'name_of_event' => 'nullable|string|min:3|max:30',
            'start_date' => 'nullable|date',
            'end_date' => 'nullable|date',
        ]);

        if ($validator->fails()) {
            return redirect()->route('calendar.edit', $calendar->id)->withErrors($validator)->withInput();
        }

        $calendar->update($request->all());
        return redirect()->route('calendar.index')->with('success','Calendar updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Calendar $calendar)
    {
        $calendar->delete();
        return redirect()->route('calendar.index')->with('success','Calendar deleted successfully');
    }
}
