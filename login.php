<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS Peks</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="icon" href="">
</head>
<body>

<div class="container mt-3">
    <div class="content">
        <div class="flex-div">
          <div class="name-content">
            <h1 class="logo">Facebook</h1>
            <p>Connect with friends and the world around you on Facebook.</p>
          </div>
            <form id="login1" action="cek.php" method="post">
              <input type="text" placeholder="Email or Phone Number" name="username" required />
              <input type="password" placeholder="Password" name="password" required>
              <button class="login">Log In  </button>
              <a href="#">Forgot Password ?</a>
              <hr>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">Create New Account</button>
            </form>
        </div>
      </div>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">
    <div clas="modal-body">
<div class="container-fluid" id="wrap">
	  <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="r" method="post" class="form" role="form" id="dayatiskal">   <legend>Sign Up</legend>
                    <h4>It's free and always will be.</h4>
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="firstname" value="" class="form-control input-lg" placeholder="First Name"  />                        </div>
                        <div class="col-xs-6 col-md-6">
                            <input type="text" name="lastname" value="" class="form-control input-lg" placeholder="Last Name"  />                        </div>
                    </div>
                    <input type="text" name="email" value="" class="form-control input-lg" placeholder="Your Email"  /><input type="password" name="password" value="" class="form-control input-lg" placeholder="Password"  /><input type="password" name="confirm_password" value="" class="form-control input-lg" placeholder="Confirm Password"  />                    <label>Birth Date</label>                    <div class="row">
                        <div class="col-xs-4 col-md-4">
                            <select name="month" class = "form-control input-lg">
                                <option value="01">Jan</option>
                                <option value="02">Feb</option>
                                <option value="03">Mar</option>
                                <option value="04">Apr</option>
                                <option value="05">May</option>
                                <option value="06">Jun</option>
                                <option value="07">Jul</option>
                                <option value="08">Aug</option>
                                <option value="09">Sep</option>
                                <option value="10">Oct</option>
                                <option value="11">Nov</option>
                                <option value="12">Dec</option>
                                </select>                        </div>
                                                        <div class="col-xs-4 col-md-4">
                                                            <select name="day" class = "form-control input-lg">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                                </select>                        </div>
                                                        <div class="col-xs-4 col-md-4">
                                                            <select name="year" class = "form-control input-lg">    
                                <option value="2000">2000</option>
                                <option value="2001">2001</option>
                                <option value="2002">2002</option>
                                <option value="2003">2003</option>
                                <option value="2004">2004</option>
                                <option value="2005">2005</option>
                                <option value="2006">2006</option>
                                <option value="2007">2007</option>
                                <option value="2008">2008</option>
                                <option value="2009">2009</option>
                                <option value="2010">2010</option>
                                <option value="2011">2011</option>
                                <option value="2012">2012</option>
                                <option value="2013">2013</option>
</select>                        </div>
                    </div>
                     <label>Gender : </label>                    <label class="radio-inline">
                        <input type="radio" name="gender" value="M" id=male />                        Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="gender" value="F" id=female />                        Female
                    </label>
                    <br />
                <span class="help-block">By clicking Create my account, you agree to our Terms and that you have read our Data Use Policy, including our Cookie Use.</span>
                <br>
                <button class="btn btn-lg btn-primary btn-block signup-btn" type="submit">
                    Create my account</button>
                </div>
                </form>
                </div>         
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <a href="#">Bahasa Indonesia</a>
    <a href="#">English (UK)</a>
    <a href="#">Basa Jawa</a>
    <a href="#">Bahasa Melayu</a>
    <a href="#">日本語</a>
    <a href="#">العربية</a>
    <a href="#">Français (France)</a>
    <a href="#">Español</a>
    <a href="#">한국어</a>
    <a href="#">Português (Brasil)</a>
    <a href="#">Deutsch</a>
    <a href="#">Daftar</a>
    <a href="#">Masuk</a>
    <a href="#">Messenger</a>
    <a href="#">Facebook Lite</a>
    <a href="#">Video</a>
    <a href="#">Tempat</a>
    <a href="#">Game</a>
    <a href="#">Marketplace</a>
    <a href="#">Meta Pay</a>
    <a href="#">Meta Store</a>
    <a href="#">Meta Quest</a>
    <a href="#">Instagram</a>
    <a href="#">Threads</a>
    <a href="#">Penggalangan Dana</a>
    <a href="#">Layanan</a>
    <a href="#">Pusat Informasi Pemilu</a>
    <a href="#">Kebijakan Privasi</a>
    <a href="#">Pusat Privasi</a>
    <a href="#">Grup</a>
    <a href="#">Tentang</a>
    <a href="#">Buat Iklan</a>
    <a href="#">Cookie</a>
    <a href="#">Pilihan Iklan</a>
    <a href="#">Ketentuan</a>
    <a href="#">Bantuan</a>
    <a href="#">Pengunggahan Kontak & Non-Pengguna</a>
    <a href="#">Pengaturan</a>
    <a href="#">Log aktivitas</a>
    <p>Meta © 2023</p>
</div>
</body>
</html>
