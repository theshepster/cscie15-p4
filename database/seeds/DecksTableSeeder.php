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
        factory(App\Deck::class)->create([
            'user_id' => 1,
            'name' => "US Presidents"
        ]);
        factory(App\Deck::class)->create([
            'user_id' => 1,
            'name' => "Periodic Table of the Elements"
        ]);
    }
}
