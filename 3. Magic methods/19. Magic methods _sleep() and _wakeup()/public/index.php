<?php

require '../vendor/autoload.php';

use Nplasencia\User;

$user = new User(['name' => 'Nauzet', 'email' => 'nauzet.plasencia.cruz@gmail.com']);

$result = serialize($user);

file_put_contents('../storage/user.txt', $result);