<?php 
include_once("inc/config.php");
$ID=$_GET['ID'];
$page=$_GET['page'];
if($page=="Familes")
{
$del_cate = mysqli_query ($conn, "DELETE FROM family WHERE Family_ID = '$ID'");
}

 ?>