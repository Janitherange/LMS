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
//mysqli_query($link,"update new_book_notification set is_read='yes'")
?>
    <h1>Borrowed Book Notification</h1>
    </div>
    </div>
    </div>

    </div>
    <div class="content mt-3">
        <?php
        $res=mysqli_query($link,"select * from remainig_dates_notification where is_read='no'");
        echo "<table class='table table-bordered'>";
        echo "<tr>";
        echo "<th>";
        echo "Book Image";
        echo "</th>";
        echo "<th>";
        echo "Book Title";
        echo "</th>";
        echo "<th>";
        echo "Member Name";
        echo "</th>";
        echo "<th>";
        echo "Member Username";
        echo "</th>";
        echo "<th>";
        echo "Member Enrollment No";
        echo "</th>";
        echo "<th>";
        echo "Book Issue Date";
        echo "</th>";
        echo "<th>";
        echo "Book Return Date";
        echo "</th>";
        echo "<th>";
        echo "Message";
        echo "</th>";
        echo "<th>";
        echo "Is Read";
        echo "</th>";
        echo "</tr>";
        while ($row=mysqli_fetch_array($res))
        {
            echo "<tr>";
            echo "<td>";
            ?>
            <img src="../librarian/<?php echo $row["books_image"]; ?>" height="100" width="100">
            <?php
            echo "</td>";
            echo "<td>";
            echo $row["books_title"];
            echo "</td>";
            echo "<td>";
            echo $row["member_name"];
            echo "</td>";
            echo "<td>";
            echo $row["member_username"];
            echo "</td>";
            echo "<td>";
            echo $row["member_enrollment"];
            echo "</td>";
            echo "<td>";
            echo $row["books_issue_date"];
            echo "</td>";
            echo "<td>";
            echo $row["books_expected_date"];
            echo "</td>";
            echo "<td>";
            echo $row["notification"];
            echo "</td>";
            echo "<td>";
            ?> <a href="read_brrowed_books_notifications.php?id=<?php echo $row["id"];?>">Mark as Read</a> <?php
            echo "</td>";
            echo "</tr>";

        }

        echo "</table>";
        ?>
    </div>
    </div>
<?php
include "footer.php";
?>