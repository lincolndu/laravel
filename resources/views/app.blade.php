<!DOCTYPE html>
<html>
<head>
	<title>student registration</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<script type="text/javascript" src="/js/bootstrap.js"></script>
	<script type="text/javascript">
		function check(){
			return confirm("are you sure to delete this ID ?");
		}
	</script>
</head>
<body>	
<div class="container">
	<div class="row">
		<div class="col-lg-9 col-lg-offset-1">
			 <?php echo Session::get('success_msg'); ?>
				<ul>
					<li><a href="/index.php">Home</a></li>
					<li><a href="/all_user">All user</a></li>
					<li><a href="/register">Register</a></li>
					<li><a href="/register">Register</a></li>
					<li><a href="/login">log in</a></li>
					<li><a href="/search">Search</a></li>
                                        <li><a href="/all_post">All Post</a></li>
                                        <li><a href="/add_post">Add New Post</a></li>
				</ul>
			  @yield('content')			  
		</div> 	
	</div>
</div>
</body>
</html>