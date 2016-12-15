# CSCIE 15, Project 4 - Flashy Cards

## Author
Shep Moore-Berg

## Due Date
December 15, 2016

## Project Website
<a href="http://p4.mooreberg.me">p4.mooreberg.me</a>

## Screencast Demo
<a href="https://youtu.be/LBt5BUVm4VU">Click for demo</a>

## Planning Doc
<a href="https://docs.google.com/document/d/1sbzDPhZIAO5MsVqI-0ghG9VE54GE64_q6Ys8hOTvMqI/">Click for planning doc</a>

## Overview
This web app is a flashycard study app. Use it to create decks of flashcards, create cards within those decks, and review flashcards.

## CRUD Interactions
CRUD interactions happen for both decks and for cards.

##### Decks:
* Create a deck on the ```/home``` route by clicking "New Deck" or by using the form.
* Read a deck by clicking Edit on the ```/home``` route, which will show the contents of the deck. See all decks in the ```/home``` route, and review a deck card-by-card by clicking Review Deck.
* Update a deck's title by clicking "Change Deck Name" in the Edit Deck route ```\deck\{deck_id}```, and delete cards from a deck there too.
* Delete a deck from the ```\home``` route by clicking the red Delete button.

##### Cards:
* Create a card by clicking the blue "Create a New Card" button from the ```\deck\{deck_id}``` route. Also, create a new card immediately after naming a new deck.
* Read a card by clicking Edit on the ```\deck\{deck_id}``` route, which will show the front and back of the card. See a card in a deck also by clicking Review for the deck.
* Update a deck's front and back fields by clicking Edit on the ```\deck\{deck_id}``` route.
* Delete a card from the deck by clicking the red Delete button on the ```\deck\{deck_id}``` route.

## Libraries Used
I used the barryvdh/laravel-ide-helper package in my development environemtn. I used the fzaninotto/faker in the database seeders, and I used the barryvdh/laravel-debugbar for development.

## Sources
I used:
* Bootstrap for the CSS.
* <a href="https://pinegrow.com">Pinegrow</a> for the homepage template. 
* Images sourced from either <a href="https://www.pexels.com/">Pexels</a>, which hosts free stock photos, or from Google Image Search.

## Other Resources
I used:
* <a href="https://mailtrap.io">Mailtrap.io</a> for testing password-reset emails in development.
* <a href="https://sendinblue.com">Send in Blue</a> for sending password-reset emails in production.