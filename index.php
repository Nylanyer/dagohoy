<?php
	$servername = "dagohoy.mysql.database.azure.com";
	$username = "dagohoy@dagohoy";
	$password = "SEOdhaie14";
	$dbname = "dagohoy";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT id, description, count FROM inventory";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {
	    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
		echo "id: " . $row["id"]. " - Product: " . $row["description"]. " - Count:" . $row["count"]. "<br>";
	    }
	} else {
	    echo "0 results";
	}

	mysqli_close($conn);
?>
