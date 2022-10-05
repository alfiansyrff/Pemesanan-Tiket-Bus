  <!-- Header -->
  <?php
    include "partials/header.php";
  ?>
  <!-- End of Header -->
  
  <body>
    <!-- Navbar -->
    <?php
      include "partials/navbar.php";
    ?>

    <!-- End of navbar -->

    <!-- Cover -->
    <section class="py-5 text-center text-white container-fluid bg-bis">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <div class="h1 pb-2 mb-4 border-bottom fw-bold">
            Muda Jaya Online Ticketing
          </div>
          <p class="lead text-white">Memesan tiket tidak perlu antri, semakin mudah dengan hadirnya online ticketing. Reservasi Online Ticketing PO Muda Jaya. Sebagai bentuk peningkatan kualitas pelayanan ticketing yang selaras dengan kemajuan teknologi saat ini, kami hadirkan online ticketing kepada seluruh pelanggan setia kami. Dengan Online Ticketing, reservasi tiket semakin mudah, cepat dan dapat dilakukan kapanpun dan dimanapun.</p>
          <p>
            <a href="pesanTiket.php" class="btn btn-primary my-2">Pesan Sekarang</a>
          </p>
        </div>
      </div>
    </section>

    <!-- End of cover -->
    
    <!-- Modal Pop-Up -->

    <!-- Bus Ekonomi -->
    <div class="modal fade" id="data-ekonomi" tabindex="-1" aria-labelledby="data-ekonomi-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="data-ekonomi-label">Rincian Fasilitas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-6">
                        <img src="./Assets/Image/ekofas.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md">
                      <ul class="list-group">
                          <li class="list-group-item"><h4>EKONOMI</h4></li>
                          <li class="list-group-item"><strong>Tahun: </strong>2000</li>
                          <li class="list-group-item"><strong>Jumlah Kursi: </strong>55</li>
                          <li class="list-group-item"><strong>Kamar Mandi:</strong>Tidak</li>
                          <li class="list-group-item"><strong>AC: </strong><br>Tidak</li>
                          <li class="list-group-item"><strong>Fasilitas lain: </strong><br>-</li>
                          <li class="list-group-item"><strong>Harga Tiket: </strong><br>Rp.10.000</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>    

    <!-- Bus Bisnis -->
    <div class="modal fade" id="data-bisnis" tabindex="-1" aria-labelledby="data-bisnis-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="data-bisnis-label">Rincian Fasilitas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-6">
                        <img src="./Assets/Image/fasbis.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md">
                      <ul class="list-group">
                          <li class="list-group-item"><h4>BISNIS</h4></li>
                          <li class="list-group-item"><strong>Tahun: </strong>2015</li>
                          <li class="list-group-item"><strong>Jumlah Kursi: </strong>45</li>
                          <li class="list-group-item"><strong>Kamar Mandi:</strong>Ya</li>
                          <li class="list-group-item"><strong>AC: </strong><br>Ya</li>
                          <li class="list-group-item"><strong>Fasilitas lain: </strong><br>Musik, LCD TV, bantal, Free Air Mineral, Layanan Makanan</li>
                          <li class="list-group-item"><strong>Harga Tiket: </strong><br>Rp.30.000</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>    

    <!-- Bus Eksekutif -->

    <div class="modal fade" id="data-eksekutif" tabindex="-1" aria-labelledby="data-eksekutif-label" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="data-eksekutif-label">Rincian Fasilitas</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="row">
                    <div class="col-md-6">
                        <img src="./Assets/Image/faseks.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md">
                      <ul class="list-group">
                          <li class="list-group-item"><h4>EKSEKUTIF</h4></li>
                          <li class="list-group-item"><strong>Tahun: </strong>2018</li>
                          <li class="list-group-item"><strong>Jumlah Kursi: </strong>36</li>
                          <li class="list-group-item"><strong>Kamar Mandi:</strong>Ya</li>
                          <li class="list-group-item"><strong>AC: </strong><br>Ya</li>
                          <li class="list-group-item"><strong>Fasilitas lain: </strong><br>Musik, LCD TV, Selimut, Bantal, Free Air Mineral, Layanan Makanan</li>
                          <li class="list-group-item"><strong>Harga Tiket: </strong><br>Rp.50.000</li>
                        </ul>
                    </div>
                </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>    
    <!-- End of Modal Pop-Up -->

    <!-- Card Kelas Bus -->
    <div class="container-md px-5 my-5 card-container">
      <div class="row mx-auto">
        <div class="col-md-4 my-3">
          <!-- Bus Ekonomi -->
          <div class="card h-100" style="width: 18rem;">
            <img src="./Assets/Image/eko1.jpg" class="card-img-top my-3" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kelas Ekonomi</h5>
              <p class="card-text">Bus Ekonomi Sumber Kencono</p>
              <a href="#" class="btn btn-primary d-block mx-auto" data-bs-toggle="modal" data-bs-target="#data-ekonomi">Detail</a>
            </div>
          </div>
        </div>
        <!-- Bus Bisnis -->
        <div class="col-md-4 my-3">
          <div class="card h-100" style="width: 18rem;">
            <img src="./Assets/Image/2.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kelas Bisnis</h5>
              <p class="card-text">Bus Bisnis Handoyo</p>
              <a href="#" class="btn btn-primary d-block mx-auto" data-bs-toggle="modal" data-bs-target="#data-bisnis">Detail</a>
            </div>
          </div>
        </div>
        <!-- Bus Eksekutif -->
        <div class="col-md-4 my-3">
          <div class="card" style="width: 18rem;">
            <img src="./Assets/Image/3.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Kelas Eksekutif</h5>
              <p class="card-text">Bus Eksekutif Rosalia Indah</p>
              <a href="#" class="btn btn-primary d-block mx-auto" data-bs-toggle="modal" data-bs-target="#data-eksekutif">Detail</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- End of cards -->
    <?php
      include "partials/footer.php";
    ?>
    <!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="./Assets/JS/kelasArmada.js"></script>
  </body>
</html>
