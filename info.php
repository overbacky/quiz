<html>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
define ("DB_HOST", "localhost");
define ("DB_USER", "root");
define ("DB_PASS", "root");
define ("DB_BASE", "quiz");

/*if(isset($_POST['nom']))      $nom=$_POST['nom'];
else      $nom="";

if(isset($_POST['prenom']))      $prenom=$_POST['prenom'];
else      $prenom="";

if(isset($_POST['cheveux']))      $cheveux=$_POST['cheveux'];
else      $cheveux="";

if(empty($nom) OR empty($prenom) OR empty($cheveux)) 
    { 
    echo '<font color="red">Attention !</font>'; 
    } */
$link = mysqli_connect('localhost', 'root', 'root', 'quiz')  or die('Erreur de connexion '.mysqli_error()); 

$nom = mysqli_real_escape_string($link, $_REQUEST['nom']);
$prenom = mysqli_real_escape_string($link, $_REQUEST['prenom']);
$cheveux = mysqli_real_escape_string($link, $_REQUEST['cheveux']);
$yeux = mysqli_real_escape_string($link, $_REQUEST['yeux']);

//else      
    
    

// sélection de la base  

    //mysql_select_db('quiz',$db)  or die('Erreur de selection '.mysql_error()); 
     
    // on écrit la requête sql 
    $sql = "INSERT INTO clement(nom, prenom, cheveux, yeux) VALUES('$nom','$prenom','$cheveux','$yeux')"; 
    // on insère les informations du formulaire dans la table 
    if(mysqli_query($link, $sql)) { //or die ('Erreur SQL !'.$sql.'<br>'.mysqli_error()); 

    // on affiche le résultat pour le visiteur 
     
    }

    mysqli_close($link);  // on ferme la connexion 
     

?>

<body style="text-align:center;">
<h1>Bonjour <?php echo $_POST['prenom']?></h1>
<h2></h2>

  <img src="TE.jpg">
  <img src="esd-paris.png">
  <img src="bordeaux.jpg">
</body>
</html>