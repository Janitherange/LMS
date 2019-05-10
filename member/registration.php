<?php
session_start();
include "connection.php";

?>
<!doctype html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Student Panel</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="./images/Reading_32px.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script >
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body class="btn-dark">

<h1 align="center">Member Registration </h1>
<!-- Left Panel -->


<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" >

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">




            </div>


        </div>

    </header>
    <!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title" align="center">




</div>
</div>
</div>

</div>

    <div class="content mt-3 " >
        <?php

        $firstnameErr = "";

        $month = date('m');
        $day = date('d');
        $year = date('Y');

        $today = $year . '-' . $month . '-' . $day;






        ?>
        <form name="form1" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="col-lg-12">
            <table width="1080" align="center" >
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">First Name</label></td>

                <td><input type="text"name="firstname" class="form-control" Width="300px" required pattern="[A-Za-z]+"></td>

            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "><?php echo $firstnameErr;?></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">Last Name</label></td>

                <td><input type="text"name="lastname" class="form-control" Width="300px" required pattern="[A-Za-z]+"></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">Username</label></td>

                <td><input type="text"name="username" class="form-control" Width="300px" required pattern="[A-Za-z0-9]+"></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for=""  class="control-label mb-1">Password</label>

                <td><input type="password"name="password"  class="form-control" Width="300px" required=""></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">Email</label></td>

                <td><input type="text"name="email" id="email-input" class="form-control" Width="300px" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">Contact</label></td>

                <td><input type="text"name="contact" class="form-control" Width="300px" required pattern="\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})"></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td><label for="" class="control-label mb-1">Registration Date</label></td>

                <td><input type="date"name="sem" value="<?php echo $today; ?>" class="form-control" Width="300px" required="" disabled></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>

                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><div class="g-recaptcha" data-sitekey="6LcAx5gUAAAAAKJXleEmDzfLqfV8Ypmuu0LSVwcK"></div></label></td>

                </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Register" name="submit1" class="btn btn-lg btn-info btn-block" ></td>
            </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><div class="register-link m-t-15 text-center">
                            <p>Already have a account ? <a href="login.php" class=""> Sign In Here</a></p>

                        </div></td>
                </tr>
                <tr>
                    <td ><label  class="control-label mb-1 "></label></td>
                    <td ><label  class="control-label mb-1 "></label></td>
                </tr>
                <tr>
                    <td colspan="2"><label  class="control-label mb-1 "></label></td>
                </tr>

            </table>
        </form>
        <?php
        if(isset($_POST["submit1"]))
        {


            $enrollmentno=uniqid();
            //$_SESSION["enrollmentno"]=$enrollmentno;
            mysqli_query($link,"insert into member_registration values ('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$today','$enrollmentno','no')");

            ?>
            <tr><td>
                    <div class="alert alert-success " align="center">
                        Registration successfully, You can login when your account is approved
                    </div>
                </td></tr>
            <?php
        }

        ?>

    </div>
</div>
<?php
include "footer.php";
?>

