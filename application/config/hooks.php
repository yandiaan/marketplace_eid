<?php
// Use this code if your .env files on *CodeIgniter ROOT* folder
$hook['pre_system'] = function () {
    $dotenv = Dotenv\Dotenv::create(FCPATH);
    $dotenv->load();
};