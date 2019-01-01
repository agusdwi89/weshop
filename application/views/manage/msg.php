<? $a = $this->session->flashdata('message');?>
<?if(!empty($a)):?>
	<style>
		#flashmsg{
			position: fixed;
			width: 40%;
			height: 60px;
			z-index: 99999;
			right: 10px;
			border-radius: 3px;
			text-align: center;
			padding-top: 20px;
			font-size: 100%;
			font-weight: bold;
			color: white;
			background: #25c3cf; /* for non-css3 browsers */
			filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#25c3cf', endColorstr='#21adb8'); /* for IE */
			background: -webkit-gradient(linear, left top, left bottom, from(#25c3cf), to(#21adb8)); /* for webkit browsers */
			background: -moz-linear-gradient(top,  #25c3cf,  #21adb8); /* for firefox 3.6+ */
			/*-moz-box-shadow: 0px 1px 20px 3px #40444d;
			-webkit-box-shadow: 0px 1px 20px 3px #40444d;
			box-shadow: 0px 1px 20px 3px #40444d;*/
			top: 10px;
			padding-bottom: 9px;
			opacity: 0.95;
		}
	</style>
	<script>
		jQuery.fn.slideFadeToggle = function(speed, easing, callback){
			return this.animate({opacity: 'toggle',height: 'toggle'},speed,easing,callback);
		};
	</script>
	<div id="flashmsg" style="display:none">
			<?=$a;?>
			<script>
				$(function(){
					// $("#flashmsg").slideFadeToggle('slow');
					$("#flashmsg").slideFadeToggle('slow').delay(5000).slideFadeToggle('slow');
				})
			</script>
	</div>
<? endif;?>
<? $a = $this->session->flashdata('log');?>
<?if(!empty($a)):?>
	<script type="text/javascript">
		$(function(){
			console.log("<?=$a;?>")
		})
	</script>
<? endif;?>