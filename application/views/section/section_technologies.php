
<!-- Start Technologies -->
<section id="technologies" class="technologies block" style="background: url(<?=base_url()?>assets/section/<?=$data->image;?>) center no-repeat fixed !important;">
	<div class="overlay-tech"></div>
	<div class="container tech-container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<?
				$ds_items = $this->db->get_where('section_technologies_items',array('st_id'=>$data->id));
			?>

			<?php foreach ($ds_items->result() as $k ): ?>
				
				<!-- Start Technology 1 -->
				<div class="col-md-3 tech-block">
					<i class="<?=$k->icon;?>"></i> <!-- Icon -->
					<h3><?=$k->title;?></h3>
					<p><?=$k->description;?></p>
				</div>
				<!-- End Technology 1 -->

			<?php endforeach ?>

		</div>
	</div> <!-- .tech-container -->
</section>
<!-- End Technologies -->
