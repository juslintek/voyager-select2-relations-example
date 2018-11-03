<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'categories',
                'slug' => 'categories',
                'display_name_singular' => 'Category',
                'display_name_plural' => 'Categories',
                'icon' => 'voyager-categories',
                'model_name' => 'TCG\\Voyager\\Models\\Category',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2018-11-03 20:50:31',
                'updated_at' => '2018-11-03 20:50:31',
            ),
            4 => 
            array (
                'id' => 7,
                'name' => 'providers',
                'slug' => 'providers',
                'display_name_singular' => 'Provider',
                'display_name_plural' => 'Providers',
                'icon' => NULL,
                'model_name' => 'App\\Provider',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-11-03 21:40:57',
                'updated_at' => '2018-11-03 22:03:31',
            ),
            5 => 
            array (
                'id' => 8,
                'name' => 'provider_properties',
                'slug' => 'provider-properties',
                'display_name_singular' => 'Provider Property',
                'display_name_plural' => 'Provider Properties',
                'icon' => NULL,
                'model_name' => 'App\\ProviderProperty',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-11-03 21:41:27',
                'updated_at' => '2018-11-03 21:59:35',
            ),
            6 => 
            array (
                'id' => 9,
                'name' => 'provider_values',
                'slug' => 'provider-values',
                'display_name_singular' => 'Provider Value',
                'display_name_plural' => 'Provider Values',
                'icon' => NULL,
                'model_name' => 'App\\ProviderValue',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null}',
                'created_at' => '2018-11-03 21:44:50',
                'updated_at' => '2018-11-03 22:04:41',
            ),
        ));
        
        
    }
}