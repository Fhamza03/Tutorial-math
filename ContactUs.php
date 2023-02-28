
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Facile - Nous contacer</title>
    <link rel="stylesheet" href="ContactUs.css">
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <script type="text/javascript" src="ContactUs.js"></script>
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
      <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <img src="homme1.avif" alt="" style="width: 565px; height: 520px;">
            </div>
            <div class="col-md-8">
                <div id="ToutPage">
                    
                    <form   method="post" action="contact.php"          >
                    <div class="container" id="formulaire">
                            <div class="mb-3">
                                    <b><label for="exampleInputEmail1" class="form-label text-primary">E-mail</label></b>
                                    <input type="email" class="form-control"    name="email" id="inputEmail"    placeholder="entrer votre nom" aria-describedby="emailHelp" style="width: 500px;">
                            </div>
                            
                            <b><libellé class="text-primary">Laisser votre message </libellé></b>
                            <div class="mb-3">
                                <textarea   name="message" placeholder="laisser votre message"></textarea> 
                            </div>
                                <button type="submit"  onclick="alert('Message envoyé')" class="btn btn-primary">Envoyer</button>     
                    </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>