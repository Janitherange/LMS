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
       // echo $fname;
    }
    ?>
    <form name="form1" action="" method="post" class="col-lg-12">
        <table width="1180">
            <tr>
                <td width="300"><label for="" class="control-label mb-1">First Name</label></td>

                <td ><label for="" class="form-control"  ><?php echo $fname; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Last Name</label></td>

                <td><label for="" class="form-control"  ><?php echo $lname; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Username</label></td>

                <td><label for="" class="form-control"  ><?php echo $username; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Email</label></td>

                <td><label for="" class="form-control" ><?php echo $email; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Contact</label></td>

                <td><label for="" class="form-control"  ><?php echo $contact; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Registration Date</label></td>

                <td><label for="" class="form-control"  ><?php echo $reg_date; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td width="300"><label for="" class="control-label mb-1">Enrollment No</label></td>

                <td><label for="" class="form-control"  ><?php echo $enrollment_no; ?></label></td>
            </tr>
            <tr>
                <td colspan="2" width="300"><label></label></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Update" name="submit1" class="btn btn-lg btn-info btn-block" ></td></tr>
            </br>
            <?php
            if(isset($_POST["submit1"]))
            {
                ?>
                <script type="text/javascript">
                    window.location="member_profile_update.php";
                </script>
                <?php

            }
            ?>

        </table>
    </form>
</div>
</div>
<?php
include "footer.php";
?>

