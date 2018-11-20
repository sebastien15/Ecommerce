<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Message;

class MessagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('messages')->insert([
        	'name'=>'Sebastien',
        	'email'=>'email',
        	'subject'=>'Web Development',
        	'message'=>'Web Development,Web Development,Web Development,Web Development.',

        ]);
    }
}
