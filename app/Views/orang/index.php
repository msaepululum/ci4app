<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
  <div class="row">
    <div class="col-6">
      <h1>Daftar Orang</h1>
      <form action="">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Masukan Keyword" name="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <!-- <a href="/Komik/create" class="btn btn-primary mt-3">Tambah Orang</a> -->

      <!-- <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert"><?= session()->getflashdata('pesan'); ?></div>
      <?php endif; ?> -->
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Alamat</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php $i = 1 + (6 * ($currentPage - 1)); ?>
          <?php foreach ($orang as $o) : ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $o['nama']; ?></td>
              <td><?= $o["alamat"]; ?></td>
              <td><a class=" btn btn-success" href="/orang/<?= $o['id']; ?>">Detail</a></td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
      <?= $pager->links('orang', 'orang_pagination'); ?>
    </div>
  </div>
</div>


<?= $this->endSection(); ?>