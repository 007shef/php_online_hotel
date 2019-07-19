<?php
include 'config.php';
$name=$_REQUEST["admin"];
$password=$_REQUEST["password"];
if ($name=="shefali" && $password=="12345")
{
    header ("location:postadd.php");
}

?>
