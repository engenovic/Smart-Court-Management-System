<?php
require 'connection.php';
$sql="SELECT * FROM client";
$result=mysqli_query($connect,$sql);
 if(mysqli_num_rows($result)>0) {
  while($row=mysqli_fetch_assoc($result)){
    if($row['type']=='Defendant') {
      $defends[]=$row;
    }else{
      $accuses[]=$row;
    }
  }
}
$sql1="SELECT * FROM rcase";
$result1=mysqli_query($connect,$sql1);
 if(mysqli_num_rows($result1)>0) {
  while($row=mysqli_fetch_assoc($result1)){
    $cases[]=$row;
    // echo $cases;
    // exit;
  }
}
$sql1="SELECT * FROM magistrate";
$result1=mysqli_query($connect,$sql1);
 if(mysqli_num_rows($result1)>0) {
  while($row=mysqli_fetch_assoc($result1)){
    $magis[]=$row;
    // echo $cases;
    // exit;
  }
}
$sql2="SELECT * FROM rooms";
$result2=mysqli_query($connect,$sql2);
 if(mysqli_num_rows($result2)>0) {
  while($row=mysqli_fetch_assoc($result2)){
    $rooms[]=$row;
    // echo $cases;
    // exit;
  }
}
 ?>
