<?php

use Illuminate\Database\Seeder;

class hospedes_rotulos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospedes_rotulos')->delete();

        DB::table('hospedes_rotulos')->insert([
            'hospede_id' => 1,
            'rotulo_id' => 1,
        ]);

        DB::table('hospedes_rotulos')->insert([
            'hospede_id' => 1,
            'rotulo_id' => 2,
        ]);
    }
}