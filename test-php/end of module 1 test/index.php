<?php

$business = [
    'name' => 'Laracasts',
    'cost' => 15,
    'categories' => ["Testing", "PHP", "Javascript"]
];

if ($business['cost'] > 99) {
    echo "Not interested.";
}

function register($user)
{
}

require "./index.view.php";
