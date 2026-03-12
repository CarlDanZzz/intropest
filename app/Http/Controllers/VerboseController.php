<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VerboseController extends Controller
{

public function storeTest(){
    return response()->json(['method' => 'STORE'], 201);
}

public function getTest(){
    return response()->json(['method' => 'GET'], 200);
}

public function postTest(){
    return response()->json(['method' => 'POST'], 200);
}

public function putTest(){
    return response()->json(['method' => 'PUT'], 200);
}

public function deleteTest(){
    return response()->json(['method' => 'DELETE'], 200);
}

public function patchTest(){
    return response()->json(['method' => 'PATCH'], 200);
}

public function optionsTest(){
    return response()->json(['method' => 'OPTIONS'], 200); 
    }




}