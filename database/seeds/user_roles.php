<?php

use Illuminate\Database\Seeder;

class user_roles extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        
        //
        DB::table('user_roles')->insert([
        	'name' =>'Admin',
        	'description' => 'Overoll super admin'
        ]);

        DB::table('user_roles')->insert([
        	'name' => 'Business_owner',
        	'description'	=> 'Can Add Business and the product they offer'
        ]);

        DB::table('user_roles')->insert([
        	'name' => 'User',
        	'description'	=> 'Ordinary User Role'
        ]);
        
    }
}
