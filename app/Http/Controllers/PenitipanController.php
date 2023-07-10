<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penitipan;

class PenitipanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Penitipan::all();
        return view('penitipan.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penitipan.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        {
            $request->validate([
                'no_ktp' => 'bail|required|unique:tb_penitipan',
                'nama' => 'required'
            ],
            [
                'no_ktp.required' => 'No KTP wajib diisi',
                'no_ktp.unique' => 'Nomor KTP sudah ada',
                'nama.required' => 'Nama wajib diisi'
            ]);
            Penitipan::create([
                'no_ktp' => $request->no_ktp,
                'nama' => $request->nama,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'jenis_hewan' => $request->jenis_hewan,
                'keterangan_hewan' => $request->keterangan_hewan
            ]);
            return redirect('penitipan');
        }
            
    }

    public function search(Request $request)
    {
        $keyword = $request->search;
        $rows = Penitipan::where('nama', 'like', "%" . $keyword . "%")->paginate();
        return view('Penitipan.index', compact('rows'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    public function lihat($id)
    {
        $row = Penitipan::findOrFail($id);
        return view('penitipan.lihat', compact('row'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Penitipan::findOrFail($id);
        return view('penitipan.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'no_ktp' => 'bail|required|unique:tb_penitipan',
            'nama' => 'required'
        ],
        [
            'no_ktp.required' => 'No KTP wajib diisi',
            'no_ktp.unique' => 'Nomor KTP sudah ada',
            'nama.required' => 'Nama wajib diisi'
        ]);
            $row = Penitipan::findOrFail($id);
            $row->update([
                'no_ktp' => $request->no_ktp,
                'nama' => $request->nama,
                'no_telp' => $request->no_telp,
                'alamat' => $request->alamat,
                'jenis_hewan' => $request->jenis_hewan,
                'keterangan_hewan' => $request->keterangan_hewan
            ]);
    
            return redirect('penitipan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Penitipan::findOrFail($id);
        $row->delete();
        return redirect('penitipan');
    }
}
