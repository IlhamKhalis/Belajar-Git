<?php

use Illuminate\Database\Seeder;

class buku extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::insert([
            [
                'judul'=>'1',
                'penerbit'=>'produce',
                'pengarang'=>'ilham',
                'foto'=>'-'
            ],
            [
                'judul'=>'2',
                'penerbit'=>'produce',
                'pengarang'=>'khalis',
                'foto'=>'-'
            ],
            [
                'judul'=>'3',
                'penerbit'=>'produce',
                'pengarang'=>'putra',
                'foto'=>'-'
            ],
            [
                'judul'=>'4',
                'penerbit'=>'produce',
                'pengarang'=>'agatha',
                'foto'=>'-'
            ],
            [
                'judul'=>'5',
                'penerbit'=>'produce',
                'pengarang'=>'idihhh',
                'foto'=>'-'
            ]
        ]);
    }
}
