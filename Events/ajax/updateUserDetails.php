<?php
// include Database connection file
include("db_connection.php");

// check request
if(isset($_POST))
{
    // get values
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    // Updaste User details
    $query = "UPDATE events SET title = '$first_name', description = '$last_name', date = '$email' WHERE id = '$id'";
    if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }
}

<?php
require_once("db.php");
if(count($_POST)>0) {
	$sql = "UPDATE users set userName='" . $_POST["userName"] . "', password='" . $_POST["password"] . "', firstName='" . $_POST["firstName"] . "', lastName='" . $_POST["lastName"] . "' WHERE userId='" . $_POST["userId"] . "'";
	mysqli_query($conn,$sql);
	$message = "Record Modified Successfully";
}
$select_query = "SELECT * FROM events WHERE updatedata='" . $_GET["userId"] . "'";
$result = mysql_query($conn,$select_query);
$row = mysql_fetch_array($result);
?>