<?php

namespace Database\Seeders;

use App\Models\Pengaduan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengaduanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'tgl_pengaduan' => \Carbon\Carbon::now(),
                'nik' => '3201250067809751',
                'isi_laporan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat magni consequatur praesentium voluptatem esse officiis dolorum maiores fugit. Sed?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => \Carbon\Carbon::now(),
                'nik' => '3201250067809751',
                'isi_laporan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat magni consequatur praesentium voluptatem esse officiis dolorum maiores fugit. Sed?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => \Carbon\Carbon::now(),
                'nik' => '3201250067809751',
                'isi_laporan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat magni consequatur praesentium voluptatem esse officiis dolorum maiores fugit. Sed?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => \Carbon\Carbon::now(),
                'nik' => '3201250067809751',
                'isi_laporan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat magni consequatur praesentium voluptatem esse officiis dolorum maiores fugit. Sed?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
            [
                'tgl_pengaduan' => \Carbon\Carbon::now(),
                'nik' => '3201250067809751',
                'isi_laporan' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat magni consequatur praesentium voluptatem esse officiis dolorum maiores fugit. Sed?',
                'foto' => 'assets/images/1758323670530735.jpg',
                'status' => '0',
            ],
        ];
        Pengaduan::insert($data);
    }
}
