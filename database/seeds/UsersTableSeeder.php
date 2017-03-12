<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the seeds for the users table
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,5)->create();
    }
}
