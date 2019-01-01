<!-- Start Navigation -->
<nav id="navigation" class="navbar navbar-default navbar-top">
	<div class="container-fluid">

		<div class="nav-bg top-nav"></div>

		<div class="container">

			<div class="navbar-button">
				<ul class="ul-btn">
					<li><a href="#products-1" class="button action-button-nav smooth" title="Buy Now">Buy Now</a></li>
				</ul>
			</div>

			<div class="navbar-header">
				<button id="nav-icon" type="button" class="navbar-toggle collapsed nav-icon" data-toggle="collapse" data-target="#menu-navbar" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</button>
				<a class="navbar-brand smooth" href="#home">
					<?=$this->db->get_where('site_config',array('id'=>1))->row()->value;?>
					<span class="logo-promo-text"><?=$this->db->get_where('site_config',array('id'=>2))->row()->value;?></span>
				</a> <!-- Title / Tagline -->
			</div>

			<div class="collapse navbar-collapse" id="menu-navbar">
				<ul class="nav navbar-nav navbar-right smooth-nav">
					<li class="current"><a href="#home" title="Home">Home</a></li>
					<li><a href="#about" title="About">About</a></li>
					<li><a href="#products-1" title="Products">Products</a></li>
					<li><a href="#reviews" title="Reviews">Reviews</a></li>
					<li><a href="#" target="_blank" title="Buy This Template">Buy It</a></li>
				</ul>
			</div>

			<div class="clearfix"></div>

		</div>
	</div>
</nav>
<!-- End Navigation -->