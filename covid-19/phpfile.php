

 <?php

include 'dbcon.php';

if(isset($_POST['submit'])){

	$username = $_POST['username'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$symp = $_POST['symp'];
	$msg = $_POST['msg'];

	$sql = "INSERT INTO COVID-19(username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$symp', '$msg')";

	$query = mysqli_query($sql);

	mysql_close($vivek);

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

