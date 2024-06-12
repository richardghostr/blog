<?php 
$username="";
$password="";
$get="";

//connexion a la base de donnees 
$nom_serveur = "localhost";
$utilisateur = "root";
$mot_de_passe = "";
$nom_bd = "logements_etudiants";


$connexion = mysqli_connect($nom_serveur, $utilisateur, $mot_de_passe, $nom_bd);




if(isset($_POST['ok'])){

$username=$_POST['username'];
$password=$_POST['password'];

$requete = "SELECT * FROM utilisateurs WHERE nom='$username' OR password= '$password' AND email='$username'";

$get = $connexion->query($requete);

if($get->num_rows > 0){
    echo "Connexion Reussie";
}else{
    echo "Vous n'avez pas de compte";
}
}
?>
