<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Voting System</title>
    <!--CSS BOOSTSRAP CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--Font Awasome cdn link --->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  </head>
  <body  class="bg-dark" >
    <h3 class="text-info text-center">Voting System </h3>

      <div class="bg-info py-4">
                  <h3 class="text-center">Login</h3>

     <div class="container text-center" >

                  <form  action="./actions/login.php" method="POST" class="text-center ">

                    <div class="mb-3">
                    <input type="text" name="name" class="form-control w-50 m-auto" placeholder="Enter your username" required>

                  </div>
                   <div class="mb-3">
                    <input type="text" name="phone" class="form-control w-50 m-auto" placeholder="Enter your phone" maxlength="10" minlength="10" required >

                  </div>
                  <div class="mb-3">
                    <input type="password" name="pass" class="form-control w-50 m-auto" placeholder="Enter your password" required >

                  </div>
                  <div class="mb-3" >
                    <select class="form-select w-50 m-auto" name="std">
                      <option value="group">Group</option>
                      <option value="voter">Voter</option>
                    </select>
                  </div>

                  
                  <button type="submit" name="login" class="btn btn-dark my-4">Login</button>
                  <p>Don't have an account?<a href="./partials/registration.php" class="text-white">Register Here</a></p>

                  </form>
       </div>
                </div>
                








    <!--BOOSTRAP CDN FOR JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>