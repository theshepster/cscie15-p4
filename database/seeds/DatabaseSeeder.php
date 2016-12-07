<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        # only the UsersTableSeeder and CardsTableSeeder need to be called,
        # because the CardsTableSeeder generates a deck for each card

        $this->call(UsersTableSeeder::class);
//        $this->call(DecksTableSeeder::class);
        $this->call(CardsTableSeeder::class);
    }
}
