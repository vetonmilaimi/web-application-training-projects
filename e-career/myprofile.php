<?php

if(!isset($_SESSION)) {
    session_start();
}

include_once("config/pdo.php");

echo "$id";

?>