<?php

use Illuminate\Database\Seeder;

class Hospede extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospedes')->delete();
        
        DB::table('hospedes')->insert([
            'name' => 'Lazario Borto',
            'telefone' => '(51) 4312-3465',
            'user_id' => '1',
        ]);
        
         DB::table('hospedes')->insert([
            'name' => 'Antonio camargo',
            'telefone' => '(51) 2134-3765',
             'user_id' => '1',
        ]);
    }
}
