<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript">
		var BASE = "<?=base_url()?>";
		var econ = [];
	</script>

	<?=$this->load->view('include/i_header');?>	
	<?=$this->load->view('include/i_footer_script');?>
	<?=$this->load->view('manage/msg');?>

	<script type="text/javascript">
		$(function(){
			$('body').on('click','#btn-backto-section',function (e) {
				e.preventDefault();
				window.location.href = BASE+"manage/section";
			});        

			$('body').on('click','#btn-reload',function (e) {
				e.preventDefault();
				location.reload();
			});

			$('body').on('click','.confirm-delete',function (e) {
				return confirm('are you sure to delete this data ?');
			});
		})
	</script>
	
</head>
<body>
	<div id="wrapper">
		<?=$this->load->view('include/i_top_bar');?>
		<?=$this->load->view('include/i_side_menu');?>
		<div class="content-page">
			<?=$this->load->view('manage/'.$local_view);?>
			<?=$this->load->view('include/i_footer');?>
		</div>
	</div>
</body>
</html>