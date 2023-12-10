<?php require_once('dbase.php');
$result = mysqli_query($con,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Manage user</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
	<h1> Manager Panel</h1>
    <div class="container-1">
	<table border="1">
		<tr>
		    <th>id</th>
			<th>Username</th>
			<th>Email</th>
			<th>Number</th>
			<th>Update</th>
            <th>Delete</th>
			
		</tr>
		<?php

		$sql="SELECT user_id,username,email,number FROM user";
		$result=$con-> query($sql);
        if($result){
            if ( $result->num_rows >0)
			while($row = mysqli_fetch_array($result)){
				echo "<tr>";
				echo "<td>" . $row['user_id'] . "</td>";
				echo "<td>" . $row['username'] . "</td>";
				echo "<td>" .$row['email']. "</td>";	
				echo "<td>" .$row['number']. "</td>";
				echo "<td><a href='update.php?id=".$row['user_id']."'>Edit</a></td>";
				echo "<td><a href='delete.php?id=".$row['user_id']."'>Delete</a></td>"; 
				echo "</tr>";
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