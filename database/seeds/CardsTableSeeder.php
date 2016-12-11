<?php

use Illuminate\Database\Seeder;

class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use factory to create cards
        factory(App\Card::class)->create(
            [
                'front' => '1st President',
                'back' => 'George Washington',
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => '2nd President',
                'back' => 'John Adams',
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => '3rd President',
                'back' => 'Thomas Jefferson',
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => '4th President',
                'back' => 'James Madison',
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => 'H',
                'back' => 'Hydrogen. 1st element.',
                'deck_id' => 2,
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => 'He',
                'back' => 'Helium. 2nd element',
                'deck_id' => 2,
            ]
        );
        factory(App\Card::class)->create(
            [
                'front' => 'Li',
                'back' => 'Lithium. 3rd element.',
                'deck_id' => 2,
            ]
        );
    }
}
