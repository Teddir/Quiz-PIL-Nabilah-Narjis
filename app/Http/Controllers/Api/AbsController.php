<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\absensi;

class AbsController extends Controller
{
    public function index()
    {

        $absensis = absensi::get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Absensi',
            'data' => $absensis
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'waktu_absen' => 'required',
            'mahasiswa_id' => 'required|numeric',
            'matakuliah_id' => 'required',
            'keterangan' => 'required',

        ]);

        $absensis = absensi::create([
            'waktu_absen' => $request->waktu_absen,
            'mahasiswa_id' => $request->mahasiswa_id,
            'matakuliah_id' => $request->matakuliah_id,
            'keterangan' => $request->keterangan,
        ]);
        if ($absensis) {
            return response()->json([
                'success' => true,
                'message' => 'Absen berhasil ditambahkan',
                'data' => $absensis
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Absen gagal ditambahkan',
                'data' => $absensis
            ], 409);
        }
    }
    public function show(int $id)
    {

        $absensis = absensi::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Absen',
            'data'    => $absensis
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $absensi = absensi::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $absensi->update($dataResult);

        return response()->json([
            'success' => true,
            'message' => 'Absensi Updated',
            'data' => $absensi
        ], 200);
    }

    public function destroy($id)
    {
        $cek = absensi::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Absensi Delete',
            'data'    => $cek
        ], 200);
    }
}
