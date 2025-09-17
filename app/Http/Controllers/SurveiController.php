<?php

namespace App\Http\Controllers;

use App\Models\SurveiModel;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = SurveiModel::all();
        return response()->json([
            'status' => 'success',
            'message' => 'Data Survei Berhasil Didapat',
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $valid_data = $request->validate([
            'nama' => 'required|string|max:100',
            'nomor_telepon' => 'required|string|max:15',
            'deskripsi_web' => 'required|string'
        ]);

        $result = SurveiModel::create($valid_data);

        if ($result) { // JIKA $result MENGHASILKAN TRUE, MAKA AKAN MELAKUKAN FUNCTION DI DALAMNYA
            return response()->json([ // AKAN MERETURN RESPONSE DALAM BENTUK JSON KE VIEW BLADE
                'message' => "Data Berhasil Ditambah",
                'code' => 200,
            ]);
        } else { // JIKA $result MENGHASILKAN FALSE, MAKA AKAN MELAKUKAN FUNCTION DI DALAMNYA
            return response()->json([ // AKAN MERETURN RESPONSE DALAM BENTUK JSON KE VIEW BLADE
                'message' => "Data Tidak Berhasil Ditambah",
                'code' => 500,
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
