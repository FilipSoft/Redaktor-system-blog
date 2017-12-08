<!DOCTYPE html>
<html>
 <head>
  <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
    <link rel="shortcut icon" href="assets/blog.ico" />
    <title>O nás | Blog</title>
 </head> 
  <body>
    <!-- START navbar -->
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-navigation">
      <a href="#" class="navbar-brand d-flex w-50 mr-auto">
      <img src="assets/logo.jpg" width="50" height="50" class="d-inline-block align-top" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar3">
         <span class="navbar-toggler-icon"></span>
        </button>
     <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Domů <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=news">Novinky <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=programing">Programování <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="?page=about">O nás <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="log.php">Administrace <span class="sr-only">(current)</span></a>
        </li>
      </ul>
     </div>
    </nav>
    
    <div class="container-fluid">
       <div class="row">
          <div class="col-xs-7 col-md-4 pl-4">
            <div class="text-center"> 
              <span id="header">O nás</span>
            </div>
              <span>Jsme amatérští programátoři, které programování baví a vyžívají se v tom. Všichni programujeme ve volném
                  čase.
              </span>
          </div>
            
        
        <div class="col-xs-9 col-md-6 ml-5">
         <div class="text-center">
          <span id="header">Kontaktní formulář</span>
         </div>
    <br>
    <br>
        <div id="form-messages"></div>
          <form id="contact-form" method="post" action="sendmail.php">
            <div class="form-group">
              <label for="emailinput">Vaše emailová adresa<span class="povinne">*</span></label>
              <input type="email" name="emailinput" class="form-control" id="emailinput" aria-describedby="emailHelp" placeholder="(např. jméno@seznam.cz)" required="true">
              <small id="emailHelp" class="form-text text-muted">Vaše adresa zůstane anonymní</small>
            </div>
            <div class="form-group">
              <label for="nameinput">Vaše jméno a příjmení<span class="povinne">*</span></label>
              <input type="text" name="nameinput" class="form-control" id="nameinput" placeholder="(např. Josef Okurka)" required="true">
            </div>
            <div class="form-group">
              <label for="messageinput">Předmět<span class="povinne">*</span></label>
              <input type="text" name="messageinput" class="form-control" id="messageinput" placeholder="(např. Chyba v registraci)" required="true">
            </div>
            <div class="form-group">
              <label for="bodyinput">Zpráva<span class="povinne">*</span></label>
              <textarea class="form-control" name="bodyinput" id="bodyinput" rows="4" required="true" placeholder="Vaše zpráva"></textarea>
            </div>
             <button type="submit" class="btn btn-info">Odeslat</button>
          </form>
    <br>
           <p><span class="povinne">*</span> - povinné pole</p>
        </div>
      </div>
    </div>
    
  </body>
</html>
