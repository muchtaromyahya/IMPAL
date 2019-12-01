<!DOCTYPE html>
<html lang="en">
<head>
<title>Check in</title>
</head>
<style>
#box{
    width: 100%;
    height: 60%;
    border-radius: 40px;
    border-style: solid;
    border-color: white;
    margin-top: 10%;
}
h1{
    color: white;
    text-align: center;
    margin-top: 4%;
}
</style>
<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
        <header class="container">
            <div id="box" >
                <h1>Data Penginap</h1>
                <form style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom: 3%;" method="POST" action="<?php echo base_url('CheckIn/ambilkamar') ?>">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="namaLengkap" style="color: white">Nama Lengkap</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" name='nama' id="namaLengkap"  placeholder="Nama Lengkap" oninvalid="this.setCustomValidity('Nama Lengkap Harus Diisi')" oninput="setCustomValidity('')" required>
                          </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="nik" style="color: white">NIK</label>
                            </div>
                            <div class="col-sm-8">
                               <input type="text" class="form-control" name='nik' id="NIK"  placeholder="NIK" oninvalid="this.setCustomValidity('NIK Harus Diisi')" oninput="setCustomValidity('')" required>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="noKamar" style="color: white; margin-right: 20px; ">Pilih Kamar</label> 
                            </div>
                            <div class="col-sm-8">
                              <select name='kamar' name="KAMAR" style="width: 100px; height: 40px;" >
                                <?php $data = $this->KamarModel->getallkamar(); 
                                foreach($data->result() as $row): ?>

                                <option value="<?php echo $row->no_kamar; ?>"><?php echo $row->no_kamar; ?></option>
                                <?php endforeach; ?>
                              </select>
                            </div> 
                        </div> <br>
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="fasilitas" style="color: white; margin-right: 43px;">Fasilitas</label>
                          </div>
                          <div class="col-sm-8">
                            <select name="fasilitas" style="width: 100px; height: 40px; text-align: center;" >
                              <option value="A1">A1</option>
                              <option value="A2">A2</option>
                              <option value="A3">A3</option>
                              <option value="A4">A4</option>
                              <option value="A5">A5</option>
                              <option value="B1">B1</option>
                              <option value="B2">B2</option>
                              <option value="B3">B3</option>
                              <option value="B4">B4</option>
                              <option value="B5">B5</option>
                              <option value="C1">C1</option>
                              <option value="C2">C2</option>
                              <option value="C3">C3</option>
                              <option value="C4">C4</option>
                              <option value="C5">C5</option>
                              <option value="D1">D1</option>
                              <option value="D2">D2</option>
                              <option value="D3">D3</option>
                              <option value="D4">D4</option>
                              <option value="D5">D5</option>
                            </select>
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-top: 5%">Submit</button>
                        </div>
                    
                  </form>
            </div>
        </header>
</body>
</html>