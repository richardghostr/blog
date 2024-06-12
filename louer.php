<?php
$no = "";
$ad = "";
$em = "";
$si = "";
$pn = "";
$sa = "";
$sr = "";
$da = "";
$du = "";
$dr = "";
$r = "";
$successMessage = "";
$st = "";
$cout = "";
$row = "";
$id = "";
$cc = "";

//connexion a la base de donnees 
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";


$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (!isset($_GET["id"])) {
        header("location: /immojeune/admin/logement.php");
        exit;
    }


    $id = $_GET["id"];
    $sql = "SELECT * FROM logements WHERE id=$id";
    $result = mysqli_query($connexion, $sql);
    $row = mysqli_fetch_assoc($result);
    $cc = $row["prixmensuel"];

} else {
    $no = $_POST['NO'];
    $ad = $_POST['AD'];
    $em = $_POST['EM'];
    $si = $_POST['SI'];
    $pn = $_POST['PN'];
    $sa = $_POST['SA'];
    $sr = $_POST['SR'];
    $da = $_POST['DA'];
    $du = $_POST['DU'];
    $dr = intval($_POST['DU']);
    $id = $_GET["id"];
    $r =  $sa + $sr;

    $cout = $dr *intval($cc);
    echo $cout;

    do {
        if (empty($no) || empty($ad) || empty($em) || empty($si) || empty($pn) || empty($sa) || empty($sr) || empty($da) || empty($du)) {
            $errorMessage = "All the fiels are required";
        } else {
            $insert = "INSERT INTO `reservations`(`idlogement`,`nomc`, `adressec`, `numeroc`, `situationc`, `salaire`, `date`, `duree de location`) VALUES ( $id,'$no','$ad',$pn,'$si',$r,'$da','$du')";
            $b = $connexion->query($insert);

            if (!$b) {
                $errorMessage = "Invalid query" . $connexion->error;
                break;
            }
            $no = "";
            $ad = "";
            $em = "";
            $si = "";
            $pn = "";
            $sa = "";
            $sr = "";
            $da = "";
            $du = "";

            $successMessage = "Logement enregistré";
            echo $successMessage;

            header("location:/immojeune/src/decouvrir.php");
            exit;
        }
    } while (true);
}



?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/immojeune/css/louer.css">
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
        <div class="body">
            <div id="R">
                <img src="/immojeune/img/bed-1834327_1920.jpg" alt="">
            </div>
            <div id="RR">
                <img src="/immojeune/img/bedroom-1137939_1920.jpg" alt="">
                <img src="/immojeune/img/bedroom-5772286_1920.jpg" alt="">
            </div>
            <button>Voir plus d'images</button>
        </div>

    </div>



    <div class="louer">
        <div class="info">
            <p id="pp"> <i class='bx bxs-star'></i> Particulier</p>
            <div>
                <h1><?php echo $row["type"]; ?></h1>
                <p> <i class='bx bx-location-plus'></i><?php echo $row["Emplacement"]; ?> <i class='bx bx-time-five'></i>Publié il y a un Mois</p>
            </div>
            <div>
                <h2>Description du logement</h2>
                <p><?php echo $row["Description"]; ?> </p>
            </div>

            <div>
                <h3>Ecoles a proximité</h3>
                <p> <i class='bx bx-buildings' style="color: rgb(13, 216, 216);"></i> Institut universitaire de la cote (a 900m)</p>
                <p> <i class='bx bx-buildings' style="color: rgb(13, 216, 216);"></i> Istama (a 150m)</p>

            </div>


        </div>
        <div class="form">


            <form method="POST">
                <h1><?php echo $row["superficie"]; ?>m2 </h1>
                <h2 id="p"><?php echo $row["prixmensuel"]; ?> fcfa</h2>
                <h2 style="color: rgb(13, 216, 216);">Deposer ma candidature</h2>
                <div class="input-box">
                    <input type="text" placeholder="Nom" name="NO">
                    <i class='bx bxs-user-circle'></i>
                    <input type="text" placeholder="Adresse" name="AD" class="t">
                    <i class='bx bx-current-location' id="SS"></i>

                </div>
                <div class="input-box">
                    <input type="email" placeholder=" E-mail" name="EM" id="m">
                    <i class='bx bxs-envelope' id="TT"></i>
                </div>
                <div class="input-box">
                    <input type="number" placeholder="Telephone" name="PN">
                    <i class='bx bx-phone-call'></i>
                    <select name="SI" id="choix" class="t2">
                        <option value="Etudiant avec Garant">Etudiant avec Garant</option>
                        <option value="Etudiant sans Garant">Etudiant sans Garant</option>
                        <option value="Stagiaire">Stagiaire</option>
                        <option value="Salarié">Salarié</option>
                        <option value="Apprentis">Apprentis</option>
                        <option value="Autres">Autres</option>

                    </select>
                    <i class='bx bxs-bank'></i>
                </div>
                <div class="input-box" id="input-box">
                    <div>
                        <h5>Revenus salariaux</h5>
                        <input type="number" min='0' placeholder="Salaire" name="SA">
                        <i class='bx bx-dollar'></i>
                    </div>
                    <div>
                        <h5>Revenus Garants</h5>
                        <input type="number" placeholder="Salaire" name="SR">
                        <i class='bx bx-dollar'></i>
                    </div>
                </div>



                <div id="input-box" class="input-box">
                    <div>
                        <h5>Date d'entree</h5>
                        <input type="date" placeholder="Selectionner" name="DA">
                        <i class='bx bxs-calendar'></i>
                    </div>
                    <div>
                        <h5>Duree de location</h5>
                        <select name="DU" id="choix2">
                            <option value="">Selectionner</option>
                            <option value="1 ">1 mois</option>
                            <option value="2 ">2 mois</option>
                            <option value="3 ">3 mois</option>
                            <option value="4 ">4 mois</option>
                            <option value="5 ">5 mois</option>
                            <option value="6 ">6 mois</option>
                            <option value="7 ">7 mois</option>
                            <option value="8 ">8 mois</option>
                            <option value="9 ">9 mois</option>
                            <option value="10 ">10 mois</option>
                            <option value="11 ">11 mois</option>
                            <option value="12">1 an</option>
                            <option value="24">2 ans</option>



                        </select>
                        <i class='bx bx-time-five'></i>
                    </div>

                </div>
                <button type="submit" id="btn1" name="candidater">Candidater</button>

            </form>
        </div>
    </div>
    <div class="foot">

    </div>


</body>

</html>