<?php
session_start();
?>

<?php




echo 'Salut '.$_SESSION["fname"].' '.$_SESSION["name"].' ton école se trouve bien ici ? '.$_SESSION["loc"].' et ton email est bien : '.$_SESSION["mail"].' ?';


?>