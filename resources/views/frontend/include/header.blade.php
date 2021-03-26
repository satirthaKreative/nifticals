<header>
			<div class="modal fade search-hold" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-body">
							<form action="">
								<input type="text" name="" placeholder="Search...">
							</form>
						</div>
					</div>
					
				</div>
			</div>
			<div class="header_mid">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 logo_con">
							<a href="{{ route('satirtha.home') }}"><img src="{{ asset('frontend/images/logo.png') }}" alt=""></a>
						</div>
						<div class="col-md-9 col-sm-9 text-right">
							<div class="menu-part">
								<div id="navigation">
									<nav>
										<ul>
											<li class="current-menu-item"><a href="{{ route('satirtha.home') }}">Home </a></li>
											<li><a href="{{ route('satirtha.product') }}">Products</a>
												<!-- <ul class="sub-menu">
													<li><a href="#">Birthday Party</a></li>
													<li><a href="#">Wedding Ceremony</a></li>
												</ul> -->
											</li>
											<!-- <li><a href="{{ route('satirtha.categories') }}">Categories</a> -->
											</li>
											<li><a href="{{ route('satirtha.contact') }}">Contact</a></li>

										</ul>
									</nav>
								</div>
							</div>
							<div class="header_rihgt">
								<ul>
									<li><a href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-search"></i></a></li>
									<!-- <li><a href="#"><i class="fa fa-shopping-cart"></i><span>0</span></a></li> -->
									<!-- <li>
										<a class="join" href="{{ route('satirtha.join') }}">Join Us</a>
									</li> -->
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		 
		  <!-- The Modal -->
  <div class="modal fade" id="myModal2">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>        
        <!-- Modal body -->
        <div class="modal-body">
          <div class="row">
              <div class="col-lg-6 p-0">
                  <img src="{{ asset('frontend/images/cust-img.jpg') }}" alt="">
              </div>
              <div class="col-lg-6">
                  <h3>Create your order and a member of our team will get back to you</h3>
                  <form action="{{ route('satirtha.store-email') }}" method="POST" enctype="multipart/form-data">
				  @csrf
                      <input type="text" placeholder="Name" name="mail_name" required>
                      <input type="text" placeholder="Address" name="mail_address" required>
                      <input type="text" placeholder="Email " name="mail_email" required>
					  <select name="mail_product" class="header-product-modal-select-class" required>
							<option value="">Choose product</option>
							<option value="Metal print">Metal prints</option>
							<option value="Canvas print">Canvas prints</option>
							<option value="Acrylic block">Acrylic block</option>
							<option value="Custom hashmask print">Custom hashmask print</option>
					  </select>
                      <input type="text" placeholder="Phone (Optional)" name="mail_phone" >
                      <input type="text" placeholder="Link to image (Optional)" name="mail_image_link" >
                      <input type="text" placeholder="Link to site to be placed on QR code" name="mail_qr_code" required>
                      <div class="field" align="left">
                        <img src="{{ asset('frontend/images/file-icon.svg') }}">
                          <h4>Choose a file or drag it here</h4>
                          <input type="file" id="files" name="mail_image" required/>
                        </div>
                      <textarea name="mail_comments" id="" placeholder="Comments" required></textarea>
                      <input type="submit" value="Create">
                  </form>
              </div>
          </div>
        </div>        
      </div>
    </div>
  </div>
