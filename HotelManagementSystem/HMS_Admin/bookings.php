<html> 
<head> 
  <title>Current Bookings</title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
  <link rel="stylesheet" href="../index.css"> 
</head> 
<body style="overflow-x:hidden; "> 
<nav class="navbar navbar-expand fixed-top navbar-light" style="background-color:darkgrey;" > 
        <a class="navbar-brand" href="#" style="font-style:italic; font-family:Verdana, Geneva, Tahoma, sansserif;"><img src="../logo.png" alt="" height="30" width="40" style="border-radius:20% ; marginbottom:2% ;margin-right: -2%;">&nbsp;&nbsp;LimeLight</a> 
<div class="collapse navbar-collapse" id="navbarSupportedContent" style="font-family: Arial, Helvetica, sansserif;font-style: italic;letter-spacing: 1px;"> 
          <ul class="navbar-nav ml-auto" > 
            <li class="nav-item active"> 
              <a class="nav-link" href="Admin_Dashboard.php?x=<?php echo $_GET['username']?>&y=<?php echo $_GET['user']?>">Home <span class="sr-only">(current)</span></a> 
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
          <form class="form-inline my-2 my-lg-0"> 
<a class="btn  my-2 my-sm-0" href="Logout.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a>           </form> 
        </div> 
      </nav> <script>           
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
<div class="container" style="margin-top: 100px;">  
  <h4 align="center">Deluxe Rooms</h4> 
<div class="row" style="padding-top:30px;padding-bottom: 80px;" > 
  <div class="col-md-4"></div> 
  <div class="col-md-4" style="background-color:lightgray;padding: 20px;border-radius: 8px;">          
  <?php 
          $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        $query="select * from deluxe"; 
        $query_run=mysqli_query($connection,$query); 
        $user=$_GET['user']; 
        $userc=0;         
        while($row = mysqli_fetch_assoc($query_run)){           
            if($row['email']==$user){ 
            $userc=$userc+1; 
          ?> 
        <div class="col-md-2" style="margin-left: 8px;"> 
          <div class="card bg-light" style="width:300px"> 
            <div class="card-header">Room No:&nbsp;<?php echo $row['roomno'] ?></div> 
            <div class="card-body"> 
              Check-In Date:&nbsp;<?php echo $row['in_date'] ?><br>Check-Out Date:&nbsp;<?php echo $row['out_date'] ?><br><br> 
 <a href="unbook.php?user=<?php echo $_GET['user']; ?>&username=<?php echo $_GET['username'] 
?>&rn=<?php echo $row['roomno'] ?>&rt=<?php echo "deluxe"; ?>&in=<?php echo $row['in_date'] 
?>&out=<?php echo $row['out_date'] ?>" class="btn btn-danger <?php if($row['in_date']){echo "active";}else{echo "disabled";} ?>">UnBook</a> 
</div> 
          </div> 
        </div> 
        <?php 
        } 
      } 
      if($userc==0){ 
        ?> 
        <h6 align="center">No Current Bookings</h6> 
        <?php 
      } 
        ?> 
        </div> 
        <div class="col-md-4"></div> 
      </div> 
</div> 
<hr> 
 
  <div class="container" style="margin-top: 100px;">  
  <h4 align="center">Executive Rooms</h4> 
<div class="row" style="padding-top:30px;padding-bottom: 80px;" > 
  <div class="col-md-4"></div> 
  <div class="col-md-4" style="background-color:lightgray;padding: 20px;border-radius: 8px;">          <?php 
          $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        $query="select * from executive"; 
        $query_run=mysqli_query($connection,$query); 
        $user=$_GET['user']; 
        $userc=0; 
        while($row = mysqli_fetch_assoc($query_run)){           
            if($row['email']==$user){ 
            $userc=$userc+1; 
          ?> 
        <div class="col-md-2" style="margin-left: 8px;"> 
          <div class="card bg-light" style="width:300px"> 
            <div class="card-header">Room No:&nbsp;<?php echo $row['roomno'] ?></div> 
            <div class="card-body"> 
              Check-In Date:&nbsp;<?php echo $row['in_date'] ?><br>Check-Out Date:&nbsp;<?php echo $row['out_date'] ?><br><br> 
              <a href="unbook.php?user=<?php echo $_GET['user']; ?>&username=<?php echo $_GET['username'] 
?>&rn=<?php echo $row['roomno'] ?>&rt=<?php echo "executive"; ?>&in=<?php echo $row['in_date'] 
?>&out=<?php echo $row['out_date'] ?>" class="btn btn-danger <?php if($row['in_date']){echo "active";}else{echo "disabled";} ?>">UnBook</a> 
</div> 
          </div> 
        </div> 
        <?php 
        } 
      } 
      if($userc==0){ 
        ?> 
        <h6 align="center">No Current Bookings</h6> 
        <?php 
      } 
        ?> 
        </div> 
        <div class="col-md-4"></div> 
      </div> 
</div> 
<hr> 
 
<div class="container" style="margin-top: 100px;">  
  <h4 align="center">Standard Rooms</h4> 
<div class="row" style="padding-top:30px;padding-bottom: 80px;" > 
  <div class="col-md-4"></div> 
  <div class="col-md-4" style="background-color:lightgray;padding: 20px;border-radius: 8px;">          <?php 
          $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        $query="select * from standard"; 
        $query_run=mysqli_query($connection,$query); 
        $user=$_GET['user']; 
        $userc=0;         
        while($row = mysqli_fetch_assoc($query_run)){           
            if($row['email']==$user){ 
            $userc=$userc+1; 
          ?> 
        <div class="col-md-2" style="margin-left: 8px;"> 
          <div class="card bg-light" style="width:300px"> 
            <div class="card-header">Room No:<?php echo $row['roomno'] ?></div> 
            <div class="card-body"> 
              Check-In Date:&nbsp;<?php echo $row['in_date'] ?><br>Check-Out Date:&nbsp;<?php echo $row['out_date'] ?><br><br> 
              <a href="unbook.php?user=<?php echo $_GET['user']; ?>&username=<?php echo $_GET['username'] 
?>&rn=<?php echo $row['roomno'] ?>&rt=<?php echo "standard"; ?>&in=<?php echo $row['in_date'] 
?>&out=<?php echo $row['out_date'] ?>" class="btn btn-danger <?php if($row['in_date']){echo "active";}else{echo "disabled";} ?>">UnBook</a> 
</div> 
          </div> 
        </div> 
        <?php 
        } 
      } 
      if($userc==0){ 
        ?> 
        <h6 align="center">No Current Bookings</h6> 
        <?php 
      } 
        ?> 
        </div> 
        <div class="col-md-4"></div> 
      </div> 
</div> 
<hr> 
 
<div class="container" style="margin-top: 100px;">  
  <h4 align="center">Suite Rooms</h4> 
<div class="row" style="padding-top:30px;padding-bottom: 80px;" > 
  <div class="col-md-4"></div> 
  <div class="col-md-4" style="background-color:lightgray;padding: 20px;border-radius: 8px;">          <?php 
          $connection=mysqli_connect("localhost","root",""); 
       $db=mysqli_select_db($connection,"limelight"); 
        $query="select * from Suite"; 
        $query_run=mysqli_query($connection,$query); 
        $user=$_GET['user']; 
        $userc=0;         
        while($row = mysqli_fetch_assoc($query_run)){           
            if($row['email']==$user){ 
            $userc=$userc+1; 
          ?> 
        <div class="col-md-2" style="margin-left: 8px;"> 
          <div class="card bg-light" style="width:300px"> 
            <div class="card-header">Room No:<?php echo $row['roomno'] ?></div> 
            <div class="card-body"> 
              Check-In Date:&nbsp;<?php echo $row['in_date'] ?><br>Check-Out Date:&nbsp;<?php echo $row['out_date'] ?><br><br> 
              <a href="unbook.php?user=<?php echo $_GET['user']; ?>&username=<?php echo $_GET['username'] 
?>&rn=<?php echo $row['roomno'] ?>&rt=<?php echo "suite"; ?>&in=<?php echo $row['in_date'] 
?>&out=<?php echo $row['out_date'] ?>" class="btn btn-danger <?php if($row['in_date']){echo "active";}else{echo "disabled";} ?>">UnBook</a> 
</div> 
          </div> 
        </div> 
        <?php 
        } 
      } 
      if($userc==0){ 
        ?> 
        <h6 align="center">No Current Bookings</h6> 
        <?php 
      } 
        ?> 
        </div> 
        <div class="col-md-4"></div> 
      </div> 
</div> 
<hr>   
 
</body> 
</html> 
