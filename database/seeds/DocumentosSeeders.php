<?php

use Illuminate\Database\Seeder;

class DocumentosSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('documentos')->delete();

        DB::table('documentos')->insert([
            'name' => 'RG',
            'numero' => '01405487609',
            'hospede_id' => '1',
        ]);

        DB::table('documentos')->insert([
            'name' => 'CPF',
            'numero' => '014054000609',
            'hospede_id' => '2',
        ]);
    }
}
