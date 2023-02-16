<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => \Hash::make('12345678'),
                'roles' => 'ADMIN'
            ],
            [
                'name' => 'Resepsionis',
                'email' => 'resepsionis@gmail.com',
                'password' => \Hash::make('12345678'),
                'roles' => 'RESEPSIONIS'
            ]
        ]);

        // \DB::table('admin_fas_hotel')->insert([
        //     [
        //         'nama_fas_hotel' => 'Kolam Renang',
        //         'ket_fas_hotel' => 'Kolam Renang Outdor Berada Di Lantai 3 dengan Luas 50m Persegi',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Tempat Parkir Luas',
        //         'ket_fas_hotel' => 'Terdapat 5 Lantai Dilengkapi dengan CCTV dan Petugas Keamanan',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Restoran',
        //         'ket_fas_hotel' => 'Menyediakan Berbagai Macam Makanan dan Minuman Cepat Saji Berada Di Lantai 7 dengan Luas 100m Persegi',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Fitness Center',
        //         'ket_fas_hotel' => 'Alat Fitness Terlengkap dan Terbaru Berada Di Lantai 10',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Lobby',
        //         'ket_fas_hotel' => 'Lobby yang Luas dan Nyaman Berada Di Lantai 1',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Ruang Meeting',
        //         'ket_fas_hotel' => 'Ruang Meeting yang Luas dan Nyaman Berada Di Lantai 2',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Ballroom',
        //         'ket_fas_hotel' => 'Ballroom yang Luas dan Nyaman Berada Di Lantai 5',
        //         'gambar' => ''
        //     ],
        //     [
        //         'nama_fas_hotel' => 'Hair & Spa Salon',
        //         'ket_fas_hotel' => 'Hair & Spa Salon yang Luas dan Nyaman Berada Di Lantai 4',
        //         'gambar' => ''
        //     ]
        // ]);

        // \DB::table('admin_kamar')->insert([
        //     [
        //         'tipe_kamar' => 'Standar',
        //         'jml_kamar' => '20',
        //         'gambar' => ''
        //     ],
        //     [
        //         'tipe_kamar' => 'Superior',
        //         'jml_kamar' => '30',
        //         'gambar' => ''
        //     ],
        //     [
        //         'tipe_kamar' => 'Deluxe',
        //         'jml_kamar' => '30',
        //         'gambar' => ''
        //     ],
        //     [
        //         'tipe_kamar' => 'Suite',
        //         'jml_kamar' => '25',
        //         'gambar' => ''
        //     ],
        //     [
        //         'tipe_kamar' => 'Presidential',
        //         'jml_kamar' => '20',
        //         'gambar' => ''
        //     ]
        // ]);

        // \DB::table('admin_fas_kamar')->insert([
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Kasur',
        //         'gambar' => 'img/kamar/kasur.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'AC',
        //         'gambar' => 'img/kamar/ac.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'TV',
        //         'gambar' => 'img/kamar/tv.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Kamar Mandi',
        //         'gambar' => 'img/kamar/kamarmandi.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Wifi',
        //         'gambar' => 'img/kamar/wifi.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Kulkas',
        //         'gambar' => 'img/kamar/kulkas.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Meja',
        //         'gambar' => 'img/kamar/meja.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Kursi',
        //         'gambar' => 'img/kamar/kursi.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Lemari',
        //         'gambar' => 'img/kamar/lemari.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Sofa',
        //         'gambar' => 'img/kamar/sofa.jpg'
        //     ],
        //     [
        //         'tipe_kamar_id' => '1',
        //         'nama_fasilitas' => 'Dapur',
        //         'gambar' => ''
        //     ]
        // ]);
    }
}
