<?php require_once("includes/header.php");

$session->logout($user);

redirect('login.php');
