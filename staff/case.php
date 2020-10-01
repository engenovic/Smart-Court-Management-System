<?php
require 'connection.php';
$submit=$_POST['submit'];
if(isset($submit))
   {
  $title=$_POST['title'];
  $defend=$_POST['defend'];
  $accuse=$_POST['accuse'];
  $desc=$_POST['desc'];
  $case=strtoupper($title);
 //echo $title.$defend.$accuse.$desc;
//  exit;
// Select defendant details to send SMS
$Dsql="select * from client WHERE clientID= '$defend'";
$Dresult=mysqli_query($connect,$Dsql);
while ($row=mysqli_fetch_array($Dresult))
{
 //echo $username;
 $fname=$row['fname'];
 $lname=$row['lname'];
 $fullName=$fname.' '.$lname;
 $myname=strtoupper($fullName);
 $PhoneN=$row['phone'];
$phone=str_replace("+254","0",$PhoneN);
//  $IDNumber=$row['IDNumber'];
//  $Center=$row['CenterID'];
}
// Select Accuser details to send SMS
$Asql="select * from client WHERE clientID= '$accuse'";
$Aresult=mysqli_query($connect,$Asql);
while ($row=mysqli_fetch_array($Aresult))
{
 //echo $username;
 $fname=$row['fname'];
 $lname=$row['lname'];
 $fullName=$fname.' '.$lname;
 $myid=strtoupper($fullName);
 $PhoneN=$row['phone'];
$contact=str_replace("+254","0",$PhoneN);
//  $IDNumber=$row['IDNumber'];
//  $Center=$row['CenterID'];
}
//  echo $myid;
//  exit;

$sql = "INSERT INTO `cms`.`rcase` (`caseID`, `title`, `description`, `defendant`, `accuser`) VALUES (NULL, '$title', '$desc', '$defend', '$accuse')";
if(mysqli_query($connect, $sql)){
?>
<script>
alert("successfully Reported");
window.location="case_report.php";
</script>
<?php
// Send SMS to Defendant and proceed
$text="Dear $myname, we have successfully received your case title: $case, accusing $myid.We shall update you on the case progress. Thank you";

require_once('DSMS.php');

// Send SMS to Accuser and Exit
$messo="Dear $myid, a case has been reported by $myname accusing you of: $case.We shall update you on the case progress. Thank you";

require_once('ASMS.php');
?>
<?php

} else{
  ?>
	  <script>
	  alert("Failed to Report, Please try again!!");
	  window.location="case_report.php";
	  </script>
	  <?php
}

   }


mysqli_close($connect);
?>
