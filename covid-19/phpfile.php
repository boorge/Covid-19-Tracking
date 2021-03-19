 <?php

include 'dbcon.php';


if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['covid'];
	$message = $_POST['message'];

	$chk = "";

	foreach ($symp as $chk1){
		$chk .= $chk1.",";
	}

	$insertquery = "INSERT INTO covid(username, email, mobile, symp, message) values('$username', '$email', '$mobile','$chk', '$message')";

	$query = mysqli_query($con,$insertquery);
	if($query){
		?>
		<script>
			alert("Inserted Successful");
		</script>
		<?php
	}else{
		?>
		<script>
			alert("No Inserted");
		</script>
		<?php
	}
}

 ?>
