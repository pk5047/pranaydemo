<?php
	session_start();
     $uname=$_COOKIE["cname"];
	 $upas=$_COOKIE["cpass"];
	 $uadd=$_SESSION["sadd"];
	 $upin=$_SESSION["spin"];
	 $udate=$_SESSION["sdate"];
?>
	dear <?php echo $uname;?>you are successfully registered with us!!! your password is <?php echo $upas;?>.
     you won the book and the book is shipped on your current registered address<?php echo $uadd;?>pin<?php echo $upin;?>on date<?php echo $udate;?>
	 
	 <?php
	    session_destroy();
		?>
		
		