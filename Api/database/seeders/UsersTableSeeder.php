<?php

namespace Database\Seeders;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::insert([
        	[
        		'name'		=> 'owner',
                'last_name'=>'bandara',
        		'email'		=> 'owner@owner.com',
        		'password'	=> bcrypt('password'),
			'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],
            [
                'name'		=> 'manager',
                'last_name'=>'bandara',
                'email'		=> 'manager@manager.com',
                'password'	=> bcrypt('password'),
                'created_at'=> Carbon::now(),
                'updated_at'=> Carbon::now()
            ],
        	[
        		'name'		=> 'cashier',
                'last_name'=>'bandara',
        		'email'		=> 'cashier@cashier.com',
        		'password'	=> bcrypt('password'),
        		'created_at'=> Carbon::now(),
        		'updated_at'=> Carbon::now()
        	],


    	]);
    }
}
