<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <link rel="stylesheet" href="/style/styles/index2.css">
    <link rel="stylesheet" href="index.js">
</head>
<body>
    <section class="sec1">
        <div class="sec1-1">
            <h1>Manajemen Gudang</h1>
        </div>
        <div class="sec1-2">
            <p\>Nama Pengguna</p>
            <input type="text" placeholder="Nama Pengguna*" >
        </div>
        <div class="sec1-3">
            <p\>Kata sandi</p>
            <input type="password" placeholder="Kata sandi*" class="sec-1-3-input" id="myInput">
            <button onclick="myFunction()" id="MyInput">Tampilkan kata sandi</button>
        </div>
        <div class="sec1-4">
            <a href="">Gabung</a>
        </div>
    </section>
    <section class="sec2">
        <div class="sec2-1">
            <h1>Kelola gudang anda</h1>
            <img src="../tugas/gamber.png" alt="">
        </div>
        <div class="sec2-2">
            <div class="sec2-2-1">
               <h1 class="sec2-2-1-h1">Tidak mempunyai akun?</h1>
               <h1 class="sec2-2-1-h2">Gabung sekarang</h1> 
            </div>
            <div class="sec2-2-2">
                <div>
                    <p>Nama pengguna</p>
                    <input type="text" placeholder="Nama Pengguna*" class="sec2-2-2-input">
                    <p>Tanggal lahir</p>
                    <input type="number" min="1" max="31" placeholder="Tanggal" class="sec2-2-2-inputlain">
                    <input type="month" class="month">
                    <p>Password</p>
                    <div class="last">
                        <div>
                            <input type="password" class="sec2-2-2-i" placeholder="Kata sandi*" id="myinput">
                        </div>
                        <div>
                            <input type="checkbox" onclick="myfunction()" class="cek">
                        </div>
                    </div>
                    <p>Konfirmasi kata sandi</p>
                    <div class="last">
                        <div>
                            <input type="password" class="sec2-2-2-i" placeholder="Konfirmasi kata sandi*" id="Myinput">
                        </div>
                        <div>
                            <input type="checkbox" onclick="Myfunction()" class="cek">
                        </div>
                    </div>               
                </div>
                <button>Daftar</button>
            </div>
        </div>
    </section>
    <section class="sec3">
      <div class="sec3-1">
        <div>
          <h1>Bahasa</h1>
        </div>
        <div>
          <a class="sec3-1-las" href="index.html">Inggris</a>
        </div>
        <div>
          <a class="sec3-1-las">Indonesia</a>
        </div>
        <div>
          <p> Copyright by &copy; warehouse<p>
        </div>
      </div>
    </section>
</body>
<script>
    function myFunction() {
      var x = document.getElementById("myInput");
      var y = document.getElementById("MyInput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
      if (y.textContent === "Tampilkan kata sandi") {
        y.textContent = "Tidak Tampilkan";
      } else {
        y.textContent = "Tampilkan kata sandi";
      }  
    }

    function myfunction() {
      var x = document.getElementById("myinput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }

    function Myfunction() {
      var x = document.getElementById("Myinput");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
</script>
</html>