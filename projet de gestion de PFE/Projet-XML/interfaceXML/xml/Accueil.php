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
<h1>Ajouter un PFE</h1>
	</header>
	
	<form method="post" action="ajouterPFE.php">
  
  <div class="form-group">
    <label for="exampleInput">Identifiant du PFE</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant" name="ID">
  </div>
  <legend>Information sur l'étudiant</legend>
  <div class="row">
		<div class="col-sm-2"></div>
       <div class="col-sm-8">   
   <div class="form-group">
    <label for="exampleInput">Nom de l'etudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="nomEtud">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prenom de l'etudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="prenETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'etudiant</label>
    <input type="text" class="form-control" id="exampleInput"  name="mailETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'etudiant</label>
    <input type="text" class="form-control" id="exampleInput" name="teleETu">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Option</label>
    <input type="text" class="form-control" id="exampleInput" name="OptionETu">
  </div>
  </div>
  </div>
  <legend>Information sur l'Entreprise et Le Stage</legend>
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="form-group">
    <label for="exampleInput">Intitulé Du Stage</label>
    <input type="text" class="form-control" id="exampleInput" name="Intitule">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de début de Stage</label>
    <input type="text" class="form-control" id="exampleInput" name="dated">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Date de Fin du Stage</label>
    <input type="text" class="form-control" id="exampleInput"  name="DateF">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom de Oraganisme d'acceuil</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomO">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Téléphone de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="TelephoneOr">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Mail de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="mailORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Adresse de l'Organisme d'Acceuil</label>
    <input type="text" class="form-control" id="exampleInput" name="AdressORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Nom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput"  name="NomParrainORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Prenom du Parrain</label>
    <input type="text" class="form-control" id="exampleInput" name="prenORG">
  </div>
  
    <div class="form-group">
    <label for="exampleInput">Fonction du Parrain dans l'entreprise</label>
    <input type="text" class="form-control" id="exampleInput"  name="fonctionP">
  </div>
    <div class="form-group">
    <label for="exampleInput">Téléphone du Parrain</label>
    <input type="text" class="form-control" id="exampleInput" name="telePar">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail du Parrain</label>
    <input type="text" class="form-control" id="exampleInput"  name="mailPar">
  </div>
  </div>
  </div>
  <legend>Information sur la Soutenance</legend>
  <div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">
    <div class="form-group">
    <label for="exampleInput">Date de Soutenance</label>
    <input type="text" class="form-control" id="exampleInput"  name="dateS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Salle de Soutenance</label>
    <input type="text" class="form-control" id="exampleInput"  name="localS">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant</label>
    <input type="text" class="form-control" id="exampleInput" name="nomEnca">
  </div>
    <div class="form-group">
    <label for="exampleInput">Représentant de l'Entreprise</label>
    <input type="text" class="form-control" id="exampleInput" placeholder="Identifiant" name="identifiant">
  </div>
    <div class="form-group">
    <label for="exampleInput">Examinateur</label>
    <input type="text" class="form-control" id="exampleInput" name="exam">
  </div>
    
    <div class="form-group">
    <label for="exampleInput">President de jury</label>
    <input type="text" class="form-control" id="exampleInput" name="PreJR">
  </div>
  </div>
  </div>
  
  <legend>Information sur les Encadrants</legend>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-8">  
  <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput"  name="nmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prenom de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="pnmENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="mailENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Telephone de l'encadrant Interne</label>
    <input type="text" class="form-control" id="exampleInput" name="teleENin">
  </div>
    <div class="form-group">
    <label for="exampleInput">Nom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput"  name="nomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Prenom de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="pnomENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Mail de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="mailENex">
  </div>
    <div class="form-group">
    <label for="exampleInput">Telephone de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="telENex">
  </div>
  
  <div class="form-group">
    <label for="exampleInput">Fonction de l'encadrant Externe</label>
    <input type="text" class="form-control" id="exampleInput" name="fctENex">
  </div>
  </div>
  </div>
  

  <button type="submit" class="btn btn-default">Ajouter</button>
</form>
	
	
  </div> 
</body>
</html>