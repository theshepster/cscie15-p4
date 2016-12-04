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
          # only the CardsTableSeeder needs to be called, because it generates a deck and user

        $this->call(UsersTableSeeder::class);
//        $this->call(DecksTableSeeder::class);
        $this->call(CardsTableSeeder::class);
    }
}
