<?php

namespace App\Http\Controllers;

use App\Models\inventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Contracts\Service\Attribute\Required;

class penyimpananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $katakunci = $request->katakunci;
        $jumlahbaris = 10;
        if(strlen($katakunci)){
            $data = inventory::where('kode_barang', 'like', "%$katakunci%")
            ->orWhere('nama_barang',  'like', "%$katakunci%")
            ->orWhere('kategori_barang',  'like', "%$katakunci%")
            ->paginate($jumlahbaris);
        }else {
            $data = inventory::orderBy('kode_barang', 'desc')->paginate($jumlahbaris);
        }

        
        return view('penyimpanan.index')->with('data', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penyimpanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Session::flash('kode_barang', $request->kode_barang);
        Session::flash('nama_barang', $request->nama_barang);
        Session::flash('kategori_barang', $request->kategori_barang);
        Session::flash('harga', $request->harga);
        Session::flash('qty', $request->qty);
 
        $data = [
            'kode_barang'=>$request->kodebarang,
            'nama_barang'=>$request->namabarang,
            'kategori_barang'=>$request->kategoribarang,
            'harga'=>$request->hargabarang,
            'qty'=>$request->jumlahbarang,
        ];
        inventory::create($data);
        return redirect()->to('penyimpanan')->with('success', 'Successfully added data');
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
        $data = inventory::where('kode_barang', $id)->first();
        return view('penyimpanan.edit')->with('data', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama_barang'=>$request->namabarang,
            'kategori_barang'=>$request->kategoribarang,
            'harga'=>$request->hargabarang,
            'qty'=>$request->jumlahbarang,
        ];
        inventory::where('kode_barang', $id)->update($data);
        return redirect()->to('penyimpanan')->with('success', 'Successfully updated data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        inventory::where('kode_barang', $id)->delete();
        return redirect()->to('penyimpanan')->with('success', 'Successfully deleted data');
    }
}
