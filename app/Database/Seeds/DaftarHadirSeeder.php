<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

// use CodeIgniter\I18n\Time;

class DaftarHadirSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id_kegiatan'   => 1,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-04-24',
                'file'          => 'bukti-default1.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 221910881,
                'nama'          => 'Agus Dewanto',
                'tanggal'       => '2023-04-19',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 1,
                'nim'           => 221910076,
                'nama'          => 'Purwadi Noer',
                'tanggal'       => '2023-04-19',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 2,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-04-19',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 2,
                'nim'           => 221910076,
                'nama'          => 'Purwadi Noer',
                'tanggal'       => '2023-04-19',
                'file'          => 'bukti-default2.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 3,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-02-19',
                'file'          => 'bukti-default3.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 3,
                'nim'           => 221910076,
                'nama'          => 'Purwadi Noer',
                'tanggal'       => '2023-02-19',
                'file'          => 'bukti-default3.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 221910846,
                'nama'          => 'Yoka Prasetia',
                'tanggal'       => '2023-02-10',
                'file'          => 'bukti-default4.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 221910076,
                'nama'          => 'Purwadi Noer',
                'tanggal'       => '2023-02-10',
                'file'          => 'bukti-default4.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
            [
                'id_kegiatan'   => 4,
                'nim'           => 221910881,
                'nama'          => 'Agus Dewanto',
                'tanggal'       => '2023-02-10',
                'file'          => 'bukti-default4.png',
                'updated_at'    => Time::now('Asia/Jakarta'),
            ],
        ];

        // 1 Data
        // $this->db->table('daftarHadir')->insert($data);

        // Banyak data
        $this->db->table('daftarHadir')->insertBatch($data);
    }
}
