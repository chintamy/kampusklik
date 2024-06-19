<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="library/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link href="library/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
        <link href="library/assets/styles.css" rel="stylesheet" media="screen">
        <script src="library/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
    <form action="" method="POST">
        NPM:
        <input type="text" name="npm" value="">
        <br>
        Nilai: <input type="text" name="nilai" value="">
        <br>
        Ulangi: <input type="text" name="ulangi" value="">
        <br>
        Gender: <input type="radio" name="gender" value=""
        <button type="submit" name="proses_data">PROSES DATA</button>
    </form>

    <div class="span9" id="content">
                      <!-- morris stacked chart -->
                    <div class="row-fluid">
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Form Example</div>
                            </div>
                            <div class="block-content collapse in">
                                <div class="span12">
                                    
                                     <form class="form-horizontal">
                                      <fieldset>
                                        <legend>Form Horizontal</legend>

                                        <div class="control-group">
                                          <label class="control-label" for="v">NPM MHS</label>
                                          <div class="controls">
                                            <input class="input-xlarge focused" id="NPM" value="">
                                            <input type="text" value="">
                                          </div>
                                        </div>

                                        <div class="control-group">
                                            <label class="control-label" for="NPM"> Nilai Mahasiswa</label>
                                            <div class="control">
                                                <input type="text" class="input-xlarge focused" id="NPM" value="">
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <label for="rad" class="control-label">Jenis Kelamin:</label><br>
                                            <input type="radio" id="rad" name="gender" value="Laki-laki">Laki-laki
                                            <input type="radio" id="rad" name="gender" value="Perempuan">Perempuan
                                          <div>

                                        <div class="form-actions">
                                          <button type="submit" class="btn btn-primary">Proses</button>
                                          <button type="reset" class="btn">Cancel</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row-fluid">
                    <!-- block -->
                    <div class="block">
                        <div class="navbar navbar-inner block-header">
                            <div class="muted pull-left">Data Mahasiswa</div>
                        </div>
                        <div class="block-content collapse in">
                            <div class="span12">
                                  <table class="table">
                                  <thead>
                                    <tr>
                                      <th>NPM Mahasiswa</th>
                                      <th>Nama Mahasiswa</th>
                                      <th>Prodi Mahasiswa</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>

                                  <?php
                                    while($data = mysqli_fetch_assoc($proses)) {
                                  ?>

                                    <tr>
                                      <td><?php echo $data['id'] ?></td>
                                      <td><?php echo $data['nama_mhs'] ?></td>
                                      <td><?php echo $data['prodi_mhs'] ?></td>
                                      <td> 
                                        <a href="minggu12.php?id=<?php echo $data['id'] ?>"> Edit </a> | 
                                        <a href="hapus_data.php?id=<?php echo $data['id'] ?>"> Hapus</td></a>
                                        
                                    </tr>
                                    <?php
                                        }
                                    ?>
                                
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- /block -->
                </div>
                
    </body>
</html>