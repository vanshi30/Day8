<html>
    <head>
        <title>form details</title>
    </head>
    <body style="background-color: rgb(167, 196, 216)">
        <h1 style="background-color: pink" align="center"><i>STUDENT DETAILS</i></h1>
        <form method="post">
            <table style="background-color: rgba(88, 182, 187, 0.541)" width="100%">
                <tr>
                    <td> Enter id:<input type="number" name="txt1" min="1"/></td>
                </tr>
                <tr>
                    <td> Enter name:<input type="text" name="txt2" placeholder="Full Name" required/></td>
                </tr>
                <tr>
                    <td> Enter Mobile Number:<input type="number" name="txt3" placeholder="Mobile Number" required/></td>
                </tr>
                <tr>
                    <td> Gender :<select  name="menu">
                            <option>Male</option>
                            <option>Female</option>
                        </select></td>
                </tr>
                <tr>
                    <td> Address: <textarea name="ta" cols="15" rows="5" placeholder="Current Address"required></textarea></td>
                </tr>
                <tr>
                    <td> Date of Birth: <input type="date" name="dob" /></td>
                </tr>
                <tr>
                    <td> Enter email:<input type="email"  name="mail" required/></td>
                </tr>
                <tr>
                    <td> Enter blood group: <select name="bg">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>O+</option>
                            <option>O-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Enter Password: <input type="password" name="pw"/></td>
                </tr>
                <tr>
                    <td>Enter pincode: <input type="number" name="pn"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT"/> 
                        <input type="reset" value="RESET"/>
                    </td>
                </tr>
            </table>
            
        </form>
        <a href="stu_display.php">DISPLAY</a>
        <?php
        $host = "localhost";
        $username = "root";
        $passwd = "";
        $dbname = "db_stu";
        
        $connection = mysqli_connect($host,$username,$passwd,$dbname);
        if($_POST){
            $id = $_POST['txt1'];
            $name = $_POST['txt2'];
            $mobile = $_POST['txt3'];
            $gender = $_POST['menu'];
            $address = $_POST['ta'];
            $dob = $_POST['dob'];
            $email = $_POST['mail'];
            $bloodg = $_POST['bg'];
            $password = $_POST['pw'];
            $pincode = $_POST['pn'];
            
        $q = mysqli_query($connection,
                "insert into tbl_stu(stu_id,stu_name,stu_mobile,stu_gender,stu_address,stu_dob,stu_email,stu_bloodg,stu_password,stu_pincode)
                values('{$id}','{$name}','{$mobile}','{$gender}','{$address}','{$dob}','{$email}','{$bloodg}','{$password}','{$pincode}')") 
                or die("Error".mysqli_error($connection));
                if ($q){
                    echo "<script>alert('Data entered')</script>";
                }
        }
            
        ?>
    </body>
</html>
