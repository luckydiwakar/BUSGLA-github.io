<!DOCTYPE html>
<html lang="en">
<head>
  <title>index </title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text:ital@1&family=Indie+Flower&family=The+Nautigal&display=swap" rel="stylesheet">
</head>
<style>

*{
margin:0px;
padding:0px;
}
body{
background-color:#f3f3f5;
}

.nav-item:hover{
  background-color:#f8bf59;
}
nav-a a{
	padding-left:10px;
}
.float-right a{
	color:#fff;
}
.clearfix a{
	color:#fff;
}
.middel img{
	display: inline-block;
    z-index: 1;
    overflow: hidden;
    position: relative;
    vertical-align: middle;
    max-width: 100%;
    line-height: 1;
	}
.counter_area {
			border-bottom: 1px solid #595856;
			padding-bottom: 150px;
			padding-top: 150px;
			background-attachment: fixed;
			background-position: center center;
			background-repeat: no-repeat;
			background-size: cover;
			position: relative;
			color:#fff;
	}

.card-02{
		border-top-right-radius:50px;
		margin-top:20px;
}
span{
font-family: Georgia, 'Times New Roman', Times, serif;
}
</style>
<body>
<div class="container-fluid" style="background-color:#000000" >
<div class="container" >
	<nav class="navbar navbar-expand-md navbar-dark">
				<div class="text-light w-50">
					<span>GLA</span><span style="color:#ff4c4c">BUS</span><span>.com</span>				
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
					<div class="collapse navbar-collapse w-50 nav-a" id="collapsibleNavbar">
						<ul class="navbar-nav p-1" style="font-family:Georgia, 'Times New Roman', Times, serif;">
							<li class="nav-item">
								<a class="nav-link text-light" href="index.php"> <span>Home</span></a>
							</li>
						<li class="nav-item">
						<a class="nav-link text-light " onclick="myfun()" href="index.php">Pay Fee</a>
						</li> 
							 <li class="nav-item">
								<a class="nav-link text-light" href="contect.html">Contact</a>
							 </li> 
							 <li class="nav-item">
								<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" style="color:#ffffff" ><b>Signup</b></span></a>
							</li> 
								<li class="nav-item">
									<a href="#" class="pull-right btn sub1" data-toggle="modal" data-target="#myModa2"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" style="color:#ffffff"><b>Signin</b></span></a>
							</li>
						</ul>
					</div>						
				</nav>	
			</div>
		</div>
<script>
	function myfun(){
		alert("please login your frist");
	}
</script>
<div class="container-fluid">										<!--sine up  start -->
	<div class="header">
		<div class="row">
			<div class="col-lg-12">
				<!--sign in modal start-->
				<div class="modal fade" id="myModal">
					<div class="modal-dialog">
						<div class="modal-content title1">
							<div class="modal-header">
								<h4 class="modal-title title1"><span style="color:orange">Sineup</span></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							 </div>
							<div class="modal-body">
								<form class="form-horizontal" action="sign.php?q=account.php" method="POST">
									<fieldset>
										<!-- Text input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name"></label>  
			<div class="col-md-12">
				<input id="name" name="name" placeholder="Enter your name" class="form-control input-md" type="name"required>
			</div>
									</div>
				<div class="form-group">
					<label class="col-md-3 control-label" for="gender"></label>  
					<div class="col-md-12">
						<input id="gender" name="gender" placeholder="Enter your gender" class="form-control input-md" type="gender"required>
					</div>
				</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="email"></label>  
						<div class="col-md-12">
							<input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email" required>
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-3 control-label" for="course/year" ></label>  
						<div class="col-md-12">
							<input id="course" name="course" placeholder="Enter your course/year" class="form-control input-md" type="course" required>
						</div>
					</div>
					  <div class="form-group">
						<label class="col-md-3 control-label" for="mob"></label>  
						<div class="col-md-12">
						<input id="mob" name="mob" placeholder="Enter your mob" class="form-control input-md" type="mob"required>
						</div>
					  </div>
					<!-- Password input-->
					<div class="form-group">
						<label class="col-md-3 control-label" for="password"></label>
						<div class="col-md-12">
						<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password" required>
						</div>
					</div>
						</div>
				<?php
				 if(@$_GET['q7'])
					{ echo'<p style="color:red;font-size:15px;">'.@$_GET['q7'];}
				?>
					<!-- Button -->
					<div class="form-group">
					<label class="col-md-12 control-label" for=""></label>
					<div class="col-md-12"> 
					<button type="submit" class="btn btn-primary">Submit</button>
					</div>
					</div>			
						</fieldset>
			</form>
							</div>
						</div><!-- /.modal-content -->
					</div><!-- /.modal-dialog -->
				</div><!-- /.modal -->
			</div>
		</div>	
	</div>
<div class="header">
	<div class="row">
		<div class="col-lg-12">
			<!--sign in modal start-->
			<div class="modal fade" id="myModa2">
			    <div class="modal-dialog">
				   <div class="modal-content title1">
						<div class="modal-header">
							<h4 class="modal-title title1"><span style="color:orange">User login</span></h4>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				  		</div>
				  		<div class="modal-body">
					<form class="form-horizontal" action="login.php?q=index.php" method="POST">
			<fieldset>
			<!-- Text input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="email"></label>  
			  <div class="col-md-12">
			  <input id="email" name="email" placeholder="Enter your email-id" class="form-control input-md" type="email">
				
			  </div>
			</div>
			<!-- Password input-->
			<div class="form-group">
			  <label class="col-md-3 control-label" for="password"></label>
			  <div class="col-md-12">
				<input id="password" name="password" placeholder="Enter your Password" class="form-control input-md" type="password">
				
			  </div>
			</div>
		
				  </div>
				  <div class="modal-footer">
				 <button  type="submit" class="btn btn-primary"> <a href="#" class="pull-right" data-toggle="modal" data-target="#myModa3"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;<span class="title1" style="color:#ffffff"><b>Admin Login</b></span></a></button>
					<button type="submit" class="btn btn-primary">Log in</button>
					</fieldset>
			</form>
				  </div>
				</div><!-- /.modal-content -->
			  </div><!-- /.modal-dialog -->
			</div><!-- /.modal -->



<div class="header">
	<div class="row">
		<div class="col-lg-12">
			<!--sign in modal start-->
			<div class="modal fade" id="myModa3">
			  <div class="modal-dialog">
				<div class="modal-content title1">
					<div class="modal-header">
						<h4 class="modal-title title1 pt-5"><span style="color:orange">admin login</span></h4>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					</div>
				  	<div class="modal-body">
					  <form role="form" method="post" action="admin.php?q=index.php">
<div class="form-group pt-2">
<input type="text" name="uname" maxlength="20"  placeholder="Admin user id" class="form-control"/> 
</div>
<div class="form-group pt-2">
<input type="password" name="password" maxlength="15" placeholder="Password" class="form-control"/>
</div>
<div class="form-group" align="center">
<input type="submit" name="login" value="Login" class="btn btn-primary" />
</div>
</form>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->		
		<div id="demo" class="carousel slide" data-ride="carousel">				
			<div class="carousel-inner">
				<div class="carousel-item active">
					  <img src=".//image/01.png" alt="Los Angeles" width="100%" height="500px">
					<div class="carousel-caption" style="margin-bottom:150px;">	
						<div class="row">
							<div class="col-lg-4">
								<input type="text" class="form-control" placeholder=" Enter Your Stop" name="uname" required>
							</div>
							<div class="col-lg-4">

								<input type="text" class="form-control"placeholder=" Enter Usename" name="uname" value="YOUR GLA" readonly>
				
							</div>
							<div class="col-lg-4">
							<a href="search_bus.html"><input type="submit" class="form-control bg-dark text-light"name="uname"></a>
							</div>	
				
						</div> 	
					</div>	
				</div>   
			</div>				
		</div>
	<div class="container mt-5 mb-5">
		<h1 class="text-center mt-4" style="font-family: Georgia, 'Times New Roman', Times, serif;"style="margin:auto;"><span>OUR TEAM</span></h1>
			<div class="row mt-5 p-3" style="margin:auto;">
			<div class="col-lg-4 card-02 border bg-light">
			  <div class="card-02" style="width:380px">
				<img class="card-img-top p-3 ml-5" src="./image/gautam.jpeg" alt="Card image" style="width:65%;height:200px; border-radius:50%;">
					<div class="card-body">

						<h4 class="card-title text-center">Gautam Thakur </h4>
							<h6 class="text-center">7060622522</h6>
					</div>
				</div>
			</div>	
			<div class="col-lg-4 card-02 border bg-light p-5">
			  <!--<div class="card-02" style="width:380px">-->
				<img class="card-img-top p-3 ml-5" src="./image/shubham.jpeg" alt="Card image" style="width:65%;height:200px; border-radius:50%;">
					<div class="card-body">

						<h4 class="card-title text-center">Shubham Gautam <span style="font-size:15px;">[chote] <span></h4>
							<h6 class="text-center">7055483030</h6>
					</div>
				
			</div>
		<!--	<div class="col-lg-4 card-02 border bg-light">
				<img class="card-img-top p-3 ml-5" src="./image/WhatsApp Image 2023-07-24 at 10.37.44 AM.jpeg" alt="Card image" style="width:65%;height:200px; border-radius:50%;">
					<div class="card-body">
						<h4 class="card-title text-center">Palindar</h4>
							<h6 class="text-center">6395946733</h6>
					</div>
			</div>-->
			<div class="col-lg-4 card-02 border bg-light p-5">
			  <!--<div class="card-02" style="width:380px">-->
				<img class="card-img-top p-3 ml-5" src="./image/sunny.jpeg" alt="Card image" style="width:65%;height:200px; border-radius:50%;">
					<div class="card-body">
						<h4 class="card-title text-center">Sunny gautam</h4>
							<h6 class="text-center">7906184485</h6>
					</div>
			</div>
	</div>
</div>	
	<div class="container bg-light">
		<h2 class="text-center pt-5" style="font-family: Georgia, 'Times New Roman', Times, serif;"><span>THE NUMBERS ARE GROWING!</span></h2>
		<div class="row mt-5">
			<div class="col-lg-4 card-02 p-3 ">
					<div class="card-body">
						<h4 class="card-title text-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">STUDENTS</h4>
						<h6 class="text-center pb-3 pt-3" style="color:#da4e52;font-size:35px; font-family: Georgia, 'Times New Roman', Times, serif;">500</h6>
						<p style="text-align:center;"><span>“ Gla Bus is trusted by over 10K happy Student globally. ”</span></p>
					</div>
				
			</div>
			<div class="col-lg-4 card-02  p-3">
					<div class="card-body">
						<h4 class="card-title text-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">EXPERIENCE</h4>
						<h6 class="text-center pb-3 pt-3" style="color:#da4e52; font-size:30px; font-family: Georgia, 'Times New Roman', Times, serif;">10 Year’s</h6>
						<p style="text-align:center;"><span>“ Travel is an investment in yourself. ”</span></p>
					</div>
				
			</div>
			<div class="col-lg-4 card-02  p-3">
					<div class="card-body">
						<h4 class="card-title text-center" style="font-family: Georgia, 'Times New Roman', Times, serif;">OPERATORS</h4>
						<h6 class="text-center pb-3 pt-3" style="color:#da4e52; font-size:30px; font-family: Georgia, 'Times New Roman', Times, serif;">20</h6>
					</div>
				
			</div>
		</div>
	</div>		
            
<div class="container-fluid p-1 mt-5" style="background-color:#000000">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="footer-box-1 p-4">
					<a href="#" style="font-size:18px; color:#fefefe; font-family: Georgia, 'Times New Roman', Times, serif;">NH-2, GLA Universty Mathura, Uttar Pradesh 281406</a> <br>		
					<i class="fa fa-phone p-3 text-light" aria-hidden="true"> <span  style="font-family: Georgia, 'Times New Roman', Times, serif;">7060622522,     7055483030</span></i>			
				</div>
			</div>	
			<div class="col-md-6 text-white">
				<div class="footer-box ml-2 p-4">
					<span style="font-family: Georgia, 'Times New Roman', Times, serif;">M - F: 8:30 am - 6:00 pm</span>  <span class="ml-3" style="font-family: Georgia, 'Times New Roman', Times, serif;">Sa: OFF<span>
					<br>
					<a href="https://wa.me/917060622522"><i class="fa fa-whatsapp p-2 " aria-hidden="true" style="background:#25D366; color:#fefefe; text-decoration:none;"></i></a>
					<a href="https://www.instagram.com/gla.bus.service/"><i class="fa fa-instagram p-2 ml-3 mt-4" aria-hidden="true" style="background:#c13584 ;color:#fefefe;"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
busgithub.iobusgithub.io
busgithub.io