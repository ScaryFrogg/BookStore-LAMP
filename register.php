<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="author" content="Pavle Milisavljević pavleelite2017@gs.viser.edu.rs">
  <meta name="description" content="Registracija korisnika">
  <meta name="keywords" content="Prodavnica,Knjige,registracija,nalog">
  <title>Bukstor Registracija</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
    integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- css -->
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <section class="container" style="min-height: 75vh">
    <div class="page-header">
      <h1>
        Kreirajte vaš nalog
      </h1>
    </div>
    <form action="#" class="center-block">
      <div class="input-group-addon">
        <label for="ime">Unesite vaše puno ime:</label>
        <input type="text" id="ime" class="form-control" required placeholder="Ime Prezime">
        <br>
        <label for="email">Unesite vaš e-mail:</label>
        <input class="form-control" type="email" id="email" required placeholder="primer@mail.com">
        <br>
        <label for="sifra">Kreirajte šifru:</label>
        <input type="password" class="form-control" id="sifra" required>
        <br>
        <label for="sifra2">Ponovite šifru:</label>
        <input type="password" class="form-control" id="sifra2" required>
        <br>
        <span><label for="muskarac"><i class="fas fa-male fa-3x"></i></label></span>
        <input type="radio" name="pol" id="muskarac">
        <input type="radio" name="pol" id="zena">
        <span><label for="zena"><i class="fas fa-female fa-3x"></i></label></span>
        <br><br>
        <label for="newsletter">Želim da se prijavim na newsletter&nbsp;</label>
        <input type="checkbox" name="newsletter" id="newsletter" checked>
        <br><br>
        <a class="btn btn-primary" href="./izlaznastrana.html">Kreiraj nalog</a>
        <br>
      </div>
    </form>
  </section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>