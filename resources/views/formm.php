<?php
session_start();
?>

<?php
    	
	// Ma clé privée
	$secret = "6LeuNQITAAAAAHwUcbXbyFCUudJKRAjcgNRwlaoE";
	// Paramètre renvoyé par le recaptcha
	$response = $_POST['g-recaptcha-response'];
	// On récupère l'IP de l'utilisateur
	$remoteip = $_SERVER['REMOTE_ADDR'];
	
	$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=".$secret."$response=".$response;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) {
		alert("hello world");
		echo '<p> pour des raison de sécurité veuillez cliquer sur le carré </br> "je ne suis pas un robot" avant de valider';
	}
	
	else {
		alert("hello world");
		header('Location: ../../resources/views/welcome.blade.php');
	}
		
?>