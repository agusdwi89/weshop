<script type="text/javascript">
	var linkVideo = "<?=$data->link;?>";
</script>

<section id="video" class="video">
	<div class="overlay-video"></div>
	<div class="container-fluid">
		<div class="waves-block">
			<div class="waves wave-1"></div>
			<div class="waves wave-2"></div>
			<div class="waves wave-3"></div>
		</div>
		<div class="play">
			<a class="popup-video" href="https://www.youtube.com/watch?v=<?=$data->link;?>">
				<i class="fa fa-play" aria-hidden="true"></i>
				<span>Play</span>
			</a>
		</div>
	</div>
</section>