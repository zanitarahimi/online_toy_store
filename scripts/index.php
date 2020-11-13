<?php 
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>TOYS</title>
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<?php 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { 
        require 'login.php';
    }
    elseif (isset($_POST['register'])) { 
        require 'register.php';
    }
}
?>
<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab"><a href="#signup">Regjistrohu</a></li>
        <li class="tab active"><a href="#login">Kyçu</a></li>
      </ul>
      
      <div class="tab-content">

         <div id="login">   
          <h1>Mirësevini përsëri në ZOA</h1>
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email" required autocomplete="off" name="email"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Fjalëkalimi<span class="req">*</span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
  
          
          <button class="button button-block" name="login" />Kyçu</button>
          <a href="../index.php" style="font-size: 30px;"><i class="fas fa-angle-double-left"></i></a>
          </form>

        </div>
          
        <div id="signup">   
          <h1>Regjistrohuni në ZOA</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Emri<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Mbiemri<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name='email' />
          </div>
          
          <div class="field-wrap">
            <label>
              Fjalëkalimi<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>
          
          <button type="submit" class="button button-block" name="register" />Regjistrohu</button>
          <!-- <a href="../index.php">Ballina</a> -->
          <a href="../index.php" style="font-size: 30px;"><i class="fas fa-angle-double-left"></i></a>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<img src="" width="250" id='imgg'>
<script type="text/javascript">
  document.getElementById('imgg').src = `../images/toy${Math.floor(Math.random()*7)}.png`;
</script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script>

</body>
</html>
