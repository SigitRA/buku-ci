<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'db_buku';
    protected $primaryKey = 'id';

    protected $allowedFields = ['judul', 'penerbit', 'pengarang', 'tahun_terbit', 'jumlah', 'genre','lorong'];

    protected $useTimestamps = false;
    // Jika Anda memiliki timestamp, gunakan $useTimestamps = true;

    // ... (definisikan metode lainnya jika diperlukan)
    
}
