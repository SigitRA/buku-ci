<?php

namespace App\Controllers;

use App\Models\BukuModel;
use CodeIgniter\Controller;

class BukuController extends Controller
{

    public function index()
    {
        // Instance model BukuModel
        $bukuModel = new BukuModel();

        // Ambil semua data buku dari database
        $data['daftar_buku'] = $bukuModel->findAll();

        // Tampilkan data buku dalam view (template halaman)
        return view('daftar_buku', $data);
    }
    public function tambahBukuForm()
    {
        return view('tambah_buku'); // Asumsi: View bernama tambah_buku.php
    }

    public function tambahBuku()
    {
        // Instance model BukuModel
        $bukuModel = new BukuModel();

        // Data buku yang akan disimpan
        $data = [
            'judul' => 'Judul Buku',
            'penerbit' => 'Penerbit Buku',
            'pengarang' => 'Pengarang Buku',
            'tahun_terbit' => 2023,
            'jumlah' => 10,
            'genre' => 'Genre Buku',
            'lorong' => 'Lorong',
        ];

        // Menyimpan data buku
        $bukuModel->insert($data);

        // Tampilkan pesan atau arahkan ke halaman lain jika diperlukan
        // Contoh: return redirect()->to('/daftar-buku');
        return redirect()->to('/daftar-buku');
    }

    public function editBukuForm($id)
    {
        $bukuModel = new BukuModel();

        // Ambil data buku berdasarkan ID
        $data['buku'] = $bukuModel->find($id);

        return view('edit_buku', $data); // Asumsi: View bernama edit_buku.php
    }

    public function updateBuku($id)
    {
        $bukuModel = new BukuModel();

        // Ambil data yang dikirimkan melalui form edit buku
        $data = [
            'judul' => $this->request->getPost('judul'),
            'penerbit' => $this->request->getPost('penerbit'),
            'pengarang' => $this->request->getPost('pengarang'),
            'tahun_terbit' => $this->request->getPost('tahun_terbit'),
            'jumlah' => $this->request->getPost('jumlah'),
            'genre' => $this->request->getPost('genre'),
            'lorong' => $this->request->getPost('lorong'),
        ];

        // Lakukan validasi data jika diperlukan

        // Update data buku berdasarkan ID
        $bukuModel->update($id, $data);

        return redirect()->to('/daftar-buku')->with('success', 'Buku berhasil diupdate');
    }




    public function hapusBuku($id)
{
    // Instance model BukuModel
    $bukuModel = new BukuModel();

    // Cari buku berdasarkan ID
    $buku = $bukuModel->find($id);

    // Jika buku ditemukan
    if ($buku) {
        // Hapus buku dari database
        $bukuModel->delete($id);

        // Tampilkan pesan atau arahkan ke halaman lain jika diperlukan
        // Contoh: return redirect()->to('/daftar-buku');
        return redirect()->to('/daftar-buku')->with('success', 'Buku berhasil dihapus');
    } else {
        // Tampilkan pesan bahwa buku tidak ditemukan atau tidak bisa dihapus
        return redirect()->to('/daftar-buku')->with('error', 'Buku tidak ditemukan atau tidak bisa dihapus');
    }
}


    // Metode lainnya sesuai kebutuhan Anda
}
