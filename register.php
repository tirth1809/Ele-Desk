
<?php include("vheader.php");?>


<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						<li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
				
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="about.php">About</a>
						</li>
				
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
						<a class="nav-link" href="product.php">Product</a>
					    </li>
						
						<li class="nav-item   mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link"  href="register.php">Register</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>


<?php
	include("connection.php");
?>
	<!-- //navigation -->

	<!-- banner-2 -->
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
					<li>Register</li>
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
				<span>R</span>egister
			</h3>
			<!-- //tittle heading -->
			
			<!-- form -->
			<form action="register-code.php" method="post">
				<form>
                <div class="mb-3">
					  <label for="exampleInputName1" class="form-label">Name</label>
					  <input type="text" required minlength=3 maxlength="50" class="form-control" id="exampleInputName1" name="name" aria-describedby="nameHelp" required>
					</div>

					<div class="mb-3">
					  <label for="exampleInputName1" class="form-label">Email</label>
					  <input type="email" class="form-control" pattern="[^ @]*@[^ @]*" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
					</div>

                    <div class="mb-3">
					  <label for="exampleInputAddress1" class="form-label">Address</label>
					  <textarea rows="10" required minlength=25 cols="50" class="form-control" placeholder="Start typing an address.." name="address" required> </textarea> 
					</div>
                    <div class="mb-3">
					  <label for="exampleInputContact1" class="form-label">Contact</label>
					  <input type="text" class="form-control" id="exampleInputEmail1" pattern="/^+91(7\d|8\d|9\d)\d{9}$/" aria-describedby="contactHelp" name="contact">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				  </form>
			</form> 
			<!-- //form -->
		</div>
	</div>
	<!-- //contact -->

	
	<!-- footer -->
	<?php include("footer.php");?>
	<!-- copyright -->
	