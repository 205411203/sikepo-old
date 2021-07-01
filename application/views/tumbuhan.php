<?php $this->load->view("partial/header.php") ?>
<?php $this->load->view("partial/sidebar.php") ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">

  </div>
  <div class="row my-3">
    <div class="col">
      <h5>Pencapaian Kinerja Operasional Tahun 2020</h5>
      <h6>Balai Karantina Pertanian Kelas II Yogyakarta</h6>
    </div>
  </div>
  
<div class="row my-2">
    <div class="col-md-6 py-1">
      <div class="card">
        <div class="card-header">
          <h6>Kinerja Karantina Tumbuhan Ekspor-Impor</h6>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="chart" width="400" height="250"></canvas>
        </div>

      </div>
    </div>
       <div class="col-md-6 py-1">
      <div class="card">
        <div class="card-header">
          <h6>Kinerja Karantina Tumbuhan Antar Area </h6>
        </div>
        <div class="card-body">
          <canvas class="my-4 w-100" id="chart3" width="400" height="250"></canvas>
        </div>

      </div>
    </div>
  </div>
</main>
</div>
<script src="<?php echo base_url();?>assets/js/jquery-3.5.1.slim.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap4/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url();?>assets/chart/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chart/chartjs-plugin-datalabels.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chart/dist/xlsx.full.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>assets/chart/chartjs-plugin-datasource.min.js"></script>
<script>
  var chartColors = {
  red: 'rgb(255, 99, 132)',
  blue: 'rgb(54, 162, 235)'
};

var color = Chart.helpers.color;
var config = {
  type: 'line',
  data: {
    datasets: [{
      type: 'line',
      yAxisID: 'Ekspor',
      backgroundColor: color(chartColors.red).alpha(0.5).rgbString(),
      borderColor: chartColors.red
    }]
  },
  plugins: [ChartDataSource],
  options: {
    title: {
      display: true,
      text: 'Frekuensi Sertifikasi Karantina Tumbuhan'
    },
    scales: {
      yAxes: [{
        id: 'Ekspor'
            }]
    },
    plugins: {
      datasource: {
        type: 'sheet',
        url: '../assets/js/kt1.xlsx',
        rowMapping: 'dataset',
        datasetLabels: 'Sheet1!A2:A3',
        indexLabels: 'Sheet1!B1:K1',
        data: 'Sheet1!B2:K3'
      }
    }
  }
};

var config2 = {
  type: 'line',
  data: {
    datasets: [{
      type: 'line',
      yAxisID: 'Domas',
      backgroundColor: color(chartColors.blue).alpha(0.5).rgbString(),
      borderColor: chartColors.blue
    }]
  },
  plugins: [ChartDataSource],
  options: {
    title: {
      display: true,
      text: 'Frekuensi Sertifikasi Karantina Tumbuhan'
    },
    scales: {
      yAxes: [{
        id: 'Domas'
            }]
    },
    plugins: {
      datasource: {
        type: 'sheet',
        url: '../assets/js/kt1.xlsx',
        rowMapping: 'dataset',
        datasetLabels: 'Sheet1!A4:A5',
        indexLabels: 'Sheet1!B1:K1',
        data: 'Sheet1!B4:K5'
      }
    }
  }
};
var ctx4 = document.getElementById('chart').getContext('2d');
  var chart =new Chart(ctx4, config);
  var ctx3 = document.getElementById('chart3').getContext('2d');
  var chart3 =new Chart(ctx3, config2);
</script>
</body>
</html>
