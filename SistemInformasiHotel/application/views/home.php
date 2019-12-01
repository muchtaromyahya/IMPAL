<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
</head>
<style>
    .title {
        color: white;
        font-size: 60px;
    }

    .rowhotel {
        position: relative;
        text-align: center;
    }

    img {
        border-radius: 19px;
        border-color: white;
        border-style: solid;
        padding: 5%;
        width: 150px;
        height: 180px;
    }
    .hovers{
         padding-right: 2px;
         padding-top: 35px;
         width: 140px;
         opacity: 0.5;
     }

     .hovers:hover{
         transform: scale(1.2);
         opacity: 1;
         transition: 150ms;
     }
</style>

<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <div class="container">
        <p class="title" style="text-align: center; margin-bottom: 10%; margin-top: 10%;">Sistem Informasi Hotel Telkom</p>
        <div class="row rowhotel" style="margin-bottom:5%;">
            <div class="col-sm-4 hovers "><a style="cursor:pointer" href="<?php echo base_url('CheckIn') ?>"> <img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\checkin_en3.png'); ?>"></a></div>
            <div class="col-sm-4 hovers" ><a style="cursor:pointer" href="<?php echo base_url('CheckOut') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\checkout_en2.png'); ?>"> </a></div>
            <div class="col-sm-4 hovers" ><a style="cursor:pointer" href="<?php echo base_url('Kamar') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\rooms_id2.png'); ?>"> </a></div>
        </div>
        <div class="row rowhotel">
            <div  class="col-sm-4 hovers"><a style="cursor:pointer" href="<?php echo base_url('Fasilitas') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\facilities_id2.png'); ?>"> </a></div>
            <div  class="col-sm-4 hovers"><a style="cursor:pointer" href="<?php echo base_url('Laporan') ?>"><img src="<?php echo base_url('application\views\assets\icon_hotel_impal\icons\report_id2.png'); ?>"></a></div>
            <div  class="col-sm-4 hovers"><a style="cursor:pointer" data-toggle="modal" data-target="#exampleModalCenter"><img src="<?php echo base_url('application\views\assets\settings_en2.png'); ?>"></a></div>

        </div>

        <!-- Modal -->
        
        <script>
            function checkPassword(form) {
                password1 = form.password1.value;
                password2 = form.password2.value;
                // If Not same return False.     
                if (password1 != password2) {
                    alert("\nPassword did not match: Please try again...")
                    return false;
                }

                // If same return True. 
                else {
                    alert("Password Match: Welcome to GeeksforGeeks!")
                    return true;
                }
            }
        </script>





        <!-- <div id="id01" class="modal">
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
      <button type="submit">Simpan</button> -->
        <!-- <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div> -->

        <!-- <div class="container" style="background-color:#f1f1f1; padding-left:10%; padding-right:10%;">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div> -->
        <!-- </form>
</div> -->

    </div>
    <!-- <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
    </script> -->

</body>

</html>