<?php
include('../db/dbconn.php');

if(isset($_POST['id']))
{
    $id = $_POST['id'];

}


 mysqli_query($conn, "DELETE FROM product WHERE product_id = 'id'") or die(mysqli_error());

?>