<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="filmdetay.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />


    <title>Film Detay</title>
    <style>
      * {
        box-sizing: border-box;
      }

      /* Add a gray background color with some padding */
      body {
        font-family: Arial;
        padding: 20px;
        background: #f1f1f1;
      }

      /* Header/Blog Title */
      .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
      }

      /* Create two unequal columns that floats next to each other */
      /* Left column */
      .leftcolumn {
        float: left;
        width: 75%;
      }

      /* Right column */
      .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
      }

      /* Fake image */
      .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
      }
      .image{
        width:366px;
  height: 255px;
  display: table;
  position: relative;
  overflow: hidden;
  text-align:center;
  margin:0 auto;
      }

      /* Add a card effect for articles */
      .card {
         background-color: white;
         padding: 20px;
         margin-top: 20px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      /* Footer */
      .footer {
        padding: 20px;
        text-align: center;
        background: #ddd;
        margin-top: 20px;
      }

      /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
      @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {
          width: 100%;
          padding: 0;
        }
      }

      </style>

  </head>
  <body>
    <div class="wrapper">
      <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BRACKETS</title>
        <meta name="description" content="An interactive getting started guide for Brackets.">
        <link rel="stylesheet" href="main.css">
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
<!--burada baslıyor-->
<div class="container">

  <div class="row">

    <!-- Post Content Column -->
    <div class="col-lg-8">

      <!-- Title -->
      <h1 class="mt-4">Bizi Hatırla</h1>

      <hr>
      <!-- Date/Time -->

      <hr>
      <!-- Preview Image -->
      <img class="img-fluid rounded" src="img/filmler/bizihatirla.png" alt="">
      <hr>
      <!-- Post Content -->
      <table class="table table-borderless table-responsive">
        <thead>
          <tr>
            <th>Tür</th>
            <th>Vizyon Tarihi</th>
            <th>Süre</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Dram</td>
            <td>23 Kasım 2018</td>
            <td>120 dk</td>
          </tr>
        </tbody>
      </table>
      <p class="lead"><small><small>Kaan (Tolga Tekin) binbir emek ve zorlukla çalışma hayatında yükselmiş, başarılı bir iş kariyerine sahip olmuştur. Eşi, iki çocuğu ve işiyle ilgilenirken, bir sahil şehrinde yaşayan babası Eşref'i (Altan Erkekli) ise biraz ihmal etmiştir. Ancak günün birinde babasının geçirdiği rahatsızlık, onu babasının yanına gitmeye zorlar, ancak yoğun işlerinden ötürü babasını İstanbul'a, evine getirmeyi tercih eder. Son derece iyi niyetli ve iyi kalpli bir insan olan Eşref Bey, burada yük olduğunu hissedince geri dönmek ister. İçindeki bulundukları güç durum, özellikle Kaan için zor kararlar almayı ve sıkı bir vicdan muhasebesini gerektirecektir.</small></small></p>
      <!-- Comments Form -->
      <div class="card my-4">
        <h5 class="card-header">Yorum yapınız:</h5>
        <div class="card-body">
          <form>
            <div class="form-group">
              <textarea class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Yorum yap</button>
          </form>
        </div>
      </div>

      <!-- Single Comment -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">İbo</h5>
          Dert çekme tesbih çek.
        </div>
      </div>

      <!-- Comment with nested comments -->
      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">İlkay Aydoğdu</h5>
          Yar ben belanın ta kendisiyim
        </div>
      </div>

      <div class="media mb-4">
        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
        <div class="media-body">
          <h5 class="mt-0">Mehmet Oğuz Danış</h5>
          Ceza Bilinmeyen bi denklem
        </div>
      </div>

    </div>

    <!-- Sidebar Widgets Column -->
    <div class="col-md-4">


  </div>
  <!-- /.row -->

</div>
<!-- /.container -->
<!-- Bootstrap core JavaScript -->

<!--burada bitiyor-->

<footer>Copyright Penguins</footer>
</div>
</body>
</html>
