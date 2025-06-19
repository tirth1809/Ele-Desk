
<?php include("vheader.php");?>
<?php include("vmenu.php");?>
	<!-- //navigation -->

	<!-- banner-2 -->
    <?php
        include("connection.ph");
    ?>
	<div class="page-head_agile_info_w3l">

	</div>
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
					<li>Login
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- contact -->
	<div class="contact py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>L</span>ogin
			</h3>
			<!-- //tittle heading -->
			
			<!-- form -->
			<form action="#" method="post">
				<form>
                    $emil=$_POST['email']
					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Email</label>
					  <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					</div>
					<div class="mb-3">
					  <label for="exampleInputPassword1" class="form-label">Password</label>
					  <input type="text" class="form-control" id="exampleInputPassword1">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form>
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	<!-- map -->

	
	<!-- //map -->
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- copyright -->
	