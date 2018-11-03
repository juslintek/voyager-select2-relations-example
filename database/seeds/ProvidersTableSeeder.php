<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('providers')->delete();
        
        \DB::table('providers')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Dad',
                'created_at' => '2018-11-03 21:48:06',
                'updated_at' => '2018-11-03 21:48:06',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Mom',
                'created_at' => '2018-11-03 21:48:16',
                'updated_at' => '2018-11-03 21:48:16',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Super Global Development',
                'created_at' => '2018-11-03 22:28:49',
                'updated_at' => '2018-11-03 22:28:49',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Chuck Norris',
                'created_at' => '2018-11-03 22:28:58',
                'updated_at' => '2018-11-03 22:28:58',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Bread Factory',
                'created_at' => '2018-11-03 22:29:10',
                'updated_at' => '2018-11-03 22:29:10',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Warehouse',
                'created_at' => '2018-11-03 22:29:18',
                'updated_at' => '2018-11-03 22:29:18',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'name' => 'Milk Farm',
                'created_at' => '2018-11-03 22:29:26',
                'updated_at' => '2018-11-03 22:29:26',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}