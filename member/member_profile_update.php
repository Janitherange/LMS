<?php
session_start();
if(!isset($_SESSION["username"]))
{
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php
}
include "connection.php";
include "header.php";
?>
<h1>Member Profile </h1>
</div>
</div>
</div>

</div>

<div class="content mt-3">
    <?php

    $month = date('m');
    $day = date('d');
    $year = date('Y');

    $today = $year . '-' . $month . '-' . $day;
    $res1=mysqli_query($link,"select * from member_registration where id=$_SESSION[id]");
    while ($row=mysqli_fetch_array($res1))
    {

        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $username=$row["username"];
        $_SESSION["password"]=$row["password"];
        $email=$row["email"];
        $contact=$row["contact"];
        $reg_date=$row["register_date"];
        $enrollment_no=$row["enrolment"];
        //echo $fname;
    }

    ?>
    <form name="form1" action="" method="post" class="col-lg-12">
        <table width="1180">
            <tr>
                <td width="300"><label for="" class="control-label mb-1">First Name</label></td>

                <td ><input type="text" value="<?php echo $fname;?>" name="fname" class="form-control" required="" ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Last Name</label></td>

                <td><input type="text"name="lname"value="<?php echo $lname;?>" class="form-control" required="" ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Username</label></td>

                <td><input type="text"name="username"value="<?php echo $username;?>" class="form-control" required="" disabled ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Email</label></td>

                <td><input type="text" name="email"value="<?php echo $email;?>" class="form-control" required="" ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Contact</label></td>

                <td><input type="text"name="contact"value="<?php echo $contact;?>" class="form-control" required="" ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Registration Date</label></td>

                <td><input type="text"name="reg_date"value="<?php echo $reg_date;?>" class="form-control" required="" disabled ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Enrollment No</label></td>

                <td><input type="text"name="enrollment"value="<?php echo $enrollment_no;?>" class="form-control" required="" disabled> </td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">New Password</label></td>

                <td><input type="password"name="npass"value="<?php ?>" class="form-control"  ></td>
            </tr>
            <tr>
                <td colspan="2"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Confirm Password</label></td>

                <td><input type="password"name="cpass"value="<?php  ?>" class="form-control"  ></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Change" name="submit1" class="btn btn-lg btn-info btn-block" ></td></tr>
            </br>
            <?php

            ?>

        </table>
    </form>
    <?php

    if(isset($_POST["submit1"]))
    {
        if ($_POST["npass"]="" && $_POST["cpass"]="")
        {
            mysqli_query($link,"update member_registration set firstname=$_POST[fname],lastname=$_POST[lname],username=$_POST[username],email=$_POST[email],contact=$_POST[contact] where id=$_SESSION[id]");

        }
        else
        {
            if ($_POST["npass"]=$_POST["cpass"])
            {
                mysqli_query($link,"update member_registration set firstname=$_POST[fname],lastname=$_POST[lname],username=$username,password=$_POST[cpass],email=$_POST[email],contact=$_POST[contact] where id=$_SESSION[id]");
                ?>
                <div class="alert alert-success " align="center">
                    <strong style="...">Profile Update Successful!</strong>
                </div>
                <?php
            }
            else
            {
                ?>
                <div class="alert alert-danger " align="center">
                                        <strong style="...">Password Not Matching With Each Other!</strong>
                                    </div>
                <?php
            }
        }


    }


        $fname=$row["firstname"];
        $lname=$row["lastname"];
        $username=$row["username"];
        $_SESSION["password"]=$row["password"];
        $email=$row["email"];
        $contact=$row["contact"];
        $reg_date=$row["register_date"];
        $enrollment_no=$row["enrolment"];
        echo $fname;

    ?>
</div>
</div>
<?php
include "footer.php";
?>

