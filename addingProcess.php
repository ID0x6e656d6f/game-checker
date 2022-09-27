<?php
/*session_start();
$host_name = 'localhost'; //nome dell'host
$db_user = 'alezag74_gamechecker'; //utente del server
$db_password = 'zaga2004zz#'; //password dell'utente
$conn = new mysqli($host_name, $db_user, $db_password); //connessione all host
$database = "alezag74_gamechecker";
$conn->select_db($database);

$nome = $_SESSION["name"];
$stringa = $_POST['txt'];
$added= mysqli_query($conn, "UPDATE utenti SET description='$stringa' WHERE nome='$nome'");*/

session_start();
require_once('../connection/connection.php');
$db_selected = 'alezag74_gamechecker';
mysqli_select_db($connection, $db_selected);

$stato_login = 0; //serve come output per indicare errori o altro nel login
$txt = $_POST['txt'];
$nome = $_SESSION["name"];

$search_user =  "UPDATE utenti SET description='$txt' WHERE nome='$nome'";
$result_ut = mysqli_query($connection, $search_user);
?>