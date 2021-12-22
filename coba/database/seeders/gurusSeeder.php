<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;
class gurusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('gurus')->insert([
            'nip' => 3567345612,
            'nama_guru' => "mei mei",
            'mapel' => "Matematika",
        ]);
    }
}
