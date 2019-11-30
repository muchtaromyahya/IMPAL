<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">   
    <title>Check in</title>
</head>
<style>
#box{
    width: 100%;
    height: 80%;
    border-radius: 40px;
    border-style: solid;
    border-color: white;
    margin-top: 20%;
}
h1{
    color: white;
    text-align: center;
    margin-top: 4%;
}
</style>
<body background="assets/home1.jpeg">
        <header class="container">
            <div id="box" >
                <h1>Data Penginap</h1>
                <form style="margin-top:10%; margin-left:10%; margin-right:10%; margin-bottom: 3%;">
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="namaLengkap" style="color: white">Nama Lengkap</label>
                          </div>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="namaLengkap"  placeholder="Nama Lengkap" oninvalid="this.setCustomValidity('Nama Lengkap Harus Diisi')" oninput="setCustomValidity('')" required>
                          </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="nik" style="color: white">NIK</label>
                            </div>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" id="NIK"  placeholder="NIK" oninvalid="this.setCustomValidity('NIK Harus Diisi')" oninput="setCustomValidity('')" required>
                            </div>
                        </div> <br>
                        <div class="row">
                            <div class="col-sm-4">
                              <label for="noKamar" style="color: white; margin-right: 20px; ">Pilih Kamar</label> 
                            </div>
                            <div class="col-sm-8">
                              <select name="KAMAR" style="width: 100px; height: 40px;" >
                                <option value="101">101</option>
                                <option value="102">102</option>
                                <option value="103">103</option>
                                <option value="104">104</option>
                                <option value="105">105</option>
                                <option value="201">201</option>
                                <option value="202">202</option>
                                <option value="203">203</option>
                                <option value="204">204</option>
                                <option value="205">205</option>
                                <option value="301">301</option>
                                <option value="302">302</option>
                                <option value="303">303</option>
                                <option value="304">304</option>
                                <option value="305">305</option>
                                <option value="401">401</option>
                                <option value="402">402</option>
                                <option value="403">403</option>
                                <option value="501">501</option>
                                <option value="502">502</option>
                              </select>
                            </div> 
                        </div> <br>
                        <div class="row">
                          <div class="col-sm-4">
                            <label for="fasilitas" style="color: white; margin-right: 43px;">Fasilitas</label>
                          </div>
                          <div class="col-sm-8">
                            <select name="KAMAR" style="width: 100px; height: 40px; text-align: center;" >
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