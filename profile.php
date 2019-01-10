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
  <title>Bootstrap User Profile</title>
  
  
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/profile.css">

  
</head>

<body>
<form method="GET" action='profile.php'>
  <div id="user-profile-2" class="user-profile">
		<div class="tabbable">
			<ul class="nav nav-tabs padding-18">
				<li class="active">
					<a data-toggle="tab" href="#home">
						<i class="green ace-icon fa fa-user bigger-120"></i>
						Profile
					</a>
				</li>

				<li>
					<!-- <a data-toggle="tab" href="#feed">
						<i class="orange ace-icon fa fa-rss bigger-120"></i>
						Activity Feed
					</a> -->
				</li>

				<li>
					<a data-toggle="tab" href="#friends">
						<i class="blue ace-icon fa fa-users bigger-120"></i>
						Friends
					</a>
				</li>

				<li>
					<!-- <a data-toggle="tab" href="#pictures">
						<i class="pink ace-icon fa fa-picture-o bigger-120"></i>
						Pictures
					</a> -->
				</li>
			</ul>

			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
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

								<!-- <div class="profile-info-row">
									<div class="profile-info-name"> Age </div>

									<div class="profile-info-value">
										<span>38</span>
									</div>
								</div> -->

								<!-- <div class="profile-info-row">
									<div class="profile-info-name"> Joined </div>

									<div class="profile-info-value">
										<span>2010/06/20</span>
									</div>
								</div> -->

								<!-- <div class="profile-info-row">
									<div class="profile-info-name"> Last Online </div>

									<div class="profile-info-value">
										<span>3 hours ago</span>
									</div>
								</div>
							</div> -->

							<div class="hr hr-8 dotted"></div>

							<div class="profile-user-info">
								<!-- <div class="profile-info-row">
									<div class="profile-info-name"> Website </div>

									<div class="profile-info-value">
										<a href="#" target="_blank">www.alexdoe.com</a>
									</div>
								</div> -->

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

					<div class="space-20"></div>

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
										<p>
											My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.</p>
											<p>Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.</p>
											<p>The best thing about my job is that vestibulum id ligula porta felis euismod </p><P>and nullam quis risus eget urna mollis ornare.
											Thanks for visiting my profile.</p>
										</p>
										<p> 
										<button type="submit" class="btn" name="login_user">
											<a href="index.php?logout='1'" style="btn" >logout</a></button> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- /#home -->

				<!-- <div id="feed" class="tab-pane">
					<div class="profile-feed row">
						<div class="col-sm-6">
							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar1.png">
									<a class="user" href="#"> Alex Doe </a>
									changed his profile photo.
									<a href="#">Take a look</a>

									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										an hour ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Susan Smith's avatar" src="http://bootdey.com/img/Content/avatar/avatar2.png">
									<a class="user" href="#"> Susan Smith </a>

									is now friends with Alex Doe.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										2 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>
									joined
									<a href="#">Country Music</a>

									group.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										5 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>
									uploaded a new photo.
									<a href="#">Take a look</a>

									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										5 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="David Palms's avatar" src="http://bootdey.com/img/Content/avatar/avatar3.png">
									<a class="user" href="#"> David Palms </a>

									left a comment on Alex's wall.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										8 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>
						</div><!-- /.col -->

						<!-- <div class="col-sm-6">
							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>
									published a new blog post.
									<a href="#">Read now</a>

									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										11 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<img class="pull-left" alt="Alex Doe's avatar" src="http://bootdey.com/img/Content/avatar/avatar4.png">
									<a class="user" href="#"> Alex Doe </a>

									upgraded his skills.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										12 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>

									logged in.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										12 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>

									logged out.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										16 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>

							<div class="profile-activity clearfix">
								<div>
									<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
									<a class="user" href="#"> Alex Doe </a>

									logged in.
									<div class="time">
										<i class="ace-icon fa fa-clock-o bigger-110"></i>
										16 hours ago
									</div>
								</div>

								<div class="tools action-buttons">
									<a href="#" class="blue">
										<i class="ace-icon fa fa-pencil bigger-125"></i>
									</a>

									<a href="#" class="red">
										<i class="ace-icon fa fa-times bigger-125"></i>
									</a>
								</div>
							</div>
						</div><!-- /.col -->
					<!-- </div>/.row -->

					<div class="space-12"></div>

					<div class="center">
						<!-- <button type="button" class="btn btn-sm btn-primary btn-white btn-round"> -->
							<!-- <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i> -->
							<!-- <span class="bigger-110">View more activities</span> -->

							<!-- <i class="icon-on-right ace-icon fa fa-arrow-right"></i> -->
						</button>
					</div>
				</div>

				<div id="friends" class="tab-pane">
					<div class="profile-users clearfix">
						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Bob Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-online"></span>
											Bob Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Content Editor</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
											<span class="green"> 20 mins ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Rose Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-offline"></span>
											Rose Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Graphic Designer</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
											<span class="grey"> 30 min ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Jim Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-busy"></span>
											Jim Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">SEO &amp; Advertising</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 red"></i>
											<span class="grey"> 1 hour ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar3.png" alt="Alex Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-idle"></span>
											Alex Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Marketing</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
											<span class=""> 40 minutes idle </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar4.png" alt="Phil Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-online"></span>
											Phil Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Public Relations</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
											<span class="green"> 2 hours ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar6.png" alt="Susan Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-online"></span>
											Susan Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">HR Management</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 orange"></i>
											<span class="green"> 20 mins ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar1.png" alt="Jennifer Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-offline"></span>
											Jennifer Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Graphic Designer</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
											<span class="grey"> 2 hours ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="itemdiv memberdiv">
							<div class="inline pos-rel">
								<div class="user">
									<a href="#">
										<img src="http://bootdey.com/img/Content/avatar/avatar2.png" alt="Alexa Doe's avatar">
									</a>
								</div>

								<div class="body">
									<div class="name">
										<a href="#">
											<span class="user-status status-offline"></span>
											Alexa Doe
										</a>
									</div>
								</div>

								<div class="popover">
									<div class="arrow"></div>

									<div class="popover-content">
										<div class="bolder">Accounting</div>

										<div class="time">
											<i class="ace-icon fa fa-clock-o middle bigger-120 grey"></i>
											<span class="grey"> 4 hours ago </span>
										</div>

										<div class="hr dotted hr-8"></div>

										<div class="tools action-buttons">
											<a href="#">
												<i class="ace-icon fa fa-facebook-square blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
											</a>

											<a href="#">
												<i class="ace-icon fa fa-google-plus-square red bigger-150"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="hr hr10 hr-double"></div>

					<!-- <ul class="pager pull-right">
						<li class="previous disabled">
							<a href="#">← Prev</a>
						</li>

						<li class="next">
							<a href="#">Next →</a>
						</li>
					</ul> -->
				</div>

				<!-- <div id="pictures" class="tab-pane">
					<ul class="ace-thumbnails">
						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/2/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/3/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/4/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/5/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/6/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/7/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>

						<li>
							<a href="#" data-rel="colorbox">
								<img alt="150x150" src="http://lorempixel.com/200/200/nature/1/">
								<div class="text">
									<div class="inner">Sample Caption on Hover</div>
								</div>
							</a>

							<div class="tools tools-bottom">
								<a href="#">
									<i class="ace-icon fa fa-link"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-paperclip"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-pencil"></i>
								</a>

								<a href="#">
									<i class="ace-icon fa fa-times red"></i>
								</a>
							</div>
						</li>
					</ul>
				</div>/#pictures -->
			</div>
		</div>
	</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>

  
</form>
</body>

</html>