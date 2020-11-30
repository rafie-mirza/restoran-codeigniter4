<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset="utf-8">
    <title>Grill Responsive Web Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?= base_url('asset/css/cart.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/login.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/font-awesome.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/templatemo_style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/templatemo_misc.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/flexslider.css') ?>">
    <link rel="stylesheet" href="<?= base_url('asset/css/testimonails-slider.css') ?>">

    <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
</head>
<?php
        $jml_keranjang = 0;
        foreach ($cart as $key => $value) {
            $jml_keranjang = $jml_keranjang + $value['qty'];
        }
        ?>
<body>
    <header>
        <div id="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="home-account">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="cart-info">
                            <i class="fa fa-shopping-cart"></i>
                            (<a href="<?= base_url('keranjang')?>"><?= $jml_keranjang ?> items</a>) in your cart (<a href=""><?= number_format($total, 0, ',', '.')  ?></a>)
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div id="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="asset/images/logo.png" title="Grill Template" alt="Grill Website Template"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="main-menu">
                            <ul>
                                <li><a href="<?= base_url() ?>">Home</a></li>
                                <li><a href="<?= base_url('menu') ?>">Menu</a></li>
                                <?php if (!empty(session()->get('namapelanggan'))) : ?>
									<li><a href="<?= base_url('/history') ?>">History</a></li>
									<li><a><?= session()->get('namapelanggan') ?></a></li>
								<?php endif ?>
                                <?php if (!empty(session()->get('namapelanggan'))) { ?>
									<li><a href="<?= base_url('logout') ?>">Logout</a></li>
								<?php } else { ?>
									<li><a href="<?= base_url('login') ?>">Login</a></li>
								<?php } ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="search-box">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <?= $this->renderSection('content') ?>

    <footer>
        <div class="container ">
            <div class="top-footer">
                <div class="row">
                    <div class="col-md-9">
                        <div class="subscribe-form">
                            <span>&nbsp;</span>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="social-bottom">
                            <span>&nbsp;</span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="main-footer">
                <div class="row">
                    <div class="col-md-3">
                        <div class="about">
                            <h4 class="footer-title ">About Grill</h4>
                            <p> <span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque recusandae officia laborum ad sunt delectus, modi accusantium, esse nam, at saepe sapiente amet. Mollitia veniam esse excepturi doloribus. Similique, et.</span>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="shop-list">
                            <h4 class="footer-title">Shop Categories</h4>
                            <ul>
                            <?php foreach ($kategori as $kat => $kat1) : ?>
                                <li><a href="<?= base_url('menu')?>"><?= $kat1['kategori'] ?></a></li>
                                <?php endforeach ?>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="bottom-footer">
                <p>
                    <span>Presented by Raph
                </p>
            </div>

        </div>
    </footer>


    <script src="<?= base_url('asset/js/vendor/jquery-1.11.0.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/vendor/jquery.gmap3.min.js') ?>"></script>
    <script src="<?= base_url('asset/js/plugins.js') ?>"></script>
    <script src="<?= base_url('asset/js/main.js') ?>"></script>
    <script src="<?= base_url('asset/js/login.js') ?>"></script>
</body>

</html>