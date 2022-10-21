<?php

use Dotenv\Dotenv;
// Use this code if your .env files on *CodeIgniter ROOT* folder

$hook['pre_system'] = function () {
    $dotenv = Dotenv::create(FCPATH);
    $dotenv->load();
};