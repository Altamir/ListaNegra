<?php

use Illuminate\Database\Seeder;

class Rotulo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rotulos')->delete();

        DB::table('rotulos')->insert(
            [
            'name' => 'Cadastrado',
            'cor' => '#000000',
            'descri' => 'Usuario apenas cadastrado',
            ]);
        DB::table('rotulos')->insert(
            [
                'name' => 'Devedor',
                'cor' => '#DC143C',
                'descri' => 'Usuario devedor',
            ]);
        DB::table('rotulos')->insert(
            [
                'name' => 'Bebum',
                'cor' => '#FF4500',
                'descri' => 'Bebe e faz bagunça.',
            ]);

    }
}
