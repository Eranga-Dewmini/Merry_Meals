<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>MerryMeal - Restaurant  Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon.png">
    <link href="./css/style.css" rel="stylesheet">

</head>

<body>
	
		<div class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
			<div class="d-flex justify-content-center h-100 align-items-center">
			
<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "meals";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `crud_db`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Menu : " .
				$row["id"]. " - Monday: " .
				$row["mondaymeal"]. " | Tuesday: " .
				$row["tuesdaymeal"]. " | Wednesday: " .
				$row["wednessdaymeal"]. " | Thursday: " .
				$row["thursdaymeal"]. " | Friday: " .
				$row["fridaymeal"]."<br>";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>
<br>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "meals";

// CREATE CONNECTION
$conn = new mysqli($servername,
	$username, $password, $databasename);

// GET CONNECTION ERRORS
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// SQL QUERY
$query = "SELECT * FROM `crud_2`;";

// FETCHING DATA FROM DATABASE
$result = $conn->query($query);

	if ($result->num_rows > 0)
	{
		// OUTPUT DATA OF EACH ROW
		while($row = $result->fetch_assoc())
		{
			echo "Menu : " .
				$row["id"]. " - Saturday: " .
				$row["saturdaymeal"]. " | Sunday: " .
				$row["sundaymeal"]."<br>";
		}
	}
	else {
		echo "0 results";
	}

$conn->close();

?>

<hr>
<br><br>

					<div class="123"><a href="index.php"><br><br><br><b>Update meals list</b></a><br><br>

						<form action="add.php" method="post" name="form1">
							<table width="25%">
								<tr>
									<td>Monday: </td>
									<td><input type="text" name="mondaymeal"></td>
								</tr><br><br><br>
								<tr>
									<td>Tuesday: </td>
									<td><input type="text" name="tuesdaymeal"></td>
								</tr>            
								<tr>
									<td>Wednessday: </td>
									<td><input type="text" name="wednessdaymeal"></td>
								</tr> 
								<tr>
									<td>Thursday: </td>
									<td><input type="text" name="thursdaymeal"></td>
								</tr>
								<tr>
									<td>Friday: </td>
									<td><input type="text" name="fridaymeal"></td>
								</tr>
								<tr>
									<td>Saturday:</td>
									<td><input type="text" name="saturdaymeal"></td>
								</tr>
								<tr>
									<td>Sunday:</td>
									<td><input type="text" name="sundaymeal"></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="submit" name="Submit" value="Add"></td>
								</tr>
								<tr>
							</table>
						</form>

						<?php

						// Check If form submitted, insert form data into users table.
						if(isset($_POST['Submit'])) {		

						
							$mondaymeal = $_POST['mondaymeal'];
							$tuesdaymeal = $_POST['tuesdaymeal'];
							$wednessdaymeal = $_POST['wednessdaymeal'];	
							$thursdaymeal = $_POST['thursdaymeal'];
							$fridaymeal = $_POST['fridaymeal'];
							$saturdaymeal = $_POST['saturdaymeal'];	
							$sundaymeal = $_POST['sundaymeal'];
							
							

							// include database connection file
							include_once("config.php");

							// Insert user data into table
							$result = mysqli_query($mysqli, "INSERT INTO p_meal(mondaymeal,tuesdaymeal,wednessdaymeal,thursdaymeal,fridaymeal,saturdaymeal,sundaymeal) VALUES('$mondaymeal','$tuesdaymeal','$wednessdaymeal','$thursdaymeal','$fridaymeal','$saturdaymeal','$sundaymeal')");

							// Show message when user added
							echo "Meal added successfully.<br> <a href='index.php'>Go Back</a>";
						}
						?>

						
                    </div>



							
							



			</div>
		</div>
	</div>


</body>
</html>




















