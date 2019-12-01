<html>
<style>
    #box {
        width: 100%;
        height: 80%;
        border-radius: 40px;
        border-style: solid;
        border-color: white;
        margin-top: 20%;
    }

    h1 {
        color: white;
        text-align: center;
        margin-top: 4%;
    }
</style>

<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <header class="container">
        <div id="box">
            <?php if ($check): ?>
            <h1>Detail Pelanggan</h1>
            <form style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom: 3%;" method="POST" action="<?php echo base_url('CheckIn/ambilkamar') ?>">

                <div class="row">
                <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">Nama Lengkap  : <?php echo $data[0]->nama ?></label>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">NIK           : <?php echo $data[0]->nik ?></label>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">No Kamar      : <?php echo $data[0]->no_kamar ?></label>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">Fasilitas     : <?php echo $data[0]->id_fasilitas ?></label>
                    </div>
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">Tanggal Masuk : <?php echo $data[0]->tanggal ?></label>
                    </div>
                    <div class="col-sm-8">
                    </div>
                </div>
            </form>

            <?php endif; ?>
        </div>
    </header>
</body>


</html>