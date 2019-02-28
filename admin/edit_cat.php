<?php
	include '../database.php';
	include '../function.php';
	
	$db = new Database();
	
	$query = "SELECT * FROM categories";
	
	$cats = $db->select($query);
	
	$cat_id = $_GET['id'];  
	
	$query = "SELECT * FROM categories WHERE id = '$cat_id'";
	
	$cat = $db->select($query);
	
	$cat = $cat->fetch_array();
	
	//Insert New Post
	if(isset($_POST['update'])){
		
		$title = mysqli_real_escape_string($db->con, $_POST['title']);
		
		if($title==''){
			echo 'Please fill all fields';
			
		}
		else{
			$query = "UPDATE categories SET title='$title' WHERE id='$cat_id' ";
			$run = $db->update($query);
		
		}
		
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

    <title>Admin Panel</title>

    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Custom styles for this template -->
    <link href="../css/blog.css" rel="stylesheet" type="text/css">
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
            <li class="active"><a href="index.php">Dashboard</a></li>
            <li><a href="add_post.php">Add Post</a></li>
            <li><a href="add_category.php">Add Category</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
             <li><a href="../index.php">View Blog</a></li>
            <li><a href="logout.php">Logout</a></li>
		 </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    <!--<div class="blog-masthead">
      <div class="container">
        <nav class="blog-nav">
           <a class="blog-nav-item active" href="index.php">Dashboard</a>
          <a class="blog-nav-item" href="add_post.php">Add Posts</a>
          <a class="blog-nav-item" href="add_category.php">Add Categories</a>
          <a class="blog-nav-item pull-right" href="../index.php">View Blog</a>
          <a class="blog-nav-item pull-right" href="logout.php">Logout</a>
        </nav>
      </div> 
    </div>-->

    <div class="container">


      <div class="row">
		<br>
        <div class="col-sm-12 blog-main">
			<h2>Update Category</h2>
			<form action="edit_cat.php?id=<?php echo $cat_id; ?>" method="post">
				<div class="form-group">
					<label>Category Name</label>
					<input type="text" name="title" class="form-control" placeholder="Enter Title" value="<?php echo $cat['title']; ?>" />
				</div>
				
				<button type="submit" name="update" class="btn btn-success">Update</button>
				<a href="index.php" class="btn btn-default">Cancel</a>
				<a href="delete_cat.php?id=<?php echo $cat_id; ?>" class="btn btn-danger">Delete</a>
			</form>
			
		</div>	
	</div>	
	</div>	
	
	 <footer class="blog-footer">
      <p>Blog built for <a href="http://php.net">Angular</a></p>
      <p>
        <a href="#">Back to top</a>
      </p>
    </footer>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	
	<body>
</html>	
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		