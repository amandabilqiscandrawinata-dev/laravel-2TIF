<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan semua data pelanggan ke halaman utama pelanggan (opsional untuk nanti)
        return "Halaman Data Pelanggan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // AKTIFKAN FORM: Membuka halaman resources/views/pelanggan/create.blade.php
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // PROSES SIMPAN: Menerima data dari form lalu memasukkannya ke database
        Pelanggan::create($request->all());

        // Setelah berhasil menyimpan, lempar kembali ke halaman utama pelanggan
        return redirect('/pelanggan')->with('success', 'Data pelanggan berhasil disimpan!');
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
