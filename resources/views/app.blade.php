<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

    <!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>zBoomMusic Free Html5 Responsive Template</title>
	<meta name="description" content="Free Html5 Templates and Free Responsive Themes Designed by Kimmy | zerotheme.com">
	<meta name="author" content="www.zerotheme.com">
	
    <!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <!-- CSS
  ================================================== -->
  	<link rel="stylesheet" href="/css/zerogrid.css">
  	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/style2.css">
    <link rel="stylesheet" href="/css/responsive.css">
	<link rel="stylesheet" href="/css/responsiveslides.css" />
	
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
		<script src="/js/html5.js"></script>
		<script src="/js/css3-mediaqueries.js"></script>
	<![endif]-->
	
	<link href='/images/favicon.ico' rel='icon' type='image/x-icon'/>
	<script src="/js/jquery.min.js"></script>
	<script src="/js/responsiveslides.js"></script>
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			pager: false,
			nav: true,
			speed: 500,
			maxwidth: 962,
			namespace: "centered-btns"
		  });
		});
	</script>
</head>
<body>

<!--Header-->
<header>

	<div class="wrap-header zerogrid">
	<h1 style="width:100%; font-size:25px;color:white; text-align:center;padding:10px;">{{Session::get('success_msg')}}</h1>
	<script type="text/javascript">
	function jscheck(){
		return confirm("Are you sure to delete this data ?");
	}
	</script>


		<div id="logo"><a href="/auth/login"><img src="/images/logo.png"/></a></div>
		
		<div id="search">
			<form action="/" method="post">
			 <input type="hidden" name="_token" value="{{csrf_token()}}">
			
			<input type="text" name="title" value="Search..." onfocus="if (this.value == &#39;Search...&#39;) {this.value = &#39;&#39;;}" onblur="if (this.value == &#39;&#39;) {this.value = &#39;Search...&#39;;}">
			<input type="submit" value="" class="button-search" >
		</form>
			</div>
	</div>
</header>

<nav>
	<div class="wrap-nav zerogrid">
		<div class="menu">
			<ul>
			@if(Auth::check())
				<li class="current"><a href="/index.php">Home</a></li>
				<li><a href="/blog">Blog</a></li>
				<li><a href="/gallery">Gallery</a></li>
				<li><a href="/contact">Contact</a></li>
				<li><a href="/newpost">newpost</a></li>
				<li><a href="/auth/logout">logout</a></li>
				<li><a href="/dashboard">Dashboard</a></li>
				@else
			</ul>
			<ul>
				<li><a href="/auth/login">Home</a></li>
				<li><a href="/auth/register">Register</a></li>
				<li><a href="/auth/login">login</a></li>
				@endif
			</ul>
		</div>
		
		<div class="minimenu"><div>MENU</div>
			<select onchange="location=this.value">
				<option></option>
				<option value="/index">Home</option>
				<option value="/blog">Blog</option>
				<option value="/gallery">Gallery</option>
				<option value="/single">About</option>
				<option value="/contact">Contact</option>
			</select>
		</div>		
	</div>
</nav>


<!-- Laravel part-->
@yield('content')



<!--Footer-->
<footer>
	<div class="wrap-footer zerogrid">
		<div class="row block09">
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>About Us</h2></div>
						<div class="content">
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
							<p>Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis natoque penatibus.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Latest Post</h2></div>
						<div class="content">
							<ul>
								<li><a href="#"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Hot Albums</h2></div>
						<div class="content">
							<div class="tag">
								<a href="#">Galaxy</a><a href="#">Beatport</a><a href="#">Amazon</a><a href="#">Itunes</a><a href="#">Sonic</a><a href="#">Kpopps</a><a href="#">Summer</a><a href="#">Magical</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-1-4">
				<div class="wrap-col">
					<div class="box">
						<div class="heading"><h2>Contact Us</h2></div>
						<div class="content">
							<ul>
								<li>Address : 0123 Some Street. Country</li>
								<li>Phone : +8801736458080</li>
								<li>Email : coderstime@gmail.com</li>
								<li>Website : www.coderstime.com</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="row copyright">
			<p>Copyright © 2013 - <a href="http://www.coderstime.com" target="_blank">Free Html5 Templates</a> by <a href="http://www.coderstime.com" target="_blank">CodersTime.com</a></p>
		</div>
	</div>
</footer>

</body></html>