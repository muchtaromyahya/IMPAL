<!DOCTYPE html>
<html lang="en">
<style>
  #setting {
    border: none;
    background: none;
    color: beige;
    outline: none;
    

  }
  #setting:active {
    background-color: grey;
  }
  #setting:hover {
    background-color: grey;
  }
  
</style>

<body>
  <nav class="navbar navbar-expand-lg navbar-light py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url('Home') ?>">
        <p style="color: beige; ">Hotel Telkom Bandung </p>
      </a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon" style="color: beige;"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Home') ?>">
              <p style="color: beige; ">Home</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('CheckIn') ?>">
              <p style="color: beige;">Check In</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('CheckOut') ?>">
              <p style="color: beige;">Check Out</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Kamar') ?>">
              <p style="color: beige;">Kamar</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Fasilitas') ?>">
              <p style="color: beige;">Fasilitas</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="<?php echo base_url('Laporan') ?>">
              <p style="color: beige;">Laporan</p>
            </a>
          </li>
          <li class="nav-item">
            <div class="btn-group">

              <button id='setting' class="rounded nav-link js-scroll-trigger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?=$_SESSION['name']  ?>
              </button>
              <div class="dropdown-menu">
                <a style="text-align:center;cursor:pointer" class="dropdown-item" data-toggle="modal" data-target="#exampleModalCenter"> Setting </a>
                <div class="dropdown-divider"></div>
                <a style="text-align:center;" class="dropdown-item" href="<?php echo base_url('Login/signout') ?>">Log Out</a>
              </div>
            </div>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <?php $this->load->view('setting'); ?>

</body>


</html>