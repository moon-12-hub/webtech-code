<!DOCTYPE html>
<html>
<head>
	<title>Select</title>
</head>
<body>

	<h1>Database Select Example</h1>

	<?php
        
        $host = 'localhost';
        $user = 'moon12';
        $pass = 'moon97';
        $db   = 'wtech';

        // Mysqli object-oriented

        $conn1 = new mysqli($host, $user, $pass, $db);

        if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";

		//$sql = "select id, email, pwd from users";
		//$res1 = $conn1->query($sql);
		//if($res1->num_rows > 0) {
			//while($row = $res1->fetch_assoc()) {
				//echo "id: " . $row['id'];
				//echo "<br>";
				//echo "email: " . $row['email'];
				//echo "<br>";
				//echo "pwd: " . $row['pwd'];
				//echo "<br>";
			//}
		//}

		$stmt1 = $conn1->prepare("select id, email, pwd from users where id=?");
		$stmt1->bind_param("i", $p1);
		$p1 = 1;
		$stmt1->execute();
		$res2 = $stmt1->get_result();
		$user = $res2->fetch_assoc();

		echo "id: " . $user['id'];
				echo "<br>";
				echo "email: " . $user['email'];
				echo "<br>";
				echo "pwd: " . $user['pwd'];
				echo "<br>";

	 }


       $conn1->close();

	?>

</body>
</html>