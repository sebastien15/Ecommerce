<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Item;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
        	'item_name'=>'jeans',
            'item_code'=>'3443',
        	'detail'=>'beatiful blue jeans',
        	'price'=>'45',
        	'description'=>'This is a brand new jeans for china This is a brand new jeans for china This is a brand new jeans for china',
        ]);

    }
}
