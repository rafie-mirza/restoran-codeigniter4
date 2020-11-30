<?= $this->extend('template/front') ?>

<?= $this->section('content') ?>

<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Check Out</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Reservation -->
	<div class="reservation-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<p>Bayar disini</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12 col-sm-12 col-xs-12">
					<div class="contact-block">
						<form id="contactForm">
							<div class="row">
								<div class="col-md-6">
									<h3></h3>
									<div class="form-group">
											<input type="text" class="form-control" disabled id="name" name="name" placeholder="<?= session()->get('namapelanggan')?>" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>     
									<div class="form-group">
											<input type="text" class="form-control" disabled id="name" name="name" placeholder="<?= session()->get('alamatpelanggan')?>" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>     
								
								</div>
								<div class="col-md-6">
									<h3></h3>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" class="form-control" id="name" disabled name="name" placeholder="<?= session()->get('telppelanggan')?>" required data-error="Please enter your name">
											<div class="help-block with-errors"></div>
										</div>                                 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="<?= session()->get('emailpelanggan')?>" id="email" class="form-control" name="email" required disabled data-error="Please enter your email">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
									<div class="col-md-12">
										<div class="form-group">
											<input type="text" placeholder="Total : Rp. <?= number_format($total, 0, ',', '.')  ?>" id="phone" disabled class="form-control" name="phone" required data-error="Please enter your Numbar">
											<div class="help-block with-errors"></div>
										</div> 
									</div>
								</div>
								<div class="col-md-12">
									<div class=" text-center">
									<a href="<?= base_url('bayar')?>" class="btn btn-warning">Check Out </a>
										<div id="msgSubmit" class="h3 text-center hidden"></div> 
										<div class="clearfix"></div> 
									</div>
								</div>
							</div>            
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Reservation -->


<?= $this->endSection() ?>





