<?php
require_once('register.php');
?>

<?php

if(isset($_POST)){

	$username 		= $_POST['username'];
	$password 		= $_POST['password'];
	$email 			= $_POST['email'];

		$sql = "INSERT INTO login (Username, Password, Email) VALUES(?,?,?)";
        $stmtinsert = $db->prepare($sql);
        try {
            $result = $stmtinsert->execute([$username, $password, $email]);
            echo 'Registered Successfully....';
        } catch (\Throwable $th) {
            echo 'Username already in use....';
        }

}

?>
