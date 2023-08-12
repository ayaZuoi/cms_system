<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
	font-family: Arial, sans-serif;
	margin: 0;
	padding: 0;
}

header {
	background-color: #333;
	color: #fff;
	display: flex;
	flex-direction: row;
	justify-content: space-between;
	padding: 1rem;
}

h1 {
	margin: 0;
}

nav ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: flex;
	flex-direction: row;
}

nav li {
	margin: 0 0.5rem;
}

nav a {
	color: #fff;
	text-decoration: none;
}

main {
	padding: 2rem;
}

.post-meta {
	font-style: italic;
	font-size: 0.8rem;
}

.post-meta span {
	font-weight: bold;
}

.post-content img {
	display: block;
	margin: 1rem auto;
	max-width: 100%;
	height: auto;
}

.post-footer {
	margin-top: 2rem;
}

.tags {
	display: flex;
	flex-direction: row;
	align-items: center;
}

.tags span {
	margin-right: 0.5rem;
}

.tags a {
	margin-right: 0.5rem;
	padding: 0.25rem 0.5rem;
	background-color: #eee;
	color: #333;
	text-decoration: none;
	border-radius: 0.5rem;
}

footer {
	background-color: #333;
	color: #fff;
	text-align: center;
	padding: 1rem;
}
    </style>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
	<?php 
       include "../includes/header.php";
       ?>
	</header>
	<main>
		<article>
			<header>
				<h2>Blog Post Title</h2>
				<p class="post-meta">Published on <span>May 10, 2022</span></p>
			</header>
			<section class="post-content">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam mollis magna at ligula tincidunt, vel aliquet augue imperdiet. Suspendisse sit amet enim quis augue luctus tempus. Nullam vel elit a justo porttitor lacinia. Cras rutrum, ipsum id hendrerit aliquet, lorem est tincidunt mauris, sit amet vehicula quam magna vel sapien.</p>
				<img src="https://via.placeholder.com/800x400" alt="Blog post image">
				<p>Aliquam erat volutpat. Nulla facilisi. Vestibulum dapibus semper nisl vel faucibus. Donec euismod, nibh vel laoreet suscipit, sapien ex laoreet quam, quis vestibulum ligula libero nec lectus. Sed ac efficitur sapien. Proin varius congue mauris, eu finibus purus aliquam at.</p>
				<p>Quisque a dolor ut lorem congue vehicula. Sed euismod sed justo vel tincidunt. Sed euismod, nisl non aliquet dictum, nunc sapien porta ante, vel bibendum enim dolor vel nisi. Sed nec est sed ex interdum efficitur. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla facilisi.</p>
			</section>
	
		</article>
	</main>
	<footer>
	<?php 
        include "../includes/footer.php"
        ?>
	</footer>
</body>
</html>