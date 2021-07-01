<nav class="navbar navbar-light sticky-top bg-info flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3 text-light" href="<?php echo base_url();?>">si-KEPO</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
 
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="<?php echo base_url();?>">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Capaian Kinerja</span>
          
        </h6>
        <ul class="nav flex-column mb-2">

          <li class="nav-item">
            <a class="nav-link collapsed py-1" href="#indikator" data-toggle="collapse" data-target="#indikator"><span><i class="fa fa-fw fa-angle-down"></i>Indikator Kinerja </span></a>
            <div class="collapse" id="indikator" aria-expanded="false">
              <ul class="flex-column nav pl-4">
                <li class="nav-item">
                  <a class="nav-link p-1" href="<?php echo base_url();?>dashboard/indikator">
                    <i class="fa fa-fw fa-line-chart"></i>  Utama </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link p-1" href="<?php echo base_url();?>dashboard/tambahan" target="blank">
                     <i class="fa fa-fw fa-plus-square"></i>
                     Tambahan
                   </a>
                 </li>
               </ul>
             </div>
           </li>

           <li class="nav-item">
             <a class="nav-link" href="http://esakip.pertanian.go.id/" target="blank">
              <i class="fa fa-fw fa-calendar-minus-o"></i> e-SAKIP </a>
            </li>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Monitoring </span>

            </h6>
            <ul class="nav flex-column mb-2">

              <li class="nav-item">
                <a class="nav-link collapsed py-1" href="#Monitoring" data-toggle="collapse" data-target="#Monitoring"><span><i class="fa fa-fw fa-angle-down"></i>Anggaran </span></a>
                <div class="collapse" id="Monitoring" aria-expanded="false">
                  <ul class="flex-column nav pl-4">
                    <li class="nav-item">
                      <a class="nav-link p-1" href="https://spanint.kemenkeu.go.id/" target='blank'>
                        <i class="fa fa-fw fa-line-chart"></i>OM-SPAN</a>
                      </li>

                      <li class="nav-item">
                        <a class="nav-link p-1" href="http://monev.anggaran.kemenkeu.go.id/2020/" target="blank">
                         <i class="fa fa-fw fa-file-text-o"></i>
                         SMART
                       </a>
                     </li>

                     <li class="nav-item">
                      <a class="nav-link p-1" href="https://e-monev.bappenas.go.id/fe/" target="blank">
                       <i class="fa fa-fw fa-bar-chart-o"></i>
                       e-Monev
                     </a>
                   </li>
                   <li class="nav-item">
                    <a class="nav-link p-1" href="https://satudja.kemenkeu.go.id/login?q=0e8b2" target='blank'>
                      <i class="fa fa-fw fa-user-md"></i>
                      SatuDJA
                    </a>
                  </li>

                </ul>
              </div>
            </li>
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Kinerja Pegawai</span>
          
        </h6>
        <ul class="nav flex-column mb-2">
         
          <li class="nav-item">
            <a class="nav-link collapsed py-1" href="#pegawai" data-toggle="collapse" data-target="#pegawai"><span><i class="fa fa-fw  fa-angle-down"></i>Kinerja Pegawai </span></a>
            <div class="collapse" id="pegawai" aria-expanded="false">
              <ul class="flex-column nav pl-4">
                <li class="nav-item">
                  <a class="nav-link p-1" href="<?php echo base_url();?>dashboard/pegawai">
                    <i class="fa fa-fw  fa-angle-right"></i> Kinerja </a>
                  </li>

                
               </ul>
             </div>
           </li>
           
              <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Kinerja Operasional</span>
          
        </h6>
        <ul class="nav flex-column mb-2">
         
          <li class="nav-item">
            <a class="nav-link collapsed py-1" href="#operasional" data-toggle="collapse" data-target="#operasional"><span><i class="fa fa-fw  fa-angle-down"></i>Sertifikasi </span></a>
            <div class="collapse" id="operasional" aria-expanded="false">
              <ul class="flex-column nav pl-4">
                <li class="nav-item">
                  <a class="nav-link p-1" href="<?php echo base_url();?>dashboard/tumbuhan">
                    <i class="fa fa-fw  fa-angle-right"></i> Karantina Tumbuhan </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link p-1" href="<?php echo base_url();?>dashboard/hewan" target="blank">
                     <i class="fa fa-fw  fa-angle-right"></i>
                     Karantina Hewan 
                   </a>
                 </li>
               </ul>
             </div>
           </li>


          </ul>
        </div>
      </li>


    </ul>
  </div>
</nav>