<?php
	session_start();
	include 'database.php';
	include 'function.php';
	
	$db = new Database();
	
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		
		$query = "SELECT * FROM posts WHERE id='$id'";
		$posts = $db->select($query);
		$row = $posts->fetch_array();
	}


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Angular Tutorial Blog</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="./css/blog.css" rel="stylesheet" type="text/css">
  </head>

  <body>
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
		  <?php /*if(isset($_SESSION['email'])): */?>
			<a class="blog-nav-item pull-right" href="admin/index.php">Go to admin panel</a>
		  <?php /*endif; */?>
        </nav>
      </div> 
    </div>-->

    <div class="container">

      <div class="blog-header">
        <h1 class="blog-title">The Angular Blog</h1>
        <p class="lead blog-description">The official example of creating a blog with Angular.</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">  

          <div class="blog-post">
            <h2 class="blog-post-title"><?php echo $row['title']; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($row['date']); ?> by <a href="#"><?php echo $row['author']; ?></a></p>

            <p><?php echo $row['content']; ?></p>
   
           
          </div><!-- /.blog-post -->
			  
        

<?php include 'includes/footer.php'; ?>