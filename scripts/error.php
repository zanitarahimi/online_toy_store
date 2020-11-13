<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Error</title>
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
<body>
<div class="form">
    <h1>Gabim</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>     
    <a href="index.php"><button class="button button-block"/>Kthehu prapa</button></a>
</div>
</body>
</html>
