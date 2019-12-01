<html>

<style>
    #box{
        width: 100%;
        height: 60%;
        border-radius: 40px;
        border-style: solid;
        border-color: white;
        margin-top: 10%;
        padding-left: 10%;
        padding-right:10%
    }

    h1 {
        color: white;
        text-align: center;
        margin-top: 4%;
    }
</style>

<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <header class="container">
        <div id="box" >
            <form>
            <?php if ($check): ?>
            <h1 style="margin-bottom: 5%;">Detail Penginap</h1>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="namaLengkap" style="color: white">Nama Lengkap</label>
                    </div>
                    <div class="col-sm-8" >
                        <input type="text"  class="form-control" name='nama' id="namaLengkap"  placeholder="<?php echo $data[0]->nama ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="nik" style="color: white">NIK</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='nik' id="NIK"  placeholder="<?php echo $data[0]->nik ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="noKamar" style="color: white; margin-right: 20px; ">No Kamar</label> 
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='kamar' id="kamar"  placeholder="<?php echo $data[0]->no_kamar ?>" readonly>
                    </div> 
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="fasilitas" style="color: white; margin-right: 43px;">Fasilitas</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='fasilitas' id="fasilitas"  placeholder="<?php echo $data[0]->id_fasilitas ?>" readonly>
                    </div>
                </div> <br>
                <div class="row">
                    <div class="col-sm-4">
                        <label for="fasilitas" style="color: white; margin-right: 43px;">Tanggal Masuk</label>
                    </div>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name='tanggalmasuk' id="tanggalmasuk"  placeholder="<?php echo $data[0]->tanggal ?>" readonly>
                    </div>
                    </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-top: 5%">Submit</button>
                    </div>
                </div>
                    
            </div>
            <?php endif; ?>
            </form>
        </div>
    </header>
</body>


</html>