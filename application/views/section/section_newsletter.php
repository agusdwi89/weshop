<!-- Start Newsletter Form -->
<section id="newsletter" class="newsletter block">
	<div class="container">
		<div class="row">

			<h2><?=$data->title;?></h2>

			<div class="block-desc">
				<p><?=$data->description;?></p>
			</div>

			<!-- Start Form -->
			<div class="col-md-12 form-block">
				<form id="newsletter-form" class="newsletter-form" action="newsletter.php">
					<div class="newsletter-field-group">
						<input id="newsletter-email" type="text" name="newsletter-email" placeholder="<?=$data->placeholder_text;?>"><button id="newsletter-submit" type="submit" class="button submit-button">Submit</button>
						<span class="nf-error-message"></span>
					</div>
				</form>
				<span class="newsletter-notice"><?=$data->spam_text;?></span>
			</div>
			<!-- End Form -->

		</div>
	</div> <!-- .container -->
</section>
<!-- End Newsletter Form -->