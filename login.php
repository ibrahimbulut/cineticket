<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Giriş Yap</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="login.css" />
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
        <a href="index.php" class="logo"><img src="img/cineticketlogo.png" alt=""></a>

        <div class="header-right">
          <a class="active" href="index.php">Anasayfa</a>
          <a class="active" href="about.php">Hakkında</a>
          <a class="active" href="kunye.php">Künye</a>
          <a class="active" href="rezarvasyonyap.php">Rezarvasyon Yap</a>
          <a class="active" href="signup.php">Kayıt Ol</a>
          <a class="active" href="login.php">Giriş Yap</a>
          <a class="active" href="bakiyeSorgulama.php">Bakiye Sorgula</a>
        </div>
      </div>
      
      <div id="main">
        <section id="First">
          <form action="action_page.php" style="border:1px solid #ccc">
            <div class="container">
              <h1>Giriş Yap</h1>
              <p>Giriş yapmak için lütfen email ve parolanızı giriniz</p>
              <hr>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="example@mail.com" name="email" required>

              <label for="psw"><b>Parola</b></label>
              <input type="password" placeholder="Parolanızı giriniz" name="psw" required>

              <div class="clearfix">
                <a id="parolamiunuttum" href="parolamiunuttum.php">Parolamı unuttum</a>
                <img height="50" width="50" src="img/facebook-logo-button.png" alt="">
                <img height="50" width="50" src="img/twitter-logo-button.png" alt="">
                <button type="submit" class="loginbtn">Giriş Yap</button>
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
