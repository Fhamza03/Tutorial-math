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
    <title>Math Facile - S'inscrire</title>
    <link rel="stylesheet" href="SignUp.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="SignUp.js"></script>
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
<div id="bg-image">
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
      <img src="user.png" alt="" id="user">
      <div id="ToutPage" class="container">

    <div class="container">
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $passwordHash);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <form action="registration.php" method="post">
            <div class="form-group">
                <input type="text" class="form-control" name="fullname" placeholder="Nom complet">
            </div>
            <div class="form-group">
                <input type="emamil" class="form-control" name="email" placeholder="Email :">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="password" placeholder="Mot de passe :">
            </div>
            <div class="form-group">
                <input type="password" class="form-control" name="repeat_password" placeholder="Confirmez le mot de passe :">
            </div>
            <div class="form-btn">
                <input type="submit" class="btn btn-primary" value="S'inscrire" name="submit">
            </div>
        </form>
        <div>
        <div><p>Vous avez déjà un compte. <a href="login.php">Se connecter</a></p></div>
      </div>
    </div>
</body>
</html>