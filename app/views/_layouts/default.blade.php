
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	


	{{ HTML::style('css/style.css') }}


</head>
<body>
	
	

	<header>

		<div class="container">
			<h1> Blog Posts are Here: </h1>
			<p>by Mindazub</p>
		</div>	

	</header>

	<main class="container">
		@yield('content')

	</main>
	
	<footer>
		<div class="container">
			&copy {{ date('Y') }} mindazub
			{{ link_to_route('admin.posts.index', 'Admin')}}
		</div>
	</footer>

</body>
</html>
