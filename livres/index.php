<?php
    require_once("db.php");
    require_once("header.php");
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Livres</title>
    <meta charset="utf8" />

</head>
<body>

<?php
    $sql = "select * from roman";
    mysqli_query($conn, "Set CHARACTER SET 'utf8'");
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result))
    {
       
        echo "<div style = 'background-color: grey'  height = '150px'>";
        echo "<div style = 'font-size : 30px'>". $row["Titre"] ."</div>";
        echo "<div style = 'font-size : 20px; color: blue '> ". $row["Auteur"]. "</div>";
        $photo = "<img src = 'Images/" . $row['Image'] . "' height = 60 />";
        echo $photo;
        echo "<br/>";
        echo "<a href = 'detail.php?id=" . $row["ID"] . "'>Détail de l'article</a>";
        echo "</div>";
        echo "<br/>";
       
    }


?>



</body>


</html>