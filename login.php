<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: index.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Facile - Se connecter</title>
    <link rel="stylesheet" href="Login.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="Login.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <img src="Math facile.png" alt="" id="logo">
          
          <div class="collapse navbar-collapse container" id="navbarTogglerDemo03">
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Chercher" aria-label="Search">
              <button class="btn btn-outline-primary" type="submit">Chercher</button>
            </form>
          </div>
        </div>
      </nav>
      <nav class="navbar navbar-expand-lg bg-primary">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 container">
            <li class="nav-item">
              <a class="nav-link active text text-light" aria-current="page" href="Accueil.html">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text text-light" href="Tuto.html">Tutorial</a>
              <!-- <div class="dropdown">
                <a class="nav-link text text-primary" href="Tuto.html"><button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" onmouseover="Affiche()" onclick="Hide()"> 
                  Tutorial
                </button></a>
                <ul class="dropdown-menu" style="display: none;" id="drop">
                  <li><a class="nav-link text text-primary" href="Tuto.html" style="text-align: center;" onclick="ShowAlg(event)">Algébre</a></li>
                  <li><a class="nav-link text text-primary" href="Tuto.html" style="text-align: center;" onclick="ShowAnl(event)">Analyse</a></li>
                </ul>
              </div> -->
            </li>
            <li class="nav-item">
              <a class="nav-link text text-light" href="TuteurPv.html" id="tutoPv" style="pointer-events: none;">Tuteur privé</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text text-light" href="login.php">Se connecter</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text text-light" href="ContactUs.php">Nous contacter</a>
              </li>
          </ul>
      </nav>
              <div class="bg-imagee">
                <h2 class="text-light"><b class="text text-primary">Math Facile</b> <b class="text text-light">votre chemin vers le succès !<br> Si vous voulez profitez de 
                  notre tuteur privé veuillez se connecter.</b>
                </h2>
              </div>
              <div id="ToutPage">
              <div class="container">
                <div class="row">
                  <div class="col-md-6"> 
                    <h3 class="text text-primary">Pourquoi je me connecte ?</h3>
                    <p>
                      Avoir un compte chez Math Facile vous permet de profitez de notre tuteur privé 
                      car il n'est pas accessible par tout le monde, et vous trouvez dans le tuteur
                      des professeurs spécialiser dans l'algébre par exemple ou bien l'analyse et vous trouvez
                      leur contacts  et aussi vous pouvez profiter de ces cours et exercices.
                    </p>
                    
                  </div>











                  <div class="col-md-6"> 

                    <div class="container">
                      <?php
                      if (isset($_POST["login"])) {
                         $email = $_POST["email"];
                         $password = $_POST["password"];
                          require_once "database.php";
                          $sql = "SELECT * FROM users WHERE email = '$email'";
                          $result = mysqli_query($conn, $sql);
                          $user = mysqli_fetch_array($result, MYSQLI_ASSOC);
                          if ($user) {
                              if (password_verify($password, $user["password"])) {
                                 /* session_start();*/
                                  $_SESSION["user"] = "yes";
                                  header("Location: index.php");
                                  die();
                              }else{
                                  echo "<div class='alert alert-danger'>Password does not match</div>";
                              }
                          }else{
                              echo "<div class='alert alert-danger'>Email does not match</div>";
                          }
                      }
                      ?>








                    
                      <form  action="login.php" method="post"           >
                        <div class="container" id="formulaire">
                            <div class="mb-3">
                            <b><label for="exampleInputEmail1" class="form-label text-primary">E-mail</label></b>
                            <input type="email" class="form-control" name="email" id="inputEmail" aria-describedby="emailHelp" style="width: 500px;">
                            <div id="emailHelp" class="form-text text-secondary container-fluid">On va jamais partagé votre adresse e-mail avec quelqu'un.</div>
                            </div>
                            <div class="mb-3">     
                            <b><label for="exampleInputPassword1" class="form-label text-primary">Mot de passe</label></b>
                            <input type="password" name="password"   class="form-control" id="InputPassword" style="width: 500px;">
                            <img src="eyeClose.png" alt="" id="eye" onclick="ShowPassword()">
                            </div>
                            <div class="mb-3 form-check">
                            <!-- <input type="checkbox" class="form-check-input" id="box" onchange="ShowPass()"> -->
                            <!-- <label class="form-check-label" for="exampleCheck1">Voir le mot de passe</label> -->
                            <div class="form-text text-secondary">Si vous n'avez pas de compte veuillez <a href="registration.php">s'inscrire.</a></div>
                            </div>
                            <button type="submit"  name="login"   class="btn btn-primary" id="btConnecter">Se connecter</button>
                        </div>
                      </form>
                    
                  </div>
                </div>
              </div>
            </div>
                

     
</body>
</html>