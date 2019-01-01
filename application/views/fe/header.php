<title><?=$this->db->get_where('site_config',array('id'=>1))->row()->value;?></title>

<meta name="Keywords" content="<?=$this->db->get_where('site_config',array('id'=>5))->row()->value;?>">
<meta name="Description" content="<?=$this->db->get_where('site_config',array('id'=>4))->row()->value;?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge">	

<!-- Favicon for Desktop, iOS and android -->
<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url()?>assets/fe/images/favicons/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="<?=base_url()?>assets/fe/images/favicons/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="<?=base_url()?>assets/fe/images/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?=base_url()?>assets/fe/images/favicons/favicon-16x16.png" sizes="16x16">
<link rel="mask-icon" href="<?=base_url()?>assets/fe/images/favicons/safari-pinned-tab.svg">

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<link href="<?=base_url()?>assets/fe/css/bootstrap.css" rel="stylesheet"> 
<link href="<?=base_url()?>assets/fe/css/font-awesome.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/simple-line-icons.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/magnific-popup.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/aos.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/flexslider.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/style.css" rel="stylesheet">
<link href="<?=base_url()?>assets/fe/css/colors/color-1.css" rel="stylesheet"> <!-- Color Scheme -->

<script src="<?=base_url()?>assets/fe/js/modernizr.js"></script>

<!--[if lt IE 9]>
<script src="<?=base_url()?>assets/fe/js/html5shiv.js"></script>
<script src="<?=base_url()?>assets/fe/js/respond.min.js"></script> 
<![endif]-->