<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee;

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
        return $this->responseHandler(['fees' => $fees], 200, 'Berhasil memperoleh seluruh SPP');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $this->validate($request, Fee::$rules['create']);

        $fee = Fee::create($request->all());

        return $this->responseHandler(['fee' => $fee], 201, 'Berhasil membuat SPP baru');
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
        $this->validate($request, Fee::$rules['update']);

        $fee = Fee::find($id);

        if (!$fee) {
            return $this->responseHandler(null, 404, 'Tidak ada SPP dengan id:' . $id);
        }

        $fee->fill($request->all())->save();

        return $this->responseHandler(['fee' => $fee], 201, 'Data SPP berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $fee = Fee::find($id);

        if (!$fee) {
            return $this->responseHandler(null, 404, 'Tidak ada SPP dengan id:' . $id);
        }

        $fee->delete();

        return $this->responseHandler(['id' => $id], 200, 'Berhasil menghapus SPP');
    }
}
