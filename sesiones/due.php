<?php
    session_start();
    if (!isset($_SESSION["contador"]))
        $_SESSION["contador"] = 1;
    else
        $_SESSION["contador"]++;
?>

<html>
    <head>
        <title> Segunda pagina </title>
    </head>
    
    <body>
        <?php
            echo 'Usted a visitado '.$_SESSION["contador"].' paginas'.'<br>';
        ?>
    </body>
    
</html>