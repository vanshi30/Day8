<html>
    <head>
        <meta charset="UTF-8">
        <title>table</title>
    </head>
    <body>
        <form method="post">
            
        Name: <input type="text" name="txt1" placeholder="Enter name" required/>
        <br><br>
        Gender:<select name="txt2">
            <option>Male</option>
            <option>Female</option>
        </select>
        <br><br>
        Mobile Number:<input type="number" name="txt3" />
        <br><br>
        <input type="submit" />
        </form>
        <a href ='display.php'>DISPLAY</a>
        <?php
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "db_internship";
        
        $connection = mysqli_connect($host,$username,$passwd,$dbname);
        if($_POST){
            
            $name = $_POST['txt1'];
            $gender = $_POST['txt2'];
            $mobile = $_POST['txt3'];
        
        $q = mysqli_query($connection ,
                "insert into tbl_user(user_name,user_gender,user_mobile)values('{$name}','{$gender}','{$mobile}')")or die("Error".mysqli_error($connection));
        if($q){
            echo "<script>alert('Record added')</script>";
        }
       
        }
        ?>
        
    </body>
</html>
