<?php

use Illuminate\Database\Seeder;

class DecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use factory to create decks
        factory(App\Deck::class, 5)->create(['user_id' => 1]);
    }
}
