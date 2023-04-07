<?php

namespace App\Models;

use CodeIgniter\Model;

class DaftarHadirModel extends Model
{
    protected $table = 'daftarHadir';
    protected $allowedFields = ['id_kegiatan', 'nama', 'nim', 'tanggal', 'file', 'updated_at'];
}
