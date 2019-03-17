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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <title>Ana Sayfa</title>
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

      <select class="siralama" name="sıralama">
        <option value="aksiyon">Aksiyon</option>
        <option value="animasyon">Animasyon</option>
        <option value="biyografik">Biyografik</option>
        <option value="dram">Dram</option>
        <option value="gerilim">Gerilim</option>
        <option value="komedi">Komedi</option>
        <option value="macera">Macera</option>
        <option value="romantik">Romantik</option>
        <option value="savas">Savaş</option>
        <option value="spor">Spor</option>
      </select>

      <section class="my-4">
        <div class="container">
          <div class="row mb-3">
            <div class="col">
              <div class="card bg-dark text-black" id="populer">
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/askbumu.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-ask-bu-mu.php"><h5 class="card-title">Aşk Bu Mu?</h5></a>
                      <p class="card-text">Umut çocukluğundan beri hırsızlık yapan bir gençtir. Sürekli büyük bir iş yaparak köşeyi dönmeyi hayal eder...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/aquaman.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-aquaman.php"><h5 class="card-title">Aquaman</h5></a>
                      <p class="card-text">Atlantis kraliçesi Atlanna (Nicole Kidman) ile bir deniz feneri bekçisinin oğlu olan Arthur Curry (Jason Momoa), hakkı olan krallıkta hiçbir hak iddia etmeden yer yüzündeki hayatını sürdürmektedir...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/bizihatirla.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-bizi-hatirla.php"><h5 class="card-title">Bizi Hatırla</h5></a>
                      <p class="card-text">Kaan (Tolga Tekin) binbir emek ve zorlukla çalışma hayatında yükselmiş, başarılı bir iş kariyerine sahip olmuştur...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div class="card bg-dark text-black">
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/boru.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-boru.php"><h5 class="card-title">Börü</h5></a>
                      <p class="card-text">Börü, Polis Özel Harekat'ının en seçkin, sıcak savaş timidir...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/creedII.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-creedII.php"><h5 class="card-title">Creed II</h5></a>
                      <p class="card-text">2015 yapımı Creed: Efsanenin Doğuşu'nun devam halkasıdır...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/hedefimsensin.jpg" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-hedefim-sensin.php"><h5 class="card-title">Hedefim Sensin</h5></a>
                      <p class="card-text">Hedefim Sensin, çiğ köfte satarak geçimini sağlayan Zekeriya Taştan’ın hikayesini konu ediyor...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>
          <div class="row mb-3">
            <div class="col">
              <div class="card bg-dark text-black">
                <div class="card-deck">
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/kafalarkarisik.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-kafalar-karisik.php"><h5 class="card-title">Kafalar Karışık</h5></a>
                      <p class="card-text">Kafalar Karışık, evlenebilmek için kız arkadaşının kayıp babasını bulmaya çalışan genç bir adam ve arkadaşlarının hikayesini anlatıyor...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/Muslumyeni.jpg" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-muslum.php"><h5 class="card-title">Müslüm</h5></a>
                      <p class="card-text">Müslüm, arabesk müziğinin efsane ismi Müslüm Gürses'in hayat hikayesini beyaz perdeye taşıyor...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>
                  <div class="card">
                    <img class="card-img-top" src="img/filmler/rafadantayfa.png" alt="Card image cap">
                    <div class="card-body">
                      <a href="detay-rafadan-tayfa.php"><h5 class="card-title">Rafadan Tayfa</h5></a>
                      <p class="card-text">Rafadan Tayfa Dehliz Macerası, mahallelerindeki evlerin yıkılmasını önlemek için maceraya atılan Rafadan Tayfa ekibinin hikayesini konu ediyor...</p>
                    </div>
                    <div class="card-footer">
                      <a href="biletal.php">Bilet Al</a>
                    </div>
                  </div>

                </div>

              </div>
            </div>
          </div>

        </div>

      </div>

    </section>

    <footer>Copyright Penguins</footer>
  </div>
</body>
</html>
