<?php

//fetch_user_chat_history.php

include('database_connection.php');
$con=mysqli_connect("localhost","root","","biobook");

session_start();

echo fetch_user_chat_history($_SESSION['id'], $_POST['to_user_id'], $connect);

?>