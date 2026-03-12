<?php

function sum($a, $b)
{
    return $a + $b;
}


test('resultado suma', function () {
   $result = sum(5, 2);
 
   expect($result)->toBe(7);
});

test('probar igualdad', function () {
    $result = sum(5, 2);
  
    expect($result)->toEqual(7);
});

test('is integer', function () {
    $result = sum(5, 2);
  
    expect($result)->toBeInt();
});

test('is bool', function () {
    $result = true;
  
    expect($result)->toBeBool();
});

test('is not bool', function () {
    $result = 1;
  
    expect($result)->not()->toBeBool();
});

test('is array', function () {
    $result = [1, 2, 3];
  
    expect($result)->toBeArray();
});

test('is not array', function () {
    $result = 'not an array';
  
    expect($result)->not()->toBeArray();
});

test('is null', function () {
    $result = null;
  
    expect($result)->toBeNull();
});

test('is not null', function () {
    $result = 'not null';
  
    expect($result)->not()->toBeNull();
});

test('is string', function () {
    $result = 'this is a string';
  
    expect($result)->toBeString();
});

test('to be greater than', function () {
    $result = 10;
  
    expect($result)->toBeGreaterThan(5);
});