
<?php 


    include('connection.php');

  
    
   
if (isset($_POST['register'])) {
	

			$name =$_POST['name'];
			$phone =$_POST['phone'];
			$pass =$_POST['pass'];
			$cpass =$_POST['cpass'];
			$image_name = $_FILES['photo']['name'] ;
			$target_file = "../uploads/$image_name";
			// $targetFileForItem = "uploads/$image_name";

            $std =$_POST['std'];

       if ($pass!= $cpass) {
       	
       echo "<script>alert('Password do not match')</script>";
       echo "<script> window.location = 'http://localhost/Voting%20System/partials/registration.php'</script>";

       	 	
       }else{

       	 move_uploaded_file($_FILES['photo']['tmp_name'], $target_file);

       	 $query = mysqli_query($con,"INSERT INTO userdata(username,mobile,password,photo,standard,status,votes)VALUES('$name','$phone','$pass','$image_name','$std',0,0) ");
       	 if ($query) {
       	 		echo "<script>alert('Registered Succefully..')</script>";
       	 		 echo "<script> window.location = 'http://localhost/Voting%20System/'</script>";

       	 	
       	 }
       }
   
}



?>