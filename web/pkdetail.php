<h3><center>REGISTRATION DETAIL</center></h3>
<form action="pksuccessful.php">
<center ><table  colspan="2"width="50%" border="5">

<?php 	 session_start();
     $uname=$_REQUEST["txtname"];
	 $upass=$_REQUEST["txtpass"];
	 $uadd=$_REQUEST["txtadd"];
	 $upin=$_REQUEST["txtpin"];
	 $udate=$_REQUEST["txtdate"];
	 $uemail=$_REQUEST["txtemail"];
	 $ugen=$_REQUEST["txtgen"];
	 $edu=$_REQUEST["txtedu"];
	 $ueducation="";
	 foreach($edu as $e)
	 {
		$ueducation .=$e.",";
	 }
	 $ueducation = substr($ueducation,0,strlen($ueducation)-1);
	// substr("DIPLOMA,BE,BTECH,MBA,CDAC",0,25);
	 
     $hob=$_REQUEST["selhobbies"];
	 $uhobbies="";
	 foreach($hob as $h)
	 {
		$uhobbies .=$h.",";
	 }
	 $uhobbies = substr($uhobbies,0,strlen($uhobbies)-1);
	 //substr("PLAYING CRICKET,SWIMMING,READING,WATCHING MOVIE,TRAVELLING,VIDEO GAME,RUNNING",0,78);
	 
	 
	
	 $servername="localhost";
	 $username="root";
	 $upassword="";
	 $dbname="harish";
	 $conn=mysqli_connect($servername,$username,$upassword,$dbname);
	 $sql="insert into hsk values('$uname','$upass','$uadd','$upin','$udate','$uemail','$ugen','$ueducation','$uhobbies');";
	 mysqli_query($conn,$sql);
	 
	 
	 
	 
	 //set cookie
	 setcookie("cname",$uname,time()+3600);
	 setcookie("cpass",$upass,time()+3600);
	 
      //set session
	   
	 $_SESSION["sadd"]=$uadd;
	 $_SESSION["spin"]=$upin;
	 $_SESSION["sdate"]=$udate;
	 
?>
	<tr>
        <td>USERNAME</td>
        <td><?php echo $uname?></td>	
    </tr>		
	<tr>
        <td>PASSWORD</td>
        <td><?php echo $upass?></td>	
    </tr>		
	<tr>
        <td>ADDRESS</td>
        <td><?php echo $uadd?></td>	
    </tr>		
	<tr>
        <td>PIN</td>
        <td><?php echo $upin?></td>	
    </tr>		
	<tr>
        <td>EMAIL</td>
        <td><?php echo $uemail?></td>	
    </tr>		
	<tr> 
	<td>GENDER</td>
	<td><?php if($ugen="m") 
		echo" MALE";
	           else if($ugen="f") 
				   echo "FEMALE";
			   else
				   echo "TRANSGENDER";?></td>
	</tr>		   
<tr>
        <td>EDUCATION</td>
        <td><?php echo $ueducation?></td>	
    </tr>
	<tr>
        <td>HOBBIES</td>
        <td><?php echo $uhobbies?></td>	
    </tr>
	<tr>
        <td>DATE</td>
        <td><?php echo $udate?></td>	
    <tr>
	<td><button type="submit">submit</button></td>
	<td><input  type="reset"value="clear"></td>






	
    </table>
    </form>	