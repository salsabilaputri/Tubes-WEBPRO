<html>

<head>
    <link rel="icon" type="image/png" href="img/logo.jpg">
    <title>Berita Bola Terkini, Jadwal Pertandingan</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://plus.google.com/+liputan6dotcom" rel="publisher" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: white;
        }

        /* img {
      width: 260;
      height: 60;
      padding-left: 50px;
    } */

        #cari {
            align: center;
            height: 30px;
            width: 400px;
            margin-left: 0%;
        }

        #search {
            height: 32px;
            width: 82px;
            line-height: 20px;
            background-color: #FF5722;
            color: #FFF;
            border: none;
        }

        .login a:hover {
            color: #FF5722
        }

        .login {
            padding-left: 100px;
            padding-top: 10px;
        }

        .login a {
            color: black;
        }

        .navbar-fix {
            padding-left: 80px;
            padding-top: 10px;
        }

        .navbar-fix a {
            color: black;
        }

        .navbar-fix a:hover {
            color: #FF5722
        }

        #img-ut0 {
            padding-left: 80px;
            width: 980px;
            height: 230px;
        }

        #navbarImg {
            width: 260;
            height: 60;
            padding-left: 50px;
        }

        .container .row.ml-5 .col-4 ul {
            position: relative;
            list-style: none;
            margin-left: 0;
            padding-left: 1.2em;
        }

        .container .row.ml-5 .col-4 ul li {
            border-bottom: 1px solid gray;
        }

        .container .row.ml-5 .col-4 ul li:before {
            content: "#";
            position: absolute;
            color: #FF5722;
        }

        .container .row.ml-5 .col a {
            color: black;
            text-decoration: none;
        }

        .container .row.ml-5 .col #Carousell {
            width: 100%;
            height: 15em;
        }

        .col-4 a {
            color: black;
        }

        .col-4 a:hover {
            color: #FF5722;
        }

        footer {
            margin-top: 40px;
            background-color: #F5F5F5;
            position: relative;
        }

        .footer-wrapper {
            width: 980px;
            margin: 0 auto;
            padding-top: 30px;
        }

        .footer-row {
            border-bottom: 2px solid #EEE;
            padding-bottom: 30px;
        }

        .footer-link-wrapper {
            width: 490px;
            height: 120px;
            float: left;

        }

        .footer-logo i {
            width: 106px;
            height: 42px;
            display: block;
        }

        .footer-nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: inline-block;
            vertical-align: top;
        }

        .footer-nav-item {
            display: inline-block;
            vertical-align: top;
            width: 40%;
        }
    </style>
</head>

<div class="container navbar navbar-expand-lg navbar-light justify-content-between" style="width : 100%">
    <a class="navbar-brand col-md-3" href="#"><img id="navbarImg"
            src="https://cdn0-production-assets-kly.akamaized.net/logos/188/original/099341800_1541671708-Logo_Desktop_Liputan6.png"
            alt="liputan6.com" style="margin-left:0%"></a>
    <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" id="cari" type="search" placeholder="berita apa yang anda cari hari ini?"
            aria-label="Search">
        <button id="search" type="submit">CARI</button>
    </form>
    <p class="login"><a href="<?php echo base_url();?>controllerviewlogin"><strong>MASUK</strong></a></p>
    <br>
</div>
<div id="navbar" class="container navbar navbar-fix fixed-top justify-content-between" style="width:100%;top:60px">
    <nav class="container navbar navbar-fix justify-content-between" style="width:100%;">
        <a href="<?php echo base_url();?>" style="font-size: 13px;"><strong>HOME</strong></a>
        <a href="<?php echo base_url();?>controllernews" style="font-size: 13px;"><strong>NEWS</strong></a>
        <a href="<?php echo base_url();?>controllerpilpres" style="font-size: 13px;"><strong>PILPRES</strong></a>
        <a href="<?php echo base_url();?>controllerpileg" style="font-size: 13px;"><strong>PILEG</strong></a>
        <a href="<?php echo base_url();?>controllerbisnis2" style="font-size: 13px;"><strong>BISNIS</strong></a>
        <a href="<?php echo base_url();?>controllershowbiz" style="font-size: 13px;"><strong>SHOWBIZ</strong></a>
        <a href="<?php echo base_url();?>controllerbola" style="font-size: 13px;"><strong>BOLA</strong></a>
        <a href="<?php echo base_url();?>controllerfoto" style="font-size: 13px;"><strong>FOTO</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>TEKNO</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>CEK FAKTA</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>VIDEO</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>LIFESTYLE</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><span class="badge badge-danger">NEW</span><strong>HOT</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>GLOBAL</strong></a>
        <a href="#pilpres" style="font-size: 13px;"><strong>LAINNYA</strong></a>
    </nav>
    <nav class="container navbar navbar-fix justify-content-between" style="width:100%;">
        <a href="bola.html"><i class="fa fa-futbol-o" aria-hidden="true"></i>BOLA</a>
        <a href="#">Liga Spanyol</a>
        <a href="#">Liga Italia</a>
        <a href="#">Liga Inggris</a>
        <a href="#">Liga Indonesia</a>
        <a href="#">Liga Internasional</a>
        <a href="#">WAGs</a>
        <a href="#">Sports</a>
        <a href="#">Corner</a>
        <a href="#">Prediksi</a>
    </nav>
</div>
<br>
<br>
<br>

<body>
    <div class="container">
        <div class="row ml-5">
            <!-- post -->
            <div class="col">
                <img id="img-ut1" src="img/bola.PNG" width="100%">
                <small>
                    <p class="text-muted">1 Jam yang lalu</p>
                </small>
                <a href="">
                    <h3><b>Legenda MU Muak dengan Gaya Melatih Solskjaer</b></h3>
                </a>
                <small>
                    <p class="text-muted ">MU sedang terpuruk di tangan Solskjaer. Dalam sembilan laga terakhir, Setan
                        Merah kalah tujuh kali dan cuma menang dua kali.</p>
                </small>

                <H5 class="mt-4"><b>BERITA UTAMA LAINNYA</b></H5>
                <div id="Carousell" class="carousel slide mb-5" data-ride="carousel">
                    <div class="carousel-inner" style="height:220px !important;">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama2.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Visual Stories: Beda Pilihan, Tetap Berteman</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama3.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Bendung Katulampa Siaga 1, Waspada Banjir Jakarta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%;height: 100%;">
                                        <img class="card-img-top" src="img/utama4.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Tak Ada Pembenaran untuk Terorisme</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%;height: 100%;">
                                        <img class="card-img-top" src="img/utama3.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Bendung Katulampa Siaga 1, Waspada Banjir Jakarta</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%;height: 100%;">
                                        <img class="card-img-top" src="img/utama4.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Tak Ada Pembenaran untuk Terorisme</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%;height: 100%;">
                                        <img class="card-img-top" src="img/utama2.jpg" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Visual Stories: Beda Pilihan, Tetap Berteman</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Carousell" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Carousell" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <!-- BERITA SELANJUTNYA -->
                <H5 class="mt-4"><b>LIFESTYLE</b></H5>
                <div id="Carousell2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="height:220px !important;">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama6.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Penting, Ini 5 Perlengkapan Rumah Untuk Pasutri Baru
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama5.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Bandara Baru Yogyakarta Segera Beroperasi</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama1.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Anis Baswedan Bagikan Beasiswa Gratis</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama6.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Penting, Ini 5 Perlengkapan Rumah Untuk Pasutri Baru
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama1.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Anis Baswedan Bagikan Beasiswa Gratis</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col" style="padding : 0 2px 0 0;">
                                    <div class="card" style="width: 100%; height: 100%;">
                                        <img class="card-img-top" src="img/utama5.PNG" alt="Card image cap">
                                        <div class="card-body" style="width: 100%;">
                                            <p class="card-text">Bandara Baru Yogyakarta Segera Beroperasi.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#Carousell2" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#Carousell2" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                <div>
                    <a href="">
                        <div class="jumbotron jumbotron-fluid d-flex"
                            style="height: 10em; padding: 0; margin:0; background-color: white">
                            <div class="row">
                                <div class="col-4 my-auto">
                                    <img class="card-img-center" src="img/utama1.PNG" alt="Card image cap" width="100%">
                                </div>
                                <div class="col-8 my-auto">
                                    <small>
                                        <p style="color:#FF5722">TECH</p>
                                    </small>
                                    <h5><b>Anis Baswedan Bagikan Beasiswa Gratis</b></h5>
                                    <small>
                                        <p class="text-muted">Beasiswa diberikan kepada siswa kurang mampu dan ada
                                            tambahan untuk siswa
                                            kurang mampu yang berprestasi</p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="jumbotron jumbotron-fluid d-flex"
                            style="height: 10em; padding: 0; margin:0; background-color: white">
                            <div class="row">
                                <div class="col-4 my-auto">
                                    <img class="card-img-center" src="img/utama5.PNG" alt="Card image cap" width="100%">
                                </div>
                                <div class="col-8 my-auto">
                                    <small>
                                        <p style="color:#FF5722">INFOGRAFIS</p>
                                    </small>
                                    <h5><b>Bandara Baru Yogyakarta Segera Beroperasi</b></h5>
                                    <small>
                                        <p class="text-muted">Meski masih beroperasi secara terbatas, berbagai fasilitas
                                            siap memanjakan
                                            para penumpang pesawat di Bandara Baru Yogyakarta.</p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="jumbotron jumbotron-fluid d-flex"
                            style="height: 10em; padding: 0; margin:0; background-color: white">
                            <div class="row">
                                <div class="col-4 my-auto">
                                    <img class="card-img-center" src="img/utama6.PNG" alt="Card image cap" width="100%">
                                </div>
                                <div class="col-8 my-auto">
                                    <small>
                                        <p style="color:#FF5722">LIFESTYLE</p>
                                    </small>
                                    <h5><b>Penting, Ini 5 Perlengkapan Rumah Untuk Pasutri Baru</b></h5>
                                    <small>
                                        <p class="text-muted">Lima perlengkapan rumah dasar ini wajib ada di setiap
                                            rumah pasangan yang baru
                                            menikah. Apa saja?</p>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-4">
                <h4>Topik Terpopuler</h4>
                <a href="">
                    <ul class="mt-4">
                        <li class="mb-2">
                            <h6 class="ml-3">LIBURANRESORTWORLDSENTOSA</h6>
                        </li>
                        <li class="mb-2">
                            <h6 class="ml-3">REAL COUNT KPU</h6>
                        </li>
                        <li class="mb-2">
                            <h6 class="ml-3">BOM DI SRI LANKA</h6>
                        </li>
                        <li class="mb-2">
                            <h6 class="ml-3">QUICK QOUNT PILPRES 2019</h6>
                        </li>
                        <li class="mb-2">
                            <h6 class="ml-3">PEMILU 2019</h6>
                        </li>
                        <li class="mb-2">
                            <h6 class="ml-3">AVENGERS: ENDGAME</h6>
                        </li>
                    </ul>
                </a>
            </div>
        </div>
    </div>
    <script>
        // When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
        window.onscroll = function () { scrollFunction() };

        function scrollFunction() {
            if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
                document.getElementById("navbar").style.top = "0";
                document.getElementById("navbar").style.backgroundColor = "white";
            } else {
                document.getElementById("navbar").style.top = "60px";
                document.getElementById("navbar").style.backgroundColor = "white";
            }
        }
    </script>
    }
</body>
<footer>
    <section class="footer">
        <div class="footer-wrapper">
            <div class="footer-row">
                <div class="footer-link-wrapper">
                    <div class="footer-logo">
                        <i class="logo-liputan"></i>
                    </div>
                    <ul class="footer-nav-list">
                        <img src="img/liputan.png">
                        <br>
                        <li class="footer-nav-item">
                            <a class="ui" class="footer-nav-item">KONTAK</li>
                        <li class="footer-nav-item">DISCLAIMER</li>
                        <li class="footer-nav-item">REDAKSI</li>
                        <li class="footer-nav-item">TENTANG KAMI</li>
                        <li class="footer-nav-item">KARIR</li>
                        <li class="footer-nav-item">KODE ETIK</li>
                        <li class="footer-nav-item">SITEMAP</li>
                        <li class="footer-nav-item">KOREKSI BERITA</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</footer>

</html>