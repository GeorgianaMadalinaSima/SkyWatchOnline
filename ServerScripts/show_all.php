<?php

require "init.php";


$sql_query="select * from planets;";


$result=mysqli_query($con,$sql_query);
$response = array();

while($row=mysqli_fetch_array($result))
{
array_push($response,array
("id"=>$row[0],"name"=>$row[1],"desc"=>$row[2],"image"=>$row[3]));
}
echo json_encode(array("show_data_recived_success"=>$response));
mysqli_close($con);





?>