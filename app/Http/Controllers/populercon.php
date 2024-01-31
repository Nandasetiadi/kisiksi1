<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class populercon extends Controller
{
    public function home()
    {
        $populer = DB::table('populer')->get();
        return view('friday', ['populer' => $populer]);
    }

    public function index()
    {
        $populer = DB::table('populer')->get();
        return view('populer', ['populer' => $populer]);
    }

    public function input()
    {
        return view('tambahpopuler');
    }

    public function storeinput(Request $request)
    {
        // insert data ke table tbproduk
        $file = $request->file('gambar');
        $filename = $request->kode . "." . $file->getClientOriginalExtension();
        $file->move(public_path('assets/img'), $filename);
        DB::table('populer')->insert([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $filename
        ]);
        // alihkan halaman ke route produk
        Session::flash('message', 'Input Berhasil.');
        return redirect('/populer/tampil');
    }

    public function update($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        $populer = DB::table('populer')->where('kode', $id)->get();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/populer/tampil');
    }

    public function storeupdate(Request $request)
    {
        // update data produk

        DB::table('populer')->where('kode', $request->kode)->update([
            'nama' => $request->nama,
            'tipe' => $request->tipe,
            'jenis' => $request->jenis,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => $request->gambar
        ]);

        // alihkan halaman ke halaman produk
        return redirect('/populer/tampil');
    }

    public function delete($id)
    {
        // mengambil data produk berdasarkan id yang dipilih
        DB::table('populer')->where('kode', $id)->delete();
        // passing data produk yang didapat ke view edit.blade.php
        return redirect('/populer/tampil');
    }
}
