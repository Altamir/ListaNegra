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
            
         DB::table('hostel')->insert([
            'telefone' => '1234-5678',
            'user_id' => 2,
            'descri' => 'Casa Azul com buteco embaixo',
            ]);
        DB::table('hostel')->insert([
            'telefone' => '1234-5678',
            'user_id' => 3,
            'descri' => 'Usuario Convidado',
        ]);
    }
}
