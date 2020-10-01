<?php
require 'connection.php';
$submit=$_POST['submit'];
if(isset($submit))
   {
  $date=$_POST['date'];
  $case=$_POST['case'];
  $magis=$_POST['magis'];
  $rid=$_POST['room'];
// echo $case.$date.$room;
//  exit;

// 1.Select Case 
$Tsql="SELECT * FROM rcase WHERE caseID=$case";
$Tresult=mysqli_query($connect,$Tsql);
while ($row=mysqli_fetch_array($Tresult))
{
 $Tcase=$row['title'];
}
// echo $Tcase;
// exit;
// 2.Select Room 
$Rsql="SELECT * FROM rooms WHERE rid = 2";
$Rresult=mysqli_query($connect,$Rsql);
while ($row=mysqli_fetch_array($Rresult))
{
 $name=$row['name'];
 $desc=$row['description'];
 $room=$name.' '.$desc;
}
// echo $room;
//  exit;

 // 3.Select Magistrate Details 
$Msql="SELECT * FROM magistrate WHERE  idno=$magis";
$Mresult=mysqli_query($connect,$Msql);
while ($row=mysqli_fetch_array($Mresult))
{
$fname=$row['fname'];
$lname=$row['lname'];
$fullName=$fname.' '.$lname;
$PhoneN=$row['phone'];
$myphone=str_replace("+254","0",$PhoneN);
}
// echo $fullName;
//  exit;

// Check if the case has been already scheduled for
$query = mysqli_query($connect, "SELECT * FROM schedule WHERE cid=$case");

    if (!$query)
    {
        die('Error: ' . mysqli_error($connect));
    }

if(mysqli_num_rows($query) > 0){
?>
   <script>
   alert("The case has been already scheduled for!!");
   window.location="case_allocate.php";
   </script>
<?php
}else{

    // If not, proceed to schedule the case 

    $sql = "INSERT INTO `cms`.`schedule` (`schID`, `cid`, `rid`, `magistrate`, `date`) VALUES (NULL, '$case', '$rid', '$magis', '$date')";
    if(mysqli_query($connect, $sql)){
    ?>
    <script>
    alert("successfully Allocated");
    window.location="case_allocate.php";
    </script>
    <?php
     
    // 4.Select Defendant details to notify 
    $Dsql="select * from client WHERE clientID= (SELECT defendant FROM rcase WHERE caseID= $case)";
    $Dresult=mysqli_query($connect,$Dsql);
    while ($row=mysqli_fetch_array($Dresult))
    {
     $fname=$row['fname'];
     $myname=strtoupper($fname);
     $PhoneN=$row['phone'];
    $phone=str_replace("+254","0",$PhoneN);
    }
    // echo $myname.$phone;
    // exit;
    // 5.Select Accuser details to notify 
    $Dsql="select * from client WHERE clientID= (SELECT accuser FROM rcase WHERE caseID=$case)";
    $Dresult=mysqli_query($connect,$Dsql);
    while ($row=mysqli_fetch_array($Dresult))
    {
     $fname=$row['fname'];
     $myid=strtoupper($fname);
     $PhoneN=$row['phone'];
    $contact=str_replace("+254","0",$PhoneN);
    }
    // echo $myname.$phone;
    // exit;
    
    // Send Notifications on Schedule
    
    // a. Send SMS to Defendant and proceed
    $text="Greetings $myname, your case $Tcase has been scheduled for $date  , 08:00A.M at $room. Kindly Keep time";
    
    require_once('DSMS.php');
    
   // b. Send SMS to Accuser and proceed
   $messo="Greetings $myid, your case $Tcase has been scheduled for $date  , 08:00A.M at $room. Kindly Keep time";
    
   require_once('ASMS.php');
    // c. Send SMS to Magistrate and proceed
    $info="Greetings $fullName, the case $Tcase has been scheduled for your hearing on $date  , 08:00A.M at $room. Check the Manual for details";
    
    require_once('MSMS.php');
    ?>
    <?php
    
    } else{

       
      ?>
         <script>
         alert("Failed to Allocate, Please try again!!");
         window.location="case_allocate.php";
         </script>
         <?php
    }
    
       }
}



mysqli_close($connect);
?>
