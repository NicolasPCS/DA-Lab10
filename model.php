<?php 
// model.php
function open_database_connection()
{
    $dbname = "blog_db";
    $link = mysqli_connect("localhost", "root", "", $dbname);
    mysqli_select_db($link, $dbname);
    return $link;
}
function close_database_connection($link)
{
    mysqli_close($link);
}
function get_all_posts()
{
    $consulta = "SELECT id, title from post";
    $link = open_database_connection();
    $result = mysqli_query($link, $consulta);
    $posts = array();
    while ($row = mysqli_fetch_assoc($result)) {
        $posts[] = $row;
    }
    close_database_connection($link);
    return $posts;
}