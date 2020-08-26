<?php
session_start();
if(isset($_POST['uitloggen'])){
    session_destroy(['ingelogd']);
    header("Location: inloggen.php");
}

?>