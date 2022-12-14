<?php
require_once('private/initialize.php');

// Log out the admin
$session->logout();

//Changed to index.html. No index.php file exists in this folder
redirect_to(url_for('index.html'));

?>
