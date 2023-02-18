<?php

// db connect
$connect = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);

if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}