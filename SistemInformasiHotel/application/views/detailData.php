<html>
<head> 
    <title>Detail Pelanggan </title>
</head>
<style>
    #box {
        width: 100%;
        height: 105%;
        border-radius: 40px;
        border-style: solid;
        border-color: white;
        margin-top: 10%;
        padding-left: 7%;
        padding-right: 7%;
        
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

            <?php if ($check) : ?>
                <form method="POST" action="<?php echo base_url('CheckOut/doCheckOut/');
                                                echo $data[0]->id ?>" onsubmit="return JSalert();">
                    <h1 style="margin-bottom: 5%;">Detail Penginap</h1>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="namaLengkap" style="color: white">Nama Lengkap</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name='nama' id="namaLengkap" value="<?php echo $data[0]->nama ?>" readonly>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="nik" style="color: white">NIK</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name='nik' id="NIK" value="<?php echo $data[0]->nik ?>" readonly>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="noKamar" style="color: white; margin-right: 20px; ">No Kamar</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name='kamar' id="kamar" value="<?php echo $data[0]->no_kamar ?>" readonly>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fasilitas" style="color: white; margin-right: 43px;">Fasilitas</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name='fasilitas' id="fasilitas" value="<?php echo $data[0]->id_fasilitas ?>" readonly>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="fasilitas" style="color: white; margin-right: 43px;">Tanggal Masuk</label>
                        </div>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name='tanggalmasuk' id="tanggalmasuk" placeholder="<?php echo $data[0]->tanggal ?>" readonly>
                        </div>

                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="lama menginap" style="color: white; margin-right: 43px;">Lama Menginap</label>
                        </div>
                        <div class="col-sm-2">
                            <input type="text" class="form-control" name='hari' id="hari" value="<?php echo $this->CheckOutModel->gethari($data[0]->tanggal); ?>" readonly>
                        </div>
                        <div class="col-sm-6">
                            <label for="hari" style="color: white; margin-right: 43px;">Hari</label>
                        </div>
                    </div> <br>
                    <div class="row">
                        <div class="col-sm-4">
                            <label for="biaya" style="color: white; margin-right: 43px;">Total Biaya</label>
                        </div>
                        <div class="col-sm-3">
                            <input type="text" class="form-control" name='biaya' id="biaya" placeholder="<?php echo "Rp.",number_format($this->CheckOutModel->getbiaya($data[0])) ?>" readonly>
                        </div>
                    </div>
                    <button type="button" style="margin-left: 40%; margin-top: 5%" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
          Check Out
        </button>
        <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Konfirmasi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Apakah data Checkout di atas sudah benar ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
        </div>

        </div>

        </div>
        </form>
    <?php endif; ?>

    </div>
    </header>
    <script type="text/javascript">
        function JSalert(){
	        swal({   title: "Your account will be deleted permanently!",   
            text: "Are you sure to proceed?",   
            type: "warning",   
            showCancelButton: true,   
            confirmButtonColor: "#DD6B55",   
            confirmButtonText: "Yes, Remove My Account!",   
            cancelButtonText: "No, I am not sure!",   
            closeOnConfirm: false,   
            closeOnCancel: false }, 
            function(isConfirm){   
                if (isConfirm) 
                {   
                    swal("Account Removed!", "Your account is removed permanently!", "success");   
                } 
                else {     
                    swal("Hurray", "Account is not removed!", "error");   
                } 
            });
        }
    </script>
</body>


</html>