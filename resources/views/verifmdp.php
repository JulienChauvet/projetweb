<?php
session_start();
?>
<?php

    $psw = $_POST['psw'];
    $name = $_POST['nom'];
	$fname = $_POST['prenom'];
	$loc = $_POST['localisation'];
	$mail = $_POST['email'];
 

            $_SESSION["psw"] = $psw;
    $_SESSION["name"] = $name;
    $_SESSION["fname"] = $fname;
    $_SESSION["loc"] = $loc;
    $_SESSION["mail"] = $mail;

    if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])#', $psw)) {
 

        header('Location: ../../resources/views/welcome.blade.php');
	}
	
    else {
        header('Location: ../index.php');
	}	
?>