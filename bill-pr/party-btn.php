<html>
<head>
	<title></title>
</head>
<body>
	<center>
<form id="addParty-form" action="partyReg.php" method="post">
	<input type="text" name="partyName" id="partyName" placeholder="partyName" required/>
	<br>
	<input type="textarea" name="address" id="address" placeholder="address" required/>
	<br>
	<input type="text" name="phoneno" id="phoneno" placeholder="phone no" required/>
	<br>
	<input type="text" name="GST" id="GST"
	placeholder="GST no" required/>
	<br>
	<input type="text" name="pincode" id="pincode" placeholder="pincode" />
	<br>
	<select id="state" name="state" >state
	<?php   
	                $conn=new mysqli("localhost",'root','','bill');


	                if($conn->connect_error)
	                {
	                	die("coonection error");
	                }
	                else{
                    $sql="SELECT * FROM `states`";

                    $rs = $conn->query($sql);
                   // Add options to the drop down
                    if($result = $conn -> query($sql))
                    {
                     	while($row =$result->fetch_row())
                     	{
                     		 printf ("<option value='%s'>%s</option>\n", $row[1], $row[1]);
                     		// echo "<option value=".$row['id'].">".$row['name']."</option>";
                     	}
                     	$result -> free_result();
                 	}
                 }
	?>
	</select>
	<br>
	<input type="submit" name="submit" id="submit" value="submit" />
</form>
</center>
</body>
</html>
