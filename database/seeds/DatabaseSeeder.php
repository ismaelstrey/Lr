<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          {
        DB::table('users')->insert([
            'name' => 'Ismael Streyddd',
            'email' => 'casa@gmail.com',
            'password' => 'teste'
        ]);
    }
    }
}

