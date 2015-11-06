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
            'descri' => 'Descrição adicionada pelo hostel 1 para rotulo 1',
            'hospede_id' => 1,
            'rotulo_id' => 1,
        ]);

        DB::table('hospedes_rotulos')->insert([
            'descri' => 'Descrição adicionada pelo hostel 1 para rotulo 2',
            'hospede_id' => 1,
            'rotulo_id' => 2,
        ]);

        DB::table('hospedes_rotulos')->insert([
            'descri' => 'Descrição adicionada pelo hostel 2rotulo 1',
            'hospede_id' => 2,
            'rotulo_id' => 1,
        ]);
    }
}