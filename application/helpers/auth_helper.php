<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function checkAuth()
{
    $session_token  = "Bearer " . get_cookie('sessionToken');
    try {
        return decode_jwt($session_token);
    } catch (\Throwable $th) {
        delete_cookie("sessionToken");
        $err =  json_encode(['message' => 'Invalid Token'], 404);
        redirect("/");
    }
}

function checkAuthSuplier()
{
    $session_token  = "Bearer " . get_cookie('sessionTokenSuplier');

    try {
        return decode_jwt($session_token);
    } catch (\Throwable $th) {
        delete_cookie("sessionToken");
        $err =  json_encode(['message' => 'Invalid Token'], 404);
        redirect("suplier/dashboard/login");
    }
}
