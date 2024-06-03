<?php  session_start();   
if(isset($_POST['Submit'])){ 
    $connection=mysqli_connect("localhost","root","");     
    $db=mysqli_select_db($connection,"limelight"); 
    if($_GET['rt']=='deluxe'){ 
        $query="insert into 
deluxe(email,roomno,holder_name,holder_mobile,holder_address,child,adult,in_date,out_date) values ('$_GET[user]','$_GET[rn]','$_POST[holder_name]','$_POST[holder_mobile]','$_POST[holder_address]','$_PO
ST[child]','$_POST[adult]','$_POST[in_date]','$_POST[out_date]')"; 
    } 
if($_GET['rt']=='executive'){ 
      $query="insert into 
executive(email,roomno,holder_name,holder_mobile,holder_address,child,adult,in_date,out_date) values ('$_GET[user]','$_GET[rn]','$_POST[holder_name]','$_POST[holder_mobile]','$_POST[holder_address]','$_PO
ST[child]','$_POST[adult]','$_POST[in_date]','$_POST[out_date]')"; 
    } 
if($_GET['rt']=='standard'){ 
      $query="insert into 
standard(email,roomno,holder_name,holder_mobile,holder_address,child,adult,in_date,out_date) values ('$_GET[user]','$_GET[rn]','$_POST[holder_name]','$_POST[holder_mobile]','$_POST[holder_address]','$_PO
ST[child]','$_POST[adult]','$_POST[in_date]','$_POST[out_date]')"; 
    } 
if($_GET['rt']=='suite'){ 
      $query="insert into 
suite(email,roomno,holder_name,holder_mobile,holder_address,child,adult,in_date,out_date) values 
('$_GET[user]','$_GET[rn]','$_POST[holder_name]','$_POST[holder_mobile]','$_POST[holder_address]','$_PO
ST[child]','$_POST[adult]','$_POST[in_date]','$_POST[out_date]')"; 
    } 
$query_run=mysqli_query($connection,$query);     if($query_run){       
    header("location:Redirect_Page.php?user=".$_GET['user']."&username=".$_GET['username']); 
    }     
    else{        echo  "<script>alert('Booking Unsuccessful')</script>";     } 
} 
?> 
<!DOCTYPE html> 
<html> 
<head> 
  <title>Booking Details</title> 
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
<a class="btn  my-2 my-sm-0" href="Logout.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a>           </form> 
        </div> 
      </nav> 
 
    <script>           const navEl=document.querySelector('.navbar');         window.addEventListener('scroll',() =>{           if(window.scrollY>=56){             navEl.classList.add('navbar-scrolled'); 
          }           else {             navEl.classList.remove('navbar-scrolled'); 
          } 
       }) 
      </script> 
<div align="center" style="padding-top: 100px;"><h3>Fill The Below Details</h3></div> 
    
  <div class="row" style="padding-top:40px;"> 
<div class="col-md-3" ></div> 
  <div class="col-md-6" style="background-color: lightgray;padding: 30px; border-radius: 7px;margin-bottom: 
40px;"> 
    <form action="" method="post"> 
      <div class="form-group"> 
        <label>Room Number:</label> 
        <input type="text" class="form-control" name="roomno" value="<?php echo $_GET['rn'] ?>" required> 
      </div> 
      <div class="form-group"> 
        <label>Holder Name:</label> 
        <input type="text" class="form-control" name="holder_name" required>       </div> 
 
      <div class="form-group"> 
        <label>Holder Mobile Number:</label> 
        <input type="text" class="form-control" name="holder_mobile" required>       </div> 
<div class="form-group"> 
        <label>Holder Address:</label> 
        <textarea rows="3" cols="40" class="form-control" name="holder_address" required></textarea>       </div> 
<div class="form-group"> 
        <label>No. Of Children</label> 
        <select class="form-control" name="child"> 
          <option>--Select--</option> 
          <option>0</option> 
          <option>1</option> 
          <option>2</option> 
          <option>3</option> 
          <option>4</option> 
        </select> 
      </div> 
 
      <div class="form-group"> 
        <label>No. Of Adult</label> 
        <select class="form-control" name="adult"> 
          <option>--Select--</option> 
          <option>0</option> 
          <option>1</option> 
          <option>2</option> 
          <option>3</option> 
          <option>4</option> 
          <option>5</option> 
          <option>6</option> 
        </select> 
      </div> 
 
      <div class="form-group"> 
        <label>Check In Date:</label> 
        <input type="text" class="form-control" name="in_date" value="<?php echo $_GET['in'] ?>" required>       </div> 
 
      <div class="form-group"> 
        <label>Check Out Date:</label> 
        <input type="text" class="form-control" name="out_date" value="<?php echo $_GET['out'] ?>" required>       </div> 
<button type="submit" class="btn btn-warning" name="Submit" >Submit</button> 
</form> 
  </div> 
  <div class="col-md-3"></div> 
</div> 
</body> 
</html> 
