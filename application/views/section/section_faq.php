<?
	// debug_array($data);
	$items = $this->db->get_where('section_faq_items',array('sfaq_id'=>$data->id));	
?>

<section id="faq" class="faq block">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc">
				<p><?=$data->description;?></p>
			</div>

			<?foreach ($items->result() as $v):?>
				<div class="col-md-4 answer">
					<h4><?=$v->title;?></h4>
					<p><?=$v->description;?></p>
				</div>
			<?endforeach;?>

		</div>
	</div> <!-- .container -->
</section>