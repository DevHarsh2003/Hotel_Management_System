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
   <nav class="navbar navbar-expand fixed-top navbar-light" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; margin-bottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
         
      <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sans-serif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="Admin_Dashboard.php?x=<?php echo $_GET['x'] ?>&y=<?php echo $_GET['y'] ?>">Home <span class="sr-only">(current)</span></a> 
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
        <img src="manuel-moreno-DGa0LQ0yDPc-unsplash.jpg" alt="" height="600px" width="100%"> 
        <div class="centered" style="padding-left: 7%; width: 27.5%;top: 30%;"><h1 style="font-family: brush script mt,cursive;transition-delay: 1s; ">        
           <span>&#8220;Welcome <?php echo $_GET['x'];?>&rdquo;</span> 
           </h1> </div> 
      </div> 
 
      <div class="centered" style=" margin-top: 5%;"> 
        <form name="sentMessage" id="contactForm" novalidate> 
        <div id="success"></div> 
        <a href="rooms.php?user=<?php echo $_GET['y']?>&username=<?php  echo $_GET['x'] ?>" class="btn btn-success" role="button" style="font-family: 'Merienda';">Book Now</a> 
        <a href="bookings.php?user=<?php echo $_GET['y']?>&username=<?php  echo $_GET['x'] ?>" class="btn btn-success" role="button" style="font-family: 'Merienda';">My  Current Bookings</a> 
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
       
<div class="col-lg-12 col-sm" align="center"; style="margin-top: 50px;"> 
                  <h4 style="font-family: 'Alegreya Sans SC'; font-style: italic; font-size: 
32px;">A&nbsp;&nbsp;Place&nbsp;&nbsp;Of&nbsp;&nbsp;Yours!!</h4> 
                  <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: 
rgb(88, 82, 82);">LimeLight offers you a privileged experience combining comfort and conviviality. Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations. More than just a hotel,LimeLight offers you a place to live and meet people. 
The LimeLight hotel offers a complete experience with common areas that allow you to meet new people in a unique atmosphere. Lounge area, Ping Pong table, table soccer, darts & Boiler room: we told you, it’s not a hotel like the others, it’s a sharing hotel.</p>  </div> 
 <div id="contact" class="text-center" style="background-color: rgb(41, 37, 37); margin-top: 5%;padding-top: 
5%;padding-bottom: 5%;"> 
        <div class="container text-center"> 
          <div class="row">  
          <div class="col-md-4" > 
            <h3 style="font-family: 'Merienda';font-style: italic;color: rgb(231, 236, 240);">Reservations</h3><hr> 
            <div class="contact-item"> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">Please call</p> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">(887) 654-3210</p> 
            </div> 
          </div> 
          <div class="col-md-4" > 
            <h3 style="font-family: 'Merienda';font-style: italic;color: aliceblue;">Address</h3><hr>             <div class="contact-item"> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">4321 California St,</p> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">San Francisco, CA 12345</p> 
            </div> 
          </div> 
          <div class="col-md-4" > 
            <h3 style="font-family: 'Merienda';font-style: italic;color: aliceblue;">Opening Hours</h3><hr>             <div class="contact-item"> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">MonThurs: 10:00 AM - 11:00 PM</p> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">Fri-Sun: 11:00 AM - 02:00 AM</p> 
            </div> 
          </div> 
        </div> 
        </div> 
        </div> 
 
      <div id="footer" style="background-color: rgb(29, 27, 27); padding-top: 20px;" >         <div class="container text-center"  > 
          <div class="row"> 
          <div class="col-md-8"> 
            <p style="color: darkgrey;">&copy; 2009 LimeLight. All rights reserved. Established by <a href="http://www.templatewire.com" rel="nofollow" style="color:floralwhite"><i>FairField</i> </a></p> 
          </div> 
          <div class="col-md-4"> 
            <div class="social">               <div class="row">  
                <div class="col-md-2"><a href="#" style="color:floralwhite"><i class="fa fafacebook"></i></a></div> 
                <div class="col-md-2"><a href="#" style="color:floralwhite"><i class="fa fatwitter"></i></a></div> 
                <div class="col-md-2"><a href="#" style="color:floralwhite"><i class="fa fayoutube"></i></a></div> 
              </div> 
            </div> 
          </div> 
        </div> 
        </div> 
      </div> 
</body> 
</html>  
