<?php
//ouverture de la session 
$number = "";
$mail = "";
$username = "";
$password = "";
$a = "";
$ro = "";
$role = "Locataire";
//connexion a la base de donnees 
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";


$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);





if (isset($_POST['ok'])) {

    $username = $_POST['username'];
    $mail = $_POST['Email'];
    $number = $_POST['Phonenumber'];
    $password = $_POST['password'];

    $select = "SELECT * FROM utilisateurs WHERE telephone=$number OR email='$mail'";
    $ro = $connexion->query($select);

    if ($ro->num_rows > 0) {
        echo "L'utilisateur existe deja";
    } else {

        $requete = "INSERT INTO  utilisateurs ( nom, email, telephone, password)  VALUES ('$username','$mail',$number,'$password')";
        $a =  $connexion->query($requete);
        echo "reussi";
    }
}
