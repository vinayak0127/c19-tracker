<?php


$server= 'localhost';
$user = 'root';
$password = '';
$db= 'coronadb';

 $con = mysqli_connect($server, $user, $password, $db);

if($con){
	?>
	<script>
		console.log("connection successful");
	</script>
	<?php
}else{
	?>
	<script>
		console.log("No connection ");
	</script>
	<?php
}

?>