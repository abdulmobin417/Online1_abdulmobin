<?php
	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");


	$results = mysqli_query( $connect, "SELECT * FROM ticket_booking" )
		or die("Can not execute query");

	echo "<table border> \n";
	echo "<th>email</th> <th>appt date</th> <th>from location</th> <th>to location</th> <th>status</th> <th>addbooking</th> <th>confirmbooking</th> \n";

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $email </td>";
		echo "<td> $appt_date </td>";
		echo "<td> $from_location </td>";
		echo "<td> $to_location </td>";
		echo "<td> $status </td>";
		echo "<td> <a href = 'appt_input.php'> addbooking </a> </td>";
		echo "<td> <a href = 'confirm_input.php?id=$id&email=$email&appt_date=$appt_date&from_location=$from_location&to_location=$to_location&status=$status'> confirmbooking </a> </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
?>