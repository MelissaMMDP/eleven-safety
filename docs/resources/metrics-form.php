<?php
  if(isset($_POST['metrics-form'])) {
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
    $formContent = "Employee ID: $employeeID \n Job Number: $jobNumber \n Hours Onsite: $hoursOnsite \n Miles Onsite: $milesOnsite \n SWA's: $stopWorkAuthority \n Haz ID's: $hazID \n BBO's: $behaviorBasedObservation \n Near Miss: $nearMiss \n Email: $email \n Message: $message";
    $recipient = "melissa.mmdp@gmail.com";
    $subject = "Metrics Form";
    $headers = "From: $email";
    mail($recipient, $subject, $formContent, $headers) or die("Error!");
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>php test</title>
  <link rel="stylesheet" href="php-style.css">
</head>

<body>

<h1>Thank You!</h1>
<p>Your form has been sent.</p>

</body>

</html>
