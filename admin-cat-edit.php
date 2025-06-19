
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

<?php
	include("connection.php");

	$category_id=$_GET['id'];
	$q="select * from category where category_id=$category_id";
	$rs=mysqli_query($con,$q);
	$row=mysqli_fetch_array($rs);

?>


	<!-- banner-2 -->
	<!-- //banner-2 -->
	<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.html">Home</a>
						<i>|</i>
					</li>
					<li>Edit Category</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- form part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>E</span>dit Category
			</h3>
			
			<!-- form -->
			<form action="admin-cat-edit-code.php" method="post">
			<input type="hidden" class="form-control" value="<?php print $row['category_id']?>" id="exampleInputEmail1" name="category_id" aria-describedby="emailHelp">

					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Category Name</label>
					  <input type="text" class="form-control" required minlength=2 maxlength="50" value="<?php print $row['category_name']?>" id="exampleInputEmail1" name="category_name" aria-describedby="emailHelp">

					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				 
			</form>
			<!-- //form -->


		</div>
	</div>
	<!-- //form part -->


	<!-- table  part -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
	
		</div>
	</div>
	</div>	
	<!-- //table part -->

	
<?php include("footer.php");?>
