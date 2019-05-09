<?php var_dump($berita);?>

<html>
<head>
  <link rel="icon" type="image/png" href="img/logo.jpg">
  <title>Berita Bisnis, Ekonomi, Pasar Modal dan Perbankan Indonesia</title>

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

      /* Tambahan */
    }
  </style>
</head>

<!-- Header -->
<div class="container navbar navbar-expand-lg navbar-light justify-content-between" style="width : 100%">
  <a class="navbar-brand col-md-3" href="#"><img id="navbarImg"
      src="https://cdn0-production-assets-kly.akamaized.net/logos/188/original/099341800_1541671708-Logo_Desktop_Liputan6.png"
      alt="liputan6.com" style="margin-left:0%"></a>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" id="cari" type="search" placeholder="berita apa yang anda cari hari ini?"
      aria-label="Search">
    <button id="search" type="submit"><strong>CARI</strong></button>
  </form>
  <p class="login"><a href="<?php echo base_url();?>controllerviewlogin" style="padding-left: 25px;"><strong>MASUK</strong></a></p>
  <br>
</div>
<div id="navbar" class="container navbar navbar-fix fixed-top justify-content-between" style="width:100%;top:60px">
  <!-- <nav class="container navbar navbar-fix justify-content-between" style="width:100%"> -->
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
  <nav class="container navbar navbar-fix justify-content-between" style="width:100%;margin-left:-80px;">
    <a href="Bisnis2.html"><i class="fa fa-newspaper-o" aria-hidden="true"></i>BISNIS</a>
    <a href="#">Ekonomi</a>
    <a href="#">Bank</a>
    <a href="#">Saham</a>
    <a href="#">Energi & Tambang</a>
    <a href="#">Kunsultasi Pajak</a>
    <a href="#">CPNS</a>
    <a href="#">Info Kementan</a>
  </nav>
</div>
<br>
<br>

<body>
  <div class="container">
    <div class="row ml-5">
      <!-- post -->
      <div class="col">
        <img id="img-ut1" src="<?php echo $berita['foto'];?>" width="100%">
        <small>
          <p class="text-muted">20 menit yang lalu</p>
        </small>
        <a href="">
          <h3><b><?php echo $berita['judul'];?></b></h3>
        </a>
        <small>
          <p class="text-muted ">Otoritas bursa siap memanggil direksi Garuda pada pekan depan soal laporan keuangan
            yang ditolak 2 komisaris.</p>
        </small>

        <H5 class="mt-4"><b>BERITA UTAMA LAINNYA</b></H5>
        <div id="Carousell" class="carousel slide mb-5" data-ride="carousel">
          <div class="carousel-inner" style="height:220px !important;">
            <div class="carousel-item active">
              <div class="row">
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/15.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Wawancara Dirut KAI: Berburu Tiket Kereta
                          Mudik Lebaran</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/39.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Menko Darmin Bantah Ambil Alih Masalah
                          Mahalnya Tiket Pesawat</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%;height: 100%;">
                    <img class="card-img-top" src="img/40.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Tahun Depan, LinkAja Bisa untuk Pinjam Duit
                          Usaha</strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%;height: 100%;">
                    <img class="card-img-top" src="img/38.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>ABAC Ajak Masyarakat Dunia Bantu UMKM,
                          Syaratnya?</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%;height: 100%;">
                    <img class="card-img-top" src="img/41.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Salip Apple dan Amazon, Microsoft Kini
                          Bernilai USD 1 Triliun</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%;height: 100%;">
                    <img class="card-img-top" src="img/42.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>BI Prediksi Inflasi April 0,35
                          Persen</strong></p>
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
        <H5 class="mt-4"><b>CPNS</b></H5>
        <div id="Carousell2" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" style="height:220px !important;">
            <div class="carousel-item active">
              <div class="row">
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/43.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Pendaftaran CPNS Papua Resmi Dibuka</strong>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/44.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Budaya Kerja Mission Oriented 'Melarang'
                          Karyawan PUPR untuk Pulang</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/45.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Pesan Menpora untuk 286 Atlet Indonesia yang
                          Menjadi CPNS</strong></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/46.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Kementerian PUPR Angkat 979 CPNS Formasi
                          2017 Jadi PNS</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/47.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Rekrutmen CPNS 2019 Bakal Digelar Akhir
                          Tahun</strong></p>
                    </div>
                  </div>
                </div>
                <div class="col" style="padding : 0 2px 0 0;">
                  <div class="card" style="width: 100%; height: 100%;">
                    <img class="card-img-top" src="img/48.jpg" alt="Card image cap">
                    <div class="card-body" style="width: 100%;">
                      <p class="card-text" style="font-size: 14px;"><strong>Jumlah Pendaftar Perguruan Tinggi Kedinasan
                          Capai 19.332 Peserta</strong></p>
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
                  <img class="card-img-center" src="img/49.jpg" alt="Card image cap" width="100%">
                </div>
                <div class="col-8 my-auto">
                  <small>EKONOMI</small>
                  <h5><b>Bandara Baru Yogyakarta Tekan Kepadatan Adisucipto hingga 25 Persen</b></h5>
                  <small>
                    <p class="text-muted">Semua penerbangan internasional yang selama ini di Bandara Adisutjipto akan
                      dipindahkan ke Bandara Baru Yogyakarta.</p>
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
                  <img class="card-img-center" src="img/50.jpg" alt="Card image cap" width="100%">
                </div>
                <div class="col-8 my-auto">
                  <small>EKONOMI</small>
                  <h5><b>Jelang Akhir Pekan, Harga Bawang Putih Masih Rp 60 Ribu per Kg</b></h5>
                  <small>
                    <p class="text-muted">Harga bawang putih masih belum turun meski pemerintah sudah menyetujui impor.
                    </p>
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
                  <img class="card-img-center" src="img/51.jpg" alt="Card image cap" width="100%">
                </div>
                <div class="col-8 my-auto">
                  <small>LIFESTYLE</small>
                  <h5><b>Zaman Now, Uang Rp 400 Perak Bisa Dapat Apa?</b></h5>
                  <small>
                    <p class="text-muted">Nilai uang Rp 400 sudah tak ada nilainya? Hmmm...coba Anda pikir-pikir lagi.
                    </p>
                  </small>
                </div>
              </div>
            </div>
          </a>
        </div>

      </div>
      <!-- sidebar -->
      <div class="col-4">
        <h4 style="font-size: 17px; padding-right:25px;"><strong>Topik Terpopuler</strong></h4>
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

</html>