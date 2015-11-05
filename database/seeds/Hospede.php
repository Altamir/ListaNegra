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
            'name' => 'LAzario Borto',
            'telefone' => '(51) 4312-3465',
            'user_id' => '1',
        ]);
        
         DB::table('hospedes')->insert([
            'name' => 'Otario das VArxea',
            'telefone' => '(51) 2134-3765',
             'user_id' => '1',
        ]);
    }
}
