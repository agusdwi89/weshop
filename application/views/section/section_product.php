<?
	// debug_array($data);
	$items = $this->db->get_where('section_product_items',array('prd_id'=>$data->id));
?>

<?if ($data->type == 'type_1' || $data->type == 'type_2'): ?>

<section id="products-2" class="products block gray">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<?foreach ($items->result() as $p):?>			
				<div id="product-1-i" class="col-md-4 product">
					<div class="product-block">
						<div class="product-bg">
							<?if ($data->type == 'type_2'): ?>
								<div style="background: url(<?=base_url()?>assets/section/<?=$p->image_bg;?>) center no-repeat !important;" class="product-bg-img"></div>
								<div class="product-bg-overlay"></div>
							<?endif;?>
						</div>
						<div class="product-content">
							<h3><?=$p->title;?></h3>
							<p <?=(($data->type == 'type_2') ? 'class="version-bg"' : '');?> ><?=$p->description;?></p>
							<?if ($p->price_dsc > 0): ?>
								<span class="sale">Rp <?=format_number($p->price);?></span>
								<span class="sale-price">Rp <?=format_number($p->price_dsc);?></span>
							<?else:?>
								<span>Rp <?=format_number($p->price);?></span>
							<?endif;?>
							<div class="product-img">
								<img src="<?=base_url()?>assets/section/<?=$p->image;?>" alt="<?=$p->title;?>">
							</div>
							<div class="bnt-block">
								<a href="#order" 
									data-image="<?=base_url()?>assets/section/<?=$p->image;?>" 
									data-title="<?=$p->title;?>" 
									data-description="<?=$p->description;?>" 
									data-description2="<?=$p->description2;?>" 
									data-price="<?=$p->price;?>" 
									data-price_dsc="<?=$p->price_dsc;?>" 
									class="button buy-button" title="Buy Now">Buy Now</a>
							</div>
						</div>

					</div>
				</div>	
			<?endforeach;?>
		</div>
	</div> 
</section>

<?else:?>
<section id="products-3" class="products-l2 block">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc"><p><?=$data->description;?></p></div>

			<?$i=0;foreach ($items->result() as $p):$i++;?>			

			<div id="product-l2-1" class="col-md-6 col product-l2">
				<div class="product-l2-block">
					<div class="product-l2-bg">
						<div class="bg-img"></div>
						<div class="bg-content"></div>
					</div>
			
					<div class="product-l2-img">
						<div class="product-l2-container">
							<img src="<?=base_url()?>assets/section/<?=$p->image;?>" alt="<?=$p->title;?>">
						</div>
					</div>
			
					<div class="product-l2-content">
						<div class="product-info">
							<h3><?=$p->title;?></h3>
							<p class="version"><?=$p->description;?></p>

							<?if ($p->price_dsc > 0): ?>
								<span class="sale">Rp <?=format_number($p->price);?></span>
								<span class="sale-price">Rp <?=format_number($p->price_dsc);?></span>
							<?else:?>
								<span>Rp <?=format_number($p->price);?></span>
							<?endif;?>

							<p class="desc"><?=$p->description2;?></p>
							
							<div class="l2-bnt-block">
								<a href="#order" 
									data-image="<?=base_url()?>assets/section/<?=$p->image;?>" 
									data-title="<?=$p->title;?>" 
									data-description="<?=$p->description;?>" 
									data-description2="<?=$p->description2;?>" 
									data-price="<?=$p->price;?>" 
									data-price_dsc="<?=$p->price_dsc;?>" 
									class="button buy-button" title="Buy Now">Buy Now</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			<?if ($i % 2 == 0): ?>
				<div class="clearfix"></div>
			<?endif;?>

			<?endforeach;?>

		</div>
	</div>
</section>

	
<?endif;?>
