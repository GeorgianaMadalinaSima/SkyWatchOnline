<?php

require "init.php";

$json= $_POST["json"];

$params = json_decode($json,true);

$id="";

foreach($params as $key => $values)
{
	
	      $name     = $values['name'];
           $desc   = $values['desc'];
           $image     = $values['image'];
		 
		 
		   $desc1 = str_replace("'","\\'", $desc);
          
		
	$sql_query1 ="insert into planets values('$id','$name','$desc1','$image');";
	mysqli_query($con,$sql_query1);
	echo "amounts_inserted::".$name;
}
	//str_replace("'", "\'", $desc);


	



?>
