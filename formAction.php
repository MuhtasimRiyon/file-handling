<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST['fname']) && empty($_POST['lname'])
			   && empty($_POST['gender']) && empty($_POST['email']) 
			) {
				echo "Fill the form properly";
			}
			else {
				echo $_POST['fname'] . " " . $_POST['lname'];
			}
		}
	?>

</body>
</html>