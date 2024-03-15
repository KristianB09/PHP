<?php

require 'functions.php';

require 'Database.php';

/* require 'router.php';
 */

// connect to mySQL database

$config = require('config.php');

$db = new Database($config['database']);

$posts = $db->query("select * from posts")->fetchAll();


foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
