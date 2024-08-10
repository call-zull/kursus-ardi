<?php

namespace Database\Seeders;

use App\Models\Materi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Materi::create([
            'judul' => 'HTML untuk Pemula',
            'deskripsi' => 'Belajar HTML Lengkap',
            'link' => 'https://kursus/html-ardi.com',
            'kursus_id' => 1,
        ]);

        Materi::create([
            'judul' => 'CSS untuk Pemula',
            'deskripsi' => 'Belajar Dasar CSS',
            'link' => 'https://kursus/css-ardi.com',
            'kursus_id' => 1,
        ]);

        Materi::create([
            'judul' => 'Android untuk Pemula',
            'deskripsi' => 'Belajar Dasar Android',
            'link' => 'https://kursus/Android-ardi.com',
            'kursus_id' => 2,
        ]);

        Materi::create([
            'judul' => 'Kotlin untuk Pemula',
            'deskripsi' => 'Belajar Dasar Kotlin',
            'link' => 'https://kursus/Kotlin-ardi.com',
            'kursus_id' => 2,
        ]);
    }
}