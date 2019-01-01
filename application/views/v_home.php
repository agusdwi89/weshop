<!DOCTYPE html>
<html lang="en">
	<head>
		<?=$this->load->view('fe/header');?>	
		<script type="text/javascript">
			var clog;
		</script>
	</head>

<body>

	<!-- Start Preloader -->
	<div id="page-preloader">
		<svg class="circular" height="50" width="50">
			<circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="3" stroke-miterlimit="10"></circle>
		</svg>
	</div>
	<!-- End Preloader -->

	<!-- Start Content -->
	<section id="main" class="wrapper">

		<?=$this->load->view('fe/nav');?>

		<?php foreach ($list_section as $key): ?>

			<?=$this->load->view('section/'.$key['layout'],$key);?>
			
		<?php endforeach ?>

	</section>
	<!-- End Content -->
	<?=$this->load->view('fe/footer_script');?>
	<?=$this->load->view('fe/i_popup');?>

</body>
</html>