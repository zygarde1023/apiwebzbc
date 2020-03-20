<?php

require_once 'vendor/autoload.php';

if (!session_id())
{
    session_start();
}

// Call Facebook API

$facebook = new \Facebook\Facebook([
  'app_id'      => '2704847169627884',
  'app_secret'     => 'e71a05412c40a782a96e71782a4280d8',
  'default_graph_version'  => 'v2.10'
]);

?>
