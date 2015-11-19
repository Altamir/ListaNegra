<?php

use Illuminate\Database\Seeder;

class Usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        
        DB::table('users')->insert([
            'name' => 'Altamir',
            'email' => 'altamir.benkenstein@gmail.com',
            'password' => bcrypt('12345'),
            'acl' => '2',
        ]);
        
         DB::table('users')->insert([
            'name' => 'Casa Azul',
            'email' => 'altamir.benkenstein@outlook.com',
            'password' => bcrypt('54321'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'Convidado',
            'email' => 'adm@convidado.com',
            'password' => bcrypt('12345'),
            'acl' => '2',
        ]);

        DB::table('users')->insert([
            'name' => 'Convidado',
            'email' => 'user@convidado.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
