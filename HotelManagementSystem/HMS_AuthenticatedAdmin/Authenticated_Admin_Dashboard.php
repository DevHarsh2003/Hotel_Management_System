<!DOCTYPE html> 
<html lang="en"> 
<head>   
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-
MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-
ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
<link rel="stylesheet" href="../index.css"> 
<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'> 
<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'> 
<script src="https://kit.fontawesome.com/bdccefc02b.js" crossorigin="anonymous"></script> 
 
<title>User Portal</title> 
</head> 
<body> 
   <nav class="navbar navbar-expand fixed-top navbar-light" style="background-color:white" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; margin-bottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
         
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sans-serif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="Authenticated_Admin_Dashboard.php">Home <span class="sr-only">(current)</span></a> 
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
             
            <a class="btn  my-2 my-sm-0" href="Logout.php"  style="margin: 10%;background-color: black;color: 
aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a> 
          </form> 
        </div> 
      </nav> 
 
      <div > 
        <img src="runnyrem-LfqmND-hym8-unsplash.jpg" alt="" height="600px" width="100%"> 
        <div class="centered" style="padding-left: 7%; width: 27.5%;top: 30%;"><h1 style="font-family: brush script mt,cursive;transition-delay: 1s; ">        
           <span style="color:white">Welcome Admin</span> 
           </h1> </div> 
      </div> 
 
      <div class="centered" style=" margin-top: 5%;"> 
        <form name="sentMessage" id="contactForm" novalidate> 
        <div id="success"></div> 
        <a href="status.php" class="btn btn-success" role="button" style="font-family: 'Merienda';">View Room Status</a> 
        <a href="staff.php" class="btn btn-success" role="button" style="font-family: 'Merienda';">Staff Details</a> 
        <a href="staffentry.php" class="btn btn-success" role="button" style="font-family: 'Merienda';">Staff Entry</a> 
      </form> 
      </div> 
 
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
       

        </div> 
        </div> 
      </div> 
</body> 
</html>  
