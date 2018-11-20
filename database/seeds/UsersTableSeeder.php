<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name'=>'Sebastien',
        	'email'=>'ndagijimana_sebastien@yahoo.com',
        	'password'=>'Ntaganzwa15',
        ]);
    }
}
