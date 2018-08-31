<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Safety</title>

	<link rel="stylesheet" href="styles/style.css">
</head>

<body>

	<div class="grid-container">

		<?php

		  if(isset($_POST['form-metrics'])) {
				$employeeID = $_POST['employeeID'];
				$jobNumber = $_POST['jobNumber'];
				$hoursOnsite = $_POST['hoursOnsite'];
				$milesOnsite = $_POST['milesOnsite'];
				$stopWorkAuthority = $_POST['stopWorkAuthority'];
				$hazID = $_POST['hazID'];
				$behaviorBasedObservation = $_POST['behaviorBasedObservation'];
				$nearMiss = $_POST['nearMiss'];
				$email = $_POST['email'];
				$message = $_POST['message'];
				$headers = "From: $email";
		    $subject = "Metrics Form";
		    $recipient = "your-email@somewhere.com"; // update to valid email or $formData will throw an undefined variable error
				$formData = "Employee ID: $employeeID \n Job Number: $jobNumber \n Hours Onsite: $hoursOnsite \n Miles Onsite: $milesOnsite \n SWA's: $stopWorkAuthority \n Haz ID's: $hazID \n BBO's: $behaviorBasedObservation \n Near Miss: $nearMiss \n Email: $email \n Message: $message";
		    $formDataThankyou = "<h3>Here is the form data you submitted:</h3> <br>" . "<p>Employee ID: $employeeID <br> Job Number: $jobNumber <br> Hours Onsite: $hoursOnsite <br> Miles Onsite: $milesOnsite <br> SWA's: $stopWorkAuthority <br> Haz ID's: $hazID <br> BBO's: $behaviorBasedObservation <br> Near Miss: $nearMiss <br> Email: $email <br> Message: $message</p>";
				mail($recipient, $subject, $formData, $headers) or die("Error!");

				include 'resources/form-success.php';
		    } else
		      include 'resources/form-metrics.php';

		?>

	</div>

</body>

</html>
