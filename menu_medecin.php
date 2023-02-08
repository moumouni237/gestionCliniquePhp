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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>


<?php include('header.php'); ?>
<div class="alert alert-success d-flex align-items-center" role="alert">
	<h1>
    Bienvenue <?php echo $_SESSION['username']; ?> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" text="success"  class="bi bi-check2" viewBox="0 0 16 16">
  <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
</svg>
    
    </h1>	
		<a href="logout.php">Déconnexion</a>
		</div>

                            <div class="row px-3 mb-4">

                                <div> <button type="button" class="btn btn-primary"> <a href="">Liste des RDV</a>  </button>



                                </div>
                                <div class="line"></div>
                                <div> <button type="button" class="btn btn-primary"> <a href="">Consultation</a> </button> </div>
                                <div class="line"></div>
                                <div> <button type="button" class="btn btn-primary"> <a href="">liste des examens</a> </button> </div>


                            </div>
                        </div>
                    </div>
                </div>
                  <?php include('footer.php'); ?>
              


    




    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="js\bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>