<?php
	include '../database.php';
	include '../function.php';
	
	$db = new Database();
	
	$query = 'SELECT * FROM posts ORDER BY id';
	$posts = $db->select($query);

	$query = 'SELECT * FROM categories ORDER BY id';
	$cats = $db->select($query);
	
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
    <!-- <div class="blog-masthead">
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
	<?php
		if(isset($_GET['msg'])){
			echo "<div class='alert alert-success'>".$_GET['msg']."</div>";
		}
	?>

      <div class="row">

        <div class="col-sm-12 blog-main">
			<table class="table table-striped">
				<tr align="center"><td colspan="4"><h2>Manage Post</h2></td></tr>
				<tr>
					<th>Post ID</th>
					<th>Post Title</th>
					<th>Post Author</th>
					<th>Post Date</th>
				</tr>
				<?php while($row = $posts->fetch_array()):  ?>
				<tr>
					<td><?php echo $row['id']; ?></td>
					<td><a href="edit_post.php?id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
					<td><?php echo $row['author']; ?></td>
					<td><?php echo formatDate($row['date']); ?></td>
				</tr>
				<?php endwhile; ?>
			</table>  
			<br>
			<table class="table table-striped">
				<tr align="center"><td colspan="4"><h2>Manage Category</h2></td></tr>
				<tr>
					<th>Category ID</th>
					<th>Category Title</th>
				</tr>
				<?php while($row1 = $cats->fetch_array()):  ?>
				<tr>
					<td><?php echo $row1['id']; ?></td>
					<td><a href="edit_cat.php?id=<?php echo $row1['id']; ?>"><?php echo $row1['title']; ?></a></td>
				</tr>
				<?php endwhile; ?>
			</table>  
        

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		