
<?php include("vheader.php");?>
<?php include("adminmenu.php");?>

<?php
	include("connection.php");

	$area_id=$_GET['id'];
	$q="select * from area_master where area_id=$area_id";
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
					<li>Edit Area</li>
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
				<span>E</span>dit Area
			</h3>
			
			<!-- form -->
			<form action="admin-area-edit-code.php" method="post">

			<input type="hidden" class="form-control" value="<?php print $row['area_id']?>" id="exampleInputEmail1" name="area_id" aria-describedby="emailHelp">
				
					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Area Name</label>
					  <input type="text" class="form-control" required minlength=5 maxlength="100"  value="<?php print $row['area_name']?>" id="exampleInputEmail1" name="area_name" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
					  <label for="exampleInputPassword1" class="form-label">Pincode</label>
					  <input type="text" class="form-control" required pattern="[0-9] {6}" id="exampleInputPassword1" value="<?php print $row['pin_code']?>"  name="pin_code">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<!-- //form -->


		</div>
	</div>

<?php include("footer.php");
?>