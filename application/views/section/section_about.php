<!-- Start About -->
<section id="about" class="about block">
	<div class="container">
		<div class="row">



			<?php if ($data->image_position == "right"): ?>
				<div class="col-md-6 about-content">
					<h2><?=$data->title;?></h2>
					<p><?=$data->description;?></p>
					
					<?php if ($data->button_text != ""): ?>
						<a href="<?=$data->button_link;?>" class="button hero-button smooth" title="<?=$data->button_text;?>"><?=$data->button_text;?></a>
						<div class="clear"></div>
						<br>
					<?php endif ?>
					<span><?=$data->jargon;?></span>

				</div>

				<div class="col-md-6 about-img">
					<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="<?=$data->title;?>">
				</div>
			<?php else: ?>
				<div class="col-md-6 about-img">
					<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="<?=$data->title;?>">
				</div>

				<div class="col-md-6 about-content">
					<h2><?=$data->title;?></h2>
					<p><?=$data->description;?></p>

					<?php if ($data->button_text != ""): ?>
						<a href="<?=$data->button_link;?>" class="button hero-button smooth" title="<?=$data->button_text;?>"><?=$data->button_text;?></a>
						<div class="clear"></div>
						<br>
					<?php endif ?>
					
					<span><?=$data->jargon;?></span>

				</div>
			<?php endif ?>

		</div>
	</div> <!-- .container -->
</section>
<!-- End About -->