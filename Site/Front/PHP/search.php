<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/search.css">
	<link rel="icon" type="image/x-icon" href="../IMG/Pokeball.ico">
	<title>Recherche de Pokemon</title>
</head>

<body>
	<form action="../../index.php" method="post">
		<h1>Recherche de Pokémon</h1>
		<label for="nom">Nom :</label>
		<input type="text" name="nom" ><br>

		<label for="numero">Numéro :</label>
		<input type="number" name="numero" ><br>

		<label for="taille">Taille :</label>
		<input type="number" step="any" name="taille" ><br>

		<label for="poids">Poids :</label>
		<input type="number" step="any" name="poids" ><br>

		<label for="genre">Genre :</label>
		<select name="genre" >
			<option value="Male">Mâle</option>
			<option value="Femelle">Femelle</option>
			<option value="Les deux">Les deux</option>
			<option value="Non-genre">Non-genré</option>
		</select><br>

		<label for="points_vie">Points de vie :</label>
		<input type="number" name="points_vie" ><br>

		<label for="attaque">Attaque :</label>
		<input type="number" name="attaque" ><br>

		<label for="defense">Défense :</label>
		<input type="number" name="defense" ><br>

		<label for="attaque_speciale">Attaque spéciale :</label>
		<input type="number" name="attaque_speciale" ><br>

		<label for="defense_speciale">Défense spéciale :</label>
		<input type="number" name="defense_speciale" ><br>

		<label for="vitesse">Vitesse :</label>
		<input type="number" name="vitesse" ><br>

		<label for="categorie">Catégorie :</label>
		<input type="text" name="categorie" ><br>

		<label for="region">Région :</label>
		<input type="text" name="region" ><br>

		<label for="faiblesses">Faiblesses :</label>
		<div id="faiblesses-container">
			<input type="text" name="faiblesses[]" ><br>
		</div>
		<button type="button" onclick="ajouterChamp('faiblesses-container')">Ajouter une faiblesse</button><br><br>

		<label for="types">Types :</label>
		<div id="types-container">
			<input type="text" name="types[]" ><br>
		</div>
		<button type="button" onclick="ajouterChamp('types-container')">Ajouter un type</button><br><br>

		<label for="evolutions">Évolutions :</label>
		<div id="evolutions-container">
			<input type="text" name="evolutions[]"><br>
		</div>
		<button type="button" onclick="ajouterChamp('evolutions-container')">Ajouter une évolution</button><br><br>

		<label for="talents">Talents :</label>
		<div id="talents-container">
			<input type="text" name="talents[]" ><br>
		</div>
		<button type="button" onclick="ajouterChamp('talents-container')">Ajouter un talent</button><br><br>

		<label for="versions">Versions :</label>
		<div id="versions-container">
			<input type="text" name="versions[]" ><br>
		</div>
		<button type="button" onclick="ajouterChamp('versions-container')">Ajouter une version</button><br><br>

		<input type="submit" value="Chercher le Pokémon">
	</form>

	<script src='../JS/search.js'></script>
</body>

</html>