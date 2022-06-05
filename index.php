<?php session_start()?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Projet Niger</title>
<style>
html { color-scheme: light dark; }
body { width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif; }
</style>
</head>
<body>
<h1>Actions à Dankassari</h1>

<?php 

//TESTER SI LES FICHIERS SONT CORRECTS
//echo $_FILES['fichier_act']['name'];

move_uploaded_file($_FILES['fichier_act']['tmp_name'], 'Activites.xlsx');
move_uploaded_file($_FILES['fichier_pop']['tmp_name'], 'Population.xlsx');


$s=$_POST["selectmap"];
if ($s==1 || $s==2 || $s==3){
	echo "<font color='white'>La carte a correctement été générée, vous pouvez la télécharger :</font><br><br>";
	shell_exec ("python3 Cartographier.py Activites.xlsx Population.xlsx $s CARTE");
	shell_exec ('etape1_generation.py');

	echo "<a href='select_city.php'>Générer un fichier archivant les activités par villes</a><br>";
	echo "<a href='CARTE.html' download='CARTE.html'>Télécharger la carte</a><br>";
	echo "<a href='CARTE.html' target='_blank'>Ouvrir la carte sans télécharement</a><br><br>";
	echo "<a href='index.html'>Générer une autre carte</a>";
} else{
	echo "Vous n'avez pas saisi de fond de carte, la carte ne s'est pas générée";
	echo "<br><br><a href='index.html'>Revenir sur la page précédente</a>";
}
//echo('python3 Cartographier.py Activites.xlsx Population.xlsx '),$s,(' CARTE');



 ?>
 



<!--<input type="button" value="Télécharger la carte" download="CARTE.html"></input>-->
<!--<button onclick="window.location.href = 'https://fr.w3docs.com/%27;%22%3E'Cliquez Ici</button>-->


<!-- POSSIBILITE D'OUVRIR LA CARTE SANS LA TELECHARGER -->
<!-- AJOUTS ESTHETIQUE -->

</body>
</html>
