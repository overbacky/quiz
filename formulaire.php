<?php
session.start();
if (isset($_POST['prenom'])==1){
  echo $_POST['prenom'];
  $user = $_POST['prenom'];
  $user = htmlspecialchars($user);
$_SESSION['prenom']:$user;
$sql = "INSERT INTO clement(prenom) VALUES('$prenom')";
}
?>


<html>
 <link rel="stylesheet" type="text/css" href="style.css">
 <body>
 <h1>Bienvenue sur le quiz de l'ESD</h1>
  <form method="POST" action="formulaire.php">
  <center>
     
      <input type="text" name="nom" size="20" value="nom" maxlength="35">
      <br> 
      <input type="text" name="prenom" size="20" value="prenom" maxlength="35">
      <br>
      <input type="text" name="cheveux" size="20" value="cheveux" maxlength="35"> 
      <br>
      <input type="text" name="yeux" size="20" value="yeux" maxlength="35">
      <br>
      
      <br>
      <input type="submit" value="Envoyer" name="envoyer">
  </center>
  </form>
  </body>
</html>