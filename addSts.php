<!DOCTYPE html>
<html lang="it">
<?php
    session_start();
    require_once('../connection/connection.php');
    $db_selected = 'alezag74_gamechecker';
    mysqli_select_db($connection, $db_selected);
    if($_SESSION["logged"] == 0){
    header("Location: index.php");
    } 
    $nome = $_SESSION["name"];
    $search = ("SELECT * FROM utenti WHERE nome='$nome'");
    $result_ut = $connection->query($search);
    $row = mysqli_fetch_assoc($result_ut);
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.5.0.js"></script>
    <link rel="stylesheet" href="../1css/main.css">
    <link rel="stylesheet" href="../1css/profile_stats.css">
    <title>Game checker | Your stats</title>
    <style>
        body {
            min-height: 88vh;
        }
    </style>
</head>

<body>
    <div class="bodyPage">
        <div class="nav-bar">
            <a href="../index.php" style="text-decoration: none;">&nbsp&nbsp<img src="../img/logo3.png"
                    height="99%"></a>
        </div>
        <center>
            <div class="container">
                <h2>Inserisci nuova descrizione per il tuo profilo:</h2>
                <form id="descc" method="POST">
                    <br>
                    <textarea type="text" name="desc" class="desc"
                        id="desc"><?php echo $row['description']; ?></textarea>
                    <br><br><button type="submit">Aggiorna stats</button><br><br>
                </form>
            </div>
        </center>
    </div>
</body>
<script>
    $(document).ready(function () {
        $('#descc').submit(function (e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: 'addingProcess.php',
                data: ({
                    txt: $("#desc").val(),
                }),
                success: function (data) {
                    location.href = "../profile/profilo.php";
                }
            });
        });
    });
</script>

</html>