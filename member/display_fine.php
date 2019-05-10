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
include "header.php";
include "connection.php";

?>
    <h1>Display Fine</h1>
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
            echo "Member Username";
            echo "</th>";
            echo "<th>";
            echo "Books Title";
            echo "</th>";
            echo "<th>";
            echo "Books Issue Date";
            echo "</th>";
            echo "<th>";
            echo "Books Expected Return Date";
            echo "</th>";
            echo "<th>";
            echo "Books Returned Date";
            echo "</th>";
            echo "<th>";
            echo "Fine";
            echo "</th>";

            echo "</tr>";

            $res=mysqli_query($link,"select * from fine where member_username='$_SESSION[username]'");
            while ($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>";
                echo $row["member_username"];
                echo "</td>";
                echo "<td>";
                echo $row["books_title"];
                echo "</td>";
                echo "<td>";
                echo $row["books_issue_date"];
                echo "</td>";
                echo "<td>";
                echo $row["books_expecded_return_date"];
                echo "</td>";
                echo "<td>";
                echo $row["books_return_date"];
                echo "</td>";
                echo "<td>";
                echo $row["fine"];
                echo "</td>";
                echo "</tr>";
            }
            echo "</table>";


            ?>
        </form>
    </div>
    </div>
<?php
include "footer.php";
?>