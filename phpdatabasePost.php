
<h1>this is send_post</h1>
 <?php
//CONNECT TO HOST
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testdb1";
$dbtable = "table2";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//<END>

// INSERT DATA INTO DATABASE:
	$sql = "INSERT INTO table2 (author, title)
VALUES ('$_POST[post_author]', '$_POST[post_title]')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
//<END>

//CLOSE CONNECTION TO DATABASE
	$conn->close();
//<END>

?>
