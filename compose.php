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
		<script language="javascript">
		$(document).on("contextmenu", ".main-content", function(e){
   alert('Context Menu event has fired!');
   return false;
});


jQuery(function($) {
    $('.comp').click(function() {
        return false;
    }).dblclick(function() {
        window.location = "lhome.php";
        return false;
    });
});
</script>
	</head>
	<body onLoad="welcomemsg6()">
		
		<div align="center" class="comp">
					<h1>Compose</h1>

			<!--=====================================================
				Page Borders
			=====================================================-->
			<div class='page-border border-left' ></div>
			<div class='page-border border-right' ></div>
			<div class='page-border border-top' ></div>
			<div class='page-border border-bottom' ></div>
	<?php 		
	session_start();		
	$name = $_SESSION['user'];
	?>
			
			<!--=====================================================
				Sections
			=====================================================-->

				
				<!--=====================================================
					Main Section
				=====================================================-->
<form action="mail2.php" method="post">
    <label for="to"><b>To</b></label>
    <input type="text" placeholder="To" name="to" required>
<br>
    <label for="sub"><b>Subject</b></label>
    <input type="text" placeholder="Subject" name="sub" required>
<br>
    <label for="bdy"><b>Message</b></label>
    <input type="text" placeholder="mail" name="bdy" required>
<br>
    <button type="submit">Send</button>
</form> 
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