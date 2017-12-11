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
     *  3: shortdesc - varchar(200)
     *  4: body - text
     *  5: added - varchar(60)
     *  6: published - boolean
     *  7: image - varchar(200)
     */
    Db::connect("localhost", "", "", "");
    $articles = Db::queryAll("SELECT * FROM articles WHERE published=true");
    

?>

<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="display.css">	
    <link rel="stylesheet" href="global.css">
    <link rel="shortcut icon" href="assets/blog.ico" />
    <title>Display | Blog</title>
</head>
<body>
        <!-- START navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-navigation" style="background: url('assets/nav.png')">
      <a href="index.php" class="navbar-brand d-flex w-50 mr-auto">
      <img src="assets/laf.png" width="50" height="50" class="d-inline-block align-top" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
        <li class="nav-item">
        <a class="nav-link underline" href="index.php">Domů <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link underline" href="#">Novinky <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link underline" href="?page=programing">Programování <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link underline" href="about.php">O nás <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link underline" href="log.php">Administrace <span class="sr-only">(current)</span></a>
        </li>
      </ul>
     </div>
    </nav>
    
    <!-- END navbar -->
<br>
<br>
<br>
    <div id="article-holder">
	<div class="text-center">
            <?php foreach ($articles as $article) : ?>
		<div class="col-xl">
                    <div class="card" style="width: 100%;">
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

        <!-- START Footer -->
          
       <div class="footer-bottom mt-2" style="background: #D3D3D3; position:absolute; bottom:0; width:100%; padding-bottom: 10px; padding-top: 10px; border-top: 1px solid black;">
	<div class="container">
            <div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <div>
                      © 2017, Blog programátorů
                    </div>
		</div>
                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
			<div class="text-center">
			   <a style="color: black;" href="display.php">Novinky </a> |  <a style="color: black;" href="about.php">Kontakt</a>
			</div>
                    </div>
		</div>
	</div>
       </div>
    
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>
