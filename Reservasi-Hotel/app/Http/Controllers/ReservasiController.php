<?php

namespace App\Http\Controllers;

use App\Models\Reservasi;
use Illuminate\Http\Request;

class ReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $result = Reservasi::all();

        // Mengirim data $result ke views service.index.blade.php
        return view('reservasi.index')->with('reservasi', $result);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('reservasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'nama' => "required",
            'ruang' => "required",
            'lantai' => "required",
        ]);

        Reservasi::create($input);

        return redirect()->route('reservasi.index')->with('success', $request->nama . 'berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservasi $reservasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservasi $reservasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reservasi $reservasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reservasi $reservasi)
    {
        //
    }
    public function getReservasi()
    {
        $response['data'] = Reservasi::all();
        $response['message'] = 'List data reservasi';
        $response['success'] = true;

        return response()->json($response, 200);
    }
    public function storeReservasi(Request $request)
    {
        $input = $request->validate([
            'nama' => "required",
            'ruang' => "required",
            'lantai' => "required",
        ]);

        // Simpan
        $hasil = Reservasi::create($input);

        if ($hasil) {
            // Jika berhasil disimpan
            $response['success'] = true;
            $response['message'] = $request->nama . ' berhasil disimpan';
            return response()->json($response, 201); 
        }else {
            // Jika gagal disimpan
            $response['success'] = false;
            $response['message'] = $request->nama . ' gagal disimpan';
            return response()->json($response, 400);
        }
    }
}
