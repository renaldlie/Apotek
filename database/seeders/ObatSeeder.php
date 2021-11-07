<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('obats')->insert([  
            'code'=>'1',         
            'obat'=>'Oskadon',
            'jenis_obat'=>'Tablet',
            'tipe_obat'=>'Obat Bebas',
            'description'=>'Meringankan Sakit Kepala',
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
            ]
        );
    }
}
