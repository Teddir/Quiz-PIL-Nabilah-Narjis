<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\mahasiswa;

class MhsController extends Controller
{
    public function index()
    {
        $mahasiswas = mahasiswa::get();

        return response()->json([
            'success' => true,
            'message' => 'Data Mahasiswa',
            'data' => $mahasiswas
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([]);

        $mahasiswas = mahasiswa::create($request->all());

        if ($mahasiswas) {
            return response()->json([
                'success' => true,
                'message' => 'Mahasiswa berhasil ditambahkan',
                'data' => $mahasiswas
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Mahasiswa gagal ditambahkan',
                'data' => $mahasiswas
            ], 409);
        }
    }

    public function show(int $id)
    {

        $mahasiswas = mahasiswa::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Data Mahasiswa',
            'data'    => $mahasiswas
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $kontrakmk = mahasiswa::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $kontrakmk->update($dataResult);

        return response()->json([
            'success' => true,
            'message' => 'Mahasiswa Berhasil Updated',
            'data' => $kontrakmk
        ], 200);
    }

    public function destroy($id)
    {
        $cek = mahasiswa::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Mahasiswa Berhasil Dihapus',
            'data'    => $cek
        ], 200);
    }
}
