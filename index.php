<?php 
include 'formsubmit.php'
?>

<!DOCTYPE html>
<html>
<head>
   <title>Dev Fellowship</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body style="background-color: gray">

   <div class="container">
      <div class="row">
         <div class="col-md-8 offset-md-2" style="background-color: white; margin-top:44px;">
            <form action="<?php $_PHP_self ?>" method="POST" style="margin-top:20px; margin-bottom:20px;">
               <label>Contact Information</label>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Username</span>
                 </div>
                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="username">
               </div>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Password</span>
                 </div>
                 <input type="password" class="form-control" aria-label="Amount (to the nearest dollar)" name="password">
               </div>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">First Name</span>
                 </div>
                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="first_name">
               </div>

               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Last name</span>
                 </div>
                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="last_name">
               </div>
               <div class="input-group mb-3">
              <div class="input-group-prepend">
                <label class="input-group-text" for="inputGroupSelect01">Gender</label>
              </div>
                <select class="custom-select" id="inputGroupSelect01" name="gender">
                  <option selected>Choose...</option>
                  <option value="1">male</option>
                  <option value="2">female</option>
                </select>
              </div>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Email</span>
                 </div>
                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="email">
               </div>
               <div class="input-group mb-3">
                 <div class="input-group-prepend">
                   <span class="input-group-text">Phone Number</span>
                 </div>
                 <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)" name="phone_number">
               </div>
              <div class="form-group">
                <label for="exampleFormControlInput1">Home Address</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="home_address"></textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">About Yourself</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
              </div>
              <button type="submit" class="btn btn-outline-primary btn-round">Submit</button>
            </form>
         </div>
      </div>
   </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
</body>
</html>

<!-- $sql = "SELECT * FROM Users"
$query = mysqli_connect($conn, $sql)
<table>
  <thead>

  </head>
  <tbody>
    foreach ($query as $u)
      <tr> $u->lastname</tr>
      <tr> $u->username</tr>
      <tr> $u->email</tr>
  </tbody>
</table> -->