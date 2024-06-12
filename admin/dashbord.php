<?php


$re = "";
$ree = "";
$reee = "";
$p = "";
$pp = "";
$ppp = "";
$pppp="";

//connexion a la base de donnees 
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";


$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);

$re = "SELECT COUNT(id) AS total FROM `logements`";
$ree = "SELECT COUNT(id) AS total FROM Reservations,logements WHERE Reservations.idlogement=logements.id";
$reee = "SELECT COUNT(idreservation) AS total FROM Reservations,logements WHERE Reservations.idlogement=logements.id AND Reservations.statuts='validé'";
$reeee="UPDATE logements JOIN reservations SET logements.statuts= 'occupé' WHERE Reservations.idlogement=logements.id AND reservations.statuts='validé'";

$p = $connexion->query($re);
$pp = $connexion->query($ree);
$ppp = $connexion->query($reee);
$pppp=$connexion->query($reeee);

$pe = $p->fetch_assoc();
$pee = $pp->fetch_assoc();
$peee = $ppp->fetch_assoc();
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="/immojeune/css/dashbord.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            packages: ['corechart']
        });
        google.charts.setOnLoadCallback(drawCharts);

        function drawCharts() {
            <?php
            //connexion a la base de donnees 
            $nom_serveur = "localhost";
            $utilisateur = "root";
            $mot_de_passe = "";
            $nom_bd = "logements_etudiants";

            $connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);
            $tt = "SELECT COUNT(id) AS total ,type FROM logements ,reservations
            WHERE logements.id=reservations.idlogement
            GROUP BY logements.type ";

            $result = $connexion->query($tt);
            if ($result->num_rows > 0) {

                echo "var data1 = new google.visualization.DataTable();";
                echo" data1.addColumn('string','Type de logement');";
                echo" data1.addColumn('number','nombre de reservations');";
                echo" data1.addRows([";
                while($row=$result->fetch_assoc()){
                     echo"['".$row["type"]."'," .$row["total"]."],";
                }

                echo "]);";
            }

            $connexion->close();

            ?>

            var options = {
                title:" Type de Logements les plus sollicités",
                fontName:'poppins',
            }
            var chart1=new google.visualization.PieChart( document.getElementById("chart"))
            chart1.draw(data1 ,options);
        }
    </script>
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
                <li style="margin-top: 180px;"><a href="/immojeune/admin/connexion.php" style="text-decoration: none;"><i class='bx bx-log-out' style="margin-left: 5px;"></i> Se deconnecter</a></li>

            </ul>

        </div>

    </nav>
    <div class="dash2">
        <div class="h">

            <h2 style="display: flex; align-items:center"><img src="/immojeune/img/menu-regular-96.png" alt="" id="me"><label for="">Dashboard</label></h2>

            <form action="">
                <input type="text" placeholder="Recherche...">
                <button id="bb"><i class='bx bx-search'></i></button>
            </form>
            <button><label for="">Admin</label></button>
        </div>
        <div class="j">
            <div id="r" style="background-color: rgb(0, 157, 255); color:white">
                <h3>Nombre de logements</h3>
                <h2><?php echo $pe["total"]; ?></h2>
            </div>
            <div id="r" style="background-color: white; color:rgb(0, 157, 255);">
                <h3>Logements loués</h3>
                <h2><?php echo $peee["total"]; ?></h2>
            </div>
            <div id="r" style="background-color: rgb(0, 157, 255); color:white">
                <h3>Nombres de reservations</h3>
                <h2><?php echo $pee["total"]; ?></h2>
            </div>
            <div id="r" style="background-color: white; color:rgb(0, 157, 255);">
                <h3>Revenus</h3>
                <h2>30</h2>
            </div>
        </div>
        <div class="p">
        <div id="chart"></div>

            <div id="chart2" > </div>

        </div>
    </div>

</body>



</html>