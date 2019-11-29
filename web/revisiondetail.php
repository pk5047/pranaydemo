<h3><center>REGISTRATION DETAIL</center></h3>
<?php
$uname=$_REQUEST["txtname"];
$upassword=$_REQUEST["txtpass"];
$uaddress=$_REQUEST["txtaddress"];
$upincode=$_REQUEST["txtpin"];
$uemail=$_REQUEST["txtmail"];
$ugender=$_REQUEST["txtrad"];

$edu1=$_REQUEST["edu"];
$ed="";
foreach($edu1 as $u){
$ed.=$u.",";}
$ed=substr($ed,0,strlen($ed)-1);




$hob=$_REQUEST["cheak"];
$hobbies="";
foreach($hob as $h)
{
$hobbies .=$h.",";
}
$hobbies=substr($hobbies,0,strlen($hobbies)-1);
$udate=$_REQUEST["txtdate"];
?>
<center><table width="80%" border="5">
<tr colspan="2">REGISTRATION DETAIL </tr>
<tr><td>username</td><td><?php echo $uname ?></td></tr>
<tr><td>password</td><td><?php echo $upassword ?></td></tr>
<tr><td>addresss</td><td><?php echo $uaddress ?></td></tr>
<tr><td>pincode</td><td><?php echo $upincode ?></td></tr>
<tr><td>email</td><td><?php echo $uemail ?></td></tr>
<tr><td>gender</td><td><?php echo $ugender ?></td></tr>
<tr><td>education</td><td><?php echo $ed ?></td></tr>
<tr><td>hobbies</td><td><?php echo $hobbies ?></td></tr>
</table>