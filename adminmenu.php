<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item  mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="admin-dashboard.php">Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>

                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="admin-area.php">Area</a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="admin-stock.php">Stock</a>
                    </li>
                    

                    <div class="btn-group">
                        <a class="nav-link" href="admin-product.php">Products</a>
                        <a type="button" class=" dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                        </a>    
                        <div class="dropdown-menu">
                        <a class="nav-link" href="admin-cat.php">Category</a>
                        <a class="nav-link" href="admin-discount.php">Discount</a>
                        </div>

                    </li>
                  
                    
                    <div class="btn-group">
                        <a class="nav-link" href="admin-order-view.php">Orders</a>
                        <a type="button" class=" dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                        </a>

                        <div class="dropdown-menu">
                            <a class="nav-link" href="admin-outward-view.php">Outward</a>
                        </div>
                   
                        <div class="btn-group">
                        <a class="nav-link" href="admin-dealer.php">Dealer</a>
                        <a type="button" class=" dropdown-toggle dropdown-toggle-split"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">  
                        </a>
          
                        <div class="dropdown-menu">
                        <a class="nav-link" href="admin-inquiry.php">Dealer Inquiry</a>
                        </div>
                   
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href="logout.php">Logout</a>
						</li>

						<li class="nav-item mr-lg-2 mb-lg-0 mb-2">
							<a class="nav-link" href=""> <?php echo  $_SESSION['user_name'] ?> </a>
						</li>


					</ul>
                 </div>
			</nav>
		</div>
	</div>
</div>