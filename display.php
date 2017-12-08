<?php
/**
 * Created by PhpStorm.
 * User: adamecicek789
 * Date: 30.11.17
 * Time: 16:35
 */

session_start();
require("Db.php");
    /*
     * Vyrobte databázi takto:
     * 1. přepište políčka v Db::connect na svouji databázi, atd.
     * 2. Vytvořte v této databázi tsble articles
     * 3. V něm udělejte následující pole:
     *  1: id - int, primary AI
     *  2: name - varchar(60)
     *  4: shortdesc - varchar(200)
     *  5: body - text
     *  6: added - varchar(60)
     *  7: published - boolean
     *  8: image - varchar(200)
     */
    Db::connect("localhost", "blog_kluci", "bloguser", "blogpass");
    $articles = Db::queryAll("SELECT * FROM articles WHERE published=true");
    

?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="display.css">	
</head>
<body>
<br>
<br>
<br>
	<div id="article-holder">
		<div class="row">
			<?php foreach ($articles as $article) : ?>
				<div class="col-md-3">
					<div class="card" style="width: 20rem;">
  						<img height="150" class="card-img-top" src="assets/<?= $article["image"] ?>" alt="Obr.">
  						<div class="card-body">
    							<h4 class="card-title"><?= $article["name"] ?></h4>
    							<p class="card-text"><?= $article["shortdesc"] ?></p>
    							<small><?= $article["added"] ?></small>
  						</div>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
