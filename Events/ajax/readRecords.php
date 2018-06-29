<?php
	// include Database connection file 
	include("db_connection.php");
	//<td>
					//<a href="update.php?updatedata='.$row['id'].'" class="btn btn-warning">Update</a>
				//</td>
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							<th>No.</th>
							<th>Event Title</th>
							<th>Event Description</th>
							<th>Event Date</th>
							
							<th>Delete</th>
						</tr>';

	$query = "SELECT * FROM events";

	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$number.'</td>
				<td>'.$row['title'].'</td>
				<td>'.$row['description'].'</td>
				<td>'.$row['date'].'</td>
				
				
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger">Delete</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>