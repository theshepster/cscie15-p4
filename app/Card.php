<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function deck() {
        # Card belongs to Deck
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\Deck');
    }
}
