<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
	<link rel="stylesheet" type="text/css" href="../css/user.css">
</head>
<body>
	<h1> User List</h1>
     <div class="container ">
	<table border="1">
		<tr>
		    <th>id</th>
			<th>Username</th>
			<th>Email</th>
            <th>Number</th>
            <th>Birthday</th>
            <th>Gender</th>
			
		</tr>
		<?php
		$con=mysqli_connect("localhost","root","","biobook");
		if ($con-> connect_error){
			die("Connection Failed:".$con->connect_error);
		}
		$sql="SELECT user_id,username,email,number,birthday,gender FROM user";
		$result=$con-> query($sql);
		if($result->num_rows>0)
        {
			while($row = mysqli_fetch_array($result))
			{
				echo"<tr><td>".$row['user_id']."</td><td>".$row['username']."</td><td>".$row['email']."</td><td>".$row['number']."</td><td>".$row['birthday']."</td><td>".$row['gender']."</td></tr>";
			}
			echo "</table>";
		}
		else{
			echo "0 result";

		}
$con-> close();
?>
	</table>
	</div>
</body>
</html>