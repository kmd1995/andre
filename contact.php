<?php
		if(isset($_POST['submit'])){
			$Firstname=$_POST['firstname'];
			$Lastname=$_POST['lastname'];
			$Email=$_POST['Email'];
			$Contact_number=$_POST['Contact_number'];
			$Msg=$_POST['msg'];
			
			
			$to='Steadyypixx@gmail.com';
			$subject='Business Inquiry';
			$message="FirstName: ".$Firstname."\n"."Lastname: ".$Lastname."\n"."Email: ".$Email."\n"."Phone: ".$Contact_number."\n". "Wrote the following: "."\n\n".$Msg;
			$headers="From: ".$Email;
			
			if(mail($to, $subject, $message, $headers)){
				echo "<h1>Sent Successfully! Thank you"." ".$Firstname.", We will contact you shortly!</h1>";
			}
			else{
				echo "Something went wrong";
			}
		}
?>
<!DOCTYPE html>
<html>

<a id="home"  href="index.html" class="w3-bar-item w3-button"><i class="fa fa-home w3-margin-right"></i>Home</a>

</html>