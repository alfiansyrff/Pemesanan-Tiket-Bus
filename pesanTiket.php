<!-- Header -->
<?php
  include "partials/header.php";
?>
<!-- End of header -->

<body>
  <!-- Navbar -->
  <?php
    include "partials/navbar.php";
  ?>
  <!-- End of navbar -->

  <!-- Form Pemesanan -->
  <div class="container">
      <div class="row mx-auto">
        <div class="col-md-12">         
          <h3 class="page-header mt-3">
              <div align="center">Form Pemesanan</div>
          </h3>
          <br>
          <form class="form-horizontal mx-auto" action="" method="POST">
            <div class="form-group my-2">
                <div class="col-sm-6 mx-auto d-block">
                     Nama Pemesan <input type = "text" class="form-control" name="nama" placeholder="Nama Pemesan" required>
                </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      Nomor Identitas<input type="text" class="form-control" name="nik" placeholder="NIK Pemesan" required>
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      Nomor HP<input type="text" class="form-control" name="no_hp" placeholder="No. Hp" required>
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
    Kelas Penumpang<select class="form-control" id="kelas" name="kelas_penumpang">
                        <option> ---Pilih Kelas Penumpang--- </option>
                        <option value="ekonomi">Ekonomi</option>
                        <option value="bisnis">Bisnis</option>
                        <option value="eksekutif">Eksekutif</option>
                    </select>
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      Jadwal Berangkat<input type="date" name="tgl_berangkat" class="form-control input-md" id="datepicker" required />
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      Jumlah Penumpang bukan lansia (usia < 60) <input type="text" name="jml_bukan_lansia" class="form-control input-md" id="datepicker" placeholder="0" required />
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      Jumlah Penumpang lansia (usia 60 keatas) <input type="text" name="jml_lansia" class="form-control input-md" id="datepicker" placeholder="0" required />
                  </div>
            </div>
            <!-- Harga Tiket -->
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      <p>Harga Tiket</p>
                      <?php
                        echo "Rp.";
                        if (isset($_POST['kelas_penumpang']))
                        {
                            $kelas = $_POST['kelas_penumpang'];
                            if ($kelas == "ekonomi") {
                                $harga = 10000;
                                echo $harga;
                            } else if ($kelas == "bisnis") {
                                $harga = 30000;
                                echo $harga;
                            } else {
                                $harga = 50000;
                                echo $harga;
                            }
                        } else {
                            echo "-";
                        }
                      ?>
                  </div>
            </div>
            <!-- Total Bayar -->
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block">
                      <p>Total Bayar</p>
                      
                      <?php
                        echo "Rp.";
                        if (isset($_POST['jml_lansia']) || isset($_POST['jml_bukan_lansia'])) {
                          $jml_lansia = $_POST['jml_lansia'];
                          $jml_non_lansia = $_POST['jml_bukan_lansia'];
                          if ($jml_lansia > 0){
                            $new_harga = 0.9 * $harga;
                            $total_lansia = $new_harga * $jml_lansia;
                          } else {
                            $total_lansia = 0;
                          }
                          $total = $harga * $jml_non_lansia + $total_lansia;
                          echo $total;
                        } else {
                            echo "-";
                        }

                      ?>
                  </div>
            </div>
            <div class="form-group my-2">
                  <div class="col-sm-6 mx-auto d-block mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Saya dan/atau rombongan telah membaca, memahami, dan setuju berdasarkan syarat dan ketentuan yang telah ditetapkan.</label>
                    </div>
            </div>
            <div class="form-group my-2">
                <div class="col-sm-6 mx-auto d-flex justify-content-between">
                      <button type="submit" value="total" name="hitung-total" class="btn btn-primary mx-2">Hitung Total Bayar</button>
                      <button type="submit" value="pesan" name="proses" class="btn btn-primary mx-2">Pesan Tiket</button>
                      <button type="submit" value="cancel" id = "cancel-btn" name="cancel" class="btn btn-primary mx-2">Cancel</button>
                </div>
            </div>
          </form>

          <?php
            include "connections/db.php";

            if (isset($_POST['proses'])) { 

                $sql = "INSERT INTO tb_tiketbus (nama, nomor_id, no_hp, kelas_penumpang, jadwal_berangkat, jml_non_lansia, jml_lansia, total_bayar) VALUES ('$_POST[nama]', '$_POST[nik]', '$_POST[no_hp]', '$_POST[kelas_penumpang]', '$_POST[tgl_berangkat]','$_POST[jml_bukan_lansia]', '$_POST[jml_lansia]', '$total')";
                if (mysqli_query($conn, $sql)) {
                  
          ?>  
              <div class="container">
                <div class="row">
                  <div class="col-sm-6 mx-auto my-2">
                    <div class="alert alert-success text-center" role="alert">
                    Pemesanan Tiket Anda Berhasil!
                    </div>
                  </div>
                </div>      
              </div>
             

          <?php 
                } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
                mysqli_close($conn);
            } 
            
            
          ?>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <script src="./Assets/JS/resetForm.js"></script>
  </body>
</html>

