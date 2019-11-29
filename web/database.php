<?php
	 session_start();
	 $uname=$_SESSION["sname"];
	 
	 $servername="localhost";
	 $username="root";
	 $password="";
	 $dbname="mydatabase1";
	 $conn=mysql_connect($uservername,$username,$password,$dbname);
	 if(!$conn)
{
	die("Connection Failed " . mysqli_connect_error());
	
}

$sql = "select username,password,email,pincode,gender,education,address from 
user_registration where username = '$uname'";

//echo $sql;


$result = mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			$username = $row["username"];
			$userpassword = $row["password"];
			$useraddress = $row["address"];
		}	
	}
else
{
		echo "No Results";
}
mysqli_close($conn);
?>
<form name="frmaccount" action="update.php">
<table border="1" align="center">
<Tr> <th colspan="2"> Update User Details </th> </tr>
<tr> <td>  Username  </td>
<td> <?php echo $username; ?> </td>
</tr>
<tr> <td>  Password  </td>
<td> <input type="password" value='<?php echo $userpassword; ?>' /> </td>
</tr>
<tr> <td>  Address </td>
<td> <textarea><?php echo $useraddress; ?>'  </textarea> </td>
</tr>
<tr><th colspan="2"> 
<button> Update </button>
<button> Clear </button>

<button type="button" onClick="document.frmaccount.action='delete.php';document.frmaccount.submit();"> Delete </button>

</th> </tr>



</table>

</form>






