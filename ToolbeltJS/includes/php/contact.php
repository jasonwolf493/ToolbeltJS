<?php


		function requestForm(){
			
			$complete = false;
			echo "<h3>Request Information Testing</h3>";		
			
			if(isset($_POST['submit'])){
				//echo("hello ");
				$error = false;
				//CHECK FIRST NAME
				if($error == false){
					if(isset($_POST['firstname']) && $_POST['firstname'] != ""){
						//What to do if fname isset
						$firstname = $_POST['firstname'];
						//echo("First Name: $firstname ");
					}else{$error = true; echo("Please enter your first name.");}
				}
				
				if($error == false){
					if(isset($_POST['lastname']) && $_POST['lastname'] != ""){
						//What to do if fname isset
						$lastname = $_POST['lastname'];
						//echo("Last Name: $lastname");
					}else{$error = true; echo("Please enter your last name.");}
				}
				
				if($error == false){
					if(isset($_POST['phonenumber']) && $_POST['phonenumber'] != ""){
						//What to do if fname isset
						$phonenumber = $_POST['phonenumber'];
						//echo("Phone Number: $phonenumber");
					}else{$error = true; echo("Please enter your phone number.");}
				}
				
				if($error == false){
					if(isset($_POST['email']) && $_POST['email'] != ""){
						//What to do if fname isset
						$email = $_POST['email'];
						//echo("Email: $email");
					}else{$error = true; echo("Please enter your email.");}
				}
				if($error == false){
					echo"Thank you $firstname, we will contact you shortly." ;
					$complete = true;
					

					// send email
					

					// multiple recipients
					$to  = 'jasonwolf493@gmail.com';
					// subject
					$subject = 'Information Request';
					// message

					$message = "$firstname $lastname has requested information, you can contact them at $phonenumber or $email";

					// To send HTML mail, the Content-type header must be set
					$headers  = 'From: me <myMail@gmail.com>' . "\r\n".
								'MIME-Version: 1.0' . "\r\n".
								'Content-type: text/html; charset=utf-8';


					// Mail it
					if(mail($to, $subject, $message, $headers)){
						//echo 'Sent mail';
					}
					else{
						//echo 'mail not sent';
					}
				
					
					
				}
			}
			
			if($complete != true){
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

		}
		?>