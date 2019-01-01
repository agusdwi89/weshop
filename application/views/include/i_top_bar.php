<div class="topbar">
	<div class="topbar-left">
		<a href="index.html" class="logo">
			<span>
				<img src="<?=base_url()?>assets/images/logo.png" alt="" height="20">
			</span>
			<i>
				<img src="assets/images/logo_sm.png" alt="" height="28">
			</i>
		</a>
	</div>
	<div class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<ul class="nav navbar-left">
				<li class="d-none d-sm-block lang-option">
					<a href="<?=base_url()?>" target="_blank">
						<span class="badge badge-purple">view site</span>
					</a>
				</li>
			</ul>
			<ul class="nav navbar-right list-inline">
				<li class="list-inline-item">
					<div class="dropdown">
						<a title="logout" href="#" class="right-menu-item dropdown-toggle dz-tip">
							<i class="dripicons-power"></i>
						</a>
					</div>
				</li>
				<li class="dropdown user-box list-inline-item">
					<a href="" class="dropdown-toggle waves-effect user-link" data-toggle="dropdown" aria-expanded="true">
						<img src="<?=base_url()?>assets/images/users/avatar-1.jpg" alt="user-img" class="rounded-circle user-img">
					</a>
					<ul class="dropdown-menu dropdown-menu-right arrow-dropdown-menu arrow-menu-right user-list notify-list">
						<li><a href="javascript:void(0)" class="dropdown-item">Change Password</a></li>
						<li><a href="javascript:void(0)" class="dropdown-item">Logout</a></li>
					</ul>
				</li>
			</ul> 
		</div>
	</div>
</div>