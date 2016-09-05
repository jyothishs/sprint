<!DOCTYPE html>
<html>
<head>
	<?php $this->load->helper('url'); ?>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/style.css'; ?>">
	<script type="text/javascript" src="?<?php echo base_url().'js/bootsutrap.min.js';?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'js/jquery-2.2.3.min.js';?>"></script>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row head white">

			<div class="col-md-offset-1 col-md-2">
				<img src="<?php echo base_url().'images/fb_head.png';  ?>">	
			</div>
			<form method="POST" action="<?php echo base_url().'index.php/mainpage/login';?>">
 			<div class="col-md-offset-3 col-md-2">
 				<label>Email or Phone</label>
 				<input type="text" name="email" class="form-control" value="info@baabtra.com">

 			</div>
 			<div class="col-md-2">
	 			<label>Password</label>
	 			<input type="password" name="password" class="form-control" value="Thisistrue">
	 			<a href="">forgotten account?</a>
			</div>
		
			<div class="col-md-1 button">
				<input type="submit" name="n3" value="login" class="form-control">
			</div>
			</form>
		</div>
		<div class="row color">
			<div class="col-md-offset-1 col-md-5 text">
				<b>Facebook helps you connect and share with the<br>people in yor life</b>
				<img src="<?php echo base_url().'images/map.png';?>">
			</div>

			<div class="col-md-4">
				<h2><b>Create an account</b></h2>
				<h3><b>It's free and always will be.</b></h3>
				<div class="col-md-6 pad_5">
					<input type="text" name="" placeholder="First name" class="form-control">
				</div>
				<div class="col-md-6 pad_5" >
					<input type="text" name="" placeholder="Surname" class="form-control">
				</div>
				<div class="col-md-12 pad_5">
					<input type="text" name="" placeholder="Mobile number or email address" class="form-control">
				</div>
				<div class="col-md-12 pad_5">
					<input type="text" name="" placeholder="Re-enter Mobile number or email address" class="form-control">
				</div>
				<div class="col-md-12 pad_5">
					<input type="password" name="" placeholder="New password" class="form-control">
				</div>
				<div class="col-md-12 pad_5">
					<input type="file" name="" class="btn btn-info">
				</div>
				<div class="col-md-12 pad_5">
					<label>Birthday</label>
				</div>
				<div class="col-md-2 pad_5">
					<select class="form-control">
					<option>day</option>
					<?php
					for($i=1;$i<=31;$i++)
					{
						echo"<option>$i</option>";
					}
					?>
					</select>
				</div>
					<div class="col-md-3 pad_5">
					<select class="form-control">month
					<option>month</option>
					<?php
					for($i=1;$i<=12;$i++)
					{
						echo"<option>$i</option>";
					}
					?>
					</select>
				</div>
				<div class="col-md-3 pad_5">
					<select class="form-control">year
					<option>year</option>
					<?php
					for($i=1995;$i<=2050;$i++)
					{
						echo"<option>$i</option>";
					}
					?>
					</select>
			</div>
				<div class="col-md-4 size"><a href="">Why do i need to provide<br>my date of birth</a>
            </div>
            	<div class="col-md-12 gen_pad">
            	<div class="col-md-3">
            	<input type="radio" name="g1">Female</div>
             	<div class="col-md-3">
            	<input type="radio" name="g1" >Male</div>
          		</div>
			<div class="col-md-12 pad_5">By clicking Create an account.you agree to our <a href="">terms</a> and that<br>you have read our <a href="">Data Policy</a>.including our <a href=""> Cookie Use</a> 
        	</div>
 				
 				<div class="col-md-8 pad_5 ">
 				<input type="submit" name="" value="Create an account" class="form-control create_button btn btn-success">
 				</div>
		    
		    <div class="col-md-12 pad_6 pad_5"><a href="">Create a Page </a>for a celibrety,band or bussiness</div>
		    		
		    	</div>

		    </div>
		    <div class="row">
		    	     <div class="col-md-offset-2 col-md-8">

		    	     <ul class="list-inline">
		    	     	<li><a href=""> English(UK)</a></li>
		    	     	<li><a href="">Malayalam</a></li>
		    	     	<li><a href="">Hindi</a></li>
		    	     	<li><a href="">Tamil</a></li>
		    	     	<li><a href="">Kannada</a></li>
		    	     	<li><a href="">Portugees</a></li>
		    	     	<li><a href="">france</a></li>
		    	     </ul>
		    	     	
		    	     	<hr>
		    	     </div>
		    	     
		    	 <div class="col-md-offset-2 col-md-8">
		    	 <ul class="list-inline">
		    	 	<li>
		    	 	<a href="">Sign Up</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Log In</a>
		    	 	</li>
		    	    <li>
		    	 		<a href="">Messenger</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Facebook Lite</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">mobile</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Find Friends</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Badges</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">People</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Pages</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Places</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Games</a>
		    	 	</li>
		    	 	
		    	 		<a href="">Locations</a>
		    	 	</li>
		    	 </ul>
		    	 <ul class="list-inline">
		    	 
		    	 	<li>
		    	 		<a href="">Celebreties</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Messenger</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Groups</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Moments</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">about</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Create advert</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">About page</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Devolopers</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Careers</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Privacy</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Cookies</a>
		    	 	</li>
		    	 	</ul>
		    	 	<ul class="list-inline">
		    	 		<li>
		    	 		<a href="">AdChoices</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Terms</a>
		    	 	</li>
		    	 	<li>
		    	 		<a href="">Helps</a>
		    	 	</li>
		    	 	</ul>
		    	 	
		    	    </div>
		    	    <div class="col-md-offset-2 col-md-8 pad_6">Facebook@2016
		    	    	
		    	    </div>
		</div>
	</div>
</body>
</html>