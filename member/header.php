<?php

include "connection.php";
$tot=0;
$count=0;

$res=mysqli_query($link,"select * from new_book_notification where is_read='no'");
$tot=mysqli_num_rows($res);

$res1=mysqli_query($link,"select * from remainig_dates_notification where is_read='no'");
$count=mysqli_num_rows($res1);

$month = date('m');
$day = date('d');
$year = date('Y');

$today = $year . '-' . $month . '-' . $day;

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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>


<!-- Left Panel -->

<aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu"
                    aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><h4>Student Panel<br>Hi <?php echo $_SESSION["username"]; ?></h4></a>
            <a class="navbar-brand hidden" ><h4>S</h4></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <a href="demo.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                </li>
                <h3 class="menu-title">Menus</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Books</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-book"></i><a href="search_books.php">Search Books</a></li>
                        <li><i class="fa fa-book"></i><a href="my_issued_books.php">Borrowed Books</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-user"></i>Member</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-user"></i><a href="member_profile.php">Member Profile</a></li>

                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false"> <i class="menu-icon fa fa-dollar"></i>Fine</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-dollar"></i><a href="display_fine.php">Display Fine</a></li>

                    </ul>
                </li>



                <li>
                    <a href="logout.php"> <i class="menu-icon ti-lock"></i>Logout </a>
                </li>




            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </nav>
</aside>
<!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">

    <!-- Header-->
    <header id="header" class="header">

        <div class="header-menu">

            <div class="col-sm-7">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>

                <div class="header-left">
                    <button class="search-trigger"><i class="fa fa-search"></i></button>
                    <div class="form-inline">
                        <form class="search-form">
                            <input class="form-control mr-sm-2" type="text" placeholder="Search ..."
                                   aria-label="Search">
                            <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                        </form>
                    </div>

                    <div class="dropdown for-notification">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="notification"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="count bg-danger"><?php echo $tot?></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="notification">
                            <p class="red">You have <?php echo $tot?> Notifications</p>

                            <?php
                            while ($row=mysqli_fetch_array($res))
                            {
                                $image=$row["books_image"];
                                echo "<a class='dropdown-item media bg-flat-color-1' href='notifications.php'>";
                                echo "<i class=''></i>";
                                echo "<img alt='avatar' src='$image' width='25' height='25'>";
                                echo "<p>New Book Inserted.</p>";
                                echo "</a>";
                            }
                            ?>
                        </div>
                    </div>

                    <div class="dropdown for-message">
                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ti-email"></i>
                            <span class="count bg-primary"><?php echo $count ?></span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="message">
                            <p class="red">You have <?php echo $count ?> Messages</p>
                            <?php
                            while ($row1=mysqli_fetch_array($res1))
                            {
                                $image1=$row1["books_image"];
                                //$today_date=$row1["books_issue_date"];
                                $expected_date=$row1["books_expected_date"];
                                $date1=date_create($today);
                                $date2=date_create($expected_date);
                                $datediff=date_diff($date2,$date1);
                                $datediff=$datediff->format("%R%a");
                                if ($datediff<=2)
                                {
                                    echo "<a class='dropdown-item media bg-flat-color-1' href='borrowed_books_notifications.php'>";
                                    echo "<span class='photo media-left'>";
                                    echo "<img alt='avatar' src='../librarian/$image1'>";
                                    echo "</span>";
                                    echo "<span class='message media-body'>";
                                    echo "<span class='name float-left'>";
                                    echo $row1["member_name"];
                                    echo "</span>";
                                    echo "<span class='time float-right'>";
                                    echo "Just Now!";
                                    echo "</span>";
                                    echo " <p>Hello, You have a book to return..!</p>";
                                    echo "</a>";
                                }
                            }
                            ?>


                        </div>
                    </div>
                </div>
            </div>


        </div>

    </header>
    <!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">


