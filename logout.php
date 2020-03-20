<?php

//logout.php
include('configs/fbconfig.php');
include('configs/gglconfig.php');
$google_client->revokeToken();
session_destroy();
header('location:index.php');

?>
