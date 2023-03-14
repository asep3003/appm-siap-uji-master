<?php

namespace Database\Seeders;

use App\Models\Petugas;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PetugasSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Mohamad Asep Saepulloh',
                'username' => 'asep30',
                'password' => bcrypt('asep30'),
                'telp' => '083811691729',
                'level' => 'Admin',
            ],
        ];
        Petugas::insert($data);
    }
}
