<?php
  $servername='localhost';
  $username='root';
  $password='';
  $dbname = "biobook";
  $con=mysqli_connect($servername,$username,$password,$dbname);
  if(isset($_GET['id']))
    $id=$_GET['id'];
$sql = "DELETE FROM user WHERE user_id='" .$_GET['id']. "'";
if(mysqli_query($con, $sql))
 {
    echo"<script> alert('Record Deleted Successfully!');window.location='manage.php'</script>";
        
} 
else
 {
    echo "Error deleting record: " . mysqli_error($con);
}
mysqli_close($con);
?>