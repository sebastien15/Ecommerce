<?php

use Illuminate\Database\Seeder;
use App\user;
use App\Item;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
       	UsersTableSeeder::class,
       	ItemsTableSeeder::class,
        BrandsTableSeeder::class,
        MessagesTableSeeder::class,
      ]);
    	//$this->call(ItemsTableSeeder::class);
    }
}    