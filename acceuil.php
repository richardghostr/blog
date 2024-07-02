<?php

session_start();

$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";
$mail=$_SESSION["mail"];

$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);

$sql = "SELECT id AS total FROM `utilisateurs` WHERE email= '$mail'";
$result = mysqli_query($connexion, $sql);
$row = mysqli_fetch_assoc($result);

$_SESSION["id"]= $row["total"];

$number = "";
$mail = "";
$username = "";
$password = "";
$cpassword = "";
$a = "";


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/acceuil.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>





    <title>immojeune</title>
</head>

<body>

    <div class="first">

        <div class="head">

            <div>
                <h1>Houzez</h1>
            </div>

            <div class="red">
                <div class="headr">

                    <li><a href="/immojeune/acceuil.php">Acceuil</a></li>
                    <li><a href="/immojeune/src/decouvrir.php">Logements</a></li>
                    <li><a href="/immojeune/src/agent.php">Nos agents</a></li>
                    <li><a href="/immojeune/src/contact.php">Contacts</a> </li>
                    <li><a href="">A propos</a></li>
                </div>
                <div class="headm">
                    <li class="t"><a href="">en</a></li>
                    <?php
                    if (isset($_SESSION['nom']) and !empty($_SESSION['nom'])) { ?>
      <details >
                            <summary>
                                <div class="roro" style=" display: flex;
background-color: rgb(255, 213, 0);
border-radius: 30px;
height: 40px;
width: 140px;
justify-content: center;
align-items: center;
font-size: 1.1em;
font-weight: 600;
margin-left: -180px;
margin-top: -10px;
position:absolute;
padding:0 10px;
cursor:pointer;
">
                                    <a href="" style="color:black"><?php echo $_SESSION['nom']; ?></a>
                                </div>
                            </summary>

                            <div class="log" style="  position: absolute;
width: 250px;
height: 30vh;
background-color: white;
margin-top:32px;
margin-left:-225px;
border-radius:20px;
display:flex;
flex-direction:column;
justify-content:space-between;
align-items:center;
padding:20px 0;
">

                                <p style="background-color:rgb(255, 213, 0);height:80px; width: 250px;margin-top:-20px;border-radius:20px 20px 0 0;display:flex;justify-content:center">
                                    <i class="bx bxs-user-circle bx-tada" style="font-size:4em;position:absolute;z-index:2  ;margin-top:40px;background-color:black;color:aliceblue;border-radius:100%"></i>
                                </p>
                                <p style="margin-top:20px;margin-bottom:-10px"><?php echo $_SESSION["nom"] ?></p>
                                <p><?php echo $_SESSION["mail"] ?></p>
                                <p><a href="" style="color:rgb(14, 227, 227); display:flex;  align-items:center;"> <i class='bx bxs-edit' style="font-size:1.5em"></i> Edit profile</a></p>
                                <p><a href="" style="color:red;margin-top:-10px; display:flex;  align-items:center;"><i class='bx bx-log-out' style="font-size:1.5em"></i> Se deconnecter</a> </p>

                            </div>
                        </details>
                    <?php
                    } else {
                    ?>
                        <li class="t">|</li>
                        <li><a href="/immojeune/src/login.php" class="login2">Se connecter</a></li>
                        <li class="t">-</li>
                        <li><a href="/immojeune/src/register.php" class="login1">S'inscrire</a></li>
                    <?php
                    }
                    ?>
                </div>
              
                <div class="log">

                    <p style="background-color:rgb(255, 213, 0);height:80px; width: 250px;margin-top:-20px;border-radius:20px 20px 0 0;display:flex;justify-content:center">
                        <i class="bx bxs-user-circle bx-tada" style="font-size:4em;position:absolute;z-index:2  ;margin-top:40px;background-color:black;color:aliceblue;border-radius:100%"></i>
                    </p>
                    <p style="margin-top:20px;margin-bottom:-10px"><?php echo $_SESSION["nom"] ?></p>
                    <p><?php echo $_SESSION["mail"] ?></p>
                    <p><a href="" style="color:rgb(14, 227, 227); display:flex;  align-items:center;"> <i class='bx bxs-edit' style="font-size:1.5em"></i> Edit profile</a></p>
                    <p><a href="" style="color:red;margin-top:-10px; display:flex;  align-items:center;"><i class='bx bx-log-out' style="font-size:1.5em"></i> Se deconnecter</a> </p>

                </div>
                <div class="btn">
                    <li><a href="">DEPOSER UNE ANNONCE</a></li>
                </div>

            </div>

        </div>
        <img src="img/menu-btn.png" alt="" class="menu">
        <div class="body">
            <p class="h1">Logement etudiant et location jeune actif <a href="">partout au Cameroun </a></p>
            <h4> Faites votre recherche parmi plus de 20000 offres de logements etudiants</h4>
            <form action="" class="form">
                <i class='bx bx-search-alt-2'></i>
                <input type="text" value="" placeholder="Rechecher par ville ou par ecole" required class="ii">
                <button type="submit">TROUVER UN LOGEMENT</button>
            </form>
            <p>Découvrez nos annonces : <a href="">Résidence étudiante</a> - <a href="">Particulier à particulier</a> - <a href="">Agence immobilière</a> - <a href="">Colocation </a> - <a href="">Chambre</a></p>
        </div>


    </div>
    <section class="sec">
        <div class="sec1"></div>
        <div class="sec2">
            <img src="img/home-roomer.svg" alt="">
            <div class="tr">
                <h1>Trouver un logement etudiant, c'est simple sur Houzez</h1>
                <ul>
                    <li>
                        <p>1</p>Je crée un compte et complete mon dossier de location en ligne
                    </li>
                    <li>
                        <p>2</p>Je recheche une offre de logement et candidate
                    </li>
                    <li>
                        <p>3</p>J'obtiens rapidement une reponse
                    </li>
                </ul>
                <form action="">
                    <button class="i1"> Commencer ma recherche</button>
                    <button class="i2"> Decouvrir Houzez plus</button>
                </form>
            </div>
        </div>
    </section>

    <div class="foot">
        <?php
        include("src/fin.php");
        ?>
    </div>

</body>



<script>
    const mn3 = document.querySelector(".menu")

    const nl3 = document.querySelector(".head .red")

    mn3.addEventListener('click', () => {
        nl3.classList.toggle('mobilemenu')
    })
</script>




<script>
    const mn = document.querySelector(".head .red .headm .roro")

    const nl = document.querySelector(".head .red .headm .roro .log")

    mn.addEventListener('click', () => {
        nl.classList.toggle('mobilemenu')
    })
</script>


</html>