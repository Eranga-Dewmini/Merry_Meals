<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
		<?php

		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "meals");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$fullName = $_REQUEST['fullName'];
		$address = $_REQUEST['address'];
		$meal = 'Breakfast';
		$quantity = $_REQUEST['quantity'];
		$status = 'Ordered';

		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO order_details VALUES ('$id', '$fullName', '$address', '$meal', '$quantity', '$status')";
		
		if(mysqli_query($conn, $sql)){
			echo $_SESSION['id'] = $id;
			header("location:thank.html");
		} else{
			echo "ERROR: Hush! Sorry, Invalid Login Credentials. $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
</body>

</html>
