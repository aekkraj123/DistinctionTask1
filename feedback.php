<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="author" content="Dave">
<meta name="description" content="Feedback">
<title>Feedback</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="icon" href="images/ARLogo.png">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body>
	<header>
		<?php include("header.php"); ?>
	</header>
<article>
	<section id="contact"> 
		<h1>Feedback Form</h1> 
		
		<mark id="message"></mark> 
			
		<form action="mailto:ardigital123@gmail.com" method="post" name="contactform" id="contactform" autocomplete="on"> 
			<fieldset>  
				<legend>Contact Details</legend> 
	    			<hr>
				<div> 
					<label for="name" accesskey="U">Name</label> 
					<input name="name" type="text" id="name" placeholder="Enter your name" required="required" /> 
				</div> 
				<hr>
				<div> 
					<label for="gender" accesskey="G">Gender</label> 
					<input type="radio" name="gender" value="Male" id="male"><label for="male">Male</label>
					<input type="radio" name="gender" value="Female" id="female"><label for="female">Female</label>
				</div> 
 				<hr>
				<div> 
					<label for="email" accesskey="E">Email</label> 
					<input name="email" type="email" id="email" placeholder="Enter your Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" /> 
				</div>	            			
				<hr>	            
				<div> 
					<label for="phone" accesskey="P">Phone Number</label> 
					<input name="phone" type="tel" id="phone" size="30" placeholder="Enter your phone number" /> 
				</div>  
			</fieldset> 
			<hr>	        
			<fieldset>      
				<legend>Your Comments</legend>
				<hr>  
				<div> 
					<label for="subject" accesskey="S">Subject</label> 
					<select name="subject" id="subject" size="1"> 
						<option value="Support">Support</option> 
						<option value="A Bug fix">Report a bug</option> 
					</select> 
				</div>		
				<hr>	 
				<div> 
					<label for="comments" accesskey="C">Comments</label> 
					<textarea name="comments" cols="40" rows="3"  id="comments" placeholder="Enter your comments" spellcheck="true" required="required"></textarea> 
				</div> 
				<hr>	            
			</fieldset>           
			<hr>            
			<input type="submit" class="submit" id="submit" value="Submit" /> 
		</form> 
                    
	</section> 

</article>
<footer>
		<?php include("footer.php"); ?>
	</footer>
</body>
</html>