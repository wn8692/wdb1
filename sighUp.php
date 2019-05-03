<?php
  echo "ㅎㅇ";
$ID=$_POST['ID'];
$PASS=$_POST['PASS'];
$AGE=$_POST['AGE'];
$GENDER=$_POST['GENDER'];
$LOCATION=$_POST['LOCATION'];
//$qus=$_POST['qus'];
  echo "ㅎㅇ";
$con=mysqli_connect("14.42.180.210","root","wn3062","speedrundb");

$qus="SELECT *FROM usertbl WHERE userID='$ID'";
$qus2="INSERT INTO usertbl(userID,pass,age,gender,location) VALUES ('$ID','$PASS','$AGE','$GENDER','$LOCATION')";


$res=mysqli_query($con,$qus);
$res=mysqli_num_rows($res);

if($res==0)
{
  echo "true";
  $res2=mysqli_query($con,$qus2);
}
else {
  echo "false";
}

?>
