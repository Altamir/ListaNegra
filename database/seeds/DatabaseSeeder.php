<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(Usuarios::class);
        $this->call(Hostel::class);
        $this->call(Acl::class);
        $this->call(Hospede::class);
        $this->call(Rotulo::class);
        $this->call(hospedes_rotulos::class);

        Model::reguard();
    }
}
