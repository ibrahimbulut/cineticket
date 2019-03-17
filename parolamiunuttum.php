<?php
 require_once 'model/veritabanibaglanti.php'; 
 //parolamızı taşıyacak değişken
 $result1='ilgili alanlari doldurun';
 if(isset($_POST['parolamiunuttum'])){
 
  //sorgu icin gonderilecek degiskenler
  $eposta=$_POST["email"];
  $gizlisoru=$_POST["gizlisoru"];
  
  //mail adresi ve gizli sorusu verilen kişinin parolasını getiren sorgu
  $sorgu1="SELECT password FROM user where email='$eposta' and secret_question='$gizlisoru'";
  
  $result1 = $connect->query($sorgu1);
  if($result1->num_rows > 0){
    while($row=$result1->fetch_assoc()){
      $result2=$row["password"];//parolamız geldi
      ;
    }
  }else{
    $result2="Kullanici adi veya parola hatali";
  }
$connect->close();
 } 
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Parolamı Unuttum</title>
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
         
           <form method="post" action="parolamiunuttum.php" style="border:1px solid #ccc">
           <div class="container">
             <h1>Parolamı Unuttum</h1>
             <p>Email ve gizli soruyu girerek parolayı öğrenebilirsiniz</p>
             <hr>

             <label for="email"><b>Email</b></label>
             <input type="text" placeholder="example@mail.com" name="email" required>

             <label for="psw"><b>Gizli Soru</b></label>
             <input type="text" placeholder="Parola girin" name="gizlisoru" required>

             <div class="clearfix">
               <button type="submit" name='parolamiunuttum' class="signupbtn">Parolayı Öğren</button>
             </div>
             <div class="alert alert-light" role="alert">
             <?php
                if (isset($result2)) {
                  echo $result2;
                }
                ?>
              </div>
           </div>
         </form>


        <!--<form action="action_page.php" style="border:1px solid #ccc">
            <div class="container">
              <h1>Parolamı Unuttum</h1>
              <p>Email ve gizli soruyu girerek parolayı öğrenebilirsiniz</p>
              <hr>

              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="example@mail.com" name="email" required>

              <label for="psw"><b>Gizli Soru</b></label>
              <input type="text" placeholder="Parola girin" name="gizlisoru" required>

              <div class="clearfix">
                <button type="submit" class="signupbtn">Parolayı Öğren</button>
              </div>
            </div>
          </form>-->




        </section>
        <section id="Second"></section>
        <section id="Third"></section>
      </div>
      <footer>Copyright Penguins</footer>
    </div>
  </body>
</html>
