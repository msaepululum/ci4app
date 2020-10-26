<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h1> Contact </h1>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li>
                        <?= $a['tipe']; ?>
                    </li>
                    <li>
                        <?= $a['tipe']; ?>
                    </li>
                </ul>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>