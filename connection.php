<?php
 $servername = 'localhost';
 $username = 'root';
 $password = '';
 
 //On essaie de se connecter
  $conn=mysqli_connect($servername,$username,$password,'dbrequete') or 
  /*On capture les exceptions si une exception est lancée et on affiche
  *les informations relatives à celle-ci*/ die("Echec de Connexion");
  $mat="SELECT * FROM matiere";
  $result=mysqli_query($conn,$mat);
?>