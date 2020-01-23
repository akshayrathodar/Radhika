<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="bill";

$partyname=$_POST["partyName"];
$address=$_POST["address"];
$ph_no=$_POST["phoneno"];
$GST_no=$_POST["GST"];
$pincode=$_POST["pincode"];
$state=$_POST["state"];

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error)
{
	die("connection error".$conn->connect_error."<br>");
}
else
{
	$sql="INSERT INTO `partyDetail`(`name`, `address`, `phoneno`, `GSTno`, `pincode`,`state`) VALUES ('$partyname','$address','$ph_no','$GST_no','$pincode','$state') ";

	if ($conn->query($sql) === TRUE) {
	echo "New record created successfully";
	}
	else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

}



 ?>