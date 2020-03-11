<?php

use Nplasencia\User;

require '../vendor/autoload.php';

$user = new User();
$user->fill([
    'first_name' => 'Nauzet',
    'last_name'  => 'Plasencia'
]);

$user->nickname = 'nplasencia';

echo "<p>Welcome {$user->first_name} {$user->last_name}</p>";

unset($user->nickname);

if (isset($user->nickname)) {
    echo "<p>Nickname: {$user->nickname}</p>";
}
