<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\jadwal;

class JdwController extends Controller
{
    public function index()
    {
        $jadwals = jadwal::get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar Jadwal',
            'data' => $jadwals
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'jadwal' => 'required',
            'matakuliah_id' => 'required',
        ]);

        $jadwals = jadwal::create([
            'matakuliah_id' => $request->matakuliah_id,
            'jadwal' => $request->jadwal,
        ]);
        if ($jadwals) {
            return response()->json([
                'success' => true,
                'message' => 'Jadwal berhasil ditambahkan',
                'data' => $jadwals
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Jadwal gagal ditambahkan',
                'data' => $jadwals
            ], 409);
        }
    }
    public function show(int $id)
    {

        $jadwals = jadwal::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Jadwal',
            'data'    => $jadwals
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $jadwal = jadwal::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $jadwal->update($dataResult);

        return response()->json([
            'success' => true,
            'message' => 'Jadwal berhasil di update',
            'data' => $jadwal
        ], 200);
    }

    public function destroy($id)
    {
        $cek = jadwal::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Jadwal berhasil di hapus ',
            'data'    => $cek
        ], 200);
    }
}
