<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PenerimaBansos;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PenerimaBansosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penerimaBansos = PenerimaBansos::all();

        return view('admin.penerimaBansos.index', compact('penerimaBansos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.penerimaBansos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'                                   => 'required|string',
            'nik'                                    => 'required|numeric',
            'nomor_kk'                               => 'required|numeric',
            'foto_ktp'                               => 'required|file|mimes:jpg,jpeg,png,bmp|max:2048',
            'foto_kk'                                => 'required|file|mimes:jpg,jpeg,png,bmp|max:2048',
            'umur'                                   => 'required|numeric|gte:25',
            'jenis_kelamin'                          => 'required|in:Laki-laki,Perempuan',
            'provinsi'                               => 'required|string',
            'kab_kota'                               => 'required|string',
            'kecamatan'                              => 'required|string',
            'kelurahan'                              => 'required|string',
            'alamat'                                 => 'required|string',
            'rt'                                     => 'required|string',
            'rw'                                     => 'required|string',
            'penghasilan_sebelum_pandemi'            => 'required',
            'penghasilan_setelah_pandemi'            => 'required',
            'alasan_bantuan'                         => 'required',
        ]);

        $image_ktp = $request->file('foto_ktp');
        $image_ktp->storeAs('public/ktps', $image_ktp->hashName());

        $image_kk = $request->file('foto_kk');
        $image_kk->storeAs('public/kk', $image_kk->hashName());

        //save to DB
        $penerimaanBansos = PenerimaBansos::create([

            'nama'                                    => $request->nama,
            'nik'                                     => $request->nik,
            'nomor_kk'                                => $request->nomor_kk,
            'foto_ktp'                                => $image_ktp->hashName(),
            'foto_kk'                                 => $request->file('foto_kk')->hashName(),
            'umur'                                    => $request->umur,
            'jenis_kelamin'                           => $request->jenis_kelamin,
            'provinsi'                                => $request->provinsi,
            'kab_kota'                                => $request->kab_kota,
            'kecamatan'                               => $request->kecamatan,
            'kelurahan'                               => $request->kelurahan,
            'alamat'                                  => $request->alamat,
            'rt'                                      => $request->rt,
            'rw'                                      => $request->rw,
            'penghasilan_sebelum_pandemi'             => $request->penghasilan_sebelum_pandemi,
            'penghasilan_setelah_pandemi'             => $request->penghasilan_setelah_pandemi,
            'alasan_bantuan'                          => $request->alasan_bantuan,
        ]);


        if ($penerimaanBansos) {

            session()->flash('success', 'Data Berhasil Disimpan!');

            return redirect()->route('bansos.preview', ['id' => $penerimaanBansos->id]);
            // return redirect()->route('index')->with(['success' => 'Data Berhasil Disimpan!']);
        } else {
            session()->flash('success', 'Data Gagal Disimpan!');

            return redirect()->route('index');
        }

        // usleep(1500000);

        // if (rand(0, 1) === 1) {
        // } else {
        // }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penerimaanBansos = PenerimaBansos::findOrFail($id); 

        // Pass the data to the preview view
        return view('admin.penerimaBansos.preview', compact('penerimaanBansos'));
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
