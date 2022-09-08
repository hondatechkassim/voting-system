<?php 

include('connection.php');

  
    
   
if (isset($_POST['login'])) {
	

			$name =$_POST['name'];
			$phone =$_POST['phone'];
			$pass =$_POST['pass'];

	$query =mysqli_query($con,"SELECT * FROM userdata where username='$name' and mobile ='$phone' and password ='$pass' ");
	if (mysqli_num_rows($query) >0) {

		echo "Succefuly Loged in..";
		
	}else{
		echo "Invalid creditials";
	}

   }

?>