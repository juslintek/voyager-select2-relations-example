<?php

use Illuminate\Database\Seeder;

class ProviderValuesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('provider_values')->delete();
        
        \DB::table('provider_values')->insert(array (
            0 => 
            array (
                'id' => 1,
                'provider_id' => 1,
                'provider_property_id' => 1,
                'value' => '10',
                'created_at' => '2018-11-03 22:32:18',
                'updated_at' => '2018-11-03 22:32:18',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'provider_id' => 2,
                'provider_property_id' => 1,
                'value' => '5',
                'created_at' => '2018-11-03 22:32:35',
                'updated_at' => '2018-11-03 22:32:35',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'provider_id' => 5,
                'provider_property_id' => 3,
                'value' => 'Tempo 45, Hoshan, Slovakia',
                'created_at' => '2018-11-03 22:33:09',
                'updated_at' => '2018-11-03 22:33:09',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}