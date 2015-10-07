<?php

use Illuminate\Database\Seeder;

class Hostel extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hostel')->delete();
        
        DB::table('hostel')->insert([
            'telefone' => '9999-1122',
            'user_id' => 1,
            'descri' => 'Casa muito louca',
            ]);
    }
}
