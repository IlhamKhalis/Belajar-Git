<?php

use Illuminate\Database\Seeder;

class anggota extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Anggota::insert([
            [
                'nama_anggota'=>'ilham',
                'alamat'=>'Jl.Jenderal Soedirman',
                'notelp'=>'082140322',
            ],
            [
                'nama_anggota'=>'khalis',
                'alamat'=>'Jl.Jenderal Soekarno',
                'notelp'=>'082140322',
            ],
            [
                'nama_anggota'=>'putra',
                'alamat'=>'Jl.Jenderal ABC',
                'notelp'=>'082140322',
            ],
            [
                'nama_anggota'=>'agatha',
                'alamat'=>'Jl.Jenderal EFG',
                'notelp'=>'082140322',
            ],
            [
                'nama_anggota'=>'idihhh',
                'alamat'=>'Jl.Jenderal HIJ',
                'notelp'=>'082140322',
            ]
        ]);
    }
}
