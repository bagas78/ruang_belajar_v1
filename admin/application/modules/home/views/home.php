<?php 
  $siswa = $this->db->get("t_siswa")->num_rows();
  $materi = $this->db->get("t_materi")->num_rows();
  $soal = $this->db->get("t_soal")->num_rows();
  $admin = $this->db->get("t_admin_user")->num_rows();
?> 
<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Dashboard</h2>
  </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-3 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-violet"><i class="icon-user"></i></div>
          <div class="title"><span>Jumlah<br>Siswa</span>
            <div class="progress">
              <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
            </div>
          </div>
          <div class="number"><strong><?php echo $siswa ?></strong></div>
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-3 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-red"><i class="icon-padnote"></i></div>
          <div class="title"><span>Jumlah<br>Materi</span>
            <div class="progress">
              <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
            </div>
          </div>
          <div class="number"><strong><?php echo $materi ?></strong></div>
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-3 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-green"><i class="icon-bill"></i></div>
          <div class="title"><span>Jumlah<br>Soal</span>
            <div class="progress">
              <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
            </div>
          </div>
          <div class="number"><strong><?php echo $soal ?></strong></div>
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-3 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-orange"><i class="icon-check"></i></div>
          <div class="title"><span>Jumlah<br>Admin</span>
            <div class="progress">
              <div role="progressbar" style="width: 100%; height: 4px;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
            </div>
          </div>
          <div class="number"><strong><?php echo $admin ?></strong></div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dashboard Header Section    -->
<section class="dashboard-header">
  <div class="container-fluid">
    <div class="row">
     
      <!-- Line Chart            -->
      <div class="chart col-md-12 col-12">
        <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
          <canvas id="lineCahrt"></canvas>
        </div>
      </div>
      
    </div>
  </div>
</section>