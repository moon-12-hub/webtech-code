<!DOCTYPE html>
<html>
<head>
	<title>Delete</title>
</head>
<body>

	<h1>Database Delete Example</h1>

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

		$stmt1 = $conn1->prepare("delete from users where id=?");
		$stmt1->bind_param("i", $p1);
		$p1 = 2;
		$status = $stmt1->execute();
		if($status) {
			echo "Data Delete Successful.";
		}
		else {
			echo "Failed to Delete Data.";
			echo "<br>";
			echo $conn1->error;
		}
	}

	$conn1->close();

	?>

</body>
</html>