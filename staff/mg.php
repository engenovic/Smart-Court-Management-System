<?php
// starting the session
session_start();
$magis=$_SESSION['user'];
include 'connection.php';
//My Specific Schedule
$MSquery="SELECT schedule.schID,CONCAT(magistrate.fname,' ',magistrate.lname) as fullName,CONCAT('C00',rcase.caseID,'M') as caseID,CONCAT(rooms.name,' ',rooms.description) as room, schedule.date FROM schedule JOIN magistrate ON magistrate.idno=schedule.magistrate JOIN rcase ON rcase.caseID=schedule.cid JOIN rooms on rooms.rid= schedule.rid WHERE email='$magis' LIMIT 10";
$MSresult=mysqli_query($connect,$MSquery);
  //die(mysqli_error($connect));
 if(mysqli_num_rows($MSresult)>0) {
  while($row=mysqli_fetch_assoc($MSresult)){
  $mschedule[]=$row;
  }
   // print_r($schedule);
    //exit;
}
?>
