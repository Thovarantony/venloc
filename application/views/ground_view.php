<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Venloc | Sign In & Sign Up</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Grocery Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>asset/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="<?php echo base_url(); ?>asset/css/style.css" rel="stylesheet" type="text/css" media="all">
<!-- font-awesome icons -->
<link href="<?php echo base_url(); ?>asset/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
<!-- //font-awesome icons -->
<!-- js -->
<script src="<?php echo base_url(); ?>asset/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='<?php echo base_url(); ?>//fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='<?php echo base_url(); ?>//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script src="<?php echo base_url(); ?>asset/js/move-top.js"></script>
<script src="<?php echo base_url(); ?>asset/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<div class="agileits_header">
		<div class="w3l_offers">
			<a href="<?php echo site_url('Profile/products'); ?>">Today's special Offers !</a>
		</div>
		<div class="w3l_search">
			<form action="#" method="post">
				<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
				<input type="submit" value=" ">
			</form>
		</div>
		<div class="product_list_header">  
			<form action="#" method="post" class="last">
                <fieldset>
                    <input type="hidden" name="cmd" value="_cart" />
                    <input type="hidden" name="display" value="1" />
                    <input type="submit" name="submit" value="View your cart" class="button" />
                </fieldset>
            </form>
		</div>
		<div class="w3l_header_right">
			<ul>
				<li class="dropdown profile_details_drop">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
					<div class="mega-dropdown-menu">
						<div class="w3ls_vegetables">
							<ul class="dropdown-menu drp-mnu">
								<li><a href="<?php echo site_url('Auth/login'); ?>">Login</a></li> 
								<li><a href="<?php echo site_url('Auth/login'); ?>">Sign Up</a></li>
							</ul>
						</div>                  
					</div>	
				</li>
			</ul>
		</div>
		<div class="w3l_header_right1">
			<h2><a href="<?php echo site_url('Profile/email'); ?>">Contact Us</a></h2>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- script-for sticky-nav -->
	<script>
	$(document).ready(function() {
		 var navoffeset=$(".agileits_header").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".agileits_header").addClass("fixed");
			}else{
				$(".agileits_header").removeClass("fixed");
			}
		 });
		 
	});
	</script>
<!-- //script-for sticky-nav -->
	<div class="logo_products">
		<div class="container">
			<div class="w3ls_logo_products_left">
				<h1><a href="<?php echo site_url('Profile/home'); ?>"><span>Venloc</span> Virtual Market</a></h1>
			</div>
			<div class="w3ls_logo_products_left1">
				<ul class="special_items">
					<li><a href="<?php echo site_url('Profile/events'); ?>">Events</a><i>/</i></li>
					<li><a href="<?php echo site_url('Profile/about'); ?>">About Us</a><i>/</i></li>
					<li><a href="<?php echo site_url('Profile/products'); ?>">Best Deals</a><i>/</i></li>
					<li><a href="<?php echo site_url('Profile/services'); ?>">Services</a></li>
				</ul>
			</div>
			
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //header -->
<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="<?php echo site_url('Profile/home'); ?>">Home</a><span>|</span></li>
				<li>Sign In & Sign Up</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
		<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="<?php echo site_url('Profile/products'); ?>">Branded Foods</a></li>
						<li><a href="<?php echo site_url('Profile/ground_provision'); ?>">Ground Provision</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="<?php echo site_url('Profile/vegies'); ?>">Vegetables</a></li>
										<li><a href="<?php echo site_url('Profile/vegies'); ?>">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="<?php echo site_url('Profile/herbs'); ?>">Herbs and Spices</a></li>
						<li><a href="<?php echo site_url('Profile/nuts'); ?>">Nuts and Grains</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="<?php echo site_url('Profile/beverages'); ?>">Soft Drinks</a></li>
										<li><a href="<?php echo site_url('Profile/beverages'); ?>">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="<?php echo site_url('Profile/seafood'); ?>">Sea Food</a></li>
						<li><a href="<?php echo site_url('Profile/poultry'); ?>">Poultry</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		
		<!-- The main content will go here -->
		<div class="w3l_banner_nav_right">
			<div class="w3l_banner_nav_right_banner8">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div>
			
			<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_sub">
				<h3 class="w3l_fruit">Narrow Your Search</h3>
				
				<div class="container-fluid">
					<?php echo form_open('produce/ground_search'); ?>
					
						<div class="col-md-4">
							<?php echo form_label('Product Name:', 'title'); ?>
							<?php echo form_input('title', set_value('title'),'id= "title"'); ?>
						</div>
						
						<div class="col-md-4">
							<?php echo form_label('Search By Parish:', 'title'); ?>
							<?php echo form_dropdown('category', $category_options, set_value('category'),'id= "category"'); ?>
						</div>
						
						<div class="col-md-4">
							<?php echo form_label('Search By Vendor:', 'title'); ?>
							<?php echo form_input('title', set_value('title'),'id= "title"'); ?>
						</div>
					
				</div>
				
				<div class="container-fluid">
					<div class="col-md-2">
						<?php echo form_submit('action', 'Search'); ?>
		
					</div>
					<?php echo form_close();?>
				</div>
			</div>
			
		</div>
		
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

<!-- newsletter -->
	<div class="newsletter">
		<div class="container">
			<div class="w3agile_newsletter_left">
				<h3>sign up for our newsletter</h3>
			</div>
			<div class="w3agile_newsletter_right">
				<form action="#" method="post">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="submit" value="subscribe now">
				</form>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //newsletter -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-3 w3_footer_grid">
				<h3>information</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo site_url('Profile/events'); ?>">Events</a></li>
					<li><a href="<?php echo site_url('Profile/about'); ?>">About Us</a></li>
					<li><a href="<?php echo site_url('Profile/best_deals'); ?>">Best Deals</a></li>
					<li><a href="<?php echo site_url('Profile/services'); ?>">Services</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Policy Info</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="faqs.html">FAQ</a></li>
					<li><a href="privacy.html">privacy policy</a></li>
					<li><a href="privacy.html">terms of use</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Whats in the Markets</h3>
				<ul class="w3_footer_grid_list">
					<li><a href="<?php echo site_url('Profile/ground_provision'); ?>">Ground Provision</a></li>
					<li><a href="<?php echo site_url('Profile/beverages'); ?>">Beverages</a></li>
					<li><a href="<?php echo site_url('Profile/vegies'); ?>">Vegetables and Fruits</a></li>
					<li><a href="<?php echo site_url('Profile/products'); ?>">Branded Foods</a></li>
					<li><a href="<?php echo site_url('Profile/seafood'); ?>">Sea Food</a></li>
				</ul>
			</div>
			<div class="col-md-3 w3_footer_grid">
				<h3>Twitter Posts</h3>
				<ul class="w3_footer_grid_list1">
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>01 day ago</i><span>Non numquam <a href="#">http://sd.ds/13jklf#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://sd.ds/1389kjklf#</a>quo nulla.</span></li>
					<li><label class="fa fa-twitter" aria-hidden="true"></label><i>02 day ago</i><span>Con numquam <a href="#">http://fd.uf/56hfg#</a>
						eius modi tempora incidunt ut labore et
						<a href="#">http://fd.uf/56hfg#</a>quo nulla.</span></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<div class="agile_footer_grids">
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h4>Coming Soon</h4>
						<h4>100% secure payments</h4>
						<img src="<?php echo base_url(); ?>asset/images/card.png" alt=" " class="img-responsive" />
					</div>
				</div>
				<div class="col-md-3 w3_footer_grid agile_footer_grids_w3_footer">
					<div class="w3_footer_grid_bottom">
						<h5>Connect With Us</h5>
						<ul class="agileits_social_icons">
							<li><a href="#" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
							<li><a href="#" class="dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="wthree_footer_copy">
				<p>© 2017 Venloc | All rights reserved | Design by <a href="http://w3layouts.com/">ravoht inc</a></p>
			</div>
		</div>
	</div>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
<script src="<?php echo base_url(); ?>asset/js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
</body>
</html>