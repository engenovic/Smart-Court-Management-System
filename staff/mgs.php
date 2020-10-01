<?php
require 'connection.php';
$submit=$_POST['submit'];
if(isset($submit))
   {
  $date=$_POST['date'];
  $case=$_POST['case'];
  $magis=$_POST['magis'];
  $rid=$_POST['room'];
   }
//    echo $case.$date.$magis.$room;
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
//  echo $fullName;
//   exit;

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

  $sql = "INSERT INTO `cms`.`schedule` (`schID`, `cid`, `rid`, `magistrate`, `date`) VALUES (NULL, '$case', '$room', '$magis', '$date')";
  if(mysqli_query($connect, $sql)){
  ?>
  <script>
  alert("successfully Allocated");
  window.location="case_allocate.php";
  </script>
  <?php
}
else {
  echo mysqli_error($connect);
}
}
?>
