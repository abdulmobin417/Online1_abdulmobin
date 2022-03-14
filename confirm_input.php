<?php

$email = $_GET["email"];

$id = $_GET["id"];

$date = $_GET["appt_date"];

$form = $_GET["from_location"];

$to = $_GET["to_location"];

$status = $_GET["status"];

?>



<h1>Update Record</h1>



<form method=get action=confirm.php>

    <input type=hidden name=id value='<?php echo $id; ?>'> <br>

	email: <input type=text name=email> <br>

	<p>

	date: <input type=text name=date> <br>

	<p>

    from: <input type=text name=fromdate> <br>

	<p>

	to: <input type=text name=todate> <br>

	<p>

	<input type=submit value=Update>

</form>