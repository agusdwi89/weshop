<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<h4 class="page-title">Data Shipping</h4>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-body table-responsive">
						<h4 class="m-t-0 header-title">
							<b>Import Shipping</b>
							<a id="btn-save-order" href="<?=base_url('manage/master/shipping')?>" class="badge badge-info">show data shipping</a>
						</h4>
						<br>
						<p><i>*dont change data province / city, just change value each shipper vendors</i></p>
						<br><br>
						<?=form_open_multipart()?>	
							<center>
								<a href="<?=base_url('manage/master/shipping_csv')?>" class="btn btn-info waves-effect waves-light"> <i class="fa fa-download m-r-5"></i> <span>Download Format Shipping (csv)</span> </a>
								<br><br><br><br><hr>
								<div class="col-md-6 col-md-offset-3">
									<div class="form-group">
										<p>Upload Shipping (csv)</p>
										<input name="userfile" type="file" class="filestyle" data-buttonname="btn-secondary">
									</div>
								</div>
								<button type="submit" class="btn btn-purple waves-effect waves-light"> <span>Import Shipping Price</span> <i class="fa fa-upload m-l-5"></i> </button>
							</center>
						<?=form_close()?>
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>