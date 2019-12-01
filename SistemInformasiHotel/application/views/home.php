<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
</head>
<style>
.title{
    color: white;
    font-size: 60px;
}
.rowhotel{
    position: relative;
    text-align: center;
}
img{
    border-radius: 19px;
    border-color: white;
    border-style: solid;
    padding: 5%;
    width: 150px;
    height: 180px;
}
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     radius: 10%;
  }
}
</style>
<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <div class="container" >
        <p class="title" style="text-align: center; margin-bottom: 10%; margin-top: 10%;">Sistem Informasi Hotel Telkom</p>
        <div class="row rowhotel" style="margin-bottom:5%;">
            <div class="col-sm-4" style="cursor:pointer"><a href="<?php echo base_url('CheckIn') ?>"> <img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\checkin_en3.png'); ?>"></a></div>
            <div class="col-sm-4" style="cursor:pointer"><a href="<?php echo base_url('CheckOut') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\checkout_en2.png'); ?>"> </a></div>
            <div class="col-sm-4" style="cursor:pointer"><a href="<?php echo base_url('Kamar') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\rooms_id2.png'); ?>"> </a></div>
        </div>
        <div class="row rowhotel">
            <div class="col-sm-4"><a href="<?php echo base_url('Fasilitas') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\facilities_id2.png'); ?>"> </a></div>
            <div class="col-sm-4"><a href="<?php echo base_url('Laporan') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\report_id2.png'); ?>"></a></div>
            <div class="col-sm-4"><img onclick="document.getElementById('id01').style.display='block'" style="width:auto;" src="<?php echo base_url('application\views\assets\settings_id2.png'); ?>"></div>
        </div>
        <div id="id01" class="modal">
            <form class="modal-content animate" action="/action_page.php" method="post">
            <div class="imgcontainer">
            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
            <img src="Silakan cari gambar sendiri untuk backend untuk gambar backend" alt="Avatar" class="avatar"> 
               
    </div>

    <div class="container" style="padding-left:10%; padding-right:10%">
    <label for="uname"><b>Nama Lengkap</b></label>
      <input type="text" placeholder="Enter Username" name="get nama dari data base" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <label for="psw"><b>Konfirmasi Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <div class="row">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-4">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        </div>
        <div class="col-sm-4" style="padding-left:10%; padding-right:10%; radius:10px;">
            <button type="submit">Simpan</button>
        </div>
        <div class="col-sm-2">
        </div>
      </div>
      <!-- <button type="submit">Simpan</button> -->
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <!-- <div class="container" style="background-color:#f1f1f1; padding-left:10%; padding-right:10%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
  </form>
</div>

    </div>
    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
</body>
</html>