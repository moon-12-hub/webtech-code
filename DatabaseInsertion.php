<!DOCTYPE html>
<html>
<head>
	<title>Insertion</title>
</head>
<body>
     <h1>Database Insertion</h1>

     <?php

       $host = 'localhost';
       $user = 'moon12';
       $pass = 'moon97';
       $db   =  'wtech';

       $conn1 = new mysqli($host, $user, $pass, $db);

       if($conn1->connect_error) {
		echo "Database Connection Failed!";
		echo "<br>";
		echo $conn1->connect_error;
	}
	else {
		echo "Database Connection Successful!";
  
       $stmt1 = $conn1->prepare("insert into users (email, pwd) VALUES (?, ?)");
		$stmt1->bind_param("ss", $p1, $p2);
		$p1 = $_POST['email'];
		$p2 = $_POST['pwd'];
		$status = $stmt1->execute();

		if($status) {
			echo "Data Insertion Successful.";
		}
		else {
			echo "Failed to Insert Data.";
			echo "<br>";
			echo $conn1->error;
		}
	}

		$conn1->close();

     ?>
</body>
</html>