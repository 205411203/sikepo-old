<?php $this->load->view("partial/header.php") ?>
<?php $this->load->view("partial/sidebar.php") ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  </div>
  <div class="row my-3">
    <div class="col">
      <h5>Pencapaian Kinerja Pegawai Tahun 2020</h5>
      <h6>Balai Karantina Pertanian Kelas II Yogyakarta</h6>
    </div>
  </div>
  <div class="row my-2">
    <div class="col-md-6 py-1">
      <div class="card">
        <div class="card-header">
          <h6>Capaian Kinerja Pegawai </h6>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="myChart" width="400" height="250"></canvas>
        </div>

      </div>
    </div>
       <div class="col-md-6 py-1">
      <div class="card">
        <div class="card-header">
          <h6>Ketepatan Kehadiran </h6>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="myChart1" width="400" height="250"></canvas>
        </div>

      </div>
    </div>


</main>
</div>
<script src="<?php echo base_url();?>assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/chart/Chart.min.js"></script>
<script src="<?php echo base_url();?>assets/d3/d3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chart/chartjs-plugin-datalabels.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chart/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/chart/chartjs-plugin-datasource.min.js"></script>
<script src="<?php echo base_url();?>assets/js/pegawai.js"></script>
</body>
</html>
