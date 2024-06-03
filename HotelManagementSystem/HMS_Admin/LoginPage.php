<?php 
  session_start(); 
  if(isset($_POST['Admin_Login'])){ 
  $connection=mysqli_connect("localhost","root",""); 
  $db=mysqli_select_db($connection,"limelight"); 
  $query="select * from user where email= '$_POST[email]'"; 
  $query_run=mysqli_query($connection,$query);   if($_POST['email']=='admin1234@gmail.com'){     if($_POST['password']=='1234'){ 
       header("location:../HMS_AuthenticatedAdmin/Authenticated_Admin_Dashboard.php?x=".$_POST['email']); 
    } 
 
  }   
  else{ 
    while($row = mysqli_fetch_assoc($query_run)){       
        if($row['email']==$_POST['email']){           
            if($row['password']==$_POST['password']){ 
             header("location:Admin_Dashboard.php?x=".$row['name']."&y=".$row['email']); 
          }           else{ 
              echo "<script>alert('Wrong Password')</script>"; 
        } 
      }  
    } 
  } 
} 
?> 
 
<!DOCTYPE html> 
<html > 
  <head> 
  <title>Login </title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-
gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
  <link rel="stylesheet" href="LoginPage.css"> 
</head> 
<body style="overflow-x:hidden;"> 
 
    <nav class="navbar navbar-expand fixed-top navbar-light" style="background-color:lightgray;" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
         
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sansserif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a> 
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
 
      <script>   
        const navEl=document.querySelector('.navbar');         
        window.addEventListener('scroll',() =>{           
            if(window.scrollY>=56){ 
            navEl.classList.add('navbar-scrolled'); 
          }           
          else { 
            navEl.classList.remove('navbar-scrolled'); 
          } 
        }) 
      </script> 
<div align="center" style="padding-top: 100px;"><h3>Login Here</h3></div> 
    
  <div class="row" style="padding-top:30px;">  
     
  <div class="col-md-3"></div> 
  <div class="col-md-6" style="background-color: lightgray;padding: 30px; border-radius: 7px;">     <form action="" method="post"> 
      <div class="form-group"> 
        <label>Email:</label> 
        <input type="email" class="form-control" name="email" pattern=".+@gmail.com" required> 
      </div> 
      <div class="form-group"> 
        <label>Password:</label> 
        <input type="password" class="form-control" name="password" required>       </div> 
 
      <button type="submit" class="btn btn-warning" name="Admin_Login" style="size: 200px;">Login</button><br>       Or else <br> 
      <a class="btn btn-primary" href="Register.php" role="button">Register Here</a>     </form> 
  </div> 
  <div class="col-md-3"></div> 
</div> 
</body> 
</html> 
 
