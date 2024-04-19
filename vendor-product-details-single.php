<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system product-details">
   <?php include("side-navigation.php");?>
   <div class="right-side-section pb-5">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Product Details</div>
         </div>
         <div id="wrapper" class="search-mobile">
            <!-- Header -->
            <div class="header_inner">
               <!-- search icon for mobile -->
               <div class="header-search-icon" uk-toggle="target: #wrapper ; cls: show-searchbox"> </div>
               <div class="header_search"><i class="fa fa-search"></i>
                  <input value="" type="text" class="form-control" placeholder="Search for Friends , Videos and more.."
                     autocomplete="off" aria-expanded="false">
                  <div uk-drop="mode: click" class="header_search_dropdown uk-drop">

                     <h4 class="search_title"> Recently </h4>
                     <ul>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-1.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Erica Jones </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-2.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Coffee Addicts </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-3.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Mountain Riders </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-4.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Property Rent And Sale </div>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                              <img src="assets/images/avatars/avatar-5.jpg" alt="" class="list-avatar">
                              <div class="list-name"> Erica Jones </div>
                           </a>
                        </li>
                     </ul>

                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="margin-0-auto p-4">
         <!--<div class="font-26 font-weight-500 pt-4 pb-5 desktop-view">Product Details</div>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Products</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Product Details</div>
                     <img src="assets/images/icons/info-for-header.svg" alt="" class="info-icon">
                     <span class="tooltiptext white-panel">
                        <h6>Heading Title</h6>
                        <p>Creating a lightning deal on StayToEnjoy can be very
                           lucrative. In this way, the visibility of the products can be increased immensely without
                           much
                           effort, which
                           means that sales, profit and ranking can skyrocket without any effort.</p>
                     </span>
                  </div>
               </div>
               <div class="clearfix d-inline-block">
                  <div class="row">
                     <div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
                        <button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content page_content mt-0 shop-bundel-section exmt-10">
            <div class="card">
               <div class="card-body">
                  <!--<div class="row p-5 border-bottom justify-content-center">
							<div class="search-product w-50">
								<input type="text" name="search" placeholder="Search Product..." class="from-group m-0 default-placeholder radius-5 bg-secondary">
							</div>
						</div>-->
                  <div class="row p-5 product-outter">
                     <div class="col-lg-5 product-image-section">
                        <!-- Product image -->
                        <a href="javascript: void(0);" class="text-center main-product-image d-block mb-4">
                           <img src="assets/images/products/product-5.jpg" class="img-fluid w-100"
                              style="max-width: 280px;" alt="Product-img" />
                        </a>
                        <div class="owl-carousel horizontal-slider product-options-image justify-content-center">
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-1.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-6.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-3.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-5.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-1.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-6.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-3.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                           <a href="javascript: void(0);">
                              <img src="assets/images/products/product-5.jpg" class="img-fluid img-thumbnail p-2"
                                 style="max-width: 75px;" alt="Product-img" />
                           </a>
                        </div>
                     </div>
                     <!-- end col -->
                     <div class="col-lg-7 product-description-section">
                        <form class="ps-lg-4">
                           <!-- Product title -->
                           <h3 class="mt-0 text-muted font-nunito font-weight-bold">Amazing Modern Chair (Orange)</h3>
                           <p class="mb-1 text-muted font-nunito">Added Date: 09/12/2018</p>
                           <p class="font-16">
                              <span class="text-warning fa fa-star"></span>
                              <span class="text-warning fa fa-star"></span>
                              <span class="text-warning fa fa-star"></span>
                              <span class="text-warning fa fa-star"></span>
                              <span class="text-warning fa fa-star"></span>
                           </p>
                           <!-- Product stock -->
                           <div class="mt-5">
                              <h4><span style="color: #42d29d;background: rgba(66,210,157,.18);"
                                    class="badge badge-success-lighten font-13 px-3">Instock</span></h4>
                           </div>
                           <!-- Product description -->
                           <div class="mt-5">
                              <h6 class="font-14 text-muted font-nunito font-weight-bold">Retail Price:</h6>
                              <h3 class="text-muted font-nunito"> $139.58</h3>
                           </div>
                           <!-- Quantity -->
                           <!--<div class="mt-5">
										<h6 class="font-14 text-muted font-nunito font-weight-bold">Quantity</h6>
										<div class="d-flex">
											<input type="number" min="1" value="1" class="form-control" placeholder="Qty" style="width: 90px;">
											<button type="button" class="btn btn-danger-new font-14 text-white ml-2"><i class="fa fa-shopping-cart mr-2 text-white"></i> Add to cart</button>
										</div>
									</div>-->
                           <!-- Product description -->
                           <div class="mt-5">
                              <h6 class="font-14 text-muted font-nunito font-weight-bold">Description:</h6>
                              <p class=" text-muted font-nunito">It is a long established fact that a reader will be
                                 distracted by the readable content of a page when looking at its layout. The point of
                                 using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as
                                 opposed to using 'Content here, content here', making it look like readable English.
                              </p>
                           </div>
                           <!-- Product information -->
                           <div class="mt-5">
                              <div class="row">
                                 <div class="col-md-4">
                                    <h6 class="font-14 text-muted font-nunito font-weight-bold">Available Stock:</h6>
                                    <p class="text-sm lh-150 text-muted font-nunito">1784</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h6 class="font-14 text-muted font-nunito font-weight-bold">Number of Orders:</h6>
                                    <p class="text-sm lh-150 text-muted font-nunito">5,458</p>
                                 </div>
                                 <div class="col-md-4">
                                    <h6 class="font-14 text-muted font-nunito font-weight-bold">Revenue:</h6>
                                    <p class="text-sm lh-150 text-muted font-nunito">$8,57,014</p>
                                 </div>
                              </div>
                           </div>
                        </form>
                     </div>
                     <!-- end col -->
                  </div>
                  <!-- end row-->
                  <div class="table-responsive mb-5 mt-5">
                     <table class="table table-bordered table-centered mb-0">
                        <thead class="table-light">
                           <tr>
                              <th class="font-nunito text-muted text-capitalize font-15" style="background: #eef2f7;">
                                 Outlets</th>
                              <th class="font-nunito text-muted text-capitalize font-15" style="background: #eef2f7;">
                                 Price</th>
                              <th class="font-nunito text-muted text-capitalize font-15" style="background: #eef2f7;">
                                 Stock</th>
                              <th class="font-nunito text-muted text-capitalize font-15" style="background: #eef2f7;">
                                 Revenue</th>
                           </tr>
                        </thead>
                        <tbody style="border: 1px solid #e4e7ea;">
                           <tr>
                              <td class="font-nunito text-muted">ASOS Ridley Outlet - NYC</td>
                              <td class="font-nunito text-muted">$139.58</td>
                              <td>
                                 <div class="progress-w-percent mb-0">
                                    <span class="font-nunito text-muted progress-value">478 </span>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-success" role="progressbar" style="width: 56%;"
                                          aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="font-nunito text-muted">$1,89,547</td>
                           </tr>
                           <tr>
                              <td class="font-nunito text-muted">Marco Outlet - SRT</td>
                              <td class="font-nunito text-muted">$149.99</td>
                              <td>
                                 <div class="progress-w-percent mb-0">
                                    <span class="font-nunito text-muted progress-value">73 </span>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-danger" role="progressbar" style="width: 16%;"
                                          aria-valuenow="16" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="font-nunito text-muted">$87,245</td>
                           </tr>
                           <tr>
                              <td class="font-nunito text-muted">Chairtest Outlet - HY</td>
                              <td class="font-nunito text-muted">$135.87</td>
                              <td>
                                 <div class="progress-w-percent mb-0">
                                    <span class="font-nunito text-muted progress-value">781 </span>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-success" role="progressbar" style="width: 72%;"
                                          aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="font-nunito text-muted">$5,87,478</td>
                           </tr>
                           <tr>
                              <td class="font-nunito text-muted">Nworld Group - India</td>
                              <td class="font-nunito text-muted">$159.89</td>
                              <td>
                                 <div class="progress-w-percent mb-0">
                                    <span class="font-nunito text-muted progress-value">815 </span>
                                    <div class="progress progress-sm">
                                       <div class="progress-bar bg-success" role="progressbar" style="width: 89%;"
                                          aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                 </div>
                              </td>
                              <td class="font-nunito text-muted">$55,781</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
                  <!-- end table-responsive-->
               </div>
               <!-- end card-body-->
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
