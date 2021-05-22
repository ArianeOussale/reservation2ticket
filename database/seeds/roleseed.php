<?php

use App\role;
use Illuminate\Database\Seeder;

class roleseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(role::class)->create();
        factory(role::class)->create(["nom"=>"guichet"]);
        factory(role::class)->create(["nom"=>"client"]);
    }
}
