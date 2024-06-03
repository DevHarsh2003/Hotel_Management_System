<!DOCTYPE html> 
 	<html lang="en"> 
 	<head>   
 	    <meta charset="UTF-8"> 
 	    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
 	    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
 	    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> 
 	<link rel="stylesheet" href="index.css"> 
 	<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'> 
 	<link href='https://fonts.googleapis.com/css?family=Alegreya Sans SC' rel='stylesheet'> 
<script src="https://kit.fontawesome.com/bdccefc02b.js" crossorigin="anonymous"></script> 
 	 
 	<title>LimeLight</title> 
 	</head> 
 	<body> 
 	   <nav class="navbar navbar-expand fixed-top navbar-light" > 
 	        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
 	<div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sans-serif;font-style: italic;letter-spacing: 1px;"> 
 	          <ul class="navbar-nav ml-auto" > 
 	            <li class="nav-item active"> 
 	              <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>  	            </li> 
 	            <li class="nav-item"> 
 	              <a class="nav-link" href="#about">About</a> 
 	            </li> 
 	            <li class="nav-item"> 
 	                <a class="nav-link" href="#rooms">Rooms</a> 
 	              </li> 
 	              <li class="nav-item"> 
 	           <a class="nav-link" href="#contact">Contact</a> 
 	              </li> 
 	</ul> 
 	 <form class="form-inline my-2 my-lg-0" > 
 	<a class="btn  my-2 my-sm-0" href="HMS_Admin/LoginPage.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 
5px;">Login</a> 
  </form> 
 	   </div> 
 	    </nav> 
 	 
 	      <div > 
 	        <img src="valeriia-bugaiova-_pPHgeHz1uk-unsplash.jpg" alt="" height="100%" width="100%"> 
 	        <div class="centered" style="background-color:aliceblue ;padding-left: 2%; width: 27.5%;"><h1 style="font-family: brush script mt,cursive;background-color: aliceblue;transition-delay: 1s; ">         	           <span>&#8220;Love The LimeLight&rdquo;</span> 
 	           </h1> </div> 
 	      </div> 
 	 
 	      <div class="centered" style=" margin-top: 25%;"> 
 	        <form name="sentMessage" id="contactForm" novalidate> 
 	        <div id="success"></div> 
         <a href="HMS_Admin/LoginPage.php" class="btn btn-success" role="button" style="font-family: 'Merienda';">Book Now</a> 
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
 	       
 	        <div class="container" id="about"> 
 	            <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% ;margin-bottom: 5%;">About our hotel</h2><hr> 
 	              
 	            <div class="row"> 
 	                <div class="col-lg-6 col-sm" > 
                     <h4  style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 32px;">A best place to enjoy your life</h4> 
 	                    <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: 
rgb(88, 82, 82);">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at 
Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered </p> 
 	                     
 	                </div> 
                <div class="col-lg-6 col-sm" > 
 	                    <div class="img"><img src="anmol-seth-hDbCjHNdF48-unsplash.jpg" height="450px" width="525px"></div> 
 	                </div> 
 	            </div> 
 	        </div> 
 	 
 	<div class="container" id="rooms"> 
 	          <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% ;margin-bottom: 5%;">Rooms</h2><hr> 
 	            
 	          <div class="row"> 
 	 
 	            <div class="col-lg-6 col-sm" > 
 	              <div class="img"><img src="christian-lambert-vmIWr0NnpCQ-unsplash.jpg" height="450px" width="525px"></div> 
 	          </div> 
 	<div class="col-lg-6 col-sm" > 
 	                  <h4 style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 
32px;">Rest&nbsp;&nbsp;Relax&nbsp;&nbsp;Replenish</h4> 
 	                  <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: 
rgb(88, 82, 82);">Enjoy our elegant 40 m² guest rooms, designed in warm beige tones and tailored to the needs of private and business travelers alike.All rooms have a large marble bathroom, a double bed, air conditioning, an additional work area with free internet access and a walk-in closet. Our superior rooms impress with a wonderful view of the city and the adjacent park </p> 
 	                   
 	              </div> 
 	          </div> 
 	      </div> 
 	 
 	      <div id="contact" class="text-center" style="background-color: rgb(41, 37, 37); margin-top: 5%;paddingtop: 5%;padding-bottom: 5%;"> 
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
             <h3 style="font-family: 'Merienda';font-style: italic;color: aliceblue;">Address</h3><hr>              <div class="contact-item"> 
              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">4321 California St,</p> 
 	              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">San Francisco, CA 12345</p> 
 	            </div> 
 	          </div> 
 	          <div class="col-md-4" > 
             <h3 style="font-family: 'Merienda';font-style: italic;color: aliceblue;">Opening Hours</h3><hr>              <div class="contact-item"> 
 	              <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">MonThurs: 10:00 AM - 11:00 PM</p> 
               <p style="font-family: 'Alegreya Sans SC';font-style: italic; font-size: 20px;color:darkgrey;">Fri-Sun: 11:00 AM - 02:00 AM</p> 
 	            </div> 
 	          </div> 
 	        </div> 
 	        </div> 
 	</div> 
 	 
 	      <div id="footer" style="background-color: rgb(29, 27, 27); padding-top: 20px;" > 
 	        <div class="container text-center"  > 
 	          <div class="row"> 
 	          <div class="col-md-8"> 
 	            <p style="color: darkgrey;">&copy; 2009 LimeLight. All rights reserved. Established by <a href="http://www.templatewire.com" rel="nofollow" style="color:floralwhite"><i>FairField</i> </a></p>  	          </div> 
 	          <div class="col-md-4"> 
 	            <div class="social">  	              <div class="row">  
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
