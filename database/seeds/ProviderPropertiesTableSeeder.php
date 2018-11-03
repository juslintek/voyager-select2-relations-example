<?php

use Illuminate\Database\Seeder;

class ProviderPropertiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_properties')->delete();
        
        \DB::table('provider_properties')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Size',
                'created_at' => '2018-11-03 22:29:38',
                'updated_at' => '2018-11-03 22:29:38',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Color',
                'created_at' => '2018-11-03 22:29:45',
                'updated_at' => '2018-11-03 22:29:45',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Address',
                'created_at' => '2018-11-03 22:29:54',
                'updated_at' => '2018-11-03 22:29:54',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'City',
                'created_at' => '2018-11-03 22:30:02',
                'updated_at' => '2018-11-03 22:30:02',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Country',
                'created_at' => '2018-11-03 22:30:13',
                'updated_at' => '2018-11-03 22:30:13',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Revenue',
                'created_at' => '2018-11-03 22:30:30',
                'updated_at' => '2018-11-03 22:30:30',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Employees',
                'created_at' => '2018-11-03 22:30:00',
                'updated_at' => '2018-11-03 22:31:08',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}