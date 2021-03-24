<!DOCTYPE html>
<html>
<head>
	<title>Upadate</title>
</head>
<body>

	<h1>Update Database Example</h1>

	<?php
     
     $host = 'localhost';
     $user = 'moon12';
     $pass = 'moon97';
     $db   = 'wtech';

     $conn1 = new mysqli($host, $user, $pass, $db);

     if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";

		$stmt1 = $conn1->prepare("update users set pwd=? where id=?");
		$stmt1->bind_param("si", $p1, $p2);
		$p1 = '01688';
		$p2 = 2;
		$status = $stmt1->execute();
		if($status) {
			echo "Data Update Successful.";
		}
		else {
			echo "Failed to Update Data.";
			echo "<br>";
			echo $conn1->error;
		}
	}

	$conn1->close();

	?>

</body>
</html>