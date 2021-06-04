<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_stu";
        
$connection = mysqli_connect($host,$username,$passwd,$dbname);
if(!isset($_GET['mid']) || empty($_GET['mid'])){
        header("location:stu_display.php");
        }
$moid = $_GET['mid'];

$eq = mysqli_query($connection,"select * from tbl_stu where stu_mobile = '{$moid}'") or die("Error".mysqli_error($connection));
        $edata = mysqli_fetch_array($eq);
        //print_r($editdata);
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
            
            $upq = mysqli_query($connection,"update tbl_stu set stu_id='{$id}',stu_name='{$name}',stu_mobile='{$mobile}',stu_gender='{$gender}',stu_address='{$address}',stu_dob='{$dob}',stu_email='{$email}',stu_bloodg='{$bloodg}',stu_password='{$password}',stu_pincode='{$pincode}' where stu_mobile='{$moid}'") or die("Error".mysqli_error($connection));
            
            if($upq){
                echo "<script>alert('Record updated');window.location='stu_display.php';</script>";
            }
        }

?>
<html>
<body style="background-color: rgb(167, 196, 216)">
<h1 style="background-color: pink" align="center"><i>STUDENT DETAILS</i></h1>
<form method="post">
            <table style="background-color: rgba(88, 182, 187, 0.541)" width="100%">
                <tr>
                    <td> Enter id:<input type="number" value = "<?php echo $edata ['stu_id'];?>" name="txt1" min="1"/></td>
                </tr>
                <tr>
                    <td> Enter name:<input type="text" value = "<?php echo $edata ['stu_name'];?>" name="txt2" placeholder="Full Name" required/></td>
                </tr>
                <tr>
                    <td> Enter Mobile Number:<input type="number" value = "<?php echo $edata ['stu_mobile'];?>" name="txt3" placeholder="Mobile Number" required/></td>
                </tr>
                <tr>
                    <td>
                         Gender: Male<input type="radio" <?php if($edata['stu_gender']=="Male"){echo "checked";}?> value="Male" name="menu"/>
                                Female<input type="radio" <?php if($edata['stu_gender']=="Female"){echo "checked";}?> value="Female" name="menu"/><br>
                    </td>
                </tr>
                <tr>
                    <td> Address: <textarea name="ta" "cols="15" rows="5" placeholder="Current Address"required><?php echo $edata ['stu_address'];?></textarea></td>
                </tr>
                <tr>
                    <td> Date of Birth: <input type="date" value = "<?php echo $edata ['stu_dob'];?>" name="dob" /></td>
                </tr>
                <tr>
                    <td> Enter email:<input type="email"  value = "<?php echo $edata ['stu_email'];?>" name="mail" required/></td>
                </tr>
                <tr>
                    <td> Enter blood group: <select name="bg">
                            <option <?php if($edata['stu_bloodg']=="A+"){echo "selected";}?>>A+</option>
                            <option <?php if($edata['stu_bloodg']=="A-"){echo "selected";}?>>A-</option>
                            <option <?php if($edata['stu_bloodg']=="B+"){echo "selected";}?>>B+</option>
                            <option <?php if($edata['stu_bloodg']=="B-"){echo "selected";}?>>B-</option>
                            <option <?php if($edata['stu_bloodg']=="O+"){echo "selected";}?>>O+</option>
                            <option <?php if($edata['stu_bloodg']=="O-"){echo "selected";}?>>O-</option>
                            <option <?php if($edata['stu_bloodg']=="AB+"){echo "selected";}?>>AB+</option>
                            <option <?php if($edata['stu_bloodg']=="AB-"){echo "selected";}?>>AB-</option>
                        </select></td>
                </tr>
                <tr>
                    <td>Enter Password: <input type="password" value = "<?php echo $edata ['stu_password'];?>" name="pw"/></td>
                </tr>
                <tr>
                    <td>Enter pincode: <input type="number" value = "<?php echo $edata ['stu_pincode'];?>" name="pn"/></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="SUBMIT"/> 
                        <input type="reset" value="RESET"/>
                    </td>
                </tr>
            </table>
            
        </form>
</body>
</html>