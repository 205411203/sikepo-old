<?php $this->load->view("partial/header.php") ?>
<?php $this->load->view("partial/sidebar.php") ?>
<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
       
      </div>
      <div class="row my-3">
        <div class="col">
            <h5>Pencapaian Kinerja Tahun 2020</h5>
             <h6>Balai Karantina Pertanian Kelas II Yogyakarta</h6>
        </div>
      </div>
       <div class="row my-2">
        <div class="col-md-6 py-1">
          <div class="card">
            <div class="card-header">
              <h6>Frekuensi Sertifikasi Karantina</h6>
            </div>
            <div class="card-body">
              <canvas class="my-4 w-100" id="myCert" width="400" height="250"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6 py-1">
          <div class="card">
            <div class="card-header">
              <h6>Target dan Realisasi PNBP (dalam jutaan) </h6>
            </div>
          <div class="card-body">
            <canvas class="my-4 w-100" id="chart2" width="400" height="250"></canvas>
          </div>
        </div>
      </div>
       
      </div>
      <div class="row my-2">
        <div class="col-md-6 py-1">
          <div class="card">
            <div class="card-header">
              <h6>Target dan Realisasi (dalam %) </h6>
            </div>
            <div class="card-body">
              <canvas class="my-4 w-100" id="mixed-chart" width="400" height="250"></canvas>
            </div>
           
          </div>
        </div>
         <div class="col-md-6 py-1">
          <div class="card">
               <div class="card-header">
                <h6>Realisasi Anggaran (dalam jutaan) </h6>
              </div>
              <div class="card-body">
                <canvas class="my-4 w-100" id="myChart3" width="400" height="250"></canvas>
              </div>
          </div>
        </div>
    </div>
    
    <div class="row my-2 mb-2">
        <div class="col-md-6 py-1">
            <div class="embed-responsive embed-responsive-16by9">
  <iframe title="Profil Aplikasi IQI" class="embed-responsive-item" src="<?php echo base_url();?>assets/profil.mp4" allowfullscreen></iframe>
</div>
        </div>
        
    </div>
       <div class="row my-2 mb-2">
           <div class="col-md-6 py-1">
            <button type="button" class="btn btn-info mb-2" id="bgFetchButton">Download Video</button>
           </div>
           </div>
    </main>
  </div>

<?php $this->load->view("partial/footer.php") ?>
<script src="<?php echo base_url();?>assets/chart/Chart.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/chart/chartjs-plugin-datalabels.min.js"></script>
<script src="<?php echo base_url();?>assets/js/grafik.js"></script>
<script>
    bgFetchButton = document.querySelector('#bgFetchButton');

  bgFetchButton.addEventListener('click', async event => {
    try {
      const registration = await navigator.serviceWorker.ready;
      registration.backgroundFetch.fetch('my-fetch', ['assets/profil.mp4']);
    } catch (err) {
      console.error(err);
    }
  });
</script>
</body>
</html>