<!DOCTYPE html>
<html>
<head>
  <?php include '../html/Head.html'?>
</head>
<body>
<?php
 if(isset($_GET['mail'])){
   $correoaqui=$_GET['mail'];
 }
  include '../php/Menus.php';
?>
  <section class="main" id="s1">
    <div>

      <h2>Quiz: el juego de las preguntas</h2>
      
    </div>
  </section>
  <?php include '../html/Footer.html' ?>
</body>
</html>

