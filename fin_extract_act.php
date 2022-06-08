<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
<title>Projet Niger</title>
<style>
html {color-scheme: light dark;}
body {width: 35em; margin: 0 auto;
font-family: Tahoma, Verdana, Arial, sans-serif;}
</style>
</head>
<body>
<h1>Actions à Dankassari</h1>
<h2>ACTIONS DANS UNE VILLE</h2>

<?php
$v=$_POST["Villes"];
echo $v;
echo(shell_exec("python3 generation_fichier.py $v"));
?>
<a href="Archive_activite.txt" download="<?php echo $v; ?>.txt">Télécharger la liste des activités dans la ville selectionnees</a><br>

</body>
</html>
