<?php

namespace App\Http\Controllers;

use App\Helpers\ResponseFormatter;
use App\Models\PenerimaBansos;
use Illuminate\Http\Request;

class PenerimaBansosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerimaBansos = PenerimaBansos::all();

        if ($penerimaBansos->isEmpty()) {
            return ResponseFormatter::error([
                'message' => 'Data Penerima Bansos Kosong'
            ], 'Gagal', 404);
            
        } else {
            return ResponseFormatter::success([
                'message'   => 'Data penerima bansos',
                'data'  => $penerimaBansos
            ], 'Sukses');
        }
        

       
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
        $validatedData = $request->validate([
            'nama'          => 'required|string',
            'nik'           => 'required|numeric',
            'nomor_kk'      => 'required|numeric',
            'foto_ktp'      => 'required|file|mimes:jpg,jpeg,png,bmp|max:2048', 
            'foto_kk'       => 'required|file|mimes:jpg,jpeg,png,bmp|max:2048', 
            'umur'          => 'required|numeric|gte:25',
            'jenis_kelamin' => 'required|in:Laki-laki,Perempuan',
            'provinsi'      => 'required|string',
            'kab_kota'      => 'required|string',
            'kecamatan'     => 'required|string',
            'kelurahan'     => 'required|string',
            'alamat'        => 'required|string',
            'rt'            => 'required|string',
            'rw'            => 'required|string',
        ]);

        usleep(1500000);

        if (rand(0, 1) === 1) {
            $penerimaBansos = PenerimaBansos::create($validatedData);
            
            return ResponseFormatter::success([
                'message'   => 'Data penerima bansos berhasil disimpan',
                'data'  => $penerimaBansos
            ], 'Sukses');
        } else {
            
            return ResponseFormatter::error([
                'message' => 'Gagal menyimpan data penerima bansos'
            ], 'Gagalp', 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return PenerimaBansos::find($id);
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
        $penerima_bansos = PenerimaBansos::find($id);
        $penerima_bansos->update($request->all());
        return $penerima_bansos;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penerima_bansos = PenerimaBansos::find($id);
        $penerima_bansos->delete();
        return 204;
    }
}
