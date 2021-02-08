<?php
include_once("inc/config.php");
$page=$_POST['page'];
if($page=="Families")
{
 $FamilyName =  strip_tags ($_POST['FamilyName']);
 $Statu = strip_tags ($_POST['Statu']);
    $insert = "INSERT INTO family (Family_Name,Status)
	VALUES ('$FamilyName','$Statu')";
    if (mysqli_query($conn, $insert)) {
       $latest_id =  mysqli_insert_id($conn);
       $data['Family_ID']= $latest_id;
       $data['FamilyName']=$FamilyName;
       $data['Status']=$Status;
    echo json_encode( $data);
  }
}
?>
