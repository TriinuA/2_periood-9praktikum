<?php  
	session_start();
	$_SESSION["first_name"] = "Triinu";

?>

<!DOCTYPE HTML>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">	  	
	</head>
	<body>
		<?php
  			$first_name = $_SESSION["first_name"];
  			echo $first_name;
		?>
		
	
	</body>
</html>
