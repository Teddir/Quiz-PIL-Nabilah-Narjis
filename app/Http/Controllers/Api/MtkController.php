<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\matakuliah;

class MtkController extends Controller
{
    public function index()
    {
        $matakuliahs = matakuliah::get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Matakuliah',
            'data' => $matakuliahs
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_matakuliah' => 'required',
            'sks' => 'required|numeric',

        ]);

        $matakuliahs = matakuliah::create([
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,

        ]);
        if ($matakuliahs) {
            return response()->json([
                'success' => true,
                'message' => 'Matakuliah berhasil ditambahkan',
                'data' => $matakuliahs
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Matakuliah gagal ditambahkan',
                'data' => $matakuliahs
            ], 409);
        }
    }

    public function show(int $id)
    {

        $matakuliahs = Matakuliah::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Matakuliah',
            'data'    => $matakuliahs
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $matakuliah = matakuliah::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $matakuliah->update($dataResult);

        return response()->json([
            'success' => true,
            'message' => 'Matakuliah berhasil di Updated',
            'data' => $matakuliah
        ], 200);
    }

    public function destroy($id)
    {
        $cek = matakuliah::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Matakuliah berhasil di Delete',
            'data'    => $cek
        ], 200);
    }
}
