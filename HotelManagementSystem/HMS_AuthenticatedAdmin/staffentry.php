<?php  session_start();   if(isset($_POST['Register'])){ 
  $connection=mysqli_connect("localhost","root",""); 
  $db=mysqli_select_db($connection,"limelight"); 
  $id=$_POST['id']; 
  $name=$_POST['name']; 
  $mobile=$_POST['mobile']; 
  $salary=$_POST['salary']; 
  $dept=$_POST['dept']; 
  $joindate=$_POST['joindate']; 
  $resigndate=$_POST['resigndate']; 
  $query="insert into staff(id,name,mobile,dept,salary,joindate,resigndate) values('$id','$name','$mobile','$dept','$salary','$joindate','$resigndate')"; 
  $query_run=mysqli_query($connection,$query);   if($query_run){     echo  "<script>alert('Entry Successful');     window.location.href='staff.php'; 
    </script>"; 
  }   else{      echo  "<script>alert('Entry Unsuccessful!! Please Try Again')</script>"; 
  } } 
?> 
<!DOCTYPE html> 
<html> 
<head> 
  <title>Staff Registration Form</title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
  <link rel="stylesheet" href="LoginPage.css"> 
</head> 
<body style="overflow-x:hidden;"> 
<nav class="navbar navbar-expand fixed-top navbar-light" style="background-color:lightgray;" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sansserif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="Authenticated_Admin_Dashboard.php">Home <span class="sronly"></span></a> 
            </li> 
            <li class="nav-item"> 
              <a class="nav-link" href="#">About</a> 
            </li> 
            <li class="nav-item"> 
                <a class="nav-link" href="#">Rooms</a> 
              </li> 
              <li class="nav-item"> 
                <a class="nav-link" href="#">Contact</a> 
              </li> 
</ul> 
          <form class="form-inline my-2 my-lg-0" > 
<a class="btn  my-2 my-sm-0" href="LoginPage.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Login</a>           </form> 
        </div> 
      </nav> 
 
      <script>           const navEl=document.querySelector('.navbar');         window.addEventListener('scroll',() =>{           if(window.scrollY>=56){             navEl.classList.add('navbar-scrolled'); 
          }           else {             navEl.classList.remove('navbar-scrolled'); 
          } 
 }) 
      </script> 
<div align="center" style="padding-top: 100px;"><h3>Register Here</h3></div> 
<div class="row" style="padding-top:40px;">  
<div class="col-md-3" ></div> 
  <div class="col-md-6" style="background-color: lightgray;padding: 30px; border-radius: 7px;margin-bottom: 
40px;"> 
    <form action="" method="post"> 
      <div class="form-group"> 
        <label>Id:</label> 
        <input type="text" class="form-control" name="id" required>       </div> 
      <div class="form-group"> 
        <label>Name:</label> 
        <input type="text" class="form-control" name="name" required>       </div> 
      <div class="form-group"> 
        <label>Phone Number:</label> 
        <input type="text" class="form-control" name="mobile" required>       </div> 
 
      <div class="form-group"> 
        <label>Department:</label> 
        <input type="text" class="form-control" name="dept"  required>       </div> 
 
      <div class="form-group"> 
        <label>Salary:</label> 
        <input type="text" class="form-control" name="salary" required>       </div> 
 
      <div > 
        <fieldset style="margin-right: 7px;">Join Date:&nbsp; 
        <input type="date" id="date"  name="joindate" onclick="selectDate()" style="margin-left: 13px;marginright: -10px;"> 
        </fieldset> 
      </div> 
       
      <div style="margin-top:20px;margin-bottom: 20px;"> 
        <fieldset>Resign Date:&nbsp; 
        <input type="date" id="date" name="resigndate" onclick="selectDate()"> 
        </fieldset> 
      </div> 
 
    <script >       function selectDate() {           const input = document.getElementById('date');           input.select(); 
          } 
      </script> 
<button type="submit" class="btn btn-warning" name="Register" >Register</button> 
</form> 
  </div> 
  <div class="col-md-3"></div> 
</div> 
</body> 
</html> 
