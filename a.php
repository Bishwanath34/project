<?php
   $name=$_POST['name'];
   $email=$_POST['email'];
   $roll=$_POST['roll'];
   $gender=$_POST['gender'];
   $con=new mysqli('localhost','root','','project');
   if($con->connect_error){
   	 die("connection fail".$con->connect_error);
   }else{
   	$s=$con->prepare("insert into res(name,email,roll,gender) values(?,?,?,?)");
   	$s->bind_param("ssis",$name,$email,$roll,$gender);
   	$s->execute();
   	echo "registration succesfull";
   	$s->close();
   	$con->close();
   }
?>