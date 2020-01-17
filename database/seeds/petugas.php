<?php

use Illuminate\Database\Seeder;

class petugas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Petugas::insert([
            [
                'nama_petugas'=>'ilham',
                'alamat'=>'Jl.Jakarta-Bandung',
                'notelp'=>'08214032',
                'username'=>'123456',
                'password'=>'123456',
            ],
            [
                'nama_petugas'=>'khalis',
                'alamat'=>'Jl.Jakarta-Bandung',
                'notelp'=>'08214032',
                'username'=>'123456',
                'password'=>'123456',
            ],
            [
                'nama_petugas'=>'putra',
                'alamat'=>'Jl.Jakarta-Bandung',
                'notelp'=>'08214032',
                'username'=>'123456',
                'password'=>'123456',
            ],
            [
                'nama_petugas'=>'agatha',
                'alamat'=>'Jl.Jakarta-Bandung',
                'notelp'=>'08214032',
                'username'=>'123456',
                'password'=>'123456',
            ],
            [
                'nama_petugas'=>'idihh',
                'alamat'=>'Jl.Jakarta-Bandung',
                'notelp'=>'08214032',
                'username'=>'123456',
                'password'=>'123456',
            ]
        ]);
    }
}
