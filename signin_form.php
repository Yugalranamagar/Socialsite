<?php
include('includes/database.php');
include('database_connection.php');
$message = '';
if(isset($_SESSION['id']))
{
	header('location:index.php');
}

if(isset($_POST['Log in']))
{
	$query = "SELECT * FROM user WHERE username = :username";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
			':username' => $_POST["username"]
		)
	);	
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if(password_verify($_POST["password"], $row["password"]))
			{
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['username'];
				$sub_query = "
				INSERT INTO login_details 
	     		(user_id) 
	     		VALUES ('".$row['user_id']."')
				";
				$statement = $connect->prepare($sub_query);
				$statement->execute();
				$_SESSION['login_details_id'] = $connect->lastInsertId();
			}
		}
	}
}
$con=mysqli_connect("localhost","root","","biobook");
						if(isset($_POST['submit']))
						{
							$username=$_POST['username'];
							$password=$_POST['password'];
						{
							$result=mysqli_query($con,"SELECT * FROM user WHERE username= '$username' and password='$password'")
							or die(mysqli_error());
							
							$row = mysqli_fetch_array($result);
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['user_id'];
										header("location:home.php");
									}
						}				
						}
?>