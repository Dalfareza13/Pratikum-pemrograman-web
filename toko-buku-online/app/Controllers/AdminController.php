<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AdminController extends BaseController
{
    public function index()
    {
        return view('admin/dashboard');
    }

    public function daftarbuku()
    {
        return view('admin/daftar-buku');
    }

    public function daftarbukuTambah()
    {
        return view('admin/daftar-buku-tambah');
    }

    public function createBuku() {
        $data = $this->request->getPost();
        $file = $this->request->getFile('cover');

        if(!$file->hasMoved()){
            $path = $file->store();
            $data['cover'] = $path;
        }

        $bukuModel = model('BookModel');

        if($bukuModel->insert($data, false)){
            return redirect()->to('admin/daftar-buku')->with('sukses', 'Data berhasil disimpan');
        }else{
            return redirect()->to('admin/daftar-buku')->with('error','Data gagal disimpan');
        }
    }

    public function daftarbukuEdit() 
    {
        return view('admin/daftar-buku/edit');
    }
    public function daftarbukuHapus() 
    {
        return view('admin/daftar-buku/hapus');
    }

    public function transaksi()
    {
        return view('admin/transaksi');
    }

    public function transaksiUbahStatus()
    {
        return view('admin/transaksi/ubah-status');
    }
    public function transaksiHapus()
    {
        return view('admin/transaksi/hapus');
    }

    public function pelanggan()
    {
        return view('admin/pelanggan');
    }

    public function pelangganHapus()
    {
        return view('admin/pelanggan/hapus');
    }

}