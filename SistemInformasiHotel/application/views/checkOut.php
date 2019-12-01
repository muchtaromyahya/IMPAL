<!DOCTYPE html>
<html lang="en">

<head>
    <title>Check Out</title>
</head>
<style>
    /* .searchbar{
    margin-bottom: auto;
    margin-top: auto;
    height: 60px;
    background-color: white;
    border-radius: 30px;
    padding: 10px;
    }

    .search_input{
    color:black;
    border: 0;
    outline: 0;
    background: none;
    width: 0;
    caret-color:transparent;
    line-height: 40px;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_input{
    padding: 2 10px;
    width: 450px;
    caret-color:red;
    transition: width 0.4s linear;
    }

    .searchbar:hover > .search_icon{
    background: white;
    color: #e74c3c;
    } */
    .title {
        text-align: center;
        color: white;
        font-size: 40px;
        margin-top: 10%;
    }

    .datatable {
        background-color: white;
        /* width: 80%;
        height: 100%; */
        margin-left: 10%;
        border-radius: 19px;
        border-color: black;
        border-style: solid;
        padding:    5%;
    }
</style>

<body background="<?php echo base_url('application\views\assets\home1.jpeg'); ?>">
    <div class="container">
        <!-- <form style="margin-top: 10%;">      
                <div>
                    <p>Masukan Nama Penginap</p>
                </div>
                <div class="d-flex justify-content-center h-100">
                        <div class="searchbar">
                            <input class="search_input" type="text" name="" placeholder="Search...">
                            <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
            </form> -->
        <p class='title'> Nama Penginap</p>
        <div class="datatable">
            <table id="table_id" class="display" style="">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>NIK</th>
                        <th>No Kamar</th>
                        <th>aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $data = $this->CheckInModel->getdatacheckin();
                    $no = 1;
                    foreach ($data->result() as $row) :
                        ?>
                        <tr>
                            <td> <?php echo $no++; ?></td>
                            <td><?php echo $row->nama; ?> </td>
                            <td><?php echo $row->nik; ?> </td>
                            <td><?php echo $row->no_kamar; ?> </td>
                            <td>
                                <form method="POST" action="<?php echo base_url('CheckOut/getDetail/');
                                                                echo $row->id ?>"><button type="submit" class="btn btn-primary">Detail</button> </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
        $('#example').DataTable({
            responsive: true
        });
    </script>
</body>

</html>