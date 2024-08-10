<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KursusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kursus::create([
            'judul' => 'Web Developer',
            'deskripsi' => 'Belajar Membuat Website untuk Pemula',
            'durasi' => 60,
        ]);

        Kursus::create([
            'judul' => 'Android Developer',
            'deskripsi' => 'Belajar Membuat Aplikasi Android untuk Pemula',
            'durasi' => 120,
        ]);
    }
}