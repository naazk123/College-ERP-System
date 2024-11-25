<?php
//print_r($_POST); 
include "db.php";
if(isset($_POST))
{
     extract($_POST);
     $sql = "DELETE FROM `stud_attend` WHERE s_id = '$s_id'";
//echo $sql;
 $res =  mysqli_query($con,$sql);
 if($res)
  {
      echo "1";
  }
  
  
}

?>
