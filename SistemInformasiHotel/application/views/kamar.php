<!DOCTYPE html>
<html lang="en">
        <head>
            <title>Data Kamar</title>   
            </head>
    <style>
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
        padding: 5%;
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
        <p class='title'> Data Kamar</p>
        <div class="datatable">
            <table id="table_id" class="display" style="">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>No. Kamar</th>
                        <th>Status</th> <!-- berisi keterangan "booked " atau "aviablea"-->
                        <!-- <th>aksi</th> -->
                    </tr>
                </thead>
                <tbody>
                <?php $data = $this->KamarModel->getall(); 
                $no =1;
                                foreach($data->result() as $row): ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row->no_kamar ?></td>
                            <td><?php if ($row->terisi == '1') {
                                echo 'Terisi';
                            } else {
                                echo 'Kosong';
                            } ?></td>
                            <!-- <td>></td> -->
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