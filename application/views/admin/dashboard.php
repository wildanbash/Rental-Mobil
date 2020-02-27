      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-car"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Mobil</h4>
                  </div>
                  <div class="card-body">
                  <?php $query = $this->db->query('select*from mobil');
								echo $query->num_rows($query)?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total user</h4>
                  </div>
                  <div class="card-body">
                  <?php $query = $this->db->query('select*from user');
								echo $query->num_rows($query)?>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                  <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Total Transaksi</h4>
                  </div>
                  <div class="card-body">
                  <?php $query = $this->db->query('select*from transaksi');
								echo $query->num_rows($query)?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
