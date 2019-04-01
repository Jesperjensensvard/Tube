<?php
$db = new mysqli('localhost','root','','tube');


if($db->connect_errno)
{
    echo $db->connect_errno. "<br>";
    die("connection failed");
}

?>