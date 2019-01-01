<!-- Start Header -->
<header id="home" class="header-container">
	<div class="container-fluid header-content">
		<span class="trapeze-bg"></span>
		<div class="container screen-container">
			<div class="row">
				<div class="col-md-12 title-center-content">
					<div class="col-md-6 title-text">
						<h1>
							<?=$data->title_first;?> <span class="text-notice-line"><?=$data->title_highlight;?></span> <?=$data->title_last;?>
						</h1>
						<p>
							<?=$data->description;?>
						</p>
						<a href="<?=$data->button_link;?>" class="button hero-button smooth" title="<?=$data->button_text;?>"><?=$data->button_text;?></a>
					</div>
					<div class="col-md-6 title-product">
						<span>Product</span>
						<img src="<?=base_url()?>assets/section/<?=$data->image?>" alt="product">
					</div>
				</div>
				<nav class="scroll-link">
					<a href="#about" class="smooth" title="Scroll">Scroll</a>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- End Header -->