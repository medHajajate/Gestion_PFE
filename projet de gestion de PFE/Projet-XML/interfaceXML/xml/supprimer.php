<!DOCTYPE html>
<html>
      
	  
<head>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<style type="text/css">
   body { background: #eee ; }
</style>
	<script src="js/jquery.js"></script>	
	 <script src="js/bootstrap.min.js"></script>
			
    <meta charset="utf-8" />
    <title> Accueil </title>
	<nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <ul class="nav navbar-nav">
            <li class="active"> <a href="http://localhost/xml/Accueil.php">Ajouter</a> </li>
			<li> <a href="http://localhost/xml/supprimer.php">Supprimer</a> </li>
			<li> <a href="http://localhost/xml/afficher.php">Afficher</a> </li>
          </ul>
        </div>
      </nav>
</head>
<body>


  <div class="container">
	<header class="page-header">
<h1>Supprimer un PFE</h1>
	</header>
	<form method="post" action="supprimerPFE.php">
  
  <div class="form-group">
    <label for="exampleInput">Identifiant du PFE</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant du PFE à Supprimer" name="identifiant">
  </div>
  <button type="submit" class="btn btn-default">Supprimer</button>
  </div> 
</body>
</html>