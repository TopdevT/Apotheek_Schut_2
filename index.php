<!doctype html>
<html lang="en">
  <head>
    <title>Online medicatie bestellen - Apotheek Schut</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/png" href="./pills.png"/>
  </head>
  <body>
    <!-- Navbar -->
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex justify-content-center">
    <div class="d-flex justify-content-center">
      <a class="navbar-brand" href="index.php">Apotheek Schut</a>
        <button class="navbar-toggler justify-content-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
          <ul class="navbar-nav mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link active" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./service.php">Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./voorlichting.php">Voorlichting</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="userregistration/register.php">Mijn APO</a>
              </li>
          </ul>
        </div>
        </div>
      </nav>
    </header>
    <!-- Slideshow -->
      <div class="row d-flex justify-content-around mx-5">
        <div class="col-8-lg mt-5">
          <div class="container shadow-lg p-0" style="width:50rem;height:31rem;">
          <img class="images w-100 h-100" src="slideshow/klant.jpeg">
          <img class="images w-100 h-100" src="slideshow/winkelbinnen.jpeg">
          <img class="images w-100 h-100" src="slideshow/winkelbuiten.jpeg">
          <script language='javascript'>
    //script voor de slideshow
    var myIndex = 0;
    carousel();
    function carousel() {
        var i;
        var x = document.getElementsByClassName("images");
        for (i = 0; i < x.length; i++) {
           x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) {myIndex = 1}
        x[myIndex-1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 4 seconds
    }
  </script>
  </div>
        </div>
      <!-- Google Map -->
      <div class="col-4-lg mt-5"> 
      <div class="gmap_canvas shadow">
        <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Hofstraat%2013,%201741%20CD%20Schagen&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="index.php">Apotheek Schut</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>
      </div>
    </div>
    <!-- plain between -->
    <div class="p-5 mt-5 mb-0 text-center bg-light shadow-sm">
    <h1 class="mb-3">Apotheek Schut</h1>
    <p class="mb-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit eu massa varius suscipit. Proin bibendum libero id lectus eleifend, at sodales mauris faucibus. Proin congue sollicitudin libero scelerisque aliquet. Fusce at orci lobortis, interdum enim eu, efficitur est. Vestibulum ut orci vel nibh ornare mattis. Integer convallis nibh vitae tellus scelerisque tristique. In tincidunt cursus pretium. Suspendisse mattis dolor et eros consequat, nec facilisis lorem cursus</p>
    <a class="btn btn-info" href="" role="button">Nu aanmelden</a>
  </div>
      <!-- Cards (shortcuts)-->
      <div class="row d-flex justify-content-around mb-5 mt-3 mx-5">
      <div class="card col-4-sm text-center my-5 shadow-sm" style="width:27rem;">
        <img src="./img/help.jpeg" class="card-img-top" style="height:250px;" alt="">
        <div class="card-title text-center mb-0 mt-3"><h5>Service</h5></div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit eu massa varius suscipit. Proin bibendum libero id lectus eleifend, at sodales mauris faucibus. Proin congue sollicitudin libero scelerisque aliquet. Fusce at orci lobortis, interdum enim eu, efficitur est. Vestibulum ut orci vel nibh ornare mattis. Integer convallis nibh vitae tellus scelerisque tristique. In tincidunt cursus pretium. Suspendisse mattis dolor et eros consequat, nec facilisis lorem cursus.</p>
          <a class="btn btn-info btn-md mx-2 my-2 shadow-sm" href="service.php" role="button">Lees meer</a>
        </div>
      </div>
      <div class="card col-4-sm text-center my-5 shadow-sm" style="width:27rem;">
        <img src="https://www.kidsweek.nl/sites/default/files/styles/node_image/public/pills-384846_640.jpg?itok=RURjGQyn" style="height:250px;" class="card-img-top" alt="">
        <div class="card-title text-center mb-0 mt-3"><h5>Medicijn overzicht</h5></div>
        <div class="card-body">
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit eu massa varius suscipit. Proin bibendum libero id lectus eleifend, at sodales mauris faucibus. Proin congue sollicitudin libero scelerisque aliquet. Fusce at orci lobortis, interdum enim eu, efficitur est. Vestibulum ut orci vel nibh ornare mattis. Integer convallis nibh vitae tellus scelerisque tristique. In tincidunt cursus pretium. Suspendisse mattis dolor et eros consequat, nec facilisis lorem cursus.</p>
          <a class="btn btn-info btn-md mx-2 my-2 shadow-sm" href="voorlichting.php" role="button">Lees meer</a>
        </div>
        </div>
        <div class="card col-4-sm text-center my-5 shadow-sm" style="width:27rem;">
          <img src="https://www.marketingtribune.nl/content/weblog/2020/10/maak-je-merk-zo-persoonlijk-mogelijk/47720659_l.jpg" style="height:250px;" class="card-img-top" alt="">
          <div class="card-title text-center mb-0 mt-3"><h5>Mijn APO</h5></div>
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur suscipit eu massa varius suscipit. Proin bibendum libero id lectus eleifend, at sodales mauris faucibus. Proin congue sollicitudin libero scelerisque aliquet. Fusce at orci lobortis, interdum enim eu, efficitur est. Vestibulum ut orci vel nibh ornare mattis. Integer convallis nibh vitae tellus scelerisque tristique. In tincidunt cursus pretium. Suspendisse mattis dolor et eros consequat, nec facilisis lorem cursus.</p>
            <a class="btn btn-info btn-md mx-2 my-2 shadow-sm" href="./userregistration/register.php" role="button">Lees meer</a>
          </div>
        </div>
      </div>
    <!-- Cards (Last 3 news items from database) -->
    <!-- Footer -->
    <footer class="text-center text-white bg-info sticky-bottom">
          <div class="container">
          <section class="">
        <p class="d-flex justify-content-center align-items-center mb-0">
          <span class="my-2 mx-2">Meld je gratis aan voor onze nieuwsbrief</span>
          <button type="button" class="btn btn-info btn-outline-light m-2" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Meld je aan</button>
        </p>
        </section>
          </div>
          <!-- Popup forms nieuwsbrief -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <div class="text-dark">
            <h5>Meld je nu aan voor de nieuwsbrief</h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form method="post" name="nieuwsbrief" action="mailto:thijsmolenaartje@gmail.com">
              <div class="form-group my-0 mt-0">
          <label for="Email"></label>
          <input type="Email" class="form-control" type="hidden" name="Email" placeholder="Email">
           </div>
           <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <input class="btn btn-info" type="submit" name="nieuwsbrief_mail" value="Meld je aan">
            </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>