<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap User Profile</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

  
</head>

<body>
<form method="GET" action='profile.php'>
  <div id="user-profile-2" class="user-profile">
		<div class="container">
		<ul class="nav nav-tabs">
   			 <li class="active"><a data-toggle="tab" href="#home">Profile</a></li>
   			 <li><a data-toggle="tab" href="#friends">Friends</a></li>
			</ul>

  
				<div id="home" class="tab-pane fade in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="http://bootdey.com/img/Content/avatar/avatar6.png">
							</span>

							<div class="space space-4"></div>

							<!-- <a href="#" class="btn btn-sm btn-block btn-success">
								<i class="ace-icon fa fa-plus-circle bigger-120"></i>
								<span class="bigger-110">Add as a friend</span>
							</a>

							<a href="#" class="btn btn-sm btn-block btn-primary">
								<i class="ace-icon fa fa-envelope-o bigger-110"></i>
								<span class="bigger-110">Send a message</span>
							</a> -->
						</div><!-- /.col -->

						<div class="col-xs-12 col-sm-9">
							<h4 class="blue">
								<span class="middle">PROFILE</span>

								<span class="label label-purple arrowed-in-right">
									<i class="ace-icon fa fa-circle smaller-80 align-middle"></i>
									online
								</span>
							</h4>

							<div class="profile-user-info">
								<div class="profile-info-row">
									<div class="profile-info-name"></div>

									<div class="profile-info-value">
										<span><?php  if (isset($_SESSION['username'])) : ?>
    										<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    											
    										<?php endif ?></div></span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Location </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span>Netherlands</span>
										<span>Amsterdam</span>
									</div>
								</div>

								

							<div class="hr hr-8 dotted"></div>

							<div class="profile-user-info">

								<div class="profile-info-row">
									<div class="profile-info-name">
										<i class="middle ace-icon fa fa-facebook-square bigger-150 blue"></i>
									</div>

									<div class="profile-info-value">
										<a href="#">Find me on Facebook</a>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name">
										<i class="middle ace-icon fa fa-twitter-square bigger-150 light-blue"></i>
									</div>

									<div class="profile-info-value">
										<a href="#">Follow me on Twitter</a>
									</div>
								</div>
							</div>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<!-- <div class="space-20"></div> -->

					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="widget-box transparent">
								<div class="widget-header widget-header-small">
									<h4 class="widget-title smaller">
										<i class="ace-icon fa fa-check-square-o bigger-110"></i>
										Little About Me
									</h4>
								</div>

								<div class="widget-body">
									<div class="widget-main">
									<table>
 					<tr>
  					<th></th> 
 					</tr>
					 <?php
					 $user = $_SESSION['username'];
					$conn = mysqli_connect("localhost", "root", "", "registration");
  					// Check connection
  					if ($conn->connect_error) {
  					 die("Connection failed: " . $conn->connect_error);
					  } 
    											
 					 $sql = "SELECT Bio FROM users where username= '$user'";
  					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
 					  // output data of each row
				  	 while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["Bio"];
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
					?>
				</table>
										
										<!-- <p>
											My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.</p>
											<p>Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.</p>
											<p>The best thing about my job is that vestibulum id ligula porta felis euismod </p><P>and nullam quis risus eget urna mollis ornare.
											Thanks for visiting my profile.</p>
										</p> -->
										<p> 
										<button type="submit" class="btn" name="login_user">
											<a href="index.php?logout='1'" style="btn" >logout</a></button> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>

			

<div id="friends" class="tab-pane fade">
															
				<table>
 					<tr>
  					<th>Id</th> 
  					<th>Username</th> 
					<th>Email</th>
 					</tr>
 					<?php
					$conn = mysqli_connect("localhost", "root", "", "registration");
  					// Check connection
  					if ($conn->connect_error) {
  					 die("Connection failed: " . $conn->connect_error);
  					} 
 					 $sql = "SELECT id, username, email FROM users";
  					$result = $conn->query($sql);
					  if ($result->num_rows > 0) {
 					  // output data of each row
				  	 while($row = $result->fetch_assoc()) {
				    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"] . "</td><td>"
					. $row["email"]. "</td></tr>";
					}
					echo "</table>";
					} else { echo "0 results"; }
					$conn->close();
					?>
				</table>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  
</form>
</body>

</html>
