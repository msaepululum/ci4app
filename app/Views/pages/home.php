<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Get Hijab <span>Fashion</span><br>
      and <span>better</span> with Us</h1>
    <a href="" class="btn btn-primary tombol">Our Fashion</a>
  </div>
</div>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-10 info-panel">
      <div class="row">
        <div class="col-lg">
          <img src="/img/panel/comport.png" alt="employee" class="float-left">
          <h4>Comportable</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="/img/panel/24hours.png" alt="24 hours" class="float-left">
          <h4>24 Hours</h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="col-lg">
          <img src="/img/panel/safety.png" alt="safety" class="float-left">
          <h4>Safety And Secure </h4>
          <p>Lorem ipsum dolor sit amet.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- working space -->
  <div class="row workigspace">
    <div class="col">
      <img src="/img/workspace.jpg" alt="workspace" class="img-fluid">
    </div>
    <div class="col">
      <h4>You </h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, in.</p>
      <a href="" class="btn btn-primary tombol">Gallery</a>
    </div>
  </div>
  <!-- end working space -->
</div>

<?= $this->endSection(); ?>