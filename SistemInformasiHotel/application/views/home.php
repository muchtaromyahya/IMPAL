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
</style>
<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <div class="container" >
        <p class="title" style="text-align: center; margin-bottom: 10%; margin-top: 10%;">Sistem Informasi Hotel Telkom</p>
        <div class="row rowhotel" style="margin-bottom:5%;">
            <div class="col-sm-4"><img <?php base_url('assets/icon_hotel_impal/checkin_en1.jpeg'); ?>></div>
            <div class="col-sm-4"> <p class="title">Menu 2</p> </div>
            <div class="col-sm-4"><p class="title">Menu 3</p></div>
        </div>
        <div class="row rowhotel">
            <div class="col-sm-4"><p class="title">Menu 4</p></div>
            <div class="col-sm-4"><p class="title">Menu 5</p></div>
            <div class="col-sm-4"><p class="title">Menu 6</p></div>
        </div>

    </div>
    
</body>
</html>