<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\semester;

class SmtController extends Controller
{
    public function index()
    {
        $semester = semester::get();

        return response()->json([
            'success' => true,
            'message' => 'Daftar data Semester',
            'data' => $semester
        ], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'semester' => 'required',
        ]);

        $semesters = semester::create([
            'semester' => $request->semester,


        ]);
        if ($semesters) {
            return response()->json([
                'success' => true,
                'message' => 'Semester berhasil ditambahkan',
                'data' => $semesters
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Semester gagal ditambahkan',
                'data' => $semesters
            ], 409);
        }
    }
    public function show(int $id)
    {

        $semesters = semester::findOrFail($id);
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Semester',
            'data'    => $semesters
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([]);

        $semester = semester::find($id);

        $dataRequest  = $request->all();
        $dataResult  = array_filter($dataRequest);
        $semester->update($dataResult);

        return response()->json([
            'success' => true,
            'message' => 'Semester Berhasil di  Updated',
            'data' => $semester
        ], 200);
    }

    public function destroy($id)
    {
        $cek = semester::find($id)->delete();
        return response()->json([
            'success' => true,
            'message' => 'Semester Berhasil di Delete',
            'data'    => $cek
        ], 200);
    }
}
