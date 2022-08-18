<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClassRoomsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('class_rooms')->delete();
        
        \DB::table('class_rooms')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => '1 (Satu)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
            'name' => '2 (Dua)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
            'name' => '3 (Tiga)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
            'name' => '4 (Empat)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
            'name' => '5 (Lima)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
            'name' => '6 (Enam)',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}