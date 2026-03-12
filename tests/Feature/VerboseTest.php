<?php

test('GET', function () {
    $this->get('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'GET'
        ]);
});

test('POST', function () {
    $this->post('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'POST'
        ]);
});

test('PUT', function () {
    $this->put('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'PUT'
        ]);
});

test('DELETE', function () {
    $this->delete('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'DELETE'
        ]);
});

test('PATCH', function () {
    $this->patch('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'PATCH'
        ]);
});

test('OPTIONS', function () {
    $this->options('/test')
        ->assertStatus(200)
        ->assertJson([
            'method' => 'OPTIONS'
        ]);
});

test('STORE', function () {
    $this->post('/store')
        ->assertStatus(201)
        ->assertJson([
            'method' => 'STORE'
        ]);
});

