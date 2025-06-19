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
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="login.php">Login</a>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="register.php">Register</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>

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
			<form action="check-login2.php" method="post">
				<form>
					<div class="mb-3">
					  <label for="exampleInputEmail1" class="form-label">Email</label>
					  <input type="email" class="form-control" pattern="[^ @]*@[^ @]*" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
					</div>
					<div class="mb-3">
					  <label for="exampleInputPassword1" class="form-label">Password</label>
					  <input type="password" class="form-control" id="exampleInputPassword1" name="password"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
					<!-- pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" -->
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
	