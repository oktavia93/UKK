<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Membuat akun admin
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'), // Menggunakan Hash untuk mengenkripsi kata sandi
            'role' => 'Admin', // Tambahkan kolom 'role' sesuai kebutuhan aplikasi Anda
        ]);

        // Tambahkan logika untuk menambahkan lebih banyak akun admin jika diperlukan
    }
}
