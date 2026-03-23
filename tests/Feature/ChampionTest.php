<?php

use App\Models\Champion;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

beforeEach(function () {
    $this->seed(\Database\Seeders\ChampionSeeder::class);
});

test('agarrar a todos los pndjos', function () {
    $this->getJson('/api/champions')
        ->assertStatus(200);
});

test('agarrar a un pndjo', function () {
    $champion = Champion::first();

    $this->getJson("/api/champions/$champion->id")
        ->assertStatus(200);
});

test('crear a un cabron', function () {
    $this->postJson('/api/champions', [
        'nombre' => 'Yasuo',
        'rol' => 'Peleador',
        'linea' => 'Mid'
    ])
    ->assertStatus(201);
});


test('tunear a un wey', function () {
    $champion = Champion::first();

    $this->putJson("/api/champions/$champion->id", [
        'nombre' => 'Updated Champion',
        'rol' => 'Mago',
        'linea' => 'Mid'
    ])
    ->assertStatus(200);
});


test('matar a un cabron', function () {
    $champion = Champion::first();

    $this->deleteJson("/api/champions/$champion->id")
        ->assertStatus(204);
});


test('crear varios weyes', function () {
    $this->postJson('/api/champions', [
        'nombre' => 'Zed',
        'rol' => 'Asesino',
        'linea' => 'Mid'
    ])->assertStatus(201);

    $this->postJson('/api/champions', [
        'nombre' => 'Garen',
        'rol' => 'Tanque',
        'linea' => 'Top'
    ])->assertStatus(201);
});


test('volver a tunear a un cabron', function () {
    $champion = Champion::first();

    $this->putJson("/api/champions/$champion->id", [
        'nombre' => 'OtroCambio',
        'rol' => 'Tanque',
        'linea' => 'Top'
    ])
    ->assertStatus(200);
});

test('agarrar a todos los pndjos dos veces', function () {
    $this->getJson('/api/champions')->assertStatus(200);
    $this->getJson('/api/champions')->assertStatus(200);
});


test('agarrar a un pndjo dos veces', function () {
    $champion = Champion::first();

    $this->getJson("/api/champions/$champion->id")->assertStatus(200);
    $this->getJson("/api/champions/$champion->id")->assertStatus(200);
});


test('hoy no fio mañana si', function () {
    $champion = Champion::first();

    $this->deleteJson("/api/champions/$champion->id")
        ->assertStatus(204);

    $this->deleteJson("/api/champions/$champion->id")
        ->assertStatus(204);
});


test('crear diferentes roles', function () {
    $this->postJson('/api/champions', [
        'nombre' => 'Ahri',
        'rol' => 'Mago',
        'linea' => 'Mid'
    ])->assertStatus(201);

    $this->postJson('/api/champions', [
        'nombre' => 'Leona',
        'rol' => 'Soporte',
        'linea' => 'Bot'
    ])->assertStatus(201);
});

test('le movi a las lineas y valioo berga', function () {
    $champion = Champion::first();

    $this->putJson("/api/champions/$champion->id", [
        'rol' => 'Soporte',
        'linea' => 'Bot'
    ])
    ->assertStatus(422);
});


test('matar al ultimo cabron', function () {
    $champion = Champion::latest()->first();

    $this->deleteJson("/api/champions/$champion->id")
        ->assertStatus(204);
});


test('que nazca pa luego matarlo', function () {
    $response = $this->postJson('/api/champions', [
        'nombre' => 'Temp',
        'rol' => 'Tanque',
        'linea' => 'Top'
    ]);

    $response->assertStatus(201);

    $id = $response->json('id');

    $this->deleteJson("/api/champions/$id")
        ->assertStatus(204);
});