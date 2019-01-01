<?
	$cust = $this->db->get_where('section_review_customers',array('srev_id'=>$data->id));	
	$items = $this->db->get_where('section_review_items',array('srev_id'=>$data->id));	
?>

<!-- Start Reviews -->
<section id="reviews" class="reviews block gray">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc">
				<p><?=$data->description;?></p>
			</div>

			<?foreach ($items->result() as $r ): ?>
				<div id="review-1" class="col-md-6 review">
					<p><?=$r->review;?></p>
					<div class="author">
						<img src="<?=base_url()?>assets/section/<?=$r->image;?>" alt="author">
						<h4><?=$r->name;?></h4>
						<p><?=$r->position;?></p>
					</div>
				</div>
			<?endforeach;?>

			<div class="col-md-12 customers">
				<h3>Our Customers</h3>

				<?foreach ($cust->result() as $k): ?>
					<div class="col-md-3 customer">
						<a href="<?=$k->link;?>" target="_blank">
							<img src="<?=base_url()?>assets/section/<?=$k->image;?>" title="<?=$k->name;?>" alt="customer">
						</a>
					</div>
				<?endforeach;?>

			</div>
			<!-- End Customers -->

		</div>
	</div> <!-- .container -->
</section>
<!-- End Reviews -->
