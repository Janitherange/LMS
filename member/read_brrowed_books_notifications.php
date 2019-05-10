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
$id=$_GET["id"];
mysqli_query($link,"update remainig_dates_notification set is_read='yes' where id=$id");

?>
<script type="text/javascript">
    window.location="borrowed_books_notifications.php";
</script>