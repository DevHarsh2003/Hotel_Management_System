<html> 
<head> 
  <title>Room Status</title> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous"> 
  <link rel="stylesheet" href="LoginPage.css"> 
</head> 
<body style="overflow-x:hidden;"> 
<nav class="navbar navbar-expand fixed-top navbar-light" style="background-color:darkgrey;" > 
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
<a class="btn  my-2 my-sm-0" href="../HMS_Admin/Logout.php"  style="margin: 10%;background-color: black;color: aliceblue;font-family: Arial, Helvetica, sans-serif;font-style: italic; border-radius: 5px;">Logout</a>           </form> 
        </div> 
      </nav> 
 
      <script>           const navEl=document.querySelector('.navbar');         window.addEventListener('scroll',() =>{           if(window.scrollY>=56){             navEl.classList.add('navbar-scrolled'); 
          }           else {             navEl.classList.remove('navbar-scrolled'); 
          } 
      }) 
      </script> 
 
      <div  style="margin-top: 100px;"> 
<div class="col-md-12"> 
          <h4>Staff Details</h4> 
          <table class="table"> 
            <thead> 
              <tr> 
                <th>Id</th> 
                <th>Name</th> 
                <th>Mobile</th> 
                <th>Department</th> 
                <th>Salary</th> 
                <th>Join Date</th> 
                <th>Resign Date</th> 
               <th>Delete</th> 
              </tr> 
            </thead> 
            <?php  
              $connection=mysqli_connect("localhost","root",""); 
              $db=mysqli_select_db($connection,"limelight"); 
              $query="select * from staff"; 
              $query_run = mysqli_query($connection,$query);               while($row = mysqli_fetch_assoc($query_run)){ 
                ?> 
                <tr> 
                  <td><?php echo $row['id'] ?></td> 
                  <td><?php echo $row['name'] ?></td> 
                  <td><?php echo $row['mobile'] ?></td> 
                   <td><?php echo $row['dept'] ?></td> 
                  <td><?php echo $row['salary'] ?></td>                   <td><?php echo $row['joindate'] ?></td> 
                  <td><?php echo $row['resigndate'] ?></td> 
               <!---  <td><a href="extend.php?in=<?php // echo $row['in_date'] ?>&rn=<?php // echo 
$row['roomno']; ?>&rt= <?php //echo "Deluxe";?>" class="btn btn-warning" >Extend</a> </td> //--> 
                  <td><a href="staffdelete.php?id=<?php  echo $row['id'] ?>" class="btn btn-success" >Delete</a> </td> 
 
                </tr> 
                <?php 
              } 
            ?> 
          </table> 
        </div> 
      </div> 
</body> 
</html> 
