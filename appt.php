<?php

	$email = $_GET["email"];

	$date = $_GET["date"];

	$form = $_GET["fromdate"];

	$to = $_GET["todate"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	mysqli_query( $connect, "INSERT INTO ticket_booking VALUES ( '', '$email', '$date', '$form', '$to', 'none')" )

		or die("Can not execute query");


	echo "<p><a href=index.php>READ all records</a>";

?>