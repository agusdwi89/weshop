<?
	$socials = $this->db->get_where('section_footer_social',array('sfoot_id'=>$data->id))->row();
	// debug_array($socials);
	$links = $this->db->get_where('section_footer_links',array('sfoot_id'=>$data->id));	
?>

<!-- Start Footer -->
<footer id="footer" class="footer">
	<div class="footer-bg">
		<div style="background: url(<?=base_url()?>assets/section/<?=$data->r_image;?>) center no-repeat;" class="footer-bg-img"></div>
		<div class="footer-bg-overlay"></div>
		<span class="trapeze-footer-bg"></span>
	</div>
	<div class="container footer-first-line">
		<div class="row">
			<div class="col-md-6 footer-about">
				<h2><?=$data->l_title;?></h2>
				<p><?=$data->l_description;?></p>

				<ul class="footer-social-icons">
					<?if ($socials->facebook != ''): ?>
					<li><a target="_blank" href="<?=$socials->facebook;?>" title="Facebook"><i class="fa fa-fw fa-facebook" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->twitter != ''): ?>
					<li><a target="_blank" href="<?=$socials->twitter;?>" title="Twitter"><i class="fa fa-fw fa-twitter" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->google != ''): ?>
					<li><a target="_blank" href="<?=$socials->google;?>" title="Google Plus"><i class="fa fa-fw fa-google-plus" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->instagram != ''): ?>
					<li><a target="_blank" href="<?=$socials->instagram;?>" title="Instagram"><i class="fa fa-fw fa-instagram" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->behance != ''): ?>
					<li><a target="_blank" href="<?=$socials->behance;?>" title="Behance"><i class="fa fa-fw fa-behance" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->dribbble != ''): ?>
					<li><a target="_blank" href="<?=$socials->dribbble;?>" title="Dribbble"><i class="fa fa-fw fa-dribbble" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
					<?if ($socials->linkedin != ''): ?>
					<li><a target="_blank" href="<?=$socials->linkedin;?>" title="Linkedin"><i class="fa fa-fw fa-linkedin" aria-hidden="true"></i></a></li>	 
					<?endif;?>	 
				</ul>

			</div>
			<!-- End Text in Footer -->

			<!-- Start Contacts -->
			<div class="col-md-6 footer-contacts">

				<h2><span class="text-notice"><?=$data->r_title;?></span></h2>
				<p><?=$data->r_description;?></p>
				<ul>
					<li><strong>Phone:</strong><?=$data->r_phone;?></li>
					<li><strong>Email:</strong><?=$data->r_email;?></li>
					<li><strong>Address:</strong><?=$data->r_address;?></li>
				</ul>

			</div>
			<!-- End Contacts -->

		</div>
	</div> <!-- .footer-first-line -->

	<div class="container footer-second-line">
		<div class="row">

			<div class="col-md-6 footer-bottom-links">
				<!-- <ul>
					<?foreach ($links->result() as $a): ?>
						<li><a href="<?=$a->link;?>" title="<?=$a->title;?>"><?=$a->title;?></a> /</li>	
					<?endforeach;?>
				</ul> -->
				<p class="copyright"><?=$data->l_bottom_text;?></p>
			</div>

		</div>
	</div>
</footer>
<!-- End Footer -->
