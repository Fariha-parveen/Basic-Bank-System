<?php
session_start();
$con=mysqli_connect("localhost","root","","banking_system") or die(mysqli_error($con));
$q="select * from customers ";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
//echo $_SESSION['name'];

?>
<!DOCTYPE html>
<html>
<head>

<link  href="home.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
<style>

</style>
</head>

      
    <body style="background-color:#6cabad;">
        <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
            
                    <a href="homepage.php" class="logo"> HOME</a>
                     </div>
                     <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
<li> <a href="views.php" class="header-link"><span class="glyphicon glyphicon-user"></span> Customers</a></li>
<li>  <a href="transactions.php" class="header-link"><span class="glyphicon glyphicon-log-in"></span> Transfer history </a>  </li>          
            </ul>
        </div>
        </div>
    </nav>
<div class="container">
<br><br><h1 style="color:black;text-shadow: 2px 2px black;">CUSTOMER INFORMATION</h1>
<br>
 <table class="table table-condensed table-bordered">
<thead>
		<th><b style="color:black; font-size:18px;">A/c No</b></th>
                                      <th><b style="color:black; font-size:18px;">Name</b></th>
		<th><b style="color:black; font-size:18px;">Email</b></th>
		<th><b style="color:black; font-size:18px;">Balance</b></th>
                                       <th></th>
		
	</thead>
	<tbody>
<tr class="info">
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Fariha">View</button>
				</form></td>
   </tr>
<tr>
        <?php  
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Ayesha">View</button>
				</form></td>
   </tr>
<tr class="info"">
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Ashani">View</button>
				</form></td>
   </tr>
<tr>
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Fahima">View</button>
				</form></td>
   </tr>
<tr class="info">
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><b><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Jabeen">View</button>
				</form></td>
   </tr>
<tr>
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Aparna">View</button>
				</form></td>
   </tr>
<tr class="info">
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Dhoni">View</button>
				</form></td>
   </tr>
<tr>
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Vajid">View</button>
				</form></td>
   </tr>
<tr class="info">
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Ramesh">View</button>
				</form></td>
   </tr>
<tr>
        <?php  
     
 $row=mysqli_fetch_array($result);
           ?>
 <td><b><?php echo  $row["id"]; ?></b></td>
  <td><b><?php echo  $row["name"]; ?></b></td>
  <td><b><?php echo  $row["email"]; ?></b></td>
 <td><b><?php echo  $row["balance"]; ?></b></td>
<td><form action="user.php" method="post"  class="view">
					<button class="btn btn-primary" type="submit" name="name" value="Vijay">View</button>
				</form></td>
   </tr>
</tbody>
</table>
</div>
 <footer class="footer">
            Sparks Foundation Internship@2021
        </footer>
</body>
</html>