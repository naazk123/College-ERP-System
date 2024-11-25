<?php
  include  "confi.php";
  extract($_GET);
  $query="select * from ship where id='$id'";

  $result=mysqli_query($con,$query);
  while($row=mysqli_fetch_assoc($result))
  {
    extract($row);
  }


	$query = "update ship set text='$text' WHERE id = '$id'";
   
	echo $query;
   $result = mysqli_query($con, $query);
   
   if($result)
   {
       echo 'Data Updated';
   }
   else
   {
       echo 'Data Not Updated';
   }

?>