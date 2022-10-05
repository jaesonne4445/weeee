<?php

$name = $_P0ST['name'];
$surname = $_P0ST['surname'];
$email = $_P0ST['email'];
$message = $_P0ST['message'];
 

$mailheader = "From:".$name."<".$email.">r\n";


$recipient = "jkavanah@hotmail.com";

mail($recipient,$subject,$message,$mailheader)

or die("Error!")






?>