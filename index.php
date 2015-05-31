<!DOCTYPE html>
<html>
<head>
	<title>Dummy Site</title>
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/script" href="assets/css/bootstrap/js/bootstrap.js">
	<link rel="stylesheet" type="text/css" href="asses">	
</head>
<body>
	<div class=" wow bounceInUp container-fluid">
		<div class="navbar navbar-fixed-top clearfix",role="navigation">
			 <div class="navbar-header">
            <div class="clearfix">
               <a class="navbar-brand" style="color:#F7C241;" href="#">BRAND NAME</a>
             </div>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav nav-justified">
                <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data toggle="dropdown">
                      <span="dropdown-header-text">ABOUT</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="txt"><a href="#">PHILOSOPHY</a></li>
                        <li class="txt"><a href="#">OUR COMPANY</a></li>
                        <li class="txt"><a href="team.php">TEAM</a></li>
                    </ul>
                </li>
                 <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data toggle="dropdown">
                      <span="dropdown-header-text">PRODUCTS</span="dropdown-headeer-text">
                    </a>
                    <ul class="dropdown-menu">
                        <li class="txt"><a href="form/form.php">PRPODUCT1</a></li>
                        <li class="txt"><a href="#">PRODUCT2</a></li>
                        <li class="txt"><a href="#">PRODUCT3</a></li>
                    </ul>
                </li>
                 <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data toggle="dropdown">
                      <span="dropdown-header-text">PARTNERS</span="dropdown-headeer-text">
                    </a>
                    <ul class="dropdown-menu">
                        <li class="txt"><a href="#">PARTNER</a></li>
                        <li class="txt"><a href="#">PARTNER2</a></li>
                        <li class="txt"><a href="#">PARTNER3</a></li>
                    </ul>
                </li>
                 <li class="dropdown dropdown-hover">
                    <a href="#" class="dropdown-toggle" data toggle="dropdown">
                      <span="dropdown-header-text">REGISTER</span="dropdown-headeer-text">
                    </a>
                    <ul class="dropdown-menu">
                        <li class="txt"><a href="index.php?id=form">USER</a></li>
                        <li class="txt"><a href="#"></a><h9>(Coming Soon)</h9> </li>
                         <li class="txt"><a href="#">PRESS CORP</a><h9>(Coming Soon)</h9></li>
                    </ul>
                </li>
                 <li class="dropdown dropdown-hover">
                    <a href="form/contact.php" class="dropdown-toggle" data toggle="dropdown">
                      <span="dropdown-header-text">CONTACT</span="dropdown-header-text">
                    </a>
                </li>
            </ul>
        </div>
    </div>
		</div>
	</div>
	<script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
   		<script>
	   		jQuery('ul.nav li.dropdown-hover').hover(function() 
	   		{
          		jQuery(this).find('.dropdown-menu').stop(true, true).delay(150).fadeIn();
         	}, 
         	function() 
         	{
           		jQuery(this).find('.dropdown-menu').stop(true, true).delay(150).fadeOut();
         	});
         		$(document).ready(function () {
					$(".navbar-nav li a").click(function(event) {
					$(".navbar-collapse").collapse('hide');
				});
			});
		</script>
	<script src="assets/script/wow.js"></script>
	<script>
 		new WOW().init();
	</script>
</body>

</html>