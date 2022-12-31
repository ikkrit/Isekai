<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/style.css">
    <title>First Game</title>
</head>

<body>

    <h1>Veuillez sélectionner 6 cases pour jouer</h1>

    <div id="grille">

        <?php for($i = 1; $i <= 49; $i++) :?>
            <input type="button" value="<?=$i;?>" id="<?=$i;?>" onClick="play(this.value)">
            <?php if($i % 7 == 0) {echo "<br />";} ?>
        <?php endfor ?>

    </div>

    <div id="selection"></div>
		<form name="fo" method="post" action="tirage.php">
			<input type="hidden" name="selection" />
			<input type="submit" value="Jouer" name="jouer" />
		</form>
    
    <script src="/public/js/index.js"></script>

</body>

</html>