<?php
use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call(VoyagerDatabaseSeeder::class);
		//$this->call(VoyagerDummyDatabaseSeeder::class);
	    $this->call(DataRowsTableSeeder::class);
        $this->call(DataTypesTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(ProviderPropertiesTableSeeder::class);
        $this->call(ProviderValuesTableSeeder::class);
        $this->call(ProvidersTableSeeder::class);
    }
}