<?php

namespace Database\Seeders;

use App\Models\Masyarakat;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MasyarakatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            'nik' => '3201250067809751',
            'nama' => 'Udin Supendi',
            'username' => 'udin',
            'password' => bcrypt('udin'),
            'telp' => '085213467891',
        ];
        Masyarakat::insert($data);
    }
}
