<?php

use App\Models\Song;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(\Database\Seeders\SongSeeder::class);
});

test('get all songs', function () {

    $this->getJson('/api/songs')
        ->assertOk()
        ->assertJsonCount(15);

});

test('get one song', function () {

    $song = Song::first();

    $this->getJson("/api/songs/$song->id")
        ->assertOk()
        ->assertJsonFragment([
            'id' => $song->id
        ]);

});

test('create song', function () {

    $song = [
        'name' => 'Cacion generica',
        'artists' => 'Artista generico',
        'album' => 'Album generico',
        'duration' => '3:00'
    ];

    $this->postJson('/api/songs', $song)
        ->assertCreated()
        ->assertJsonFragment([
            'name' => 'Test Song'
        ]);

});

test('update song', function () {

    $song = Song::first();

    $this->putJson("/api/songs/$song->id", [
        'name' => 'Updated Song'
    ])
    ->assertOk()
    ->assertJsonFragment([
        'name' => 'Updated Song'
    ]);

});

test('delete song', function () {

    $song = Song::first();

    $this->deleteJson("/api/songs/$song->id")
        ->assertNoContent();

});