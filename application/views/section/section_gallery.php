<?
	$items = $this->db->get_where('section_gallery_items',array('sgal_id'=>$data->id));	
?>

<section id="gallery" class="gallery">
	<div class="container-fluid">
		<div class="container"> 
			<div class="row"> 
				<span class="trapeze-gallery-bg"></span>
				<div class="gallery-content">
					<h2><?=$data->title;?></h2>
					<div class="gallery-tagline">
						<span><?=$data->jargon;?></span>	
					</div>
					<p><?=$data->description;?></p>
					<?
						$list = explode("|",$data->list);
					?>
					<ul class="list">
						<?foreach ($list as $l): ?>
							<li><i class="fa fa-angle-right" aria-hidden="true"></i> <?=$l;?></li>	
						<?endforeach;?>
					</ul>
				</div>
				<div class="gallery-img">
					<div class="flexslider slider">
						<ul class="slides">
							<?foreach ($items->result() as $k): ?>
								<li style="background: url(<?=base_url()?>assets/section/<?=$k->image;?>) center">
									<div class="flex-caption">
										<h3><?=$k->title;?> <span class="text-notice"><br><?=$k->title_secondary;?></span></h3>
										<p><?=$k->description;?></p>
									</div>
									<div class="slider-bg-overlay"></div><!-- Overlay -->
								</li>
							<?endforeach;?>
						</ul>
					</div>	
				</div>
			</div>
		</div>
	</div>
</section>