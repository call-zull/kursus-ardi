# Website Kursus Online Ardi

**Oleh**: Muhammad Zulkifli  
**Akun GitHub**: [call-zull](https://github.com/call-zull)

## Teknologi yang Digunakan
- Laravel 11
- Filament
- Livewire
- Tailwind CSS

## Tools yang Digunakan
- Visual Studio Code
- XAMPP
- Chrome Browser

## Deskripsi Proyek
Website ini dirancang untuk memantau dan mengelola kursus serta materi di dalamnya. Website ini dilengkapi dengan dua mode tampilan: **Dark Mode** dan **Light Mode** untuk memberikan pengalaman pengguna yang lebih nyaman dan fleksibel.

## Cara Clone dan Install
Jika Anda ingin mengkloning dan menginstal repository ini, ikuti langkah-langkah berikut:

1. Buat folder baru, lalu buka terminal dan ketik:
   ```bash
   git clone https://github.com/call-zull/kursus-ardi.git .
2. Jalankan perintah berikut di terminal untuk menginstal dependensi:
   ```bash
    composer install
3. Ubah nama file .env.example menjadi .env, lalu sesuaikan pengaturan database Anda dengan DB_DATABASE di file .env.
4. Sesuaikan APP_URL di file .env dengan local server Anda. Contoh: http://127.0.0.1:8000.
5. Jalankan perintah berikut di terminal untuk menghasilkan key aplikasi, nanti Jika diminta untuk overwrite, tekan "yes"
     ```bash
    php artisan key:generate
6. Buat symbolic link untuk penyimpanan:
    ```bash
    php artisan storage:link
7. Jalankan migrasi database dengan perintah:
    ```bash
    php artisan migrate:fresh --seed
8. Mulai server Laravel dengan perintah:
    ```bash
    php artisan serve
9. Jika mengalami error terkait sesi atau cache, jalankan:
    ```bash
    php artisan optimize:clear
10. Anda Bisa Login Menggunakan :
    Email : ardi@gmail.com
    password : ardi
11. Pada bagian kursus jika anda ingin melengkapi, Anda bisa menambahkan gambar dengan mengklik edit, lalu unggah gambar dan simpan. Jika Anda tidak memiliki gambar, saya telah               menyediakan beberapa gambar difolder public/kursus.

Selamat Mencoba !

## Tampilan Website
berikut beberap tampilan project ini 

### Tampilan Login
Light Mode
![Screenshot 2024-08-10 234857](https://github.com/user-attachments/assets/81e2853d-1a5d-4552-90a9-ef547573cca1)

Dark Mode
![Screenshot 2024-08-10 234835](https://github.com/user-attachments/assets/6dab9600-4139-4231-8793-e5e592f6bbfb)

### Tampilan Dashboard
Light Mode
![Dashboard-LM](https://github.com/user-attachments/assets/dd977bb5-135b-429d-a547-fb4fd4ee1e1a)

Dark Mode
![dashboard-DM](https://github.com/user-attachments/assets/dc98de5a-dff8-492c-b4f4-b0f6c40489bb)

### Tampilan Kursus
Light Mode
![Kursus-LM](https://github.com/user-attachments/assets/bd71c6d0-3634-46d1-abc6-43af8b648198)

Dark Mode
![kursus-DM](https://github.com/user-attachments/assets/dfac206b-603d-4fa8-b5e8-75ddf5751ae5)

#### Create Kursus
![create-kursus-LM](https://github.com/user-attachments/assets/1dcc5775-69bf-49b2-8dd8-cb7196b00e06)

#### Contoh Create Kursus
![example-create-kursus](https://github.com/user-attachments/assets/64a570b5-c9d1-4473-a34d-ee1169e0e92a)

#### Edit Kursus
![edit-kursus](https://github.com/user-attachments/assets/37bd4f1a-6761-4f7e-a173-3b8ae07975f6)

#### Delete Kursus
![delete-kursus](https://github.com/user-attachments/assets/9800e098-9bd6-4d4a-b470-b7eaa14a744e)

### Tampilan Materi
Light Mode
![Materi-LM](https://github.com/user-attachments/assets/be9d6510-0b49-4d46-949d-a075bebea858)

Dark Mode
![materi-DM](https://github.com/user-attachments/assets/ef2be162-fd95-4659-ae41-3b8f561b41fa)

#### Create Materi
![create-materi](https://github.com/user-attachments/assets/64c0a8cc-7347-4867-beff-a262a03a2ce9)

#### Edit Materi
![edit-materi](https://github.com/user-attachments/assets/0124fdbb-f5b0-467c-93c1-efd5813c588d)

#### Delete Materi
![delete-materi](https://github.com/user-attachments/assets/a1c1c6ca-9638-4fa3-8874-b7df31b17247)

Sekian Terimakasih 🧑‍💻🙌
