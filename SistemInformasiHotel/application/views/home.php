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
            <div class="col-sm-4"><img src="<?php echo base_url('application\views\assets\settings_id2.png'); ?>"></div>
        </div>

    </div>
    
</body>
</html>