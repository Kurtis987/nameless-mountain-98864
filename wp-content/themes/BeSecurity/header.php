<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head();?>
</head>

<body>

	<div class="blog-masthead">
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
        			<span class="icon-bar"></span>                        
      		  </button>
		      <a class="navbar-brand" href="#"><img src="<?php echo get_bloginfo('template_url');?>/images/security2.png"></a>
		    </div>
		    <div class="collapse navbar-collapse" id="myNavbar">
		    	<ul class="nav navbar-nav navbar-right">
		      		<li><a href="<?php echo get_home_url(); ?>">Home</a></li>
		      		<li><a href="<?php echo get_bloginfo('template_url');?>/?page_id=161/">About us</a></li>
		      		<li><a href="<?php echo get_home_url(); ?>/?page_id=361/">Offer</a></li>
		     		 <li><a href="<?php echo get_home_url(); ?>/?page_id=381/">Offer details</a></li>
		      		<li><a href="<?php echo get_home_url(); ?>/?page_id=171/">Contact</a></li>
		      		<li style="background-color: #4982d0;"><a href="#">Buy Now</a></li>
		    	</ul>
		    </div>
		    
  			</div>
		</nav>
		
		
	</div>
	
	<div class="container-fluid">