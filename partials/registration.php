<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resgistration System</title>
    <!--CSS BOOSTSRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Font Awasome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body  class="bg-dark" >

            <div class=" bg-dark">
            	<h3 class="text-center text-info">Voting System</h3>
           
            <div class=" bg-info">
            	<h3 class="text-dark text-center">Registration </h3>
            	<div class="container text-center" >

            	<form action="../actions/register.php" method="POST" enctype="multipart/form-data">
            		<div class="mb-3">
            		<input type="text" name="name" class="form-control  m-auto w-50" placeholder="Enter your username" required autocomplete="off">
            		</div>
            		<div class="mb-3">
            		<input type="text" name="phone" class="form-control  m-auto w-50" placeholder="Enter your phone number" required autocomplete="off" maxlength="10" minlength="10">
            		</div>
            		<div class="mb-3">
            		<input type="password" name="pass" class="form-control  m-auto w-50" placeholder="Enter your password" required autocomplete="off">
            		</div>
            		<div class="mb-3">
            		<input type="password" name="cpass" class="form-control  m-auto w-50" placeholder="Confirm your username" required autocomplete="off">
            		</div>
            		<div class="mb-3">
            		<input type="file" name="photo" class="form-control  m-auto w-50" >
            		</div>
            		<div class="mb-3">
            		<select class="form-select w-50 m-auto" name="std">
            			<option value="group">Group</option>
            			<option value="voter">Voter</option>
            		</select>
            		</div>
            		
                     <button type="submit" name="register" class="btn btn-dark my-4">Register</button>
            	    <p>Already have an account?<a href="../" class="text-white">Login </a></p>
            	</form>
            	
            </div>
  	
            	
            </div>
            
   
    <!--BOOSTRAP CDN FOR JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>