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
    <div class="col-lg-6">
      <img src="/img/merahcorak.jpeg" alt="workspace" class="img-fluid">
    </div>
    <div class="col-lg-5">
      <h3>Explore <span>Modern</span> <span>Elegant</span> Design </h3>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, in.</p>
      <a href="" class="btn btn-primary tombol">Gallery</a>
    </div>
  </div>
  <!-- end working space -->

  <!-- testimoni -->
  <section class="testimonial">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <h5> "Kualitas barang bagus, tidak mudah kusut, tegak, sangat menyenangkan, penjual ramah."</h5>
      </div>
    </div>

    <div class="row justify-content-center">
      <div class="col-lg-6 justify-content-center d-flex">
        <figure class="figure">
          <img src="/img/testi/testi2.jpg" class="figure-img  rounded-circle" alt="Testimoni 1">
          <figcaption class="figure-caption">
            <h5>Riri</h5>
            <p>Hard Worker</p>
          </figcaption>
        </figure>
        <figure class="figure">
          <img src="/img/testi/testi3.jpg" class="figure-img  rounded-circle utama" alt="Testimoni 1">
          <figcaption class="figure-caption">
            <h5>Riri</h5>
            <p>Hard Worker</p>
          </figcaption>
        </figure>
        <figure class="figure">
          <img src="/img/testi/testi2.jpg" class="figure-img  rounded-circle" alt="Testimoni 1">
          <figcaption class="figure-caption">
            <h5>Riri</h5>
            <p>Hard Worker</p>
          </figcaption>
        </figure>
      </div>
    </div>
  </section>
  <!-- akhir testimoni  -->
</div>

<?= $this->endSection(); ?>