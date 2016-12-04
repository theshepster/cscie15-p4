<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use factory to create users
        factory(App\User::class)->create([
            'name' => 'Jill',
            'email' => 'jill@harvard.edu',
            'password' => bcrypt('helloworld')
        ]);
        factory(App\User::class)->create([
            'name' => 'Jamal',
            'email' => 'jamal@harvard.edu',
            'password' => bcrypt('helloworld')
        ]);
    }
}
