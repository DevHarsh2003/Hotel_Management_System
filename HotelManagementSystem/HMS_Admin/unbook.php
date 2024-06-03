<?php  
session_start();   
if(isset($_POST['unbook'])){ 
    $connection=mysqli_connect("localhost","root","");     
    $db=mysqli_select_db($connection,"limelight"); if($_GET['rt']=='deluxe'){ 
      $query="delete from deluxe where roomno='$_GET[rn]' and in_date='$_GET[in]' and out_date='$_GET[out]'"; 
    } 
if($_GET['rt']=='executive'){ 
      $query="delete from executive where roomno='$_GET[rn]' and in_date='$_GET[in]' and out_date='$_GET[out]'"; 
    } 
if($_GET['rt']=='standard'){ 
      $query="delete from standard where roomno='$_GET[rn]' and in_date='$_GET[in]' and out_date='$_GET[out]'"; 
    } 
if($_GET['rt']=='suite'){ 
      $query="delete from suite where roomno='$_GET[rn]' and in_date='$_GET[in]' and out_date='$_GET[out]'"; 
    } 
$query_run=mysqli_query($connection,$query);     
if($query_run){       
    header("location:UnbookRedirect_Page.php?user=".$_GET['user']."&username=".$_GET['username']); 
    }     
    else{        
        echo  "<script>alert('Booking Unsuccessful')</script>"; 
    } 
     
} 
?> 
<html> 
<head> 
  <title>Unbook</title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
  <link rel="stylesheet" href="LoginPage.css"> 
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
 <form class="form-inline my-2 my-lg-0" > 
<a class="btn  my-2 my-sm-0" href="Logout.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a>           </form> 
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
<div> 
      <div class="col-md-6"></div> 
      <h6 align="center" style="margin-top: 100px;">Do You Really Want To Unbook?</h6> 
        <div class="col-md-2" style="margin-left:635px">  
      <form method="post"> 
        <button class="btn btn-success" name="unbook" style="margin-top:10px;font-size:15px;paddingleft:15px;padding-right: 15px;">Yes</button> 
      </form> 
      </div> 
      <div class="col-md-6"></div> 
       </div> 
</body> 
</html> 
