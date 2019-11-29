<h3><center>REGISTRATION DETAIL</center></h3>
<form>
<center ><table  colspan="2"width="50%" border="5">

<?php 	 session_start();
     $uname=$_REQUEST["txtname"];
	 $upass=$_REQUEST["txtpass"];
	 $uadd=$_REQUEST["txtadd"];
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
	</table>