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

    <title>Rezarvasyon Yap</title>
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
      <section id="first">

        <form action="action_page.php">
          <div class="container">


            <div class="row">
              <div class="col-md-6 mb-3">
               <label for="validationCustom03">ŞEHİR</label>
                  <select class="form-control form-control-lg" name="category" id="validationCustom03" onchange="ChangecatList()" required>
                    <option value="">Şehir Seç... </option>
                    <option value="MANİSA">MANİSA</option>
                    <option value="KOCAELİ">KOCAELİ</option>
                    <option value="SİVAS">SİVAS</option>
                  </select>
             <div class="invalid-feedback">

              Please provide a category.
             </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="validationCustom04">AVM </label>
                   <select class="form-control form-control-lg" name="category" id="validationCustom04" onchange="ChangecatList()" required>
                     <!--<option value="">AVM Seçiniz </option>
                     <option value="Classroom Instruction and Assessment">MAGNESİA AVM FORUM MANİSA</option>
                     <option value="Curriculum Development and Alignment">Symbol Kocaeli Alışveriş Merkezi</option>
                     <option value="District Committee">Gebze Center AVM</option>
                     <option value="Meeting">Primemall Sivas AVM</option>-->
                     </select>
              <div class="invalid-feedback">

               Please provide a category.
              </div>
               </div>
               <div class="col-md-6 mb-3">
                <label for="validationCustom02">FİLMLER </label>
                <select class="form-control form-control-lg" name="category" id="validationCustom02" onchange="ChangecatList()" required>
                <option value="">Film Seçiniz </option>
                <option value="Film1">AŞK BU MU ?</option>
                <option value="Film2">AQUAMAN</option>
                <option value="Film3">BİZİ HATIRLA</option>
                <option value="Film4">BÖRÜ</option>
                <option value="Film5">CREED 2 EFSANE YÜKSELİYOR</option>
                <option value="Film6">HEDEFİM SENSİN</option>
                <option value="Film7">KAFALAR KARIŞIK</option>
                <option value="Film8">MÜSLÜM </option>
                <option value="Film9">RAFADAN TAYFA DEHLİZ MACERALARI</option>
                </select>
                <div class="invalid-feedback">
                Please provide a category.
                </div>
                </div>

               <div class="col-md-6 mb-3">
                <label for="example-date-input">TARİH</label>
                    <div class="form-control form-control-lg">
                      <input class="form-control" type="date" value="2018-12-01" id="example-date-input">
                    </div>
              <div class="invalid-feedback">

               Please provide a category.
              </div>
               </div>
              <div class="col-md-6 mb-3">
               <label for="validationCustom05">SEANS</label>
                 <select class="form-control form-control-lg" id="validationCustom05" name="activity" required>
                  <option value="">Seans Seçiniz </option>
                  <option value="Classroom Instruction and Assessment">11:00</option>
                  <option value="Curriculum Development and Alignment">13:15</option>
                  <option value="Curriculum Development and Alignment">15:30</option>
                  <option value="Curriculum Development and Alignment">17:45</option>
                  <option value="Curriculum Development and Alignment">20:00</option>
                  <option value="Curriculum Development and Alignment">22:15</option>
                 </select>
                <div class="invalid-feedback">
              Please provide an activity.
             </div>
              </div>
              <button type="button" class="btn btn-primary btn-lg btn-block">Rezervasyon Yap</button>
<script type="text/javascript">


              var catAndActs = {};
catAndActs['MANİSA'] = ['MAGNESİA AVM FORUM MANİSA'];
catAndActs['KOCAELİ'] = ['Gebze Center AVM', 'Symbol Kocaeli Alışveriş Merkezi'];
catAndActs['SİVAS'] = ['Primemall Sivas AVM'];

function ChangecatList() {
    var catList = document.getElementById("validationCustom03");
    var actList = document.getElementById("validationCustom04");
    var selCat = catList.options[catList.selectedIndex].value;
    while (actList.options.length) {
        actList.remove(0);
    }
    var cats = catAndActs[selCat];
    if (cats) {
        var i;
        for (i = 0; i < cats.length; i++) {
            var cat = new Option(cats[i], i);
            actList.options.add(cat);
        }
    }
}

</script>

</div>
</div>
</form>
</section>

      <footer>Copyright Penguins</footer>
    </div>
  </body>
</html>
