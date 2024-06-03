<?php 
  session_start(); 
  if(isset($_POST['Search'])){ 
  $connection=mysqli_connect("localhost","root",""); 
  $db=mysqli_select_db($connection,"limelight"); 
  $indate=$_POST['indate']; 
  $outdate=$_POST['outdate']; 
  $roomtype=$_POST['roomtype']; 
  $user=$_GET['user']; 
  $username=$_GET['username'];   if($indate && $outdate){ 
header("location:ro.php?in=".$indate."&out=".$outdate."&rt=".$roomtype."&user=".$user."&username=".$username); 
  exit(); 
} 
} 
?> 
 
<!DOCTYPE html> 
<html lang="en"> 
<head>   
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="../index.css"> 
<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'> 
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'> 
 
<script src="https://kit.fontawesome.com/bdccefc02b.js" crossorigin="anonymous"></script> 
 
<title>Availablility</title> 
</head> 
<body style="overflow-x:hidden;"> 
   <nav class="navbar navbar-expand fixed-top navbar-light" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
         
 <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sansserif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="Admin_Dashboard.php?x=<?php echo $_GET['username'] ?>&y=<?php echo $_GET['user'] ?>">Home <span class="sr-only">(current)</span></a> 
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
             
            <a class="btn  my-2 my-sm-0" href="HMS_Admin/Logout.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a>           </form> 
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
 
      <div align="center" style="padding-top: 100px;"><h3>Book Rooms</h3></div> 
 
      <div class="row" style="padding-top:30px;">  
     
  <div class="col-md-3" ></div> 
  <div class="col-md-6" style="background-color: lightgray;padding: 30px; border-radius: 7px;margin-bottom: 40px;" align="center "> 
    <form action="" method="post"> 
      <div > 
        <fieldset style="margin-right: 7px;">Check In Date:&nbsp; 
        <input type="date" id="date"  name="indate" onclick="selectDate()" style="margin-left: 13px;margin-right: -10px;"> 
        </fieldset> 
      </div> 
       
      <div style="margin-top:20px;margin-bottom: 20px;"> 
        <fieldset>Check Out Date:&nbsp; 
        <input type="date" id="date" name="outdate" onclick="selectDate()">         </fieldset> 
      </div> 
 
    <script > 
      function selectDate() { 
          const input = document.getElementById('date');           
          input.select(); 
          } 
      </script> 
 
<div class="form-group"> 
        <label for="roomtype" style="margin-right:30px;">Room Type:</label> 
          <select name="roomtype" id="roomtype" style="width:145px;margin-right: -15px;"> 
          <option value="deluxe">Deluxe</option> 
          <option value="executive">Executive</option> 
          <option value="standard">Standard</option> 
          <option value="suite">Suite</option> 
      </select> 
      </div> 
 
      <button type="submit" class="btn btn-warning" name="Search" style="margin-top:10px;">Search</button> 
       
    </form> 
  </div> 
  <div class="col-md-3"></div> 
</div>       
</body> 
</html> 
