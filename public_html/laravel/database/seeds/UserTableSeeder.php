<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            'name'           => 'phillip madsen',
            'email'          => 'pmadsen2013@gmail.com',
            'password'       => 'mad@15696',
        ]);
    }
}
