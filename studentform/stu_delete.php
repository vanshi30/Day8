<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_stu";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);

$mobile = $_GET['deleteid'];
$q = mysqli_query($connection ,"update tbl_stu set is_delete = 1 where stu_mobile='{$mobile}'")or die("Error".mysqli_error($connection));

if($q){
    echo "<script>alert('Record deleted');window.location='stu_display.php';</script>";
}
echo $id;
?>

