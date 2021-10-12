<?php
    require_once("db.php");
    require_once("header.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>livres</title>
    <meta charset="utf8" />
</head>
<body>
    
<?php

$id = $_GET['id'];
$sql = "select * from roman where ID =  ". $id;
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result);

echo "<div style = 'background-color: grey'  height = '300px'>";
echo "<div style = 'font-size : 60px'>". $row["Titre"] ."</div>";
echo "<div style = 'font-size : 40px; color: blue '> ". $row["Auteur"]. "</div>";
echo " Genre :  " .$row["Genre"] . " Date de parution : " . $row["Mois"] ." en ". $row["Annee"];
echo "<br/>";
$photo = "<img src = 'Images/" . $row['Image'] . "' height = 200 />";
echo $photo;
echo "</div>";

?>
</body>

</html>
