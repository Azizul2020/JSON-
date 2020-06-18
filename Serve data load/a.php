<?php 
	$connect=mysqli_connect("localhost:3307","root","","ajax");
	$q="SELECT * FROM form";
	$rq=mysqli_query($connect,$q);
	$i=0;
	$arr=[];
	while($row=mysqli_fetch_assoc($rq)){
		
		$arr[]=$row;
		
		
	}

	
	
	echo json_encode($arr);
?>