<!DOCTYPE html>
<html lang="it">
<?php
    session_start();
    require_once('../connection/connection.php');
    $db_selected = 'alezag74_gamechecker';
    mysqli_select_db($connection, $db_selected);
    if($_SESSION["logged"] == 0){
    header("Location: ../index.php");
    } 
    $nome = $_SESSION["name"];
    $search = ("SELECT * FROM utenti WHERE nome='$nome'");
    $result_ut = $connection->query($search);
    $row = mysqli_fetch_assoc($result_ut);
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game checker | Profilo</title>
    <link rel="stylesheet" href="../1css/main.css">
    <link rel="stylesheet" href="../1css/profile.css">
    <style>
        body{
            min-height:98vh;
        }
    </style>
</head>

<body>
    <div class="bodyPage">
        <div class="nav-bar">
            <a href="../index.php" style="text-decoration: none;">&nbsp&nbsp<img src="../img/logo3.png" height="99%"></a>
            <div class="actions_buttons">
                <a href="../logout/logout.php">Logout</a>
            </div>
        </div>
        <center>
            <div class="container">
                    <h1>&nbsp<?php echo $_SESSION["name"];?>&nbsp&nbsp</h1><br>
                    <textarea readonly type="text" name="desc" class="desc" id="desc"><?php echo $row['description']; ?></textarea><br>
                     <!-- <a href="chg-name.php">Change name</a>
                     || 
                    <a href="chg-pass.php">Change password</a>
                    || -->
                    <a href="../statsProcess/addSts.php">Change your stats</a>
            </div>
        <center>
    </div>
    </div>
</body>
</html>