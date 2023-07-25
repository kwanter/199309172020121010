<!DOCTYPE html>
<html>
 
<head>
    <title>Visualisasi Data Rekrutmen Tim Development MA RI</title>
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <!-- Datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            font-family: 'Oswald', sans-serif;
            font-weight: 300;
        }
    </style>
</head>
 
<body>
    <div class="container">
        <div class="row mt-4">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        Visualisasi Data Rekrutment Tim Development MA RI
                    </div>
                    <div class="card-body">
                        <div class="responsive">
                            <table id="list_data" class="table display row-border table-striped compact" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 30px;">No</th>
                                        <th>Nama Pendaftar</th>
                                        <th>NIP</th>
                                        <th>Satuan Kerja</th>
                                        <th>Posisi yang Dipilih</th>
                                        <th>Bahasa Pemograman yang Dikuasai</th>
                                        <th>Framework Pemograman yang Dikuasai</th>
                                        <th>Database yang Dikuasai</th>
                                        <th>Tools yang Dikuasai</th>
                                        <th>Pernah Membuat Mobile Apps</th>
                                        <th>Nilai T1</th>
                                        <th>Nilai T2</th>
                                        <th>Nilai T3</th>
                                        <th>File</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    foreach ($data_rekrutment as $dt) { ?>
                                        <tr>
                                            <td class="text-center"><?php echo $no; ?></td>
                                            <td><?php echo $dt['nama']; ?></td>
                                            <td><?php echo $dt['nip']; ?></td>
                                            <td><?php echo $dt['satuan_kerja']; ?></td>
                                            <td><?php echo $dt['posisi_yang_dipilih']; ?></td>
                                            <td><?php echo $dt['bahasa_pemrograman_yang_dikuasai']; ?></td>
                                            <td><?php echo isset($dt['framework_bahasa_pemrograman_yang_dikuasai']) ? $dt['framework_bahasa_pemrograman_yang_dikuasai'] : 'Tidak Ada'; ?></td>
                                            <td><?php echo $dt['database_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['tools_yang_dikuasai']; ?></td>
                                            <td><?php echo $dt['pernah_membuat_mobile_apps']; ?></td>
                                            <td><?php foreach($data_atribut as $da){ 
                                                    if($da['id_pendaftar'] == $no){
                                                        if(isset($da['jenis_attr']) && $da['jenis_attr'] == 'nilai_t1'){ 
                                                            echo $da['value'];
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><?php foreach($data_atribut as $da){ 
                                                    if($da['id_pendaftar'] == $no){
                                                        if(isset($da['jenis_attr']) && $da['jenis_attr'] == 'nilai_t2'){ 
                                                            echo $da['value'];
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><?php foreach($data_atribut as $da){ 
                                                    if($da['id_pendaftar'] == $no){
                                                        if(isset($da['jenis_attr']) && $da['jenis_attr'] == 'nilai_t3'){ 
                                                            echo $da['value'];
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td>
                                            <td><?php foreach($data_atribut as $da){ 
                                                    if($da['id_pendaftar'] == $no){
                                                        if(isset($da['jenis_attr']) && $da['jenis_attr'] == 'url_file'){ 
                                                            echo "<a href='".$da['value']."'class='btn'>Download</a>";
                                                        }
                                                    }
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    <?php $no++;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#list_data').DataTable();
            });
        </script>
</body>
 
</html>