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
    <h1>Search Books</h1>
    </div>
    </div>
    </div>

    </div>
    <div class="content mt-3">
        <form name="form1" action="" method="post">
            <table class="table">
                <tr>
                    <td><input type="text" name="t1" placeholder="Enter Books Name" required class="form-control"></td>
                    <td><input type="submit" name="submit1" class="form-control btn btn-dark" value="Search"></td>
                </tr>
            </table>
        </form>
        <?php
        if(isset($_POST["submit1"]))
        {

            $res=mysqli_query($link,"select * from add_books where books_name like ('%$_POST[t1]%') or books_author_name like ('%$_POST[t1]%')");
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
            echo " Available Book Quantity";
            echo "</th>";

            while ($row=mysqli_fetch_array($res))
            {
                echo "<tr>";
                echo "<td>";
                ?>
                <img src="../librarian/<?php echo $row["books_image"]; ?>" height="100" width="100">
                <?php
                echo "</td>";
                echo "<td>";
                echo $row["books_name"];
                echo "</td>";
                echo "<td>";
                echo $row["books_author_name"];
                echo "</td>";
                echo "<td>";
                echo $row["available_qty"];
                echo "</td>";
                echo "</tr>";

            }

            echo "</table>";
        }
        else
        {

            $res=mysqli_query($link,"select * from add_books where available_qty>0");
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
            echo "Available Book Quantity";
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
                echo $row["books_name"];
                echo "</td>";
                echo "<td>";
                echo $row["books_author_name"];
                echo "</td>";
                echo "<td>";
                echo $row["available_qty"];
                echo "</td>";
                echo "</tr>";

            }

            echo "</table>";
        }

        ?>
    </div>
    </div>
<?php
include "footer.php";
?>