<?php
	// Initialiser la session
	session_start();
	// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
	if(!isset($_SESSION["username"])){
		header("Location: login.php");
		exit(); 
	}
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<link rel="stylesheet" href="indexstyle.css" />
	</head>
	<body>
	<header>
        <a href="#" class="logo"> <img src="logo isi.png" alt=""></div></a>
        <nav class="navigation">
            <a href="depot.php">Espace de dépôt</a>
            <a href="#matieres">Services</a>
            <a href="#projects">projets</a>
            
			<a href="logout.php">Déconnexion</a>
        </nav>
    </header>
	<section class="main">
        <div>
            <h2><span>Bienvenue ICI VOUS TROUVEREZ VOS BESOINS</span></h2>
        </div>
    </section>

    <section class="cards" id="matieres">
        <h2 class="title">Matières</h2>
    <div class="content">
        <div class="content">
           
            
        </div>
        <div class="content">   
            <div class="card">
            <div class="info">
             <a href="services.php"><h3>Réseaux locaux</h3></a> 
            </div>
            </div> 
            <div class="card">
            <div class="info">
                <a href="services.php"><h3> Base de données </h3></a>
            </div>
            </div> 
              <div class="card">
            <div class="info">
            <a href="services.php"><h3> Conception</h3></a>
            </div>
              </div>
              <div class="card">
                <div class="info">
                    <a href="services.php"><h3> Developpement mobile </h3></a>
                </div>
            </div>
             <div class="card">
               <div class="info">
            <a href="services.php"><h3>Graphes et Optimisation</h3></a>
               </div>
            </div>

            <div class="card">
               <div class="info">
            <a href="services.php"><h3> Probabilité & statistique </h3></a>
               </div>
            </div>
        </div>
        <div class="content">
            <div class="card">
            <div class="info">
            <a href="services.php"><h3> Programmation orienté objet </h3></a>
            </div>
            </div>
            <div class="card">
            <div class="info">
                <a href="services.php"><h3> Python </h3></a>
            </div>
            </div>
            <div class="card">
            <div class="info">
               <a href="services.php"><h3> Anglais </h3></a> 
            </div>
            </div>
            <div class="card">
                <div class="info">
                   <a href="services.php"><h3> Innovation dans les réseaux </h3></a> 
                </div>
            </div>
            <div class="card">
            <div class="info">
            <a href="services.php"><h3>Technologie multimedia</h3></a>
            </div>
            </div>
            <div class="card">
            <div class="info">
            <a href="services.php"><h3> Gestion d'entreprise </h3></a>
            </div>
            </div>
        </div>
        
    </div>
    </section>
    

    <section class="projects" id="projects">
        <h2 class="title">Projets</h2>
<div>
<div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3><a href="">projets de fin d'études</a></h3>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="info">
                    <h3> <a href="">rapports de stages de fin d'étude</a> </h3>
                </div>
            </div>
            
            </div>  
            
        </div>
</div>
    </section>

    
    
    <footer class="footer">
        <p class="footer-title"><a href="http://www.isi.rnu.tn/">isi.rnu.tn</a></p>
  =
    </footer>

</body>
</html>