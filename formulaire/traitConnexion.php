<?php
session_start();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Traitement de l'inscription</title>
</head>
<body>
    <?php
        $login = $_GET["login"];
        $pwd = $_GET["mdp"];


$conn = mysqli_connect("localhost", "root", "", "passerrelle");
mysqli_query($conn, "Set CHARACTER SET 'utf8'");
$sql = "SELECT * FROM utilisateur WHERE login ='".$login."'and PWD = '". $pwd ."'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

if ($row != null) {
    echo "Authentifié !";
    echo"<br />";
    echo $row["ID"];
    $_SESSION["ID"]= $row["ID"];
    echo "<br/><br/>";
    echo "<a href ='article.php'>direction article </a>";

} else {
    echo "Erreur";
}

mysqli_close($conn);
?>
</body>
</html>
