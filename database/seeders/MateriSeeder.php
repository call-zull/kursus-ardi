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
            'link' => 'https://www.w3schools.com/html/',
            'kursus_id' => 1,
        ]);

        Materi::create([
            'judul' => 'CSS untuk Pemula',
            'deskripsi' => 'Belajar Dasar CSS',
            'link' => 'https://www.w3schools.com/css/',
            'kursus_id' => 1,
        ]);

        Materi::create([
            'judul' => 'Android untuk Pemula',
            'deskripsi' => 'Belajar Dasar Android',
            'link' => 'https://developer.android.com',
            'kursus_id' => 2,
        ]);

        Materi::create([
            'judul' => 'Kotlin untuk Pemula',
            'deskripsi' => 'Belajar Dasar Kotlin',
            'link' => 'https://kotlinlang.org/',
            'kursus_id' => 2,
        ]);
    }
}