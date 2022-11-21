<?php
include "config.php";
 $id=$_GET['ID'];
mysqli_query($con,"DELETE FROM `tbltodo` WHERE =$id ");
header("location:index.php");
?>