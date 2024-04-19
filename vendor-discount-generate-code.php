<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system loyalty-card-section"
   style="padding-bottom:80px">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Create Discount Code</div>
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
      <div class="margin-0-auto">
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Create Discount Code</div>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Create Discount Code</div>
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
                        <button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel"
                           data-toggle="modal" data-target="#forcancle">Cancel</button>
                        <button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as
                           draft</button>
                        <button type="button" class="bttn bttn-primary ml-3 next-step">Save</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-content page_content mt-0 shop-bundel-section exmt-10">
            <div class="tab-pane active">
               <div class="row m-0">
                  <div class="col-lg-7 automated_dis_content">
                     <div
                        class="page_box mb-4 box-shodow radius-5 bg-white automated_dis_part w-100  p20 automated_dis_content">
                        <div class="automated_dis_box">
                           <label class="m-0 color-default font-weight-500 py-0">Discount Codes</label>
                           <p class="mb-4 font-14">Describe your offer with precise and meaningful words </p>
                           <div>
                              <div class="input_box">
                                 <input type="text" name="code" placeholder="e.g New year promotion" id="discount_code"
                                    class="form-control">
                              </div>
                              <div class="d-flex align-items-center justify-content-between">
                                 <div>Customer will see this in cart and at checkout</div>
                                 <p class="text-right mt-2"><a href="javascript:;"
                                       class="generat_btn ml-2 font-14">Generate code</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <label class="m-0 color-default font-weight-500 py-0">Code applys to</label>
                                 <p class="mb-4 font-14">Lorem Ipsum</p>
                              </div>
                              <div class="col-md-12">
                                 <ul class="m-0 p-0 list-unstyled d-flex justify-content-between align-items-center">
                                    <li>
                                       <div class="radio_btn_part">
                                          <label for="entire" class="d-flex align-items-center">
                                             <input type="radio" name="applies" class="radio_input mr-3" id="entire">
                                             <p>Entire order</p>
                                          </label>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="radio_btn_part">
                                          <label for="specific" class="d-flex align-items-center">
                                             <input type="radio" checked="checked" name="applies"
                                                class="radio_input mr-3" id="specific">
                                             <p>Specific collection</p>
                                          </label>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="radio_btn_part">
                                          <label for="products" class="d-flex align-items-center">
                                             <input type="radio" name="applies" class="radio_input mr-3" id="products">
                                             <p>Specific products</p>
                                          </label>
                                       </div>
                                    </li>
                                 </ul>
                                 <div id="openproductlist" class="collapse show shop-bundel-section">
                                    <div class="input-group my-3 py-2 border radius-5">
                                       <input type="hidden" name="search_param" value="all" id="search_param">
                                       <div class="search_input w-75" style="flex: 1;">
                                          <div class="search_box">
                                             <div class="top-search physical_part">
                                                <div class="physical_tabs_content">
                                                   <div class="tabs_content active " id="physical">
                                                      <div class="physical_input_box_part">
                                                         <div class="physical_input_box bg-white radius-4">
                                                            <input type="text" name=""
                                                               class="form-control bg-white border physical_input search-product w-100 m-0"
                                                               placeholder="Search Products"
                                                               style="height: 40px !important;border-radius: 0 5px 5px 0;border-color: rgba(5,34,76,0.1) !important; min-width:auto !important">

                                                            <div
                                                               class="position-absolute search-tab-big overflow-auto bg-white w-100 scroll-design"
                                                               style="max-height: 230px;">
                                                               <div class="py-2 clearfix d-flex pl-3">
                                                                  <div class="text-left">
                                                                     <p class="text-dark mb-0 font-14"><strong>Mobile
                                                                           Phone</strong></p>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11 Pro</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11 Pro Max</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class=" text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone X</a>
                                                                  </div>
                                                               </div>
                                                               <div class=" clearfix d-flex searchlist">
                                                                  <div class=" text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone XR</a>
                                                                  </div>
                                                               </div>
                                                               <div class="py-2 clearfix d-flex pl-3">
                                                                  <div class="text-left">
                                                                     <p class="text-dark mb-0 font-14"><strong>Mobile
                                                                           Phone</strong></p>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11 Pro</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class="text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone 11 Pro Max</a>
                                                                  </div>
                                                               </div>
                                                               <div class="clearfix d-flex searchlist">
                                                                  <div class=" text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone X</a>
                                                                  </div>
                                                               </div>
                                                               <div class=" clearfix d-flex searchlist">
                                                                  <div class=" text-left get">
                                                                     <a class="text-dark mb-0 font-14"
                                                                        data-toggle="collapse"
                                                                        data-target="#sell">iPhone XR</a>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="product-details mt-5">
                                       <div class="d-inline-block text-center w-100">
                                          <div class="d-inline-block text-left">
                                             <h3 class="mt-0 font-nunito font-weight-bold text-muted">
                                                <span class="product-name">Amazing Modern Chair (Orange)</span>
                                                <span style="color: #42d29d;background-color: rgba(66,210,157,.18);"
                                                   class="badge badge-success-lighten ml-4 font-12 px-3 py-2">Instock</span>
                                             </h3>
                                             <p class="mb-1 font-nunito text-muted">Added Date: 09/12/2018</p>
                                             <p class="font-16">
                                                <span class="text-warning fa fa-star"></span>
                                                <span class="text-warning fa fa-star"></span>
                                                <span class="text-warning fa fa-star"></span>
                                                <span class="text-warning fa fa-star"></span>
                                                <span class="text-warning fa fa-star"></span>
                                             </p>
                                          </div>
                                       </div>
                                       <div
                                          class="d-flex justify-content-center align-items-center px-5 product-outter">
                                          <div class="product-image product-image-section overflow-hidden">
                                             <a href="javascript: void(0);"
                                                class="text-center main-product-image d-block mb-4">
                                                <img src="assets/images/products/product-5.jpg" class="img-fluid"
                                                   style="max-width: 200px;" alt="Product-img" />
                                             </a>
                                             <div class="owl-carousel horizontal-slider product-options-image">
                                                <a href="javascript: void(0);" data-price="$43.30"
                                                   data-name="Amazing Modern Chair">
                                                   <img src="assets/images/products/product-1.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$13.30"
                                                   data-name="Biblio Plastic Armchair">
                                                   <img src="assets/images/products/product-6.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$33.30"
                                                   data-name="Designer Awesome Chair">
                                                   <img src="assets/images/products/product-3.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$149.30"
                                                   data-name="Unpowered aircraft">
                                                   <img src="assets/images/products/product-5.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$84.30"
                                                   data-name="Amazing Modern Chair">
                                                   <img src="assets/images/products/product-1.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$16.30"
                                                   data-name="Biblio Plastic Armchair">
                                                   <img src="assets/images/products/product-6.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$98.30"
                                                   data-name="Designer Awesome Chair">
                                                   <img src="assets/images/products/product-3.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                                <a href="javascript: void(0);" data-price="$879.30"
                                                   data-name="Unpowered aircraft">
                                                   <img src="assets/images/products/product-5.jpg"
                                                      class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                                      alt="Product-img" />
                                                </a>
                                             </div>
                                          </div>
                                          <div class="product-price ml-5">
                                             <div class="font-14 font-nunito font-weight-600 text-muted">Retail Price:
                                             </div>
                                             <h3 class="font-24 font-nunito bundle-product-price text-muted font-weight-bold"
                                                data-price="$139.58"> $139.58</h3>
                                             <button type="button"
                                                class="btn bg-danger-new text-white add-this-bundle-product py-2 mt-3 font-14"
                                                data-name="Unpowered aircraft">+ Add </button>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow  bg-white radius-5 w-100  p20">
                        <div class="automated_dis_box ">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <label class="form_label m-0 color-default font-weight-500 py-0">Types</label>
                                 <p class="mb-4 font-14">Describe your offer with precise and meaningful words </p>
                              </div>
                              <div class="col-md-12">
                                 <div class="p-0 row mx-0 list-unstyled d-flex align-items-center mb-5">
                                    <div class="px-0 col-md-3 mr-5">
                                       <div class="radio_btn_part">
                                          <label for="percentage" class="d-flex align-items-center">
                                             <input type="radio" data-toggle="perc" checked="checked" name="type"
                                                class="radio_input mr-3" id="percentage">
                                             Percentage
                                          </label>
                                       </div>
                                    </div>
                                    <div class="px-0 col-md-3 mr-5">
                                       <div class="radio_btn_part">
                                          <label for="fixed" class="d-flex align-items-center">
                                             <input type="radio" data-toggle="fixAm" name="type"
                                                class="radio_input mr-3" id="fixed">
                                             Fixed amount
                                          </label>
                                       </div>
                                    </div>
                                    <div class="px-0 col-md-3">
                                       <div class="radio_btn_part">
                                          <label for="buy" class="d-flex align-items-center">
                                             <input type="radio" name="type" class="radio_input mr-3" id="buy">
                                             Buy X get Y
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="without_buy_x">
                           <div class="automated_dis_box pb-0">
                              <div class="row align-items-center">
                                 <div class="col-md-12 mb-3">
                                    <label class="form_label">Value</label>
                                 </div>
                                 <div class="col-md-12">
                                    <p class="mb-1">Discount value</p>
                                    <div class="col-md-6 p-0 dis_box_part">
                                       <div class="input-group dis_input" id="perc">
                                          <input type="text" class="form-control border-right-0">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">%</div>
                                          </div>
                                       </div>

                                       <div class="input-group dis_input" id="fixAm">
                                          <input type="text" class="form-control border-right-0">
                                          <div class="input-group-prepend">
                                             <div class="input-group-text">€</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="buy_x">
                           <div class="automated_dis_box">
                              <div class="row align-items-center">
                                 <div class="col-md-12">
                                    <label class="form_label mb-3">Customer buys</label>
                                 </div>
                                 <div class="col-md-12">
                                    <ul class="m-0 p-0 list-unstyled">
                                       <li>
                                          <div class="radio_btn_part quantity_btn_part">
                                             <label for="customer1" class="d-flex align-items-center">
                                                <input type="radio" data-toggle="minimum_q" checked="checked" name="min"
                                                   class="radio_input mr-3" id="customer1">
                                                <p>Minimum quantity of items</p>
                                             </label>
                                          </div>
                                       </li>
                                       <li>
                                          <div class="radio_btn_part quantity_btn_part">
                                             <label for="customer2" class="d-flex align-items-center">
                                                <input type="radio" data-toggle="minimum_p" name="min"
                                                   class="radio_input mr-3" id="customer2">
                                                <p>Minimum purchase amount</p>
                                             </label>
                                          </div>
                                       </li>
                                    </ul>
                                    <div class="row mt-3 quantity_box_part">
                                       <div class="col-md-6 form-group dis_input" id="minimum_q">
                                          <p class="mb-1">Quantity</p>
                                          <input type="number" name="quantity" class="form-control">
                                       </div>
                                       <div class="col-md-6 form-group dis_input" id="minimum_p">
                                          <p class="mb-1">Amount</p>
                                          <div class="input-group amount_input m-0 position-relative">
                                             <input type="text" class="form-control border-right-0" placeholder="0.00">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text">%</div>
                                             </div>
                                          </div>
                                       </div>
                                       <!--<div class="col-md-8 form-group">
														<p class="mb-1">Any items from</p>
														<select class="form-control w-100 specific_select">
															<option data-v="Search products">Specific items from</option>
															<option data-v="Search collection">Specific collections</option>
														</select>
													</div>-->
                                       <!--<div class="col-md-12">
														<div class="input-group">
															<div class="search_input" style="flex: 1;">
																<div class="search_box">
																	<div class="search_box">
																		<div class="top-search physical_part">
																			<div class="physical_tabs_content">
																				<div class="tabs_content active " id="physical">
																					<div class="physical_input_box_part">
																						<div class="physical_input_box bg-white radius-4">
																							<input type="text" name="" placeholder="Search products" style="z-index: 99;height: 40px !important;border-radius: 5px 0 0 5px;" class="form-control physical_input search-product search_pro m-0">
																							<div class="position-absolute search-tab-big backtab" style="left:inherit; right:0px"><img src="assets/img/header-icon/close-hover.svg" class="w-h-22px"></div>
																							<div class="position-absolute search-tab-big bg-white w-100">
																								<div class="py-2 clearfix d-flex pl-3">
																									<div class="text-left">
																										<p class="text-dark mb-0 font-14"><strong>Products</strong></p>
																									</div>
																								</div>
																								<div class="max-h-320 overflow-auto scroll-design">
																									<div class="clearfix d-flex align-items-center border-top hover-effect px-3 py-3">
																										<div class="radio_btn_part chec_c_btn_part mr-2">
																											<input type="checkbox" name="img" id="img3" class="radio_input">
																											<label for="img3" class="d-flex align-items-center">
																											<span class="radio_btn">
																											</span>
																											</label>
																										</div>
																										<div class="d-flex align-items-center pro_img">
																											<figure class="mr-3">
																												<img src="assets/img/product.png" alt="">
																											</figure>
																											<p>IPhone</p>
																										</div>
																									</div>
																									<div class="clearfix d-flex border-top hover-effect px-3 py-3">
																										<div class="radio_btn_part chec_c_btn_part mr-2">
																											<input type="checkbox" name="img" id="img4" class="radio_input">
																											<label for="img4" class="d-flex align-items-center">
																											<span class="radio_btn">
																											</span>
																											</label>
																										</div>
																										<div class="d-flex align-items-center pro_img">
																											<figure class="mr-3">
																												<img src="assets/img/product.png" alt="">
																											</figure>
																											<p>IPhone</p>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<span class="fa fa-search search_icon"></span>
																	</div>
																</div>
															</div>
															<div class="input-group-append">
																<a href="#" data-toggle="modal" data-target="#browse" class="btn font-12 btn-primary">Browse</a>
															</div>
														</div>
													</div>-->
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!--<div class="automated_dis_box pb-0 mt-4">
										<div class="row align-items-center">
											<div class="col-md-12">
												<label class="form_label mb-3 font-weight-600">Customer gets</label>
											</div>
											<div class="col-md-12">
												<p>Customer must add the quantity of items specified below to their</p>
												<div class="row mt-3 ">
													<div class="col-md-4 form-group">
														<p class="mb-1">Quantity</p>
														<input type="number" name="quantity" class="form-control">
													</div>
													<div class="col-md-8 form-group">
														<p class="mb-1">Any items from</p>
														<select class="form-control w-100 specific_select">
															<option data-v="Search products">Specific products</option>
															<option data-v="Search collection">Specific collections</option>
														</select>
													</div>
													<div class="col-md-12">
														<div class="input-group">
															<div class="search_input" style="flex: 1;">
																<div class="search_box">
																	<div class="search_box">
																		<div class="top-search physical_part">
																			<div class="physical_tabs_content">
																				<div class="tabs_content active " id="physical">
																					<div class="physical_input_box_part">
																						<div class="physical_input_box bg-white radius-4">
																							<input type="text" name="" placeholder="Search products" style="z-index: 99;height: 40px !important;border-radius: 5px 0 0 5px;" class="form-control physical_input search-product search_pro m-0">
																							<div class="position-absolute search-tab-big backtab" style="left:inherit; right:0px"><img src="assets/img/header-icon/close-hover.svg" class="w-h-22px"></div>
																							<div class="position-absolute search-tab-big bg-white w-100">
																								<div class="py-2 clearfix d-flex pl-3">
																									<div class="text-left">
																										<p class="text-dark mb-0 font-14"><strong>Products</strong></p>
																									</div>
																								</div>
																								<div class="max-h-320 overflow-auto scroll-design">
																									<div class="clearfix d-flex align-items-center border-top hover-effect px-3 py-3">
																										<div class="radio_btn_part chec_c_btn_part mr-2">
																											<input type="checkbox" name="img" id="img3" class="radio_input">
																											<label for="img3" class="d-flex align-items-center">
																											<span class="radio_btn">
																											</span>
																											</label>
																										</div>
																										<div class="d-flex align-items-center pro_img">
																											<figure class="mr-3">
																												<img src="assets/img/product.png" alt="">
																											</figure>
																											<p>IPhone</p>
																										</div>
																									</div>
																									<div class="clearfix d-flex border-top hover-effect px-3 py-3">
																										<div class="radio_btn_part chec_c_btn_part mr-2">
																											<input type="checkbox" name="img" id="img4" class="radio_input">
																											<label for="img4" class="d-flex align-items-center">
																											<span class="radio_btn">
																											</span>
																											</label>
																										</div>
																										<div class="d-flex align-items-center pro_img">
																											<figure class="mr-3">
																												<img src="assets/img/product.png" alt="">
																											</figure>
																											<p>IPhone</p>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<span class="fa fa-search search_icon"></span>
																	</div>
																</div>
															</div>
															<div class="input-group-append">
																<a href="#" data-toggle="modal" data-target="#browse" class="btn font-12 btn-primary">Browse</a>
															</div>
														</div>
													</div>
												</div>
												<ul class="m-0 my-3 p-0 list-unstyled">
													<li>
														<div class="radio_btn_part buy_x_radio">
															<label for="perDis" class="d-flex align-items-center">
																<input type="radio" data-toggle="percDiscount" checked="checked" name="dis" class="radio_input mr-3" id="perDis">
																<p>Percentage</p>
															</label>
														</div>
													</li>
													<li>
														<div class="radio_btn_part buy_x_radio">
															<label for="free" class="d-flex align-items-center">
																<input type="radio" data-toggle="free" name="dis" class="radio_input mr-3" id="free">
																<p>Free</p>
															</label>
														</div>
													</li>
												</ul>
												<div class="dis_box_part buy_x_input col-md-6 p-0">
													<div class="input-group x_input" id="percDiscount">
														<input type="text" class="form-control">
														<div class="btn-static h-50px">%</div>
													</div>
													<div class="buy_x_input">
														<div class="x_input" id="free">
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>-->
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow radius-5 bg-white automated_dis_part w-100  p20">
                        <div class="automated_dis_box ">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <label class="m-0 color-default font-weight-500 py-0">Minimum requirements</label>
                                 <p class="mb-4 font-14">Lorem Ipsum</p>
                              </div>
                              <div class="col-md-12">
                                 <ul class="m-0 p-0 list-unstyled input_show">
                                    <li class="mb-1">
                                       <div class="radio_btn_part">
                                          <label for="amount" class="d-flex align-items-center">
                                             <input type="radio" data-v="min1" name="requirements"
                                                class="radio_input mr-3" id="amount">
                                             <p>Minimum purchase amount (€)</p>
                                          </label>
                                          <div class="amount_input_part" id="min1" style="display: none;">
                                             <div class="amount_input position-relative">
                                                <input type="text" id="pur_amount" name="amount" class="form-control">
                                                <div class="btn-static h-50px">€</div>
                                             </div>
                                             <p class="m-0">Applies only to selected products.</p>
                                          </div>
                                       </div>
                                    </li>
                                    <li class="mb-1">
                                       <div class="radio_btn_part input_show">
                                          <label for="quantity" class="d-flex align-items-center">
                                             <input type="radio" data-v="min2" name="requirements"
                                                class="radio_input mr-3" id="quantity">
                                             <p>Minimum quantity of items</p>
                                          </label>
                                          <div class="amount_input_part" id="min2" style="display: none;">
                                             <div class="amount_input">
                                                <input type="text" id="pur_amount" name="amount" class="form-control">
                                             </div>
                                             <p class="m-0">Applies only to selected products.</p>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!--<div class="page_box mb-4 box-shodow radius-5 bg-white automated_dis_part w-100  p20">
								<div class="automated_dis_box">
									<div class="row align-items-center">
										<div class="col-md-12">
											<label class="form_label font-weight-500">Usage limits</label>
											<div class=" bg-secondary p-2" style="margin: 15px -20px 20px;">
												<div class="d-flex align-items-center px-2">
													<p class="pl-3 font-14">Lorem Ipsum </p>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<ul class="m-0 p-0 list-unstyled usage_limits_checkbox">
												<li>
													<div class="checkbox_btn_part">
														<input type="checkbox" checked="checked" name="type" class="checkbox_input d-none" id="limit1">
														<label for="limit1" class="d-flex align-items-center">
															<span class="checkbox_btn text-center d-flex justify-content-center align-items-center">
															<i class="fa fa-check font-12"></i>
															</span>
															<p class="ml-3">Limit number of times this discount can be used in total</p>
														</label>
														<div class="amount_input mt-2">
															<input type="text" name="" class="form-control">															
														</div>
													</div>
												</li>
												<li class="mt-2">
													<div class="checkbox_btn_part">
														<input type="checkbox" name="type" class="checkbox_input d-none" id="limit2">
														<label for="limit2" class="d-flex align-items-center">
															<span class="checkbox_btn text-center d-flex justify-content-center align-items-center">
															<i class="fa fa-check font-12"></i>
															</span>
															<p class="ml-3">Limit to one use per customer</p>
														</label>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>-->
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <label class="m-0 color-default font-weight-500 py-0">Active dates</label>
                                 <p class="mb-4 font-14">Lorem Ipsum</p>
                              </div>
                              <div class="col-md-12 usage_limits_checkbox">
                                 <div class="row">
                                    <div class="hidemobile w-100">
                                       <div class="col-md-6  col-sm-12 col-12">
                                          <p class="mb-1">Start date</p>
                                          <div class="input-group mb-3">
                                             <input type="text" placeholder="Start date" name="date"
                                                class="form-control" id="sDate">
                                             <div class="btn-static h-50px"><img src="assets/img/add_date.svg"
                                                   class="custImgwdh"></div>
                                          </div>
                                       </div>
                                       <div class="col-md-6  col-sm-12 col-12 delivery-date">
                                          <p class="mb-1">Start time (CET)</p>
                                          <div class="custom-calender-outter d-flex">
                                             <div class="year w-50">
                                                <div class="our-custom-select h-40 w-100 custom-select-sale"
                                                   style="padding-top: 5px !important;">
                                                   <div class="selected-value">
                                                      <div class="sel-value font-14 font-blue overflow-hidden"
                                                         style="white-space:nowrap">Hours</div>
                                                      <input type="text" name="year" value="" class="d-none">
                                                   </div>
                                                   <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                      style="height:300PX;">
                                                      <li>Hours</li>
                                                      <li>0.00</li>
                                                      <li>1.00</li>
                                                      <li>2.00</li>
                                                      <li>3.00</li>
                                                      <li>4.00</li>
                                                      <li>5.00</li>
                                                      <li>6.00</li>
                                                      <li>7.00</li>
                                                      <li>8.00</li>
                                                      <li>9.00</li>
                                                      <li>10.00</li>
                                                      <li>11.00</li>
                                                      <li>12.00</li>
                                                      <li>13.00</li>
                                                      <li>14.00</li>
                                                      <li>15.00</li>
                                                      <li>16.00</li>
                                                      <li>17.00</li>
                                                      <li>18.00</li>
                                                      <li>19.00</li>
                                                      <li>20.00</li>
                                                      <li>21.00</li>
                                                      <li>22.00</li>
                                                      <li>23.00</li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="month mx-3 w-50">
                                                <div class="our-custom-select h-40 w-100 custom-select-sale"
                                                   style="padding-top: 5px !important;">
                                                   <div class="selected-value">
                                                      <div class="sel-value font-14 font-blue overflow-hidden"
                                                         style="white-space:nowrap">Minutes</div>
                                                      <input type="text" name="month" value="" class="d-none">
                                                   </div>
                                                   <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                      style="height:300PX;">
                                                      <li value="">Minutes</li>
                                                      <li>5min</li>
                                                      <li>10min</li>
                                                      <li>15min</li>
                                                      <li>20min</li>
                                                      <li>25min</li>
                                                      <li>30min</li>
                                                      <li>35min</li>
                                                      <li>40min</li>
                                                      <li>45min</li>
                                                      <li>50min</li>
                                                      <li>55min</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mobile-view">
                                       <?php include 'start-date-time.php';?>
                                    </div>
                                 </div>
                                 <div class="radio_btn_part checkbox_btn_part">
                                    <input type="checkbox" name="type" class="checkbox_input d-none" id="setEnddate">
                                    <label for="setEnddate" class="d-flex align-items-center">
                                       <span
                                          class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                          <i class="fa fa-check font-12"></i>
                                       </span>
                                       <p class="ml-3">Set end date</p>
                                    </label>
                                 </div>
                                 <div class="row end_date_part">
                                    <div class="hidemobile w-100">
                                       <div class="col-md-6  col-sm-12 col-12">
                                          <p class="mb-1">End date</p>
                                          <div class="input-group mb-3">
                                             <input type="text" placeholder="End date" name="date" class="form-control"
                                                id="eDate">
                                             <div class="btn-static h-50px"><img src="assets/img/add_date.svg"
                                                   class="custImgwdh"></div>
                                          </div>
                                       </div>
                                       <div class="col-md-6  col-sm-12 col-12 clockpicker">
                                          <p class="mb-1">End time (CET)</p>
                                          <div class="custom-calender-outter d-flex">
                                             <div class="year w-50">
                                                <div class="our-custom-select h-40 w-100 custom-select-sale"
                                                   style="padding-top: 5px !important;">
                                                   <div class="selected-value">
                                                      <div class="sel-value font-14 font-blue overflow-hidden"
                                                         style="white-space:nowrap">Hours</div>
                                                      <input type="text" name="year" value="" class="d-none">
                                                   </div>
                                                   <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                      style="height:300PX;">
                                                      <li>Hours</li>
                                                      <li>0.00</li>
                                                      <li>1.00</li>
                                                      <li>2.00</li>
                                                      <li>3.00</li>
                                                      <li>4.00</li>
                                                      <li>5.00</li>
                                                      <li>6.00</li>
                                                      <li>7.00</li>
                                                      <li>8.00</li>
                                                      <li>9.00</li>
                                                      <li>10.00</li>
                                                      <li>11.00</li>
                                                      <li>12.00</li>
                                                      <li>13.00</li>
                                                      <li>14.00</li>
                                                      <li>15.00</li>
                                                      <li>16.00</li>
                                                      <li>17.00</li>
                                                      <li>18.00</li>
                                                      <li>19.00</li>
                                                      <li>20.00</li>
                                                      <li>21.00</li>
                                                      <li>22.00</li>
                                                      <li>23.00</li>
                                                   </ul>
                                                </div>
                                             </div>
                                             <div class="month mx-3 w-50">
                                                <div class="our-custom-select h-40 w-100 custom-select-sale"
                                                   style="padding-top: 5px !important;">
                                                   <div class="selected-value">
                                                      <div class="sel-value font-14 font-blue overflow-hidden"
                                                         style="white-space:nowrap">Minutes</div>
                                                      <input type="text" name="month" value="" class="d-none">
                                                   </div>
                                                   <ul class="options scroll-dropdown scroll-design scrollbox set-drpdn-big"
                                                      style="height:300PX;">
                                                      <li value="">Minutes</li>
                                                      <li>5min</li>
                                                      <li>10min</li>
                                                      <li>15min</li>
                                                      <li>20min</li>
                                                      <li>25min</li>
                                                      <li>30min</li>
                                                      <li>35min</li>
                                                      <li>40min</li>
                                                      <li>45min</li>
                                                      <li>50min</li>
                                                      <li>55min</li>
                                                   </ul>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="mobile-view">
                                       <?php include 'end-date-time.php';?>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 ">
                     <div class="sticky-top" style="z-index:9;top: 170px;">
                        <div class="page_box p-0 mb-4 box-shodow bg-white radius-5">
                           <div class="p20 border-bottom">
                              <label class="mb-5 color-default font-weight-500 py-0">Discount Title: New Year
                                 Promo</label>
                              <div class="d-flex align-items-center">
                                 <span class="badge avilable-type pb-2 mr-4 font-nunito px-3 py-2"
                                    style="background:#C6FFC1;color:#000">Ongoing</span>
                                 <span class="badge font-nunito pb-2 px-3 py-2"
                                    style="background:#C6FFC1;color:#000">Ends on 20. July 2021</span>
                              </div>
                           </div>
                           <div class="d-flex flex-wrap align-items-center p20 border-bottom">
                              <span class="badge badge-info-lighten font-13 mr-4">10% off Entire Order</span>
                              <span class="badge badge-info-lighten font-13 mr-4">Minumun Purchase $20,00</span>
                           </div>
                           <div class="p20 pb-0 bundle-product-list show-budlelist">
                              <div class="d-flex added-bundle-product flex-wrap ps-carousel--nav owl-slider"
                                 data-owl-auto="false" data-owl-loop="false" data-owl-speed="3000" data-owl-nav="true"
                                 data-owl-dots="false" data-owl-gap="10" data-owl-item="3" data-owl-item-xs="1"
                                 data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="3"
                                 data-owl-duration="1000" data-owl-mousedrag="on">
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-1.jpg"
                                       style="height: 115px;border: 0;" />
                                    <p class="mt-3 text-muted font-13 line-height-default">Modern Chari Orange</p>
                                    <p class="mt-3 text-muted font-18 font-weight-600 line-height-default">$139.58</p>
                                 </div>
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-2.jpg"
                                       style="height: 115px;border: 0;" />
                                    <p class="mt-3 text-muted font-13 line-height-default">Modern Chari Orange</p>
                                    <p class="mt-3 text-muted font-18 font-weight-600 line-height-default">$139.58</p>
                                 </div>
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-3.jpg"
                                       style="height: 115px;border: 0;" />
                                    <p class="mt-3 text-muted font-13 line-height-default">Modern Chari Orange</p>
                                    <p class="mt-3 text-muted font-18 font-weight-600 line-height-default">$139.58</p>
                                 </div>
                              </div>
                           </div>
                           <div class="p20 pt-0 text-center">
                              <div class="bg-secondary text-left p-3 radius-5 mt-4">
                                 <p class="font-16 text-secondary font-weight-500 border-bottom">You add 3 Products </p>
                                 <div class="d-flex mt-3 line-height-default">
                                    <div class="font-14 text-secondary mr-2">Modern Chari Orange</div>
                                    <div class="font-14 text-secondary font-weight-500 ml-auto">$30,00</div>
                                 </div>
                                 <div class="d-flex mt-3 line-height-default">
                                    <div class="font-14 text-secondary mr-2">Modern Chari Orange</div>
                                    <div class="font-14 text-secondary font-weight-500 ml-auto">$90,00</div>
                                 </div>
                                 <div class="d-flex mt-3 line-height-default">
                                    <div class="font-14 text-secondary mr-2">Modern Chari Orange</div>
                                    <div class="font-14 text-secondary font-weight-500 ml-auto">$30,00</div>
                                 </div>
                                 <div class="border-top border-bottom mt-3 pb-3">
                                    <div class="d-flex align-items-center line-height-default pt-3">
                                       <div class="font-16 font-weight-500 mr-2 w-100">Current Price</div>
                                       <div class="font-16 font-weight-500 ml-auto text-right" style="width:100px">
                                          $150,00</div>
                                    </div>
                                    <div class="d-flex align-items-center line-height-default pt-3 text-danger">
                                       <div class="font-16 font-weight-500mr-2 w-100">Discount</div>
                                       <div class="font-16 font-weight-500 ml-auto text-right" style="width:100px">-
                                          50,00</div>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center line-height-default pt-3">
                                    <div class="font-16 font-weight-500 mr-2 w-100">Your Price</div>
                                    <div class="font-16 font-weight-500 ml-auto text-right" style="width:100px">$100,00
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="p20 pt-0 text-center">
                              <div
                                 class="bg-blue-dp py-2 cursor-pointer hover-light-blue justify-content-center d-flex">
                                 <span class="mr-4">
                                    <img src="img/megaphone.svg" width="26">
                                 </span>
                                 <p class="font-15 align-self-center">Make Advertising for this Item </p>
                              </div>
                           </div>
                        </div>
                        <div class="page_box p20 mb-4 box-shodow bg-white radius-5">
                           <div class="summary_box_footer">
                              <h4 class="title text-uppercase">Can’t combine with other discounts</h4>
                              <p>Customers Won`t be able to enter a code if this discount is applied at checkout.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="sticky-footer">
	By clicking of List Discount Button you agree to StayToEnjoy’s <a href="">Terms &amp; Conditions</a>  <span class="text-primary">|</span>  <a href="">Help Center</a> <a href="" class="btn btn-primary ml-3 font-12">List Discount</a>
</div>-->

<div class="modal fade add_product_modal" id="browse">
   <div class="modal-dialog">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Add products</h4>
            <div class="menuhover ml-auto " data-dismiss="modal">
               <img src="assets/img/header-icon/close.svg" class="w-h-30px rounded-circle imgnone">
               <img src="assets/img/header-icon/close-hover.svg" class="w-h-30px rounded-circle imgblock"
                  id="clsoespeech">
            </div>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <div class="product_content">
               <div class="search_box">
                  <input type="text" name="search" class="form-control">
                  <span class="fa fa-search search_icon"></span>
               </div>
               <div class="product_table_part">
                  <div class="table-responsive">
                     <table class="table m-0">
                        <tr>
                           <td>
                              <div class="radio_btn_part chec_c_btn_part">
                                 <input type="checkbox" name="img" id="img" class="radio_input">
                                 <label for="img" class="d-flex align-items-center">
                                    <span class="radio_btn">
                                    </span>
                                 </label>
                              </div>
                           </td>
                           <td>
                              <div class="d-flex align-items-center pro_img">
                                 <figure>
                                    <img src="assets/img/product.png" alt="">
                                 </figure>
                                 <p>IPhone</p>
                              </div>
                           </td>
                           <td>
                              0 available
                           </td>
                           <td>
                              €500.00
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            <a href="#" class="btn btn-primary">Add</a>
         </div>
      </div>
   </div>
</div>
<!-- Add Country Modal -->
<div class="modal fade add_product_modal" id="countryModal">
   <div class="modal-dialog shadow-lg radius-5">
      <div class="modal-content">
         <!-- Modal Header -->
         <div class="modal-header">
            <h4 class="modal-title">Edit countries</h4>
            <div class="menuhover ml-auto " data-dismiss="modal">
               <img src="assets/img/header-icon/close.svg" class="w-h-30px rounded-circle imgnone" width="30">
               <img src="assets/img/header-icon/close-hover.svg" class="w-h-30px rounded-circle imgblock"
                  id="clsoespeech" width="30">
            </div>
         </div>
         <!-- Modal body -->
         <div class="modal-body">
            <div class="product_content">
               <div class="search_box mb-4 " style="position: relative;">
                  <input type="text" name="search" placeholder="Search Countries" class="form-control pl-5">
                  <span class="fa fa-search search_icon position-absolute"
                     style="top: 50%;transform: translateY(-50%);left: 10px;"></span>
               </div>
               <div class="countries_table">
                  <div class="table-responsive">
                     <table class="table m-0">
                        <tr>
                           <td>
                              <div class="d-flex align-items-center">
                                 <div class="usage_limits_checkbox ">
                                    <div class="checkbox_btn_part">
                                       <input type="checkbox" checked="checked" name="type"
                                          class="checkbox_input d-none" id="country1">
                                       <label for="country1" class="d-flex m-0 align-items-center">
                                          <span
                                             class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                             <i class="fa fa-check font-12"></i>
                                          </span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center country_flag">
                                    <figure class="flag mb-0 mx-3">
                                       <img src="assets/img/germany.svg" alt="">
                                    </figure>
                                    <span>Germany</span>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center">
                                 <div class="usage_limits_checkbox ">
                                    <div class="checkbox_btn_part">
                                       <input type="checkbox" name="type" class="checkbox_input d-none" id="country2">
                                       <label for="country2" class="d-flex m-0 align-items-center">
                                          <span
                                             class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                             <i class="fa fa-check font-12"></i>
                                          </span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center country_flag">
                                    <figure class="flag mb-0 mx-3">
                                       <img src="assets/img/greece.png" alt="">
                                    </figure>
                                    <span>Greece</span>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center">
                                 <div class="usage_limits_checkbox ">
                                    <div class="checkbox_btn_part">
                                       <input type="checkbox" name="type" class="checkbox_input d-none" id="country3">
                                       <label for="country3" class="d-flex m-0 align-items-center">
                                          <span
                                             class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                             <i class="fa fa-check font-12"></i>
                                          </span>
                                       </label>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center country_flag">
                                    <figure class="flag mb-0 mx-3">
                                       <img src="assets/img/germany.svg" alt="">
                                    </figure>
                                    <span>Germany</span>
                                 </div>
                              </div>
                           </td>
                        </tr>
                        <tr>
                           <td>
                              <div class="d-flex align-items-center">
                                 <div class="d-flex align-items-center country_flag">
                                    <div class="usage_limits_checkbox ">
                                       <div class="checkbox_btn_part">
                                          <input type="checkbox" name="type" class="checkbox_input d-none"
                                             id="country4">
                                          <label for="country4" class="d-flex m-0 align-items-center">
                                             <span
                                                class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                                <i class="fa fa-check font-12"></i>
                                             </span>
                                          </label>
                                       </div>
                                    </div>
                                    <figure class="flag mb-0 mx-3">
                                       <img src="assets/img/greece.png" alt="">
                                    </figure>
                                    <span>Greece</span>
                                 </div>
                              </div>
                           </td>
                        </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>
         <!-- Modal footer -->
         <div class="modal-footer border-0">
            <button type="button" class="btn btn-save cancel-btn p-3 shadow-none mr-2 trigger-close"
               data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3 trigger-close"
               data-dismiss="modal">Done</button>
         </div>
      </div>
   </div>
</div>


<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
