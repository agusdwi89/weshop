<?
	// debug_array($data);
	$items = $this->db->get_where('section_features_items',array('sf_id'=>$data->id));
?>

<?php if ($data->image_position == "left"): ?>
<!-- Start Features 1 -->
<section id="features-1" class="features block">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<div class="col-md-6 feature-img">
				<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="product">
			</div>

			<div class="col-md-6 feature-icons">

				<?php foreach ($items->result() as $v):?>
					<div class="col-md-6 feature">
						<i class="<?=$v->icon;?>"></i> <!-- Icon -->
						<h3><?=$v->title;?></h3>
						<p><?=$v->description;?></p>
					</div>
				<?php endforeach ?>

			</div> <!-- .feature-icons -->

		</div>
	</div> <!-- .container -->
</section>
<!-- End Features 1 -->

<?php elseif($data->image_position == "right" ): ?>

<section id="features-1" class="features block">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<div class="col-md-6 feature-icons">

				<?php foreach ($items->result() as $v):?>
					<div class="col-md-6 feature">
						<i class="<?=$v->icon;?>"></i> <!-- Icon -->
						<h3><?=$v->title;?></h3>
						<p><?=$v->description;?></p>
					</div>
				<?php endforeach ?>

			</div> <!-- .feature-icons -->

			<div class="col-md-6 feature-img">
				<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="product">
			</div>

		</div>
	</div> <!-- .container -->
</section>

<?php else: ?>	

<?
	$tot = $items->num_rows();
	$div = intdiv($tot, 2);
	$it1 = $it2 = [];
	$i=0;
	foreach ($items->result() as $k) {
		$i++;
		if ($i>$div) {
			$it2[] = $k;
		} else {
			$it1[] = $k;
		}
	}
?>

<section id="features-2" class="features block gray">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<div class="col-md-4 feature-icons">

				<?php foreach ($it1 as $v):?>
					<div class="col-md-12 feature feature-left">
						<i class="<?=$v->icon;?>"></i> <!-- Icon -->
						<h3><?=$v->title;?></h3>
						<p><?=$v->description;?></p>
					</div>
				<?php endforeach ?>

			</div> <!-- .feature-icons -->

			<div class="col-md-4 feature-img">
				<img src="<?=base_url()?>assets/section/<?=$data->image;?>" alt="product">
			</div>

			<div class="col-md-4 feature-icons">

				<?php foreach ($it2 as $v):?>
					<div class="col-md-12 feature">
						<i class="<?=$v->icon;?>"></i> <!-- Icon -->
						<h3><?=$v->title;?></h3>
						<p><?=$v->description;?></p>
					</div>
				<?php endforeach ?>
			</div> <!-- .feature-icons -->

		</div>
	</div> <!-- .container -->
</section>
<?php endif ?>
