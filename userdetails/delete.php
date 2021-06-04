<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);
$id = $_GET['deleteid'];
$q = mysqli_query($connection ,"delete from tbl_user where user_id='{$id}'")or die("Error".mysqli_error($connection));

if($q){
    echo "<script>alert('Record deleted');window.location='display.php';</script>";
}
echo $id;
?>

