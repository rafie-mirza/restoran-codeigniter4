<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>
<div class="container">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:15%" class="text-center">Tanggal</th>
                <th style="width:10%"class="text-center">Gambar</th>
                <th style="width:10%"class="text-center">Nama</th>
                <th style="width:15%"class="text-center">Harga</th>
                <th style="width:10%"class="text-center">Jumlah</th>
                <th style="width:10%"class="text-center">Total</th>
            </tr>
        </thead>
        <tbody>

            <?php foreach ($orderdetail as $key => $value) : ?>
                <?php
                $time = strtotime($value['tglorder']);
                $myFormatForView = date("d-m-yy G:i", $time);
                ?>
                <tr>
                    <td data-th="Product" class="text-center">
                        <div class=hidden-xs"><?= $myFormatForView ?></div>
                    </td>
                    <td data-th="Product"class="text-center">
                        <div class="hidden-xs"><img src="<?= base_url('/uploud/' . $value['gambar'] . '') ?>" style="width: 100px; height:100px;" /></div>
                    </td>
                    <td data-th="Product"class="text-center">
                        <?= $value['menu'] ?>
                    </td>

                    <td data-th="Product"class="text-center"><?= number_format($value['harga'], 0, ',', '.')  ?></td>
                    <td data-th="Quantity"class="text-center">
                        <?= $value['jumlah']; ?>
                    </td>
                    <td data-th="Subtotal"class="text-center"><?php $total = $value['harga'] * $value['jumlah'] ?>
                        Rp.
                        <?= number_format($total, 0, ',', '.')  ?></td>
                    </td>

                </tr>
            <?php endforeach ?>
        </tbody>

    </table>
</div>

<?= $this->endSection() ?>