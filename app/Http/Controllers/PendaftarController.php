<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Mail;
use App\Mail\NotifikasiPendaftaran;

class PendaftarController extends Controller
{
    public function store(Request $request)
    {
        // 1. Validasi data (Tambahkan validasi email di sini!)
        $request->validate([
            'nama' => 'required',
            'universitas' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email', // Wajib diisi dan formatnya harus valid (@gmail.com dll)
        ]);

        // 2. Simpan data ke Database MySQL
        // (Pastikan di tabel databasemu juga sudah ada kolom 'email' ya!)
        Pendaftar::create([
            'nama' => $request->nama,
            'universitas' => $request->universitas,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'email' => $request->email, // Simpan emailnya ke database
        ]);

        // 3. Tembak Emailnya (Pelatuk)
        Mail::to($request->email)->send(new NotifikasiPendaftaran());

        // 4. Kembalikan user ke halaman form dengan pesan sukses
        return back()->with('success', 'Pendaftaran berhasil dikirim! Tim kami akan segera meninjau datamu.');
    }
}