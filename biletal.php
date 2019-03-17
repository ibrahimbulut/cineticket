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
  <link rel="stylesheet" type="text/css" media="screen" href="biletal.css" />

  <title>Bilet Al</title>
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
                  <option value="seans">11:00</option>
                  <option value="seans">13:15</option>
                  <option value="seans">15:30</option>
                  <option value="seans">17:45</option>
                  <option value="seans">20:00</option>
                  <option value="seans">22:15</option>
                </select>
                <div class="invalid-feedback">
                  Please provide an activity.

                </div>
              </div>
              <br>
              <div class="koltuk">
                <p>Lütfen koltuk seçiniz: </p>

              </div>
              <form id="reservation" method="post" action="test.php">
                <section id="seats">
                  
                  <input id="seat-1" class="seat-select" type="checkbox" value="1" name="seat[]" />
                  <label for="seat-1" class="seat">a1</label>
                  <input id="seat-2" class="seat-select" type="checkbox" value="2" name="seat[]" />
                  <label for="seat-2" class="seat">a2</label>
                  <input id="seat-3" class="seat-select" type="checkbox" value="3" name="seat[]" />
                  <label for="seat-3" class="seat">a3</label>
                  <input id="seat-4" class="seat-select" type="checkbox" value="4" name="seat[]" />
                  <label for="seat-4" class="seat">a4</label>
                  <input id="seat-5" class="seat-select" type="checkbox" value="5" name="seat[]" />
                  <label for="seat-5" class="seat">a5</label>
                  <input id="seat-6" class="seat-select" type="checkbox" value="6" name="seat[]" />
                  <label for="seat-6" class="seat">a6</label>
                  <input id="seat-7" class="seat-select" type="checkbox" value="7" name="seat[]" />
                  <label for="seat-7" class="seat">a7</label>
                  <input id="seat-8" class="seat-select" type="checkbox" value="8" name="seat[]" />
                  <label for="seat-8" class="seat">a8</label>
                  <input id="seat-9" class="seat-select" type="checkbox" value="9" name="seat[]" />
                  <label for="seat-9" class="seat">a9</label>
                  <input id="seat-10" class="seat-select" type="checkbox" value="10" name="seat[]" />
                  <label for="seat-10" class="seat">a10</label>

                </section><hr>
                <section id="seats">
                <input id="seat-11" class="seat-select" type="checkbox" value="11" name="seat[]" />
                  <label for="seat-11" class="seat">b1</label>
                  <input id="seat-12" class="seat-select" type="checkbox" value="12" name="seat[]" />
                  <label for="seat-12" class="seat">b2</label>
                  <input id="seat-13" class="seat-select" type="checkbox" value="13" name="seat[]" />
                  <label for="seat-13" class="seat">b3</label>
                  <input id="seat-14" class="seat-select" type="checkbox" value="14" name="seat[]" />
                  <label for="seat-14" class="seat">b4</label>
                  <input id="seat-15" class="seat-select" type="checkbox" value="15" name="seat[]" />
                  <label for="seat-15" class="seat">b5</label>
                  <input id="seat-16" class="seat-select" type="checkbox" value="16" name="seat[]" />
                  <label for="seat-16" class="seat">b6</label>
                  <input id="seat-17" class="seat-select" type="checkbox" value="17" name="seat[]" />
                  <label for="seat-17" class="seat">b7</label>
                  <input id="seat-18" class="seat-select" type="checkbox" value="18" name="seat[]" />
                  <label for="seat-18" class="seat">b8</label>
                  <input id="seat-19" class="seat-select" type="checkbox" value="19" name="seat[]" />
                  <label for="seat-19" class="seat">b9</label>
                  <input id="seat-20" class="seat-select" type="checkbox" value="20" name="seat[]" />
                  <label for="seat-20" class="seat">b10</label>
                </section>
                <br>
                <form action="biletal.php" style="border:1px solid #ccc" method = "POST">
                  <div class="form-group mx-sm-3 mb-2">
                    <label for="inputİndirim Kupon Kodu" class="sr-only">İndirim Kupon Kodu</label>
                    <input type="text" class="form-control" name="indirimKuponKodu" id="indirimKuponKodu" placeholder="İndirim Kupon Kodu">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" name="KoduUygula" id="KoduUygula">KoduUygula</button>
                  </div>
                  <div class="alert alert-primary" role="alert">
                  Bilet Tutarı :
                  <?php
                 if (isset($result2)) {
                   echo $result2;
                 }
                 ?>
                </div>
                </form>
                <br>
                
                <br>
                <button type="button" class="btn btn-primary btn-lg btn-block">Bilet Al</button>

                <style>
                * {
                  margin: 0;
                  padding: 0;
                }

                .seat {
                  float: left;
                  display: block;
                  margin: 5px;
                  background: #4CAF50;
                  width: 100px;
                  height: 140px;
                }

                .seat-select {
                  display: none;
                }

                .seat-select:checked+.seat {
                  background: #F44336;
                }
                #reservation{
                  display: table;
                  position: relative;
                  overflow: hidden;
                  text-align:center;
                  margin:0 auto;
                }
                </style>
                <br>

                <script type="text/javascript">


                var secim = {};
                secim['MANİSA'] = ['MAGNESİA AVM FORUM MANİSA'];
                secim['KOCAELİ'] = ['Gebze Center AVM', 'Symbol Kocaeli Alışveriş Merkezi'];
                secim['SİVAS'] = ['Primemall Sivas AVM'];

                function ChangecatList() {
                  var catList = document.getElementById("validationCustom03");
                  var actList = document.getElementById("validationCustom04");
                  var selCat = catList.options[catList.selectedIndex].value;
                  while (actList.options.length) {
                    actList.remove(0);
                  }
                  var cats = secim[selCat];
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

        <!--<div class="plane">
          <div class="cockpit">
            <h1>Please select a seat</h1>
          </div>
          <div class="exit exit--front fuselage">
            
          </div>
          <ol class="cabin fuselage">
            <li class="row row--1">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="1A" />
                  <label for="1A">1A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="1B" />
                  <label for="1B">1B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="1C" />
                  <label for="1C">1C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" disabled id="1D" />
                  <label for="1D">Occupied</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="1E" />
                  <label for="1E">1E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="1F" />
                  <label for="1F">1F</label>
                </li>
              </ol>
            </li>
            <li class="row row--2">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="2A" />
                  <label for="2A">2A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="2B" />
                  <label for="2B">2B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="2C" />
                  <label for="2C">2C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="2D" />
                  <label for="2D">2D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="2E" />
                  <label for="2E">2E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="2F" />
                  <label for="2F">2F</label>
                </li>
              </ol>
            </li>
            <li class="row row--3">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="3A" />
                  <label for="3A">3A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="3B" />
                  <label for="3B">3B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="3C" />
                  <label for="3C">3C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="3D" />
                  <label for="3D">3D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="3E" />
                  <label for="3E">3E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="3F" />
                  <label for="3F">3F</label>
                </li>
              </ol>
            </li>
            <li class="row row--4">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="4A" />
                  <label for="4A">4A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="4B" />
                  <label for="4B">4B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="4C" />
                  <label for="4C">4C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="4D" />
                  <label for="4D">4D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="4E" />
                  <label for="4E">4E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="4F" />
                  <label for="4F">4F</label>
                </li>
              </ol>
            </li>
            <li class="row row--5">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="5A" />
                  <label for="5A">5A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="5B" />
                  <label for="5B">5B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="5C" />
                  <label for="5C">5C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="5D" />
                  <label for="5D">5D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="5E" />
                  <label for="5E">5E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="5F" />
                  <label for="5F">5F</label>
                </li>
              </ol>
            </li>
            <li class="row row--6">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="6A" />
                  <label for="6A">6A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="6B" />
                  <label for="6B">6B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="6C" />
                  <label for="6C">6C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="6D" />
                  <label for="6D">6D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="6E" />
                  <label for="6E">6E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="6F" />
                  <label for="6F">6F</label>
                </li>
              </ol>
            </li>
            <li class="row row--7">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="7A" />
                  <label for="7A">7A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="7B" />
                  <label for="7B">7B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="7C" />
                  <label for="7C">7C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="7D" />
                  <label for="7D">7D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="7E" />
                  <label for="7E">7E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="7F" />
                  <label for="7F">7F</label>
                </li>
              </ol>
            </li>
            <li class="row row--8">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="8A" />
                  <label for="8A">8A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="8B" />
                  <label for="8B">8B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="8C" />
                  <label for="8C">8C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="8D" />
                  <label for="8D">8D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="8E" />
                  <label for="8E">8E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="8F" />
                  <label for="8F">8F</label>
                </li>
              </ol>
            </li>
            <li class="row row--9">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="9A" />
                  <label for="9A">9A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="9B" />
                  <label for="9B">9B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="9C" />
                  <label for="9C">9C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="9D" />
                  <label for="9D">9D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="9E" />
                  <label for="9E">9E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="9F" />
                  <label for="9F">9F</label>
                </li>
              </ol>
            </li>
            <li class="row row--10">
              <ol class="seats" type="A">
                <li class="seat">
                  <input type="checkbox" id="10A" />
                  <label for="10A">10A</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="10B" />
                  <label for="10B">10B</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="10C" />
                  <label for="10C">10C</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="10D" />
                  <label for="10D">10D</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="10E" />
                  <label for="10E">10E</label>
                </li>
                <li class="seat">
                  <input type="checkbox" id="10F" />
                  <label for="10F">10F</label>
                </li>
              </ol>
            </li>
          </ol>
          <div class="exit exit--back fuselage">
            
          </div>
        </div>-->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <style>*,*:before,*:after {
          box-sizing: border-box;
        }
        html {
          font-size: 16px;
        }
        
        .plane {
          margin: 20px auto;
          max-width: 300px;
        }
        
        .cockpit {
          height: 250px; 
          position: relative;
          overflow: hidden;
          text-align: center;
          border-bottom: 5px solid #d8d8d8;
          &:before {
            content: "";
            display: block;
            position: absolute;
            top: 0;
            left: 0;
            height: 500px;
            width: 100%;
            border-radius: 50%;
            border-right: 5px solid #d8d8d8;
            border-left: 5px solid #d8d8d8;
          }
          h1 {
            width: 60%;
            margin: 100px auto 35px auto;
          }
        }
        
        .exit {
          position: relative;
          height: 50px;
          &:before,
          &:after {
            content: "EXIT";
            font-size: 14px;
            line-height: 18px;
            padding: 0px 2px;
            font-family: "Arial Narrow", Arial, sans-serif;
            display: block;
            position: absolute;
            background: green;
            color: white;
            top: 50%;
            transform: translate(0, -50%);
          }
          &:before {
            left: 0;
          }
          &:after {
            right: 0;
          }
        }
        
        .fuselage {
          border-right: 5px solid #d8d8d8;
          border-left: 5px solid #d8d8d8;
        }
        
        ol {
          list-style :none;
          padding: 0;
          margin: 0;
        }
        
        .row {
          
        }
        
        .seats {
          display: flex;
          flex-direction: row;
          flex-wrap: nowrap;
          justify-content: flex-start;  
        }
        
        .seat {
          display: flex;
          flex: 0 0 14.28571428571429%;
          padding: 5px;
          position: relative;  
          &:nth-child(3) {
            margin-right: 14.28571428571429%;
          }
          input[type=checkbox] {
            position: absolute;
            opacity: 0;
          }
          input[type=checkbox]:checked {
            + label {
              background: #bada55;      
              -webkit-animation-name: rubberBand;
                  animation-name: rubberBand;
              animation-duration: 300ms;
              animation-fill-mode: both;
            }
          }
          input[type=checkbox]:disabled {
            + label {
              background: #dddddd;
              text-indent: -9999px;
              overflow: hidden;
              &:after {
                content: "X";
                text-indent: 0;
                position: absolute;
                top: 4px;
                left: 50%;
                transform: translate(-50%, 0%);
              }
              &:hover {
                box-shadow: none;
                cursor: not-allowed;
              }
            }
          }
          label {    
            display: block;
            position: relative;    
            width: 100%;    
            text-align: center;
            font-size: 14px;
            font-weight: bold;
            line-height: 1.5rem;
            padding: 4px 0;
            background: #F42536;
            border-radius: 5px;
            animation-duration: 300ms;
            animation-fill-mode: both;
            
            &:before {
              content: "";
              position: absolute;
              width: 75%;
              height: 75%;
              top: 1px;
              left: 50%;
              transform: translate(-50%, 0%);
              background: rgba(255,255,255,.4);
              border-radius: 3px;
            }
            &:hover {
              cursor: pointer;
              box-shadow: 0 0 0px 2px #5C6AFF;
            }
            
          }
        }
        
        @-webkit-keyframes rubberBand {
          0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
          }
        
          30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
          }
        
          40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
          }
        
          50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
          }
        
          65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
          }
        
          75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
          }
        
          100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
          }
        }
        
        @keyframes rubberBand {
          0% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
          }
        
          30% {
            -webkit-transform: scale3d(1.25, 0.75, 1);
                    transform: scale3d(1.25, 0.75, 1);
          }
        
          40% {
            -webkit-transform: scale3d(0.75, 1.25, 1);
                    transform: scale3d(0.75, 1.25, 1);
          }
        
          50% {
            -webkit-transform: scale3d(1.15, 0.85, 1);
                    transform: scale3d(1.15, 0.85, 1);
          }
        
          65% {
            -webkit-transform: scale3d(.95, 1.05, 1);
                    transform: scale3d(.95, 1.05, 1);
          }
        
          75% {
            -webkit-transform: scale3d(1.05, .95, 1);
                    transform: scale3d(1.05, .95, 1);
          }
        
          100% {
            -webkit-transform: scale3d(1, 1, 1);
                    transform: scale3d(1, 1, 1);
          }
        }
        
        .rubberBand {
          -webkit-animation-name: rubberBand;
                  animation-name: rubberBand;
        }</style>

      </div>
    </div>

  </section>

  <footer>Copyright Penguins</footer>
</div>
</body>
</html>
