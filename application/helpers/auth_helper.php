<?php

use Firebase\JWT\JWT;
use Firebase\JWT\Key;

function checkAuth()
{
    $session_token  = "Bearer " . get_cookie('sessionToken');
    // echo $session_token;
    // die;
    try {
        return decode_jwt($session_token);
        // echo "ada token dan valid";
    } catch (\Throwable $th) {
        delete_cookie("sessionToken");
        $err =  json_encode(['message' => 'Invalid Token'], 404);
        redirect("/");
    }
}
