  <style>
.btn-default {
    background-color: #3232FF;
    color: #fff;
    width: 100px;
}
  </style>
  <!-- Page Content -->
  <div class="container">

      <div class="row">


          <!-- /.col-lg-3 -->

          <div class="col">

              <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                          <img height="550px" width="1100px"
                              src="<?= base_url('assets/upload/mobil/') . 'http___d254andzyoxz3f_cloudfront_net_mercedes-amg-c43-hero.jpg' ?>"
                              alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img height="550px" width="1100px"
                              src="<?= base_url('assets/upload/mobil/') . 'http___d254andzyoxz3f_cloudfront_net_mercedes-amg-c43-hero.jpg' ?>"
                              alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img height="550px" width="1100px"
                              src="<?= base_url('assets/upload/mobil/') . 'http___d254andzyoxz3f_cloudfront_net_mercedes-amg-c43-hero.jpg' ?>"
                              alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>

              <br>
              <br>
              <div class="row">
                  <div class="col-md-3">
                      <h3>Daftar Mobil</h3>
                      <hr style="height: 2px" width="250px" color="#0F0E20">
                  </div>
              </div>
              <br>


              <div class="row">

                  <?php foreach ($mobil as $mb) : ?>

                  <div class="col-lg-3 col-md-6 mb-4">
                      <div class="card" style="width: 250px">
                          <img class="card-img-top" height="170px"
                              src="<?= base_url('assets/upload/mobil/') . $mb->gambar ?>">
                          <div class="card-body">
                              <h4 class="card-title font-weight-bold">
                                  <?= $mb->merk ?>
                              </h4>
                              <h5 style="font-size: 18px"><?= indo_currency($mb->harga) ?> /hari</h5>
                          </div>
                          <div class="card-footer">
                              <div class="row">
                                  <div class="col-6">
                                      <?php

                      if ($mb->status == "0") {
                        echo "<span class = 'btn btn-danger' style='width: 100px;' disable>Disewa</span>";
                      } else {
                        echo anchor('customer/rental/tambah_rental/' . $mb->id_mobil, '<button class="btn btn-default">Rental</button>');
                      }

                      ?>
                                  </div>
                                  <div class="col-6">
                                      <a class="btn btn-secondary" style='width: 100px;'
                                          href="<?= base_url('customer/dashboard/detail_mobil/') . $mb->id_mobil ?>">Detail</a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>

                  <?php endforeach ?>

              </div>
              <!-- /.row -->
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

  </div>
  <!-- /.container -->