<?php 
$servername = "localhost"; 
$username = "username"; 
$password = "password"; 
// Create connection 
$conn = mysqli_connect($servername); 
// Check connection 
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error()); 
} 
echo "Connected successfully";

$conn->close();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Medicijnen bestellen online - Registreren</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- User Registration -->
    <style>
      .card {
        background: rgb(55,135,210);
        background: radial-gradient(circle, rgba(55,135,210,1) 0%, rgba(84,58,246,1) 100%);
      }
    </style>
  </head>
  <body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
    <div class="d-flex justify-content-center">
      <a class="navbar-brand" href="../index.php">Apotheek Schut</a>
        <button class="navbar-toggler justify-content-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Voorlichting</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="userregistration/register.php">Mijn APO</a>
              </li>
          </ul>
        </div>
        </div>
      </nav>
      <!-- Forms to collect data -->
  <div class="container d-flex justify-content-center">
    <div class="row col-6-lg my-0 mx-0">
    <div class="card align-items-center mt-5" style="width:500px;height:450px">
    <div class="card-title text-center text-white mt-3" style="font-size:21px;">Inloggen Mijn APO</div>
    <div class="card-body">
      <form method="POST">
      <form action="register.php" method="post">
              <div class="form-group">
                <input
                  placeholder="Voornaam" type="text" class="form-control" id="Voornaam" name="Voornaam">
      <div class="form-group my-0 mx-0">
          <label for="gebruikernaam"></label>
          <input type="gebruikersnaam" class="form-control" name="gebruikersnaam" placeholder="Gebruikersnaam">
      </div>
      <div class="form-group my-0 mt-0 mb-2">
          <label for="wachtwoord"></label>
          <input type="wachtwoord" class="form-control" type="hidden" name="wachtwoord" placeholder="Wachtwoord">
      </div>
      <div class="form-group my-3 text-white">
      <input type="checkbox" id="onthouden" name="onthouden" value="onthouden">
      <label for="onthouden">Mijn gegevens onthouden</label>
      </div>
      <button type="button" class="btn btn-light">Aanmaken</button>
      </form>
  </div>
  </div>
  </div>
  </div>
  <div class="container d-flex justify-content-center">
    <div class="row col-6-lg my-0 mx-0">
    <div class="card align-items-center mt-5" style="width:500px;height:450px">
    <div class="card-title text-center text-white mt-3" style="font-size:21px;">Registreren Mijn APO</div>
    <div class="card-body">
      <form method="POST">
      <form action="register.php" method="post">
              <div class="form-group">
                <input
                  placeholder="Voornaam"
                  type="text"
                  class="form-control"
                  id="Voornaam"
                  name="Voornaam"
                />
      <div class="form-group my-0 mx-0">
          <label for="gebruikernaam"></label>
          <input type="gebruikersnaam" class="form-control" name="gebruikersnaam" placeholder="Gebruikersnaam">
      </div>
      <div class="form-group my-0 mt-0">
          <label for="wachtwoord"></label>
          <input type="wachtwoord" class="form-control" type="hidden" name="wachtwoord" placeholder="Wachtwoord">
      </div>
      <div class="form-group my-0 mt-0 mb-2">
          <label for="Email"></label>
          <input type="Email" class="form-control" type="hidden" name="Email" placeholder="Email">
      </div>
      <div class="form-group my-3 text-white">
      <input type="checkbox" id="onthouden" name="onthouden" value="onthouden">
      <label for="onthouden">Mijn gegevens onthouden</label>
      </div>
      <button type="button" class="btn btn-light">Aanmaken</button>
      </form>
  </div>
  </div>
  </div>
  </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>