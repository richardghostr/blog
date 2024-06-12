<?php
$number="";
$mail="";
$username="";
$password ="";
$a="";


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

                    <li><a href="/immojeune/src/decouvrir.php">Decouvrir</a></li>
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
    <div class="login">
        <div class="form3">
            <p class="close"><a href="" style="color:black;"><i class="bx bx-x" id="ty"></i></a></p>
            <form action="src/login.php" method="POST">

                <h1>WELCOME BACK !</h1>
                <p>Veuillez entrer vos informations</p>
                <div class="input-box">
                    <input type="text" placeholder="Username Or E-mail" name="username">
                    <i class="bx bx-user-circle"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Password" name="password" required>
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="remember-forgot">
                    <label for="">
                        <input type="checkbox"> Remember me
                    </label>
                    <a href="" class="rir"> Forgot password ?</a>
                </div>

                <button type="submit" class="btn" name="ok">Login</button>


                <div class="register-link">
                    <p>Don't have an account ? <a href="#"> Register </a></p>
                </div>
            </form>
            <div> <?php
                    if (isset($_SESSION["bonjour"])) {
                        echo $_SESSION["bonjour"];
                    }

                    ?></div>

        </div>

    </div>
    <div class="registration">

        <div class="form1">
            <p class="close"><a href="" style="color:black;"><i class='bx bx-x' id="ty"></i></a></p>
            <form action="src/register.php" method="POST">
                <h1>Registration</h1>
                <p>Create your account</p>
                <div class="input-box">
                    <input type="text" placeholder=" Username" name="username" value="<?php echo $username; ?>">
                    <i class="bx bx-user-circle"></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder=" E-mail" name="Email" value="<?php echo $mail; ?>">
                    <i class='bx bx-envelope'></i>
                </div>
                <div class="input-box">
                    <input type="number" placeholder=" Phone number" name="Phonenumber" value="<?php echo $number; ?>">
                    <i class='bx bx-phone-call'></i>

                </div>
                <div class="input-box">
                    <input type="password" placeholder=" Password" name="password" value="<?php echo $password; ?>">
                    <i class="bx bxs-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder=" Comfirm Password" required value="">
                    <i class="bx bxs-lock-alt"></i>
                </div>

                <button type="submit" class="btn1" name="ok">SIGN UP</button>
                <p>or</p>
                <div class="link">
                    <a href=""><i class='bx bxl-google' undefined></i></a>
                    <a href=""> <i class='bx bxl-facebook-circle'></i></a>
                    <a href=""><i class='bx bxl-linkedin'></i></a>
                </div>
                <div class="register-link">
                    <p>Already have an account ? <a href="#"> Login </a></p>
                </div>
            </form>

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
 


</body>
   <div class="foot">
<?php
include("src/fin.php");
?>
    </div>
<script>
    const mn = document.querySelector(".head .headm .login1")

    const nl = document.querySelector(".registration")

    mn.addEventListener('click', () => {
        nl.classList.toggle('mobilemenu')
    })
</script>

<script>
    const mn2 = document.querySelector(".head .headm .login2")

    const nl2 = document.querySelector(".login")

    mn2.addEventListener('click', () => {
        nl2.classList.toggle('mobilemenu')
    })
</script>

<script>
    const mn4 = document.querySelector(" .registration .form1 form .register-link p a")

    const n4 = document.querySelector(".login")

    mn4.addEventListener('click', () => {
        nl4.classList.toggle('mobilemenu')
    })
</script>

<script>
    const mn5 = document.querySelector(".login .form3 form .register-link p a")

    const nl5 = document.querySelector(".registration")

    mn5.addEventListener('click', () => {
        nl5.classList.toggle('mobilemenu')
    })
</script>

<script>
    const mn3 = document.querySelector(".menu")

    const nl3 = document.querySelector(".head .red")

    mn3.addEventListener('click', () => {
        nl3.classList.toggle('mobilemenu')
    })
</script>


</html>