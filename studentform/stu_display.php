<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_stu";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);

$q = mysqli_query($connection ,"select * from tbl_stu where is_delete = 0")or die("Error".mysqli_error($connection));


echo "<table border='1'>";
echo "<tr>";
echo "<th>STUDENT ID</th>";
echo "<th>NAME</th>";
echo "<th>MOBILE</th>";
echo "<th>GENDER</th>";
echo "<th>ADDRESS</th>";
echo "<th>DATE OF BIRTH</th>";
echo "<th>EMAIL</th>";
echo "<th>BLOOD GROUP</th>";
echo "<th>PASSWORD</th>";
echo "<th>PINCODE</th>";
echo "<th>ACTION</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['stu_id']}</td>";
    echo "<td>{$row['stu_name']}</td>";
    echo "<td>{$row['stu_mobile']}</td>";
    echo "<td>{$row['stu_gender']}</td>";
    echo "<td>{$row['stu_address']}</td>";
    echo "<td>{$row['stu_dob']}</td>";
    echo "<td>{$row['stu_email']}</td>";
    echo "<td>{$row['stu_bloodg']}</td>";
    echo "<td>{$row['stu_password']}</td>";
    echo "<td>{$row['stu_pincode']}</td>";
    echo "<td><a href='stu_edit.php?mid={$row['stu_mobile']}'>EDIT</a> | <a href='stu_delete.php?deleteid={$row['stu_mobile']}'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href ='formdetails.php'>Add record</a>";
?>

