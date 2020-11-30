<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<?php if ($totalitem === 0) : ?>
    <div style="padding:200px 0;">
        <div class="alert alert-danger text-center" role="alert" style="margin: 30px;">
            Keranjang Kosong ,Silahkan Belanja Terlebih Dahulu <a href="<?= base_url('menu') ?>" class="alert-link">&nbsp; Menu</a>
        </div>
    </div>

<?php else : ?>

    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:50%">Menu</th>
                    <th style="width:10%">Harga</th>
                    <th style="width:8%">Jumlah</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cart as $key => $value) : ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-2 hidden-xs"><img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" alt="..." class="img-responsive" /></div>
                                <div class="col-sm-10">
                                    <h4 class="nomargin"><?= $value['name'] ?></h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price"><?= number_format($value['price'], 0, ',', '.')  ?></td>
                        <td data-th="Quantity" style="text-align:center;">
                            <a href="<?= base_url('/keranjang/minus/' . $value['qty'] . '/' . $value['rowid']) ?>" class="jmlh text-center"><i class="fa fa-minus"></i></a>
                            <input type="text" name="quantity[]" style="text-align:center;" class="input-number" disabled data-min="1" data-max="100" value="<?= $value['qty']; ?>">
                            <a href="<?= base_url('/keranjang/plus/' . $value['qty'] . '/' . $value['rowid']) ?>" class="text-center"><i class="fa fa-plus"></i></a>
                        </td>
                        <td data-th="Subtotal" class="text-center"><?= number_format($value['subtotal'], 0, ',', '.')  ?></td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm"> <a href="<?= base_url('/hapus/' . $value['rowid']) ?>" style="text-decoration: none; color:white;"><i class="fa fa-trash-o"></i></a></button>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
            <tfoot>
                <tr class="visible-xs">
                    <td class="text-center"><strong>Total <?= number_format($total, 0, ',', '.')  ?></strong></td>
                </tr>
                <tr>
                    <td><a href="<?= base_url('menu') ?>" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a></td>
                    <td colspan="2" class="hidden-xs"></td>
                    <td class="hidden-xs text-center"><strong>Total <?= number_format($total, 0, ',', '.')  ?></strong></td>

                    <?php if (!empty(session()->get('namapelanggan'))) { ?>
                        <td><a href="<?= base_url('checkout') ?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    <?php } else { ?>
                        <td><a href="<?= base_url('login') ?>" class="btn btn-success btn-block">Checkout <i class="fa fa-angle-right"></i></a></td>
                    <?php } ?>
                </tr>
            </tfoot>
        </table>
    </div>
<?php endif ?>


<script>
    function bowo() {
        alert("Harap Login Dahulu !");
    }
</script>
<?= $this->endSection() ?>