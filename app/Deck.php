<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{

    public function user() {
        # Deck belongs to User
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\User');
    }

    // decks have cards
    public function cards() {
        # Deck has many Cards
        # Define a one-to-many relationship.
        return $this->hasMany('App\Card');
    }
}
