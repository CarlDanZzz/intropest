<?php


test('suma', function () {
    expect(2 + 2)->toBe(4);
});

test('string exacto', function () {
    expect('hola')->toBe('hola');
});


test('array con toEqual', function () {
    expect(['a' => 1])->toEqual(['a' => 1]);
});

test('objeto con toEqual', function () {
    $obj1 = (object)['nombre' => 'Carlos'];
    $obj2 = (object)['nombre' => 'Carlos'];

    expect($obj1)->toEqual($obj2);
});


test('valor 100 rial no feik', function () {
    expect(true)->toBeTrue();
});


test('valor feik', function () {
    expect(false)->toBeFalse();
});


test('es booleano', function () {
    expect(true)->toBeBool();
});


test('valor nulo', function () {
    $dato = null;

    expect($dato)->toBeNull();
});


test('array tiene cantidad correcta', function () {
    $numeros = [1, 2, 3];

    expect($numeros)->toHaveCount(3);
});


test('array contiene valor', function () {
    $frutas = ['papu', 'mamu', 'sdlg'];

    expect($frutas)->toContain('mamu');
});


test('array coincide maomeno', function () {
    $data = [
        'nombre' => 'Carlos',
        'edad' => 19,
        'ciudad' => 'Tierron'
    ];

    expect($data)->toMatchArray([
        'nombre' => 'Carlos',
        'edad' => 19
    ]);
});


test('array pelon', function () {
    $datos = [];

    expect($datos)->toBeEmpty();
});



test('no es nulo', function () {
    $nombre = 'Carlos';

    expect($nombre)->not->toBeNull();
});