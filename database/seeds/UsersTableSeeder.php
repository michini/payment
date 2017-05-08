<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @arg
     */
    public function run()
    {
        factory(App\User::class,20)->create();
    }
}
