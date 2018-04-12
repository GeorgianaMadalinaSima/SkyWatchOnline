<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "sky_watch";

$con = mysqli_connect($host,$user,$pass,$db);

if(!$con)
{
die ("Error in connection ".mysqli_connect_error());
}
else
{
//echo "Connection Success.....";
}

?> 