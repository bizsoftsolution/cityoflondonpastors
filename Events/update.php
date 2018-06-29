<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include("ajax/db_connection.php");
$select_query = "SELECT * FROM events WHERE id='" . $_GET["updatedata"] . "'";
$result = mysql_query($select_query);
while($row = mysql_fetch_array($result))
{
?>
<div class="container">
  <h2>Events Update</h2>
  <form action="action_page.php">
    <div class="form-group">
      <label for="email">Title:</label>
      <input type="text" class="form-control" id="email" value="<?php echo $row['title']; ?>" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Description:</label>
      <input type="text" class="form-control" id="pwd" value="<?php echo $row['description']; ?>" placeholder="Enter password" name="pwd">
    </div>
	<div class="form-group">
      <label for="pwd">Date:</label>
      <input type="date" class="form-control" id="pwd" value="<?php echo $row['date']; ?>" placeholder="Enter password" name="pwd">
    </div>
    <input type="submit" class="btn btn-default" value="Submit">
  </form>
</div>
<?php 
}
?>
</body>
</html>
