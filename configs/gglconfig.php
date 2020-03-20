<?php
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('442882868612-fsac45rrngl3gmrp6g9gkoph6m198akq.apps.googleusercontent.com');
$google_client->setClientSecret('i4Jya531Y-z3BFTJA9tCIhFV');
$google_client->setRedirectUri('https://apiwebzbc.herokuapp.com/index.php');
$google_client->addScope('email');
$google_client->addScope('profile');

session_start();
//weblessonzzz
?>
