<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Siswa;
use App\Kelas;
use App\Spp;
use App\Pembayaran;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        User::create([
            'name' => 'admin',
            'email' => 'adminspp@gmail.com',
            'password' => Hash::make('admin'),
            'level' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
         ]);
         
         User::create([
            'name' => 'petugas',
            'email' => 'petugasspp@gmail.com',
            'password' => Hash::make('petugas'),
            'level' => 'petugas',
            'created_at' => now(),
            'updated_at' => now()
         ]);

        Kelas::create([
            'nama_kelas' => 'XII RPL',
            'kompetensi_keahlian' => 'Rekayasa Perangkat Lunak'
        ]);

        Spp::create([
            'tahun' => 2020,
            'nominal' => 450000
        ]);

        Siswa::create([
            'nisn' => '142802200200',
            'nis'  => '55373687',
            'nama' => 'Rida Eliyantika',
            'id_kelas' => 1,
            'nomor_telp' => '089517168438',
            'alamat' => 'Bogor',
            'id_spp' => 1
        ]);

        Pembayaran::create([
            'id_petugas' => 2,
            'id_siswa' => 1,
            'spp_bulan' => 'januari',
            'jumlah_bayar' => 450000

        ]);
    }
}
