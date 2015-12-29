<?php


		function contactForm(){

	echo "<h3>Contact us Testing</h3>";		
			
			if(isset($_POST['submit'])){
				//echo("hello ");
				$error = false;
				//CHECK FIRST NAME
				if($error == false){
					if(isset($_POST['firstname']) && $_POST['firstname'] != ""){
						//What to do if fname isset
						$firstname = $_POST['firstname'];
						echo("First Name: $firstname ");
					}else{$error = true; echo("Please enter your first name.");}
				}
				
				if($error == false){
					if(isset($_POST['lastname']) && $_POST['lastname'] != ""){
						//What to do if fname isset
						$lastname = $_POST['lastname'];
						echo("Last Name: $lastname");
					}else{$error = true; echo("Please enter your last name.");}
				}
				
				if($error == false){
					if(isset($_POST['phonenumber']) && $_POST['phonenumber'] != ""){
						//What to do if fname isset
						$phonenumber = $_POST['phonenumber'];
						echo("Phone Number: $phonenumber");
					}else{$error = true; echo("Please enter your phone number.");}
				}
				
				if($error == false){
					if(isset($_POST['email']) && $_POST['email'] != ""){
						//What to do if fname isset
						$email = $_POST['email'];
						echo("Email: $email");
					}else{$error = true; echo("Please enter your email.");}
				}
			}
			
			echo'
					
		<form method="post">
			<input type="text" placeholder="First Name" name="firstname" required><br><br>
			<input type="text" placeholder="Last Name" name="lastname" required><br><br>
			<input type="text" placeholder="Phone Number" name="phonenumber" required><br><br>
			<input type="email" placeholder="Email" name="email" required><br><br>
			<input class="submitButon" type="submit" name="submit" value="submit"><br><br>
		</form>
			';
		}
		?>