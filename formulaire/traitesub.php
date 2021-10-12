<!DOCTYPE html>
<html>
    <head>
  <title> traitement </title>
  <meta charset="utf8"/>
    </head>
    <body>
    <?php
      

       $prenom = $_GET["prenom"];
       $nom = $_GET["nom"];
       $login = $_GET["login"];
       $mdp = $_GET["mdp"];

       echo $prenom ." ". $nom ." ". $login ." ". $mdp;

       $conn = mysqli_connect("localhost","root","","passerrelle");
       mysqli_query($conn, "Set CHARACTER SET 'utf8'");
       $sql = "INSERT INTO utilisateur Values( null,'". $prenom ."','". $nom ."','". $login ."','". $mdp."')";
       $result = mysqli_query($conn, $sql);

       if  ($result == true){
           echo "<p> nouveau utilisateur ajouté </p>";
           header('Location: connexion.html');
       }
       else if ($result == false){

           echo "<p> echec  </p>";
       }
       
       mysqli_close($conn);
    /*
      
       $sql ="select * from utilisateur";
       $result = mysqli_query($conn, $sql);
       while ($row = mysqli_fetch_array($result)){
       echo $row["ID"]." ".$row["Prenom"]." ".$row["Nom"]." ".$row["Login"]." ".$row["PWD"];
       echo "<hr/>";
       }
       */
      ?>
 
    </body>
</html>