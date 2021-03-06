<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		
		<title>Voice Based Email</title>
		
		
		<!--=====================================================
			CSS Stylesheets
		=====================================================-->
		<link rel='stylesheet' type='text/css' href='bootstrap/css/bootstrap.min.css' >
		<link rel='stylesheet' type='text/css' href='css/linea.css' >
		<link rel='stylesheet' type='text/css' href='css/ionicons.min.css' >
		<link rel='stylesheet' type='text/css' href='css/owl.carousel.css' >
		<link rel='stylesheet' type='text/css' href='css/magnific-popup.css' >
		<link rel='stylesheet' type='text/css' href='css/style.css' >
		<script src='js/script2.js' ></script>
		<script src='js/responsivevoice.js' ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body onLoad="welcomemsg2()">
		
		
		<!--=====================================================
			Preloader
		=====================================================-->
		<div id='preloader' >
			<div class='loader' ></div>
			<div class='left' ></div>
			<div class='right' ></div>
		</div>
		
		
		<div class='main-content' >
			
			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
			
			
			
			<!--=====================================================
				Menu Button
			=====================================================-->
			<a href='#' class='menu-btn' >
				<span class='lines' >
					<span class='l1' ></span>
					<span class='l2' ></span>
					<span class='l3' ></span>
				</span>
			</a>
			
			
			<!--=====================================================
				Menu
			=====================================================-->
			<div class='menu' >
				<div class='inner' >
					<ul class='menu-items' >
						
						<li>
							<a href='#' class='section-toggle' data-section='intro'  >
								Home
							</a>
						</li>
						
						<li>
							<a href='#about' class='section-toggle' data-section='about' onMouseOver='responsiveVoice.speak("Inbox");'>
								Inbox
							</a>
						</li>
						
						
						<li>
							<a href='#contact' class='section-toggle' data-section='contact' onMouseOver='responsiveVoice.speak("Compose Mail");'>
								Compose Mail
							</a>
						</li>
						
						
					</ul>
				</div>
			</div>
			
			<div class='animation-block' ></div>
			
			
			<!--=====================================================
				Sections
			=====================================================-->
			<div class='sections' >
				
				<!--=====================================================
					Main Section
				=====================================================-->
				<section id='intro' class='section section-main active' >
					
					<div class='container-fluid' >
						
						<div class='v-align' >
							<div class='inner' >
								<div class='intro-text' >
									
									<h1>Welcome</h1>
									
									<p>
										Voice based Email
									</p>
									
									<div class='intro-btns' >
										
										<a href='#about' class='btn-custom section-toggle' data-section='about' onMouseOver='responsiveVoice.speak("Inbox");' >
											Inbox
										</a>
										
										<a href='temp.html' class='btn-custom section-toggle' data-section='contact' onMouseOver='responsiveVoice.speak("Compose Mail");' >
											Compose Mail
										</a>
										<a href='logout.php' class='btn-custom section-toggle' data-section='contact' onMouseOver='responsiveVoice.speak("Logout");' >
											Logout
										</a>
									</div>
									
								</div>
							</div>
							
						</div>
						
					</div>
				
				</section>
				
				
				<!--=====================================================
					About Section
				=====================================================-->
				<section id='about' class='section about-section border-d' >
					<div align="center">
					<h1>Login</h1>
							 <form action="login.php" method="post">
  <div class="container">
    <label for="uname"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
  </div>

  <div class="container" style="background-color:#f1f1f1">
  <a href='#' class='section-toggle' data-section='intro' >
								<button type="button" class="cancelbtn">Cancel</button>
							</a>
    
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 
								
					</div>
					
									</section>
				
				<!--=====================================================
					Contact Section
				=====================================================-->
								<section id='contact' class='section contact-section border-d' >
					
					<div class='section-block contact-block' >
						<div align="center">
						 <form action="signup.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <div class="clearfix">
	 <a href='#' class='section-toggle' data-section='intro' >
      <button type="button" class="cancelbtn">Cancel</button></a>
      <button type="submit" class="signupbtn">Sign Up</button>
    </div>
  </div>
</form> 
</div>					
					</div>
					
				</section>
				
			</div>
			
		</div>		
		
		<!--=====================================================
			JavaScript Files
		=====================================================-->
		<script src='js/jquery.min.js' ></script>
		<script src='js/jquery.shuffle.min.js' ></script>
		<script src='js/owl.carousel.min.js' ></script>
		<script src='js/jquery.magnific-popup.min.js' ></script>
		<script src='js/validator.min.js' ></script>
		<script src='js/script.js' ></script>
		
		
	</body>
</html>
