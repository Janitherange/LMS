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
    <h1>My Borrowed Books </h1>
    </div>
    </div>
    </div>

    </div>

    <div class="content mt-3">
        <form name="form1" action="" method="post">

        <?php


            echo "<table class='table table-bordered'>";
            echo "<tr>";
            echo "<th>";
            echo "Member Enrollment No";
            echo "</th>";
            echo "<th>";
            echo "Books Name";
            echo "</th>";
            echo "<th>";
            echo "Books Issue Date";
            echo "</th>";
        echo "<th>";
        echo "Books Due Date";
        echo "</th>";


            echo "</tr>";

                $res=mysqli_query($link,"select * from issue_books where member_username='$_SESSION[username]'");
                while ($row=mysqli_fetch_array($res))
                {
                    echo "<tr>";
                    echo "<td>";
                    echo $row["member_enrollment"];
                    echo "</td>";

                    echo "<td>";
                    echo $row["books_name"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["books_issue_date"];
                    echo "</td>";
                    echo "<td>";
                    echo $row["books_expecded_return_date"];
                    echo "</td>";
                    echo "</tr>";
                }
            echo "</table>";


        ?>
        </form>

    </div>


<?php
include "footer.php";
?>