<?php 
// index.php

$dbname = "blog_db";
$link = mysqli_connect("localhost", "root", "", $dbname); 
mysqli_select_db($link, $dbname);

$consulta = "SELECT id, title from post";     
$result = mysqli_query($link, $consulta);

$posts = array();
while ($row = mysqli_fetch_assoc($result)) {
    $posts[] = $row;
}

mysqli_close($link);

// incluye el código HTML de la vista
require "list.php";
