<?php
$error = "";
if(isset($_POST['submit'])){
    if (!empty($_POST['mail']) && !empty($_POST['password'])){
        require("DBconnect.php");
        $email = ($_POST['mail']);
        $password = ($_POST['password']);
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
            if($result = $conn->query($sql)){
            $aantal = $result->num_rows;
                if($aantal == 1){
            $user = $result->fetch_row();
            session_start();
            $_SESSION['user'] = $user[1];
            $_SESSION['ingelogd'] = true;
            header("Location: homepage.php");
                 } else{
                echo "Email of password incorrect";
                }
            }
        } else{
            echo "Email & password zijn verplicht";
        }
}

?>





<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link href="./css/inloggenstyle.css" rel="stylesheet" type="text/css" >
    <title>Catch Me If You Can</title>
</head>

<body>
    <nav>
            <a href="inloggen.php"><img style="width: 50px; height: 50px;" class="nav-logo" src="./img/7-70663_click-computer-cursor-hardware-mouse-pointer-comments-data.png" alt="logo Nav"></a>
    </nav>
    <section class="grid-cont">
    <section class="logo-cont">
        <img class="logo" src="./img/7-70663_click-computer-cursor-hardware-mouse-pointer-comments-data.png" alt="logo">
    </section>
    <section class="formulier">
        <form  method="post" class="inputs">
            <input class="mail" type="email" name="mail" placeholder="Emailardess">
            <input class="pass" type="password" name="password" placeholder="Wachtwoord">
            <input type="submit" name="submit" value="inloggen">
        </form>
    </section>
    </section>
</body>
</html>