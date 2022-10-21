<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function decode_jwt($header)
{
    $key = getenv('JWT_SECRET_KEY');
    $token = explode(' ', $header)[1];
    JWT::$leeway = 60;
    $decoded = JWT::decode($token, new Key($key, 'HS256'));

    return $decoded;
}


function encode_jwt($payload)
{
    $key = getenv('JWT_SECRET_KEY');
    $jwt = JWT::encode($payload, $key, 'HS256');

    return $jwt;
}
