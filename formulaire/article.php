<?php
session_start();
?>

<?php
$res = isset($_SESSION["ID"]);
if ($res == false)
{
    header('Location:connexion.html');
    exit();
}



echo "<h1>je suis dans la page !!!!</h1>";

?>