<?php

$conn = new mysqli('localhost', 'root', '', 'pos_app');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
