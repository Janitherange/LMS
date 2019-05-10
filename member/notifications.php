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
<h1>New Book Notification</h1>
</div>
</div>
</div>

</div>
<div class="content mt-3">
    <?php
    $res=mysqli_query($link,"select * from new_book_notification where is_read='no'");
    echo "<table class='table table-bordered'>";
    echo "<tr>";
    echo "<th>";
    echo "Book Image";
    echo "</th>";
    echo "<th>";
    echo "Book Title";
    echo "</th>";
    echo "<th>";
    echo "Book Author";
    echo "</th>";
    echo "<th>";
    echo "Book Publication";
    echo "</th>";
    echo "<th>";
    echo "Book Purchased Date";
    echo "</th>";
    echo "<th>";
    echo "Book Price";
    echo "</th>";
    echo "<th>";
    echo " Available Book Quantity";
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
        <img src="<?php echo $row["books_image"]; ?>" height="100" width="100">
        <?php
        echo "</td>";
        echo "<td>";
        echo $row["books_name"];
        echo "</td>";
        echo "<td>";
        echo $row["books_author_name"];
        echo "</td>";
        echo "<td>";
        echo $row["books_publication_name"];
        echo "</td>";
        echo "<td>";
        echo $row["books_purchase_date"];
        echo "</td>";
        echo "<td>";
        echo $row["books_price"];
        echo "</td>";
        echo "<td>";
        echo $row["books_qty"];
        echo "</td>";
        echo "<td>";
        ?> <a href="read_notification.php?id=<?php echo $row["id"];?>">Mark as Read</a> <?php
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


