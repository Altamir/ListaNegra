<?php

use Illuminate\Database\Seeder;

class Acl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('acl')->delete();
        
        DB::table('acl')->insert([
            'name' => 'usuario',
        ]);
        
        DB::table('acl')->insert([
            'name' => 'admin',
        ]);
        
        
    }
}
