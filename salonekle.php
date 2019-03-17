<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Salon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
    <div class="wrapper">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="signup.css">
    </head>
    <body>
      <div class="header">
          <a href="admin.php" class="logo"><img src="img/cineticketlogo.png" alt=""> Admin</a>

  <div class="header-right">
    <a href="salonekle.php">Sinema Salonu Ekle</a>
    <a href="kupon.php">Kupon Kodu Olustur</a>
    <a class="active" href="index.php">Çıkış Yap</a>
  </div>
</div>

      <div id="main">
        <section id="First">
          <form action="action_page.php" style="border:1px solid #ccc">
            <div class="container">
              <h1>Sinema Salonu Ekle</h1>
              <p>Salonu ekleyeceğiniz şehir ve adını giriniz.</p>
              <hr>

              <label for="email"><b>Şehir Adı</b></label>
              <input type="text" placeholder="Şehir Adı.." name="email" required>

              <label for="psw"><b>Salonun Adı</b></label>
              <input type="text" placeholder="Salonun Adı.." name="psw" required>

              <div class="clearfix">
                <button type="submit" class="signupbtn">Salonu Ekle</button>
              </div>
            </div>
          </form>

        </section>
        <section id="Second"></section>
        <section id="Third"></section>
      </div>
      <footer>Copyright Penguins</footer>
    </div>
  </body>
</html>
