<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="/immojeune/css/logement.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


<body>

    <nav class="navbar2">
        <a href="" class="logo" style="margin-left: -10px;"><i class='bx bx-aperture'></i>Houzez</a>
        <div class="navlist" style="margin-left: -30px; margin-top:140px">
            <ul>
                <li><a href="/immojeune/admin/dashbord.php" style="text-decoration: none;"><i class='bx bxs-dashboard' style="margin-left: 5px;"></i> Tableau de bord</a></li>
                <li><a href="/immojeune/admin/logement.php" style="text-decoration: none;"><i class='bx bx-home' style="margin-left: 5px;"></i> Logements</a></li>
                <li><a href="/immojeune/admin/reservation.php"style="text-decoration: none;"><i class='bx bx-cart' style="margin-left: 5px;"></i> Reservations</a></li>
                <li><a href="" style="text-decoration: none;"><i class='bx bx-history' style="margin-left: 5px;"></i> Historique</a></li>
                <li><a href="" style="text-decoration: none;"><i class='bx bxs-user-circle' style="margin-left: 5px;"></i> Mon Profil</a></li>
                <li style="margin-top: 180px;"><a href="/immojeune/admin/connexion.php" style="text-decoration: none;"><i class='bx bx-log-out' style="margin-left: 5px;"></i> Se deconnecter</a></li>

            </ul>

        </div>

    </nav>


    <div class="navbare">
        <div class="rr">
        </div>
        <div class="body">
            <div class="search">
                <form action="">
                    <div class="input-box">
                        <p>Trier par:</p>
                        <input type="text" placeholder="Default">

                    </div>
                    <div class="input-box">
                        <p>Rechecher un emplacement</p>
                        <input type="text" placeholder="Emplacement">

                    </div>
                    <div class="input-box">
                        <p>Rechecher une Description</p>
                        <input type="text" placeholder="Description">

                    </div>
                    <div class="input-box">
                        <p>Rechecher une Date</p>
                        <input type="text" placeholder="Date">

                    </div>
                    <div class="btn">
                        <button id="o">Appliquer les filtres simultanements</button>
                        <button id="oo">Revenir a l'etat initial</button>

                    </div>



                </form>


            </div>
            <div id="ooo">

                <button> <a href="addlogement.php" class='btn btn-primary btn-sm'>Nouveau logement</a></button>
            </div>
            <table class="table" style="width: 1228px;">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>Prix mensuel</th>
                        <th>Prix annuel</th>
                        <th>Superficie</th>
                        <th>Emplacement</th>
                        <th>Description</th>
                        <th>Images</th>
                        <th>Reservation</th>
                        <th>Date d'ajout</th>
                        <th>Options </th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    //connexion a la base de donnees 
                    $nom_serveur = "localhost";
                    $utilisateur = "root";
                    $mot_de_passe = "";
                    $nom_bd = "logements_etudiants";


                    $connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);

                    $sql = "SELECT * FROM logements";
                    $b = $connexion->query($sql);

                    if (!$b) {
                        die("Invalid query: " . $connexion->error);
                    }

                    while ($row = $b->fetch_assoc()) {
                        echo "
                        <tr style='max-height :60px';>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["type"] . "</td>
                        <td>" . $row["statuts"] . "</td>
                        <td>" . $row["prixmensuel"] . "</td>
                        <td>" . $row["prixannuel"] . "</td>
                        <td>" . $row["superficie"] . "</td> 
                        <td>" . $row["Emplacement"] . "</td>
                        <td>" . $row["Description"] . "</td>
                         <td>" . $row["Images"] . "</td>
                        <td>" . $row["Reservations"] . "</td>
                        <td>" . $row["Dateajout"] . "</td>
                        <td>
                        <a class='btn btn-primary btn-sm' href='/immojeune/admin/edit.php?id= $row[id]'>Edit</a> 
                        <a class='btn btn-danger btn-sm' href='/immojeune/admin/delete.php?id= $row[id]'>Delete</a></td> 
                        </tr> ";
                    }

                    ?>
                </tbody>
            </table>
        </div>

    </div>
    </div>

    </div>

</body>



</html>