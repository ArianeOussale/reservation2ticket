<?php

use App\User;
use Illuminate\Database\Seeder;

class userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create();
        factory(User::class)->create(["email"=>"ariguichet@hotmail.com"]);
    }
}
