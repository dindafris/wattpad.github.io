<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/input.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4d1154c754.js" crossorigin="anonymous"></script>
    <title>Input</title>
</head>
<body>

<!-- header -->
<div class="header">
    <a href="#" class='fas' name="back" style='font-size:30px'>&#xf053;</a>
    <p>Tambahkan info cerita</p>
    <h6>Cerita tak berjudul</h6>
    <button class="button-1 next" role="button">Berikutnya</button>
    <button class="button-1 btl" role="button">Batalkan</button>
</div>

<!-- content -->
<div class="content">
  <div class="box-cover">
    <i class="fa-solid fa-image" style='font-size:60px'></i>
  <p>Tambahkan sampul</p>
  <span class="material-icons">info</span>
  </div>
  <form class="box-info">
    <nav class="navbar">
      <b><a href="#" class="nav-link">Detail cerita</a></b>
    </nav>
    <div class="container">
      <label for="jdl">Judul</label>
      <input type="text" placeholder="Cerita tak berjudul" name="judul" required class="judul" class="judul">
      <label for="deskripsi">Deskripsi <i class="material-icons">info</i></label>
      <br>
      <textarea name="text-des" id="des" rows="8"></textarea>
      <label for="tag">Tag <i class="material-icons">info</i></label><br>
      <input type="text" placeholder="Tambahkan tagar" name="tag" required class="tag">
      <button class="button-2" role="button"><i class="fa-solid fa-plus" style='font-size:27px'></i></button><br>
      <label for="hakcipta">Hak Cipta</label><br>
      <input type="text" name="hakcpt" placeholder="Hak Cipta Dilindungin Undang-Undang" disabled class="hakcpt">
    </div>
  </form>
</div>

<div class="footer">
  <ul class="one">
    <li>Paid Stories</li>
    <li>Coba Premium</li>
    <li>Dapatkan Aplikasinya</li>
    <li>Bahasa</li>
    <li>Penulis</li>
    <li>|</li>
    <li>Bisnis</li>
    <li>Pekerjaan</li>
    <li>Pers</li>
    <li></li>
    <li></li>
    <li class="two">Persyaratan</li>
    <li class="two">Privasi</li>
    <li class="two">Aksebilitas</li>
    <li class="two">Bantuan</li>
    <li class="copy"><i class="fa-regular fa-copyright"> 2022 Wattpad</i></li>
  </ul>
  <br><br><br>
</div>

<!-- <div class="header">
    <p>Tambahkan info cerita</p>
    <h6>Cerita tak berjudul</h6>
    <i style='font-size:24px' class='fas'>&#xf053;</i>

</div>
<div class="line"></div> -->

<!-- <div class="clearfix">
  <div class="column menu">
    <ul>
      <li>The Flight</li>
      <li>The City</li>
      <li>The Island</li>
      <li>The Food</li>
    </ul>
  </div> -->

  <!-- <div class="column content">
    <h1>The City</h1>
    <p>Chania is the capital of the Chania region on the island of Crete. The city can be divided in two parts, the old town and the modern city.</p>
    <p>You will learn more about web layout and responsive web pages in a later chapter.</p>
  </div>
</div> -->

<!-- <div class="footer">
  <p>Footer Text</p>
</div> -->
    
</body>
</html>