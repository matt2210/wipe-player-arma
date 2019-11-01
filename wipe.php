    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->
<?php

if(empty($_POST['SteamID'])) {
    echo("Merci de renseigner tous les champs");
    exit;
}
$password = array("MOTDEPASSE");
if (in_array($_POST['PASSWORD'], $password)) 
{
$dbh = new PDO('mysql:host=HOST;dbname=DATABASENAME', "USER", "PASS");



$req = $dbh->prepare('DELETE FROM players WHERE pid = ?');
$req->execute(array($_POST['SteamID']));
$req->closeCursor();

$req = $dbh->prepare('DELETE FROM houses WHERE pid = ?');
$req->execute(array($_POST['SteamID']));
$req->closeCursor();

$req = $dbh->prepare('DELETE FROM vehicles WHERE pid = ?');
$req->execute(array($_POST['SteamID']));
$req->closeCursor();

echo("Wipe Effectuer !");
header('refresh:2;url=index.html');
}
else 
{
	echo "ERROR INCORRECT PASSWORD RETRY PLEASE IN 2SEC [AUTO REFRESH IN 2SEC]";
	header('refresh:2;url=index.html');
}
?>
    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->
    <!--BlackWido 2019-2020 © - All Right Reserved-->