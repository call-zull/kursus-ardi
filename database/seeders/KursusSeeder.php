<?php

namespace Database\Seeders;

use App\Models\Kursus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;

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
            'image' => '01J4YAWN64QXAH87GTTVG1D4PG.jpeg',
        ]);

        Kursus::create([
            'judul' => 'Android Developer',
            'deskripsi' => 'Belajar Membuat Aplikasi Android untuk Pemula',
            'durasi' => 120,
            'image' => '01J4YAZ22HVYVM4QAEQ19GV18Y.jpeg',
        ]);
    }
}