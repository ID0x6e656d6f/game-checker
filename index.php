<!DOCTYPE html>
<html lang="it">
<?php
	session_start();
	$_SESSION["logged"];
    require_once('connection/connection.php');
    $db_selected = 'alezag74_gamechecker';
    mysqli_select_db($connection, $db_selected);
    $search = ("SELECT * FROM utenti");
    $result_ut = $connection->query($search);
    $cont = 0;
    $NomeOut1;
    $DescOut1;
    $NomeOut2;
    $DescOut2;			//queste variabili e questa parte serve per poter 
    $NomeOut3;			//nel processo seguente semplicemente vengono assegnate
    $DescOut3;			//ad un valore del database, preso dalla query
    $NomeOut4;			//dichiarata sopra...molto meccanico
    $DescOut4;
    $NomeOut5;
    $DescOut5;
    $NomeOut6;
    $DescOut6;
    foreach ($result_ut as $row) {
            if($NomeOut1==null){
                $NomeOut1 = $row["nome"];
                $DescOut1 = $row["description"];
            }
            else if($NomeOut2==null){
                $NomeOut2 = $row["nome"];
                $DescOut2 = $row["description"];
            }
            else if($NomeOut3==null){
                $NomeOut3 = $row["nome"];
                $DescOut3 = $row["description"];
            }
            else if($NomeOut4==null){
                $NomeOut4 = $row["nome"];
                $DescOut4 = $row["description"];
            }
            else if($NomeOut5==null){
                $NomeOut5 = $row["nome"];
                $DescOut5 = $row["description"];
            }
            else if($NomeOut6==null){
                $NomeOut6 = $row["nome"];
                $DescOut6 = $row["description"];               
            }
    }
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game checker | Home</title>
    <link rel="stylesheet" href="1css/main.css">  <!-- css di base di tutte le pagine -->
    <link rel="stylesheet" href="1css/index.css"> <!-- css della pagina attuale -->
    <link rel="stylesheet" href="1css/titleAn.css"> <!-- css animazione titolo -->
</head>

<body>
    <div class="bodyPage">
        <div class="nav-bar">
            &nbsp&nbsp<img src="img/logo3.png" height="99%">
            <div class="actions_buttons">
                <a style="<?php if ($_SESSION["logged"]==1) { echo 'display:none;' ; } ?>"
                    href="login/login.php">Login</a>
                <a class="prf" href="profile/profilo.php">
                    <?php if ($_SESSION["logged"]==1) { echo $_SESSION["name"]; } ?>
                </a>
            </div>
        </div>
        <center>
            <div class="container">
		<div class="page_part" id="start">
			<h2 class="titlee">Un social innovativo
				Per gli appassionati del gaming
				<div class="sas" style="text-align: center;">Benvenuto in <br><b>GameChecker</b></div>
			</h2>
		</div>

                <div class="eSportCont">
                    <br><br><h2>eSports news</h2>
                    <div class="newEsp">
                        <div style="background-image: url('https://kcgb5f9l.media.zestyio.com/RLCS_Fall_Major_Primer_01.jpg');"><a href="https://esports.rocketleague.com/news/fall-major-primer/">
                        <p><b>Rocket League:</b><br>BSD wins fall major tournament<br>NRG on the second place<br>SMPRE and FaZe clan third place</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                        <div style="background-image: url('https://esports.thegamesmachine.it/wp-content/uploads/2020/07/AGB_CDL_Teams_ALL_Black.jpg');"><a href="https://esports.thegamesmachine.it/news/50365/cod-league-2020-last-week-goodbaye-regular-season/');">
                        <p><b>COD Modern warfare:</b><br>FaZe wins, with simp, aBezy, Cellium, MajorManiak and Priestahh<br> against DAL Empire</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                        <div style="background-image: url('https://17kgroup.it/wp-content/uploads/2018/03/OpTic-Gaming-Halo.jpg');"><a href="https://dotesports.com/call-of-duty/news/optic-texas-confirmed-merger-og-envy-cdl-team-now-official">
                        <p><b>OpTic Gaming:</b><br>OpTic gaming finally confirms the new OpTic Texas composed by scump, DashySZN, Shotzzy and iLLeYYY</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                        <div style="background-image: url('https://pbs.twimg.com/media/FEWse8SVQAQL688?format=jpg&name=large');"><a href="https://www.aroged.com/2021/12/21/cloud9-winners-of-the-first-halo-infinite-championship-absolute-domination-in-raleigh/">
                        <p><b>Halo Infinite:</b><br>Cloud9 won the first Major, now they're the first esports champion of Halo Infinite</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                        <div style="background-image: url('https://www.100x100napoli.it/wp-content/uploads/2021/02/amazon-university-esports.jpg');"><a
                        href="https://www.4gamehz.com/2021/12/21/amazon-university-esports-italia-winter/">
                        <p><b>University winter split:</b><br>the winter split season ended during these days, and we finally know the italian winners:<br>I cavalieri di trieste(LoL), Bulat(LoR), ItsRob(CR), Squadra Umile(R6)</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                        <div style="background-image: url('https://www.drcommodore.it/wp-content/uploads/2021/12/Esports-1.jpg');"><a href="https://www.drcommodore.it/2021/12/23/giappone-prima-scuola-esports/">
                        <p><b>First esports university:</b><br>we finally have the first esports university in Japan, opened in Shibuya, the 'Esports High School'</p>
                        </a></div>
                        &nbsp&nbsp&nbsp
                    </div>
                </div>

                <br><br>

                <div class="randPlayerContainer">
                <h1>Some random player</h1>
                    <div class="plyDiv" style="<?php if ($DescOut1 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut1; ?></h1>
                        <pre><?php echo $DescOut1; ?></pre>
                    </div>
                    <br>
                    <div class="plyDiv" style="<?php if ($DescOut2 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut2; ?></h1>
                        <pre><?php echo $DescOut2; ?></pre>
                    </div>
                    <br>
                    <div class="plyDiv" style="<?php if ($DescOut3 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut3; ?></h1>
                        <pre><?php echo $DescOut3; ?></pre>
                    </div>
                    <br>
                    <div class="plyDiv" style="<?php if ($DescOut4 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut4; ?></h1>
                        <pre><?php echo $DescOut4; ?></pre>
                    </div>
                    <br>
                    <div class="plyDiv" style="<?php if ($DescOut5 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut5; ?></h1>
                        <pre><?php echo $DescOut5; ?></pre>
                    </div>
                    <br>
                    <div class="plyDiv" style="<?php if ($DescOut6 == "") { echo 'display:none;' ; } ?>">
                        <h1><?php echo $NomeOut6; ?></h1>
                        <pre><?php echo $DescOut6; ?></pre>
                    </div>
                </div>
                
                <br><br>
                <div class="ftEsp">
                    <h2>eSports teams associated with us</h2>
                    <div class="espTeam">
                        <div class="opticDiv">
                            <p><a href="https://twitter.com/optic?lang=it">OpTic Gaming</a></p>
                        </div>
                        <div class="quesDiv">
                            <p><a href="https://twitter.com/teamquesogg">Team Queso</p>
                        </div>
                        <div class="FazeDiv">
                            <p><a href="https://fazeclan.com">FaZe Clan</p>
                        </div>
                        <div class="c9Div">
                            <p><a href="https://cloud9.gg">Cloud 9</p>
                        </div>
                        <div class="BDSDiv">
                            <p><a href="https://twitter.com/teambds">BDS</p>
                        </div>
                        <div class="spGaDiv">
                            <p><a href="https://www.spacestationgaming.com">SSG</p>
                        </div>
                        <div class="rogDiv">
                            <p><a href="https://rogue.gg">Rogue</p>
                        </div>
                        <div class="pitKnDiv">
                            <p><a href="https://knights.gg">Pittsburg Knights</p>
                        </div>
                        <div class="o100thiDiv">
                            <p><a href="https://100thieves.com">100 Thieves</p>
                        </div>
                        <div class="vitDiv">
                            <p><a href="https://vitality.gg/en/">Vitality</p>
                        </div>
                    </div>
                </div>

                <br><br>

                <div class="foot">
                        <a href="aboutme.html">About me</a><br><br>
                        <a href="aboutSite.html">About this site</a><br><br>
                        <a href="privacy.html">Privacy</a><br>
                </div> 
            </div>
        </center>
    </div>
</body>
<scripr src="js/parallax.js"></script>
</html>