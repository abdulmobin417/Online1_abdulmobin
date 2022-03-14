<?php

    $email = $_GET["email"];

    $id = $_GET["id"];

    $date = $_GET["date"];

    $form = $_GET["fromdate"];

    $to = $_GET["todate"];



	require_once('dbconfig.php');

	$connect = mysqli_connect( HOST, USER, PASS, DB )

		or die("Can not connect");



	$query 	= "UPDATE ticket_booking SET email='$email', appt_date='$date', from_location='$form', to_location='$to', status='Confirm' WHERE id = $id";

	echo $query;



	mysqli_query( $connect, $query )

		or die("Can not execute query");



	echo "<p>Record updated";



	echo "<p><a href=index.php>READ all records</a>";

?>