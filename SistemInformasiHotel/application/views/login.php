<!DOCTYPE html>
<html lang="en">
<head>
<title>Login</title>
</head>
<style>
p {
    font-size: 600%;
    color: beige;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    text-align: center;
}
#box{
    width: 100%;
    height: 100%;
    border-radius: 40px;
    border-style: solid;
    border-color: white;
    
}
h1{
    color: white;
    text-align: center;
    margin-top: 15%;
}

</style>
<body  background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
<?php 
        if ($this->session->flashdata('alert')){
            $this->load->view('errors/flashdataerror');
        }
    ?>
    <div class="container">
        <div style="margin-top:15%; " >
        </div>
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?php echo base_url('application\views\icon\varian1.png'); ?>"> 
                </div>
                <div class="col-sm-4"></div>
                <div class="col-sm-4">
                        <div id="box" >
                            <h1>Login</h1>
                            <form style="margin:10%;" method="POST" action="<?php echo base_url('Login/signin') ?>">
                                    <div class="form-group">
                                      <label for="exampleInputEmail1" style="color: white">Your Username</label>
                                      <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                                      <small id="emailHelp" class="form-text text-muted" style="color: thistle"> We'll never share your username with anyone else.</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="exampleInputPassword1" style="color: white">Password</label>
                                      <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary" style="margin-left: 40%; margin-top: 5%">Submit</button>
                                  </form>
                        </div>
                </div>

        </div>
    </div>
</body>
</html>