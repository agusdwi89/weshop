<?
	$items = $this->db->get_where('section_team_items',array('steam_id'=>$data->id));	
?>

<!-- Start Team -->
<section id="team" class="team block">
	<div class="container">
		<div class="row">
			<h2><?=$data->title;?></h2>
			<div class="block-desc">
				<p><?=$data->description;?></p>
			</div>

			<?foreach ($items->result() as $v): ?>
				<div id="member-1" class="col-md-3 team-member">
					<div class="team-block">
						<div class="team-img-block">
							<div class="team-img">
								<img src="<?=base_url()?>assets/section/<?=$v->photo;?>" alt="member-1"> <!-- photo -->
							</div>
							<div class="team-img-overlay"></div>
						</div>
						<h3><?=$v->name;?></h3>
						<span><?=$v->description;?></span>
					</div>
				</div>
			<?endforeach;?>
		</div>
	</div>
</section>
<!-- End Team -->
