<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Kayıt Ol</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
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
              <h1>Kayıt Ol</h1>
              <p>Kayıt olmak için bütün alanları eksiksiz doldurun.</p>
              <p><i><small>* İşaretli alanların doldurulması zorunludur.</small></i></p>
              <hr>

              <label for="email"><b>Email*</b></label>
              <input type="text" placeholder="example@mail.com" name="email" required>

              <label for="psw"><b>Parola*</b></label>
              <input type="password" placeholder="Parola girin" name="psw" required>

              <label for="psw-repeat"><b>Parolayı tekrar edin*</b></label>
              <input type="password" placeholder="Parolayı tekrar edin" name="psw-repeat" required>

              <label for="gizlisorunuzuseciniz">Gizli sorunuzu seçiniz</label>
    <select id="gizli soru" name="gizlisoru">
      <option value="Ensevdiginilkokulogretmeni">En sevdiğiniz ilkokul öğretmeninizin adı</option>
      <option value="annekizliksoyad">Anne kızlık soyadınız</option>ı
      <option value="ilkevcilhayvaniniz">İlk evcil hayvanınızın adı</option>
    </select>
    <label for="fname">*</label>
    <input type="text" id="fname" name="firstname" placeholder="Gizli sorunuz..">
              <!--gizli soru bitis noktasi-->


              <div class="clearfix">
                <button type="submit" class="signupbtn">Kayıt Ol</button>
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
