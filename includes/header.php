<?php
	session_start();
	include 'database.php';
	include 'function.php';
	
	$db = new Database();
	
	$query = 'SELECT * FROM posts ORDER BY id';
	$posts = $db->select($query);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="php blog, php-mysqli blog, php-ajax blog">
    <meta name="author" content="php blog, php mysqli blog, php ajax blog">

    <title>PHP Tutorial Blog</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="./css/blog.css" rel="stylesheet" type="text/css">
  </head>

  <body>
	<!-- Static navbar -->
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PHP Blog</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">All Post</a></li>
            <li><a href="#contact">Services</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if(isset($_SESSION['email'])): ?>
				<li><a href="admin/index.php">Go to Admin Panel</a></li>
			<?php endif; ?>
		 </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  
  
    <!--<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
          <a class="blog-nav-item active" href="index.php">Home</a>
          <a class="blog-nav-item" href="#">All Posts</a>
          <a class="blog-nav-item" href="#">Services</a>
          <a class="blog-nav-item" href="#">About Us</a>
          <a class="blog-nav-item" href="#">Contact Us</a>
		  <?php /* if(isset($_SESSION['email'])):  */ ?>
			<a class="blog-nav-item pull-right" href="admin/index.php">Go to admin panel</a>
		  <?php /* endif; */ ?>
        </nav>
      </div> 
    </div>-->

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Language Blog</h1>
        <p class="lead blog-description">The official example of creating a blog with PHP and Mysqli.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">
		  <?php 
			while($row = $posts->fetch_array()): 
		  ?>		  

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <p><?php echo substr($row['content'], 0, 200); ?></p>
            <a class="readmore" href="single.php?id=<?php echo $row['id']; ?>">Read More</a>
           
          </div><!-- /.blog-post -->
		<?php endwhile; ?>		  
        

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		