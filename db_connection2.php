<?php
$mysqli = new mysqli('edr.topfavlists.com', 'edr_usr', 'OufHEDkLws', 'edr_db');

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}
?>