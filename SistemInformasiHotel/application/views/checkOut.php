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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>

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
    p{
        text-align: center;
        color: white;
        font-size: 40px;
        margin-top: 10%;
    }
    .datatable{
        background-color: white;
        width: 80%;
        height: 100%;
        margin-left: 10%;
        border-radius: 19px;
        border-color: black;
        border-style: solid;
        padding: 5%;
    }

</style>
<body background="assets/home1.jpeg">
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
            <p> Nama Penginap</p>
            <div class="datatable">
                    <table id="table_id" class="display" style="">
                        <thead>
                            <tr>
                                <th>Nama Lengkap</th>
                                <th>NIK</th>
                                <th>No Kamar</th>
                                <th>Lama Sewa</th>
                                <th>Fasilitas</th>
                                <th>Lama Sewa</th>
                                <th>Biaya Tambahan</th>
                                <th>Total Harga</th>
                                <th>aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>10</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>30</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>40</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>50</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>60</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>70</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>

                            </tr>
                            <tr>
                                <td>80</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>80</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>90</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>100</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            <tr>
                                <td>110</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>Row 1 Data 1</td>
                                <td>aksi</td>
                            </tr>
                            </tbody>
                        </table>
            </div>   
        </div>
    <script>
        $(document).ready( function () {
            $('#table_id').DataTable();
        } );
        $('#example').DataTable( {
            responsive: true
        } );
    </script>
</body>
</html>