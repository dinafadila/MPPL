<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Calendar;

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
        return $this->responseHandler(['calendars' => $calendars], 200, 'Berhasil memperoleh seluruh kalender akademik');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, Calendar::$rules['create']);

        $calendar = Calendar::create($request->all());

        return $this->responseHandler(['calendar' => $calendar], 201, 'Berhasil membuat kalender akademik baru');
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
        $this->validate($request, Calendar::$rules['update']);

        $calendar = Calendar::find($id);

        if (!$calendar) {
            return $this->responseHandler(null, 404, 'Tidak ada kalender akademik dengan id:' . $id);
        }

        $calendar->fill($request->all())->save();

        return $this->responseHandler(['calendar' => $calendar], 201, 'Data kalender akademik berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $calendar = Calendar::find($id);

        if (!$calendar) {
            return $this->responseHandler(null, 404, 'Tidak ada kalender akademik dengan id:' . $id);
        }

        $calendar->delete();

        return $this->responseHandler(['id' => $id], 200, 'Berhasil menghapus kalender akademik');
    }
}
