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
            'descri' => 'Descrição adicionada para LAzario Borto para Cadastrado',
            'hospede_id' => 1,
            'rotulo_id' => 1,
        ]);

        DB::table('hospedes_rotulos')->insert([
            'descri' => 'Descrição adicionada para Lazario para Devedor',
            'hospede_id' => 1,
            'rotulo_id' => 2,
        ]);

        DB::table('hospedes_rotulos')->insert([
            'descri' => 'Descrição adicionada Casa Azul pra Cadastrado',
            'hospede_id' => 2,
            'rotulo_id' => 1,
        ]);
    }
}