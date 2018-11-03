<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            0 => 
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 3,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
                'route' => 'voyager.users.index',
                'parameters' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 20:50:30',
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => NULL,
                'parameters' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'created_at' => '2018-11-03 20:50:30',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Categories',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'created_at' => '2018-11-03 20:50:31',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => 'voyager.categories.index',
                'parameters' => NULL,
            ),
            11 => 
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Providers',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 17,
                'order' => 1,
                'created_at' => '2018-11-03 21:40:57',
                'updated_at' => '2018-11-03 22:27:56',
                'route' => 'voyager.providers.index',
                'parameters' => NULL,
            ),
            12 => 
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Provider Properties',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 17,
                'order' => 2,
                'created_at' => '2018-11-03 21:41:27',
                'updated_at' => '2018-11-03 22:27:57',
                'route' => 'voyager.provider-properties.index',
                'parameters' => NULL,
            ),
            13 => 
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Provider Values',
                'url' => '',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => NULL,
                'parent_id' => 17,
                'order' => 3,
                'created_at' => '2018-11-03 21:44:50',
                'updated_at' => '2018-11-03 22:27:58',
                'route' => 'voyager.provider-values.index',
                'parameters' => NULL,
            ),
            14 => 
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Providers Management',
                'url' => '#',
                'target' => '_self',
                'icon_class' => 'voyager-world',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 8,
                'created_at' => '2018-11-03 22:27:48',
                'updated_at' => '2018-11-03 22:27:55',
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}