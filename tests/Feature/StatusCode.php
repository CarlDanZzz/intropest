<?php

test('status 200', function () {
    $this->get('/prefix/200')
         ->assertStatus(200)
         ->assertJson(['message' => 'OK']);
});

test('status 400', function () {
    $this->get('/prefix/400')
         ->assertStatus(400)
         ->assertJson(['message' => 'Bad Request']);
});

test('status 500', function () {
    $this->get('/prefix/500')
         ->assertStatus(500)
         ->assertJson(['message' => 'Internal Server Error']);
});

test('status 201', function () {
    $this->get('/prefix/201')
         ->assertStatus(201)
         ->assertJson(['message' => 'Created']);
});

test('status 204', function () {
    $this->get('/prefix/204')
         ->assertStatus(204)
         ->assertNoContent();
});

test('status 202', function () {
    $this->get('/prefix/202')
         ->assertStatus(202)
         ->assertJson(['message' => 'Accepted']);
});

test('status 403', function () {
    $this->get('/prefix/403')
         ->assertStatus(403)
         ->assertJson(['message' => 'Forbidden']);
});

test('status 401', function () {
    $this->get('/prefix/401')
         ->assertStatus(401)
         ->assertJson(['message' => 'Unauthorized']);
});

test('status 404', function () {
    $this->get('/prefix/404')
         ->assertStatus(404)
         ->assertJson(['message' => 'Not Found']);
});

test('status 405', function () {
    $this->get('/prefix/405')
         ->assertStatus(405)
         ->assertJson(['message' => 'Method Not Allowed']);
});