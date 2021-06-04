<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);

        
$q = mysqli_query($connection ,"select * from tbl_user")or die("Error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
echo "<th>ACTION</th>";
echo "</tr>";

while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='edit.php?id={$row['user_id']}'>EDIT</a> | <a href='delete.php?deleteid={$row['user_id']}'>DELETE</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href ='basic_database.php'>Add record</a>";
?>

