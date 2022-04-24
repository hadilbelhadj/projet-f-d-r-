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
	<link rel="stylesheet" href="servicestyle.css" />
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
	<header>
        <a href="#" class="logo"> <img src="logo isi.png" alt=""></div></a>
        <nav class="navigation">
			<a href="logout.php">Déconnexion</a>
        </nav>
    </header>

	    <section class="cards" id="matieres">
        <div class="content">
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="Upload/Test/index.html"><h3> Travaux dirigés </h3></a>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="Upload/Test/index.html"><h3> Devoirs surveillés </h3></a>
                   
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="Upload/Test/index.html"><h3> Examens </h3></a>
                </div>
            </div>
            <div class="card">
                <div class="icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div class="info">
                    <a href="Upload/Test/index.html"><h3> Travaux Pratiques </h3></a>
                </div>
            </div>  
            
        </div>
    </section>   
		
		</div>

	</body>
</html>