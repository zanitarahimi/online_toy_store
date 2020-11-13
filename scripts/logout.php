<?php
session_start();
session_unset();
session_destroy(); 
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Dalja</title>
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
    <div class="form">
          <h1>Faleminderit për vizitën</h1>
              
          <p><?= 'Dalja është bërë me sukses!'; ?></p>
          
          <a href="../index.php"><button class="button button-block"/>Ballina</button></a>

    </div>
</body>
</html>
