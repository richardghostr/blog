<?php

//connexion a la base de donnees 
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";


$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);
$requete = "SELECT * FROM `logements`";

$b = $connexion->query($requete);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/immojeune/css/decouvrir.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>

    <div class="first">

        <div class="head">

            <div>
                <h1>Houzez</h1>
            </div>

            <div class="red">
                <div class="headr">

                    <li><a href="">Decouvrir</a></li>
                    <li><a href="">Louer</a></li>
                    <li><a href="">Proposer un bien</a></li>
                    <li><a href="">HouzezForSchool</a> </li>
                    <li><a href="">Actus</a></li>
                </div>
                <div class="headm">
                    <li class="t"><a href="">en</a></li>
                    <?php
                    // if(isset($_SESSION['richard']) AND !empty($_SESSION['richard'])){
                    //     echo "affiche boule";
                    // }else{ 
                    ?>
                    <li class="t">|</li>
                    <li><a href="#" class="login2">Se connecter</a></li>
                    <li class="t">-</li>
                    <li><a href="#" class="login1">S'inscrire</a></li>
                    <?php
                    // }
                    ?>
                </div>
                <div class="btn">
                    <li><a href="">DEPOSER UNE ANNONCE</a></li>
                </div>

            </div>

        </div>
    </div>

    <div class="decouvrir">
        <div class="search">
            <form method="POST" class="form">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" value="" placeholder="Rechecher par ville ou par ecole" required class="ii">
                <button type="submit">RECHRCHER</button>
            </form>
            <button class="id" id='showtl'>Type de logement
                <form class="tl" style="cursor:text" method="POST" action="/immojeune/src/search.php">
                    <h3>TYPE DE LOGEMENT</h3>
                    <ul>
                        <li><input type="radio" name="tyy" id="q" style="margin-left: -25px" value="Chambre"> <label for="q" style="cursor:pointer">Chambre</label></li>
                        <li><input type="radio" name="tyy" id="ar" style="margin-left:1px" value="Appartement"><label for="ar" style="margin-left:5px ;cursor:pointer">Appartement</label></li>
                        <li><input type="radio" name="tyy" id="st" style="margin-left:-45px" value="Studio"> <label for="st" style="cursor:pointer">Studio</label></li>

                    </ul>
                    <a href="" for="oi">APPLIQUER</a>
                    <button name="okz" type="submit" id="oi"></button>
                </form>
            </button>

            <button class="id" id='showtl'>Emplacement
                <form class="tl" style="cursor:text" method="POST">
                    <h3>EMPLACEMENT</h3>
                    <ul>
                        <li><input type="checkbox" name="roo" id="q" style="margin-left: 1px"> <label for="q" style="cursor:pointer">Bafoussam</label></li>
                        <li><input type="checkbox" name="roo" id="ar" style="margin-left:-16px"><label for="ar" style="margin-left:5px ;cursor:pointer">Yaoundé</label></li>
                        <li><input type="checkbox" name="" id="st" style="margin-left:-28px"> <label for="st" style="cursor:pointer">Douala</label></li>

                    </ul>
                    <a href="">APPLIQUER</a>
                </form>
            </button>

            <button class="id" id="TT">Prix
                <form class="tl" style="cursor:text" method="POST">
                    <h3>PRIX</h3>
                    <ul>
                        <H4 style="margin-top: -5px ;margin-left:-140px;font-weight:500">MIN</H4>
                        <li><input type="number" name="" id="q" style="margin-left:1px; margin-bottom:10px"></li>
                        <H4 style="margin-top: -5px ;margin-left:-136px;font-weight:500">MAX</H4>
                        <li><input type="number" name="" id="ar" style="margin-left:1px"></li>

                    </ul>
                    <a href="" for="fd">APPLIQUER</a>
                    <button type="submit" name="ok" id="fd"></button>
                </form>
            </button>
            <button class="id" id="TTT">Surface
                <form class="tl" style="cursor:text">
                    <h3>SURFACE</h3>
                    <ul>
                        <H4 style="margin-top: -5px ;margin-left:-140px;font-weight:500">MIN</H4>
                        <li><input type="number" name="" id="q" style="margin-left:1px; margin-bottom:10px"></li>
                        <H4 style="margin-top: -5px ;margin-left:-136px;font-weight:500">MAX</H4>
                        <li><input type="number" name="" id="ar" style="margin-left:1px"></li>

                    </ul>
                    <a href="">APPLIQUER</a>
                </form>
            </button>

        </div>
        <div class="log">
            <div>
                <H1>10 Logements etudiants a douala</H1>
                <h5 style="font-weight:550 ;">la selection de bien de l'equipe</h5>
            </div>
            <div class="cont">
                <?php
                $nom_serveur = "localhost";
                $utilisateur = "root";
                $mot_de_passe = "";
                $nom_bd = "logements_etudiants";
                $emp = "";

                $connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);

                    $requete = "SELECT * FROM `logements`";

                    $b = $connexion->query($requete);

                    while ($row = $b->fetch_assoc()) { ?>
                        <div id="cadre">
                            <div class="img1"></div>
                            <a href="/immojeune/louer.php?id=<?php echo $row["id"]; ?>" class="text" for="op">
                                <div id="pp"> <i class='bx bxs-star' style="margin-bottom: 1px;"></i> Particulier</div>
                                <p style="font-weight: 600; margin-bottom:2px; color:black"> <?php echo $row["type"]; ?></p>
                                <p style="font-size: 0.8em;margin-bottom:0px ;width:100%;color:black"><?php echo $row["Description"]; ?></p>
                                <p style="font-weight: 600; margin:5px 0;color:black"><?php echo $row["superficie"]; ?>m2 - <?php echo $row["prixmensuel"]; ?>fcfa</p>
                                <p style="font-size: 0.8em;color:black"><i class='bx bx-location-plus'></i><?php echo $row["Emplacement"]; ?></p>
                            </a>
                        </div>
                    <?php
                    }
                 ?>

            </div>
        </div>
    </div>
</body>

</html>