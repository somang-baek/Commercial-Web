<?php

$db_user = "root";
$db_pass = "";
$db_name = "achievers";

$db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 if(isset($_POST['create'])){

	$username 		= $_POST['unameR'];
	$password 		= $_POST['pswR'];
	$email 			= $_POST['emailR'];

		$sql = "INSERT INTO login (Username, Password, Email) VALUES(?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$username, $password, $email]);
}
?>