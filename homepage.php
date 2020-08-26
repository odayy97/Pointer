<?php
    
    if(isset($_POST['loguit'])){
        session_start();
        session_destroy();
        header("Location: inloggen.php");
}
?>
<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8" />
    <link href="css/homestyle.css" rel="stylesheet" type="text/css" />
    
    <script src="js/js.js"></script>

    <title>Catch Me If You Can</title>
</head>
<body style="background-color: #8ed658;">
<nav>
        <form method="post">
            <input type="submit" name="loguit" value="loguit">
        </form>
            <a href="homepage.php"><img style="width: 50px; height: 50px;" class="nav-logo" src="./img/7-70663_click-computer-cursor-hardware-mouse-pointer-comments-data.png" alt="logo Nav"></a>
    </nav>
        <div id="block" style=" width: 500px; height: 500px;"> 
            <div id="point" onclick="hi()" onmouseover="move()" style=" width: 15px; height: 15px;">
            </div>
        </div>

        <div>
            <h2 id="score"></h2>
        </div>
    
</body>
</html>