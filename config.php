<?php
session_start();
$user = 'root';
$pdo = new Pdo('mysql:dbname=fullstack;host=127.0.0.1;port=3306', $user, '');