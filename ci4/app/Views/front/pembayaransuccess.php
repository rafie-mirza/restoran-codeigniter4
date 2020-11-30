<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div style="padding:200px 0; text-align:center;">
    <div class="container" class="text-center">
        <img src="<?= base_url('asset/images/ceklis.png')?>"  alt="">
        <h5>Segera bayar belanjaan anda dikasir</h5>
        <a href="<?= base_url()?>" class='btn btn-warning'>Home</a>
    </div>
</div>


<?= $this->endsection() ?>