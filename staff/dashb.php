<?php
include 'connection.php';
 // Total number of cases
 $Cresult = mysqli_query($connect, "SELECT * FROM rcase" );
 $Cnum_rows = mysqli_num_rows($Cresult);
 // Total Clients
 $Aresult = mysqli_query($connect, "SELECT * FROM client" );
 $Anum_rows = mysqli_num_rows($Aresult);
 // Number of rooms
 $Rresult = mysqli_query($connect, "SELECT * FROM rooms" );
 $Rnum_rows = mysqli_num_rows($Rresult);

 //Schedule

 $Squery="SELECT schedule.schID,CONCAT(magistrate.fname,' ',magistrate.lname) as fullName,CONCAT('C00',rcase.caseID,'M') as caseID,CONCAT(rooms.name,' ',rooms.description) as room, schedule.date FROM schedule JOIN magistrate ON magistrate.idno=schedule.magistrate JOIN rcase ON rcase.caseID=schedule.cid JOIN rooms on rooms.rid= schedule.rid LIMIT 10";
 $Sresult=mysqli_query($connect,$Squery);
   //die(mysqli_error($connect));
  if(mysqli_num_rows($Sresult)>0) {
   while($row=mysqli_fetch_assoc($Sresult)){
   $schedule[]=$row;
   }
    // print_r($schedule);
     //exit;
  }
   //Registred Clients

   $Dquery="SELECT* FROM client LIMIT 20";
   $Dresult=mysqli_query($connect,$Dquery);
     //die(mysqli_error($connect));
    if(mysqli_num_rows($Dresult)>0) {
     while($row=mysqli_fetch_assoc($Dresult)){
     $clients[]=$row;
     }
     // print_r($staffs) ;
     // exit;
    }
    //Magistrates

    $Mquery="SELECT* FROM magistrate LIMIT 20";
    $Mresult=mysqli_query($connect,$Mquery);
      //die(mysqli_error($connect));
     if(mysqli_num_rows($Mresult)>0) {
      while($row=mysqli_fetch_assoc($Mresult)){
      $magiss[]=$row;
      }
      // print_r($staffs) ;
      // exit;
     }
 ?>
