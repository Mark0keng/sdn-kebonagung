<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class StaffTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('staff')->delete();
        
        \DB::table('staff')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Moh. Syarifulloh, S.Pd.SD',
                'image' => NULL,
                'nip' => NULL,
                'title' => 'Kepala Sekolah',
                'created_at' => '2022-08-17 09:11:20',
                'updated_at' => '2022-08-17 09:11:20',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Millatus Solikhah, S.Pd',
                'image' => 'staff-images/ug6JIalixbZFGrN4PVto2sfNzeE33Og0NYRC7OgW.png',
                'nip' => NULL,
                'title' => 'Guru Kelas 1',
                'created_at' => '2022-08-17 09:11:56',
                'updated_at' => '2022-08-17 09:41:15',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Luly Prahestami, S.Pd',
                'image' => 'staff-images/vpmkGiLqPc6plLPAE7llpwhzCE6diBp2iGSwlOzW.png',
                'nip' => NULL,
                'title' => 'Guru Kelas 2',
                'created_at' => '2022-08-17 09:12:26',
                'updated_at' => '2022-08-17 09:43:05',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Kasidin, S.Pd.SD',
                'image' => 'staff-images/4iZRYEeTYnaTUsfiJFITZIezzqOfSEEIEtNgq424.jpg',
                'nip' => NULL,
                'title' => 'Guru Kelas 3',
                'created_at' => '2022-08-17 09:13:04',
                'updated_at' => '2022-08-17 09:46:48',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ayu Nur Baety, S.Pd',
                'image' => 'staff-images/iLhwWIHYSTSSVp6aUQAjkax17ArGTJbKztZouDZT.jpg',
                'nip' => NULL,
                'title' => 'Guru Kelas 4',
                'created_at' => '2022-08-17 09:13:37',
                'updated_at' => '2022-08-17 09:47:27',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Anggietyaz Ayu Miara Maltha Artha, S.Pd',
                'image' => 'staff-images/UNb1ughsfU9Mfr8ww6kfC3B95oa22roZu5b23evs.jpg',
                'nip' => NULL,
                'title' => 'Guru Kelas 5',
                'created_at' => '2022-08-17 09:13:58',
                'updated_at' => '2022-08-17 09:47:49',
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Sartono, S.Pd.SD',
                'image' => 'staff-images/09tDvH9CAiwUUhYYOYWYeJoFB1gXrtBp5BGSEBTY.jpg',
                'nip' => NULL,
                'title' => 'Guru Kelas 6',
                'created_at' => '2022-08-17 09:14:33',
                'updated_at' => '2022-08-17 09:48:05',
            ),
            7 => 
            array (
                'id' => 8,
                'name' => 'Sri Handaiyani, S.Pd.I',
                'image' => 'staff-images/ACLJkd4c6TA6ofHwT8Lxn0Xkkqc9ZIovy8cruOSH.jpg',
                'nip' => NULL,
                'title' => 'Guru PAI',
                'created_at' => '2022-08-17 09:15:09',
                'updated_at' => '2022-08-17 09:48:18',
            ),
            8 => 
            array (
                'id' => 9,
                'name' => 'Five Maulis, S.Pd',
                'image' => 'staff-images/7hgGW9GLJSlxafsLP9zh9kc08AwjNxN5zxiCF5Vd.jpg',
                'nip' => NULL,
                'title' => 'Guru PJOK',
                'created_at' => '2022-08-17 09:15:38',
                'updated_at' => '2022-08-17 09:48:32',
            ),
            9 => 
            array (
                'id' => 10,
                'name' => 'Leni Anggraeni, S.Tr.Kom',
                'image' => 'staff-images/75LdtiYMMRRZwKrII9nFGxAIrR6I87QwthbL8bHy.jpg',
                'nip' => NULL,
                'title' => 'Operator Sekolah',
                'created_at' => '2022-08-17 09:16:05',
                'updated_at' => '2022-08-17 09:48:44',
            ),
        ));
        
        
    }
}