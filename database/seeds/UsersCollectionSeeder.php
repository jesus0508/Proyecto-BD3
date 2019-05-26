<?php

use Illuminate\Database\Seeder;

class UsersCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(DBProject\User::class, 10)->create();
    }
}
