<?php

//update_is_type_status.php

include('database_connection.php');
$con=mysqli_connect("localhost","root","","biobook");

session_start();

$query = "
UPDATE login_details 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>