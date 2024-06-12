<?php
$id = "";
$em = "";
$de = "";
$pm = "";
$pa = "";
$su = "";
$ty = "";
$im = "";
$errorMessage = "";
$successMessage = "";
$row = "";


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

    if (!$row) {
        header("location:/immojeune/admin/logement.php");
        exit;
    }
    $em = $row["Emplacement"];
    $de = $row["Description"];
    $pm = $row["prixmensuel"];
    $pa = $row["prixannuel"];
    $su = $row["superficie"];
    $ty = $row["type"];
} else {
    $id=$_POST['id'];
    $em = $_POST['EM'];
    $de = $_POST['DE'];
    $pm = $_POST['PM'];
    $pa = $_POST['PA'];
    $su = $_POST['SU'];
    $ty = $_POST['TY'];

    do {
        if (empty($em) || empty($de) || empty($pm) || empty($pa) || empty($su) || empty($ty)) {
            $errorMessage = "All the fiels are required";
            break;
        } else {


                $id = $_GET["id"];
                $sl = "UPDATE logements SET prixmensuel= $pm ,prixannuel=$pa ,Emplacement= '$em' ,Description= '$de',superficie=' $su',type=' $ty' WHERE id=$id";
                $result = $connexion->query($sl);
            }

            header("location:/immojeune/admin/logement.php");
            exit;
        
    } while (true);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/immojeune/css/addlogement.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>

<body>


<nav class="navbar2">
        <a href="" class="logo" style="margin-left: -10px;"><i class='bx bx-aperture'></i>Houzez</a>
        <div class="navlist" style="margin-left: -0px; margin-top:120px">
            <ul style="font-size: 1em;">
                <li><a href="/immojeune/admin/dashbord.php" style="text-decoration: none;"><i class='bx bxs-dashboard' style="margin-left: 5px;"></i> Tableau de bord</a></li>
                <li><a href="/immojeune/admin/logement.php" style="text-decoration: none;"><i class='bx bx-home' style="margin-left: 5px;"></i> Logements</a></li>
                <li><a href="/immojeune/admin/reservation.php" style="text-decoration: none;"><i class='bx bx-cart' style="margin-left: 5px;"></i> Reservations</a></li>
                <li><a href="" style="text-decoration: none;"><i class='bx bx-history' style="margin-left: 5px;"></i> Historique</a></li>
                <li><a href="" style="text-decoration: none;"><i class='bx bxs-user-circle' style="margin-left: 5px;"></i> Mon Profil</a></li>
                <li style="margin-top: 180px;"><a href="/immojeune/admin/connexion.php"style="text-decoration: none;"><i class='bx bx-log-out' style="margin-left: 5px;"></i> Se deconnecter</a></li>

            </ul>

        </div>

    </nav>

    <div class="navbar">
        <div class="aj">
            <a href="#">Modifier un logement</a>
        </div>
        <div class="navlinks">


            <form method="POST">
                <input type="hidden" name="id" value="<?php echo $id ?>">
                <h3>Type de logement</h3>
                <div class="input-box">
                    <select name="TY" id="choix">
                        <option value="Chambre">Chambre</option>
                        <option value="Studio">Studio</option>
                        <option value="Appartement">Appartement</option>
                    </select>

                </div>
                <h3>Emplacement du logement</h3>
                <div class="input-box">
                    <input type="text" placeholder="Emplacement" name="EM" value="<?php echo $em; ?>">
                </div>
                <h3>Prix mensuel</h3>
                <div class="input-box">
                    <input type="number" min="0"placeholder="Prix Mensuel" name="PM" value="<?php echo $pm; ?>">

                </div>
                <h3>Prix annuel</h3>
                <div class="input-box">
                    <input type="number"min="0" placeholder="Prix Annuel" name="PA" value="<?php echo $pa; ?>">

                </div>
                <h3>Superficie</h3>
                <div class="input-box">
                    <input type="number" min="0"placeholder="Superficie" name="SU" value="<?php echo $su; ?>">

                </div>
                <h3>Breve description du logement</h3>
                <div class="input-box">
                    <input id="r" type="text" placeholder="Description" name="DE" value="<?php echo $de; ?>">

                </div>
                <h3>Images</h3>
                <div class="input-box" style="display: flex; justify-content:space-between; width: 350px">
                    <div> <label for="rr" style="display: inline-flex; height: 100px; width: 100px; border: 2px dashed  rgb(0, 157, 255); cursor: pointer; border-radius: 20px; margin-top: 8px"></label>
                        <input id="rr" type="file" placeholder="image" name="" style="display: none;">
                    </div>

                    <div> <label for="rr" style="display: inline-flex; height: 100px; width: 100px; border: 2px dashed  rgb(0, 157, 255); cursor: pointer; border-radius: 20px; margin-top: 8px"></label>
                        <input id="rr" type="file" placeholder="image" name="" style="display: none;">
                    </div>

                    <div> <label for="rr" style="display: inline-flex; height: 100px; width: 100px; border: 2px dashed  rgb(0, 157, 255); cursor: pointer; border-radius: 20px; margin-top: 8px"></label>
                        <input id="rr" type="file" placeholder="image" name="" style="display: none;">
                    </div>
                </div>
                <div id="Message">
                    <!-- <?php
                            if ($result) {
                                echo "Mise a jour Effectuee";
                            } else {
                                echo "Veuillez remplir tous les champs";
                            }
                            ?> -->


                </div>
                <div class="btn">
                    <button type="submit" id="green" name="modifier"><a href="#">Modifier</a> </button>
                </div>
            </form>
            <div class="btn2">
                <button type="submit" id="red" name=""> <a href="/immojeune/menu.php">Annuler</a></button>
            </div>

        </div>
    </div>
</body>




</html>