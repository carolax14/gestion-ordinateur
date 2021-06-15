<?php require_once 'header.php'; ?>



<!-- Page Header-->
<header class="page-header">
  <div class="container-fluid">
    <h2 class="no-margin-bottom">Tableau de bord</h2>
  </div>
</header>
<!-- Dashboard Counts Section-->
<section class="dashboard-counts no-padding-bottom">
  <div class="container-fluid">
    <div class="row bg-white has-shadow">
      <!-- Item -->
      <div class="col-xl-4 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-violet"><i class="fas fa-user-alt"></i></div>
          <div class="title">
            <span>Nombre<br />Visiteurs</span>
            <div class="progress">
              <div role="progressbar" style="width: 25%; height: 4px" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
            </div>
          </div>
          <div class="number"><strong>25</strong></div>
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-4 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-red"><i class="fas fa-laptop"></i></div>
          <div class="title">
            <span>Nombre<br />Ordinateurs</span>
            <div class="progress">
              <div role="progressbar" style="width: 70%; height: 4px" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
            </div>
          </div>
          <div class="number"><strong>70</strong></div>
        </div>
      </div>
      <!-- Item -->
      <div class="col-xl-4 col-sm-6">
        <div class="item d-flex align-items-center">
          <div class="icon bg-green"><i class="far fa-address-book"></i></div>
          <div class="title">
            <span>Nombre<br />Réservations</span>
            <div class="progress">
              <div role="progressbar" style="width: 40%; height: 4px" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
            </div>
          </div>
          <div class="number"><strong>40</strong></div>
        </div>
      </div>
    </div>
  </div>
</section>




<?php require_once 'footer.php'; ?>