<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    private array $daftarBuku = [
        1 => ['judul' => 'Belajar PHP dari Nol', 'penulis' => 'Ni Made Ayu Kartika', 'harga' => 75000],
        2 => ['judul' => 'Dasar Pemrograman Berorientasi Objek', 'penulis' => 'I Wayan Sudiarta', 'harga' => 85000],
        3 => ['judul' => 'Pengantar Basis Data', 'penulis' => 'Kadek Agus Wirawan', 'harga' => 95000],
    ];

    public function index()
    {
        return view('buku.index', ['daftarBuku' => $this->daftarBuku]);
    }

    public function show($id)
    {
        $buku = $this->daftarBuku[$id] ?? null;
        return view('buku.show', ['buku' => $buku, 'id' => $id]);
    }

}
