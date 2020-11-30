<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

                <div id="products-post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div id="product-heading">
                                <h2>Are You Hungry ?</h2>
                                <img src="asset/images/under-heading.png" alt="" >
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="filters col-md-12 col-xs-12">
                            <ul id="filters" class="clearfix">
                            <?php foreach ($kategori as $kat => $kat1) : ?>
                                <li><span class="filter" data-filter=".<?= $kat1['kategori'] ?>"><?= $kat1['kategori'] ?></span></li>
                            <?php endforeach ?>
                            </ul>
                        </div>
                    </div>
                    <div class="row" id="Container">
                    <?php foreach ($kategori as $key => $value) : ?>
                        <?php foreach ($menu as $key => $data) : ?>
					<?php if ($data['idkategori'] === $value['idkategori']) { ?>  
                        <div class="col-md-3 col-sm-6 mix portfolio-item <?= $value['kategori'] ?>">
                             
                            <div class="portfolio-wrapper">                
                                <div class="portfolio-thumb">
                                    <img src="<?= base_url('/uploud/' . $data['gambar'] . '') ?>" style="height: 250px; width:265x;" alt="" />
                                    <div class="hover">
                                        <div class="hover-iner">
                                            <a class="fancybox" href="<?= base_url('tambah-ke-keranjang/' . $data['idmenu']) ?>" ><img src="asset/images/open-icon.png" alt="" /></a>
                                            <span><?= $data['menu'] ?></span>
                                        </div>
                                    </div>
                                </div>  
                                <div class="label-text">
                                    <h3><?= $data['menu'] ?></h3>
                                    <p>Rp. <?= $data['harga'] ?></p>
                                </div>
                            </div>        
                        </div>
                        <?php } ?>
				<?php endforeach ?>  
                    <?php endforeach ?>
                    </div>     
                </div>
            </div>


<?= $this->endsection() ?>