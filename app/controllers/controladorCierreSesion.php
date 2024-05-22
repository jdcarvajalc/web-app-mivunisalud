<?php
session_start();

$b_url = BASE_URL;

$_SESSION = [];
session_destroy();
header("location: $b_url/login");
