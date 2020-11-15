<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Saving;

class SavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $savings = Saving::all();
        return $this->responseHandler(['savings' => $savings], 200, 'Berhasil memperoleh seluruh tabungan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $validator = Validator::make($request->all(), Saving::$rules['create']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $saving = Saving::create($request->all());

        return $this->responseHandler(['saving' => $saving], 201, 'Berhasil membuat tabungan baru');
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
        $validator = Validator::make($request->all(), Saving::$rules['update']);

        if ($validator->fails()){
            return response()->json($validator->messages(), 200);
        }

        $saving = Saving::find($id);

        if (!$saving) {
            return $this->responseHandler(null, 404, 'Tidak ada tabungan dengan id:' . $id);
        }

        $saving->fill($request->all())->save();

        return $this->responseHandler(['saving' => $saving], 201, 'Data tabungan berhasil di update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id = null)
    {
        $saving = Saving::find($id);

        if (!$saving) {
            return $this->responseHandler(null, 404, 'Tidak ada tabungan dengan id:' . $id);
        }

        $saving->delete();

        return $this->responseHandler(['id' => $id], 200, 'Berhasil menghapus tabungan');
    }
}
