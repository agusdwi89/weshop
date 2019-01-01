<!-- Start Download -->
<section id="download" class="download block" style="background: url('<?=base_url()?>assets/section/<?=$data->image_bg;?>') center no-repeat;">
	<div class="overlay-download"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-6 download-content">
				<h2><?=$data->title1;?><span class="text-notice"><?=$data->title2;?></span> <?=$data->title3;?></h2>
				<p><?=$data->description;?></p>
				<ul>
					<li><a href="<?=$data->link_apple;?>" title="Download in App Store"><img src="<?=base_url()?>assets/section/<?=$data->image_apple;?>" alt="app_store"></a></li>
					<li><a href="<?=$data->link_android;?>"title="Download in Google Play"><img src="<?=base_url()?>assets/section/<?=$data->image_android;?>" alt="google_store"></a></li>
				</ul>
			</div>

			<div class="col-md-6 download-img">
				<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="Product">
			</div>

		</div>
	</div> <!-- .container -->
</section>