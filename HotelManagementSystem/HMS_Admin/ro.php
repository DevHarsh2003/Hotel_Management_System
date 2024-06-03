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
 
    <title>Document</title> 
</head> 
 
<?php  
       if($_GET['rt']=='deluxe'){ 
       $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        ?> 
<body style="overflow-x:hidden;"> 
          <nav class="navbar navbar-expand fixed-top navbar-light" > 
          <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
           
         
          <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sans-serif;font-style: italic;letter-spacing: 1px;"> 
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
 
          <div class="container"> 
            <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% ;margin-bottom: 5%;">Deluxe Rooms</h2><hr> 
              
            <div class="row"> 
                <div class="col-lg-6 col-sm" >                     <br><br> 
                    <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: rgb(88, 82, 82);">The Elite Deluxe rooms offers that luxury and comfort to our guests. The Super deluxe hotel room is finely decorated for your luxurious stay and contains all basic amenities such as Color LCD with Cable, Large windows for the perfect valley views, cozy double bed with quality material, Resting chair, Dressing mirror, Mini Fridge and 24 hrs running hot and cold water at the attached bathroom.</p> </div> 
                <div class="col-lg-6 col-sm" > 
                    <div class="img"><img src="edelle-bruton-PJNO2sLlbB8-unsplash-500x375.jpg" height="400px" width="525px"></div> 
                </div> 
            </div> 
        </div> 
 
        <div class="row" style="padding-top:30px;padding-bottom: 80px;" >         
        <?php         
        $c=401; 
        while($c<=404){ 
          $p=0;?> 
          <div class="col-md-2" style="margin-left: 70px;"> 
          <div class="card bg-light" style="width:300px"> 
          <div class="card-header">Room No:<?php echo "$c" ?></div> 
          <?php 
          $query="select * from deluxe"; 
          $query_run=mysqli_query($connection,$query);           
          while($row = mysqli_fetch_assoc($query_run)){             
            if($row['roomno']==$c){ 
              if(($row['in_date']<=$_GET['in'] && $_GET['in']<$row['out_date']) || ($row['in_date']<$_GET['out'] && $_GET['out']<=$row['out_date']) || ($row['in_date']>=$_GET['in'] && $_GET['out']>=$row['out_date'])){ 
                ?> 
                <div class="card-body"> 
                <p class="card-text">Room Status:<b>&nbsp;Already Booked</b></p> 
                <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary disabled" >Book</a> 
                 </div>                  
                 <?php                  
                 $p=-1;                  
                 break; 
              }              
               else{ 
                $p=$p+1; 
              } 
            } 
          } 
 
          if($p>0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          if($p==0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          $c=$c+1; 
          ?> 
          </div> 
        </div> 
        <?php 
        } 
        ?> 
      </div> 
    </body> 
    <?php 
      } 
 
if($_GET['rt']=='executive'){ 
       $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        ?> 
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
             
            <a class="btn  my-2 my-sm-0" href="HMS_Admin/LoginPage.php"  style="margin: 10%;backgroundcolor: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Login</a> 
          </form> 
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
 
         <div class="container"> 
            <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% 
;margin-bottom: 5%;">Executive Rooms</h2><hr> 
              
            <div class="row"> 
                <div class="col-lg-6 col-sm" >                     <br><br> 
                    <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: rgb(88, 82, 82);">Executive rooms, with a luxurious double bed and seating area, are popular with business travellers and families. Modern and contemporary, they may accommodate an extra bed or interconnect.Along with free WiFi, Executive rooms have air conditioning and bathrobes. A delicious breakfast is available for guests as either room service or takeaway.</p> 
                     
                </div> 
                <div class="col-lg-6 col-sm" > 
 <div class="img"><img src="rod-long-2P_ifaetDm0-unsplash.jpg" height="400px" width="525px"></div> 
                </div> 
            </div> 
        </div> 
 
          <div class="row" style="padding-top:30px;padding-bottom: 80px;" >         
          <?php         
          $c=301; 
        while($c<=304){ 
          $p=0;?> 
          <div class="col-md-2" style="margin-left: 70px;"> 
          <div class="card bg-light" style="width:300px"> 
          <div class="card-header">Room No:<?php echo "$c" ?></div> 
          <?php 
          $query="select * from executive"; 
          $query_run=mysqli_query($connection,$query);           
          while($row = mysqli_fetch_assoc($query_run)){             
            if($row['roomno']==$c){               
                if(($row['in_date']<=$_GET['in'] && $_GET['in']<$row['out_date']) || ($row['in_date']<$_GET['out'] && $_GET['out']<=$row['out_date']) || ($row['in_date']>=$_GET['in'] && $_GET['out']>=$row['out_date'])){ 
                ?> 
                <div class="card-body"> 
                <p class="card-text">Room Status:<b>&nbsp;Already Booked</b></p> 
                <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary disabled" >Book</a> 
                 </div>                  
                 <?php                  
                 $p=-1;                  
                 break; 
              }               
              else{ 
                $p=$p+1; 
              } 
            } 
          } 
 
          if($p>0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          if($p==0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          $c=$c+1; 
          ?> 
          </div> 
        </div> 
        <?php 
        } 
        ?> 
      </div> 
    </body> 
    <?php 
      } 
 
if($_GET['rt']=='standard'){ 
       $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        ?> 
 
        <body style="overflow-x:hidden;" > 
 
   <nav class="navbar navbar-expand fixed-top navbar-light" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
         
       
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sans-serif;font-style: italic;letter-spacing: 1px;"> 
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
             
            <a class="btn  my-2 my-sm-0" href="HMS_Admin/LoginPage.php"  style="margin: 10%;backgroundcolor: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Login</a> 
          </form> 
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
 
        <div class="container"> 
            <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% ;margin-bottom: 5%;">Standard Rooms</h2><hr> 
              
            <div class="row"> 
                <div class="col-lg-6 col-sm" > 
                    <br> 
                    <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: 
rgb(88, 82, 82);">The Standard Room comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk & Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony. Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay. 
                    A Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms & inter-connecting rooms are also available.</p> </div> 
<div class="col-lg-6 col-sm" > 
<div class="img"><img src="vojtech-bruzek-Yrxr3bsPdS0-unsplash.jpg" height="400px" width="525px"></div> 
                </div> 
            </div> 
        </div> 
 
        <div class="row" style="padding-top:30px;padding-bottom: 80px;" >         
        <?php         
        $c=201; 
        while($c<=204){ 
          $p=0;?> 
          <div class="col-md-2" style="margin-left: 70px;"> 
          <div class="card bg-light" style="width:300px"> 
          <div class="card-header">Room No:<?php echo "$c" ?></div> 
          <?php 
          $query="select * from standard"; 
          $query_run=mysqli_query($connection,$query);          
           while($row = mysqli_fetch_assoc($query_run)){             
            if($row['roomno']==$c){ 
              if(($row['in_date']<=$_GET['in'] && $_GET['in']<$row['out_date']) || ($row['in_date']<$_GET['out'] && $_GET['out']<=$row['out_date']) || ($row['in_date']>=$_GET['in'] && $_GET['out']>=$row['out_date'])){ 
                ?> 
                <div class="card-body"> 
                <p class="card-text">Room Status:<b>&nbsp;Already Booked</b></p> 
                <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary disabled" >Book</a> 
                 </div>                  
                 <?php                  
                 $p=-1;                  
                 break;               
                }               
                else{ 
                $p=$p+1; 
              } 
            } 
          } 
 
          if($p>0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          if($p==0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          $c=$c+1; 
          ?> 
          </div> 
        </div> 
        <?php 
        } 
        ?> 
      </div> 
    </body> 
    <?php 
      } 
 
if($_GET['rt']=='suite'){ 
       $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        ?> 
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
             
            <a class="btn  my-2 my-sm-0" href="HMS_Admin/LoginPage.php"  style="margin: 10%;backgroundcolor: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Login</a> 
          </form> 
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
 
         <div class="container"> 
            <h2 class="text-center text-capitalize" style="font-family: 'Merienda';font-style: italic;margin-top: 5% ;margin-bottom: 5%;">Suite Rooms</h2><hr> 
              
            <div class="row"> 
                <div class="col-lg-6 col-sm" >                     <br><br> 
                    <p style="font-family:'Times New Roman', Times, serif;font-style: italic;font-size: 23px;color: 
rgb(88, 82, 82);">Experience a contemporary 42 sqm LimeLight Suite at the heart of Jakarta, designed perfectly for those who demand exclusive & relaxing stay. Rest comfortably on the king size bed with snuggly pillows and bolsters. Keep up with the work on the smart working desk with wireless mobile phone charging facility. Separate luxurious bathtub & shower with energizing amenities. Satellite TV with 60 local and international channels on a large 42 inch TV will keep you entertained.</p</div> 
 
 <div class="col-lg-6 col-sm" > 
   <div class="img"><img src="reisetopia-aI6Su7Mu9Ro-unsplash (1).jpg" height="400px" width="525px"></div> 
                </div> 
            </div> 
        </div> 
 
        <div class="row" style="padding-top:30px;padding-bottom: 80px;" >         
        <?php        
        $c=101; 
        while($c<=104){ 
          $p=0;?> 
          <div class="col-md-2" style="margin-left: 70px;"> 
          <div class="card bg-light" style="width:300px"> 
          <div class="card-header">Room No:<?php echo "$c" ?></div> 
          <?php 
          $query="select * from suite"; 
          $query_run=mysqli_query($connection,$query);           
          while($row = mysqli_fetch_assoc($query_run)){             
            if($row['roomno']==$c){               
                if(($row['in_date']<=$_GET['in'] && $_GET['in']<$row['out_date']) || ($row['in_date']<$_GET['out'] && $_GET['out']<=$row['out_date']) || ($row['in_date']>=$_GET['in'] && $_GET['out']>=$row['out_date'])){ 
                ?> 
                <div class="card-body"> 
                <p class="card-text">Room Status:<b>&nbsp;Already Booked</b></p> 
                <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary disabled" >Book</a> 
                 </div>                  
                 <?php                 
                $p=-1;                 
                 break; 
              }               
              else{ 
                $p=$p+1; 
              } 
            } 
          } 
 
          if($p>0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          if($p==0){ 
            ?> 
            <div class="card-body"> 
            <p class="card-text">Room Status:<b>&nbsp;Available</b></p> 
            <a href="bookrooms.php?in=<?php echo $_GET['in'] ?>&out=<?php echo $_GET['out']?>&rt=<?php echo $_GET['rt']?>&rn=<?php echo "$c" ?>&user=<?php echo $_GET['user'] ?>&username=<?php echo $_GET['username'] ?>" class="btn btn-primary active" >Book</a> 
            </div> 
          <?php 
          } 
          $c=$c+1; 
          ?> 
          </div> 
        </div> 
        <?php 
        } 
        ?> 
      </div> 
    </body> 
    <?php 
      } 
      ?> 
</html> 
