<html>

<head>
    <title>Detail Laporan </title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
    <link href="<?php echo base_url('application\views\icon\logo.png') ?>" rel="icon" type="image/png">
</head>
<style>
    #box {
        width: 100%;
        height: 75%;
        border-radius: 40px;
        border-style: solid;
        border-color: white;
        margin-top: 10%;
        padding-left: 10%;
        padding-right: 10%
    }

    h1 {
        color: black;
        text-align: center;
        margin-top: 4%;
    }
    .labels {
        color:black;
    }
    
</style>

<body>
    <header class="container">
        <div id="">
            <?php if ($check):?>
                <form method="POST" action="">
                <div class="row">
                    <div class="col-sm-3">
                        <img style="width: 100px; height: 150px; position: fixed; margin-right: 10%; padding-top: 3%;" src="<?php echo base_url('application/views/icon/varian1.png') ;?>">
                    </div>
                    <div class="col-sm-9">
                        <h1 style="text-align: center; font-size: 30px;">HOTEL TELKOM BANDUNG</h1>
                        <h2 style="text-align: center; font-size: 25px;">Jalan. Telekomunikasi No. 1 Bandung</h2>
                        <h3 style="text-align: center; font-size: 25px;">Telepon (022) 532186 Fax. 022532186 </h3>
                    </div>
                </div>
                <h4 style="margin: 5%; text-align: center;">Bukti Pembayaran Hotel Telkom</h4>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="namaLengkap">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='nama' id="namaLengkap" value="<?php echo $data[0]->nama ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="nik" >NIK</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='nik' id="NIK" value="<?php echo $data[0]->nik ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="noKamar" style="margin-right: 20px; ">No Kamar</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='kamar' id="kamar" value="<?php echo $data[0]->no_kamar ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="fasilitas" style="margin-right: 43px;">Fasilitas</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='fasilitas' id="fasilitas" value="<?php echo $data[0]->id_fasilitas ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="fasilitas" style="margin-right: 43px;">Tanggal Masuk</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='tanggalmasuk' id="tanggalmasuk" placeholder="<?php echo $data[0]->tanggal_checkin ?>" readonly>
                    </div>

                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="fasilitas" style="margin-right: 43px;">Tanggal Keluar</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='tanggalkeluar' id="tanggalkeluar" placeholder="<?php echo $data[0]->tanggal_checkout ?>" readonly>
                    </div>

                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="lama menginap" style="margin-right: 43px;">Lama Menginap</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='hari' id="hari" value="<?php echo $this->CheckOutModel->gethari2($data[0]->tanggal_checkout,$data[0]->tanggal_checkin); ?>" readonly>
                    </div>

                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label class='labels' for="biaya" style="margin-right: 43px;">Total Biaya</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='biaya' id="biaya" placeholder="Total biaya" readonly>
                    </div>
                </div>
                <div class="row" style="margin-top: 3%;">
                    <div class="col-sm-4">
                        <label class='labels' for="biaya" style="margin-right: 43px;">Status</label>
                    </div>
                    <div class="col-sm-8">
                        <p> <b>LUNAS</b></p>
                    </div>
                </div>
                <div class="row" style="">
                    <div class="col-sm-8">

                    </div>
                    <div class="col-sm-4" style="text-align: center;">
                        <p> bandung - tanggal hari ini 2019</p>
                        <p>mengetahui</p>
                        <p style="margin-top: 28%;">Petugas Hotel</p>
                    </div>
                </div>
        </div>

        </div>

        </div>
        </form>
            <? else: redirect('Forbidden') ?>
            <?php endif ?>
                

        </div>
    </header>
    <script type="text/javascript">
     window.print()
    </script>
</body>


</html>