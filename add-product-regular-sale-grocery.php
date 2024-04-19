<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<!-- Content -->
<main class="main_body_content return-management-system ml-0">
	
	<div class="progress_bar_part progress-bar-custom">
		<div class="d-flex align-items-center">
			<div class="progress w-100" style="background: #d9d9d9 !important;">
				<div class="progress-bar" role="progressbar" style="width: 25%; z-index: 99;" aria-valuenow="25"
					aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
	<section class="container-fluid h-100">
		<div class="row h-100">
		<div class="mobile_verification_section verification-section payout-details shop-listing-section">
			<div class="mobile_verification_content">
				<div class="d-flex flex-wrap ">
					<!--Start: Right Side-->
					<div class="upload-step-section flow-step payout-form shop-listing mt-3 pt-1 pr-2 mr-0 w-100">
						<!--Start: Box-->
						<!---------------------------------------START MULTIPLE STEPS FOR REGULAR SALE------------------------------>
						<section class="signup-step-container  firsttab">
							<div class="wizard border-0 bg-none round-10">
								<div class="wizard-inner" style="display: none;">
									<div class="connecting-line"></div>
									<ul class="nav nav-tabs" role="tablist">
										<li role="presentation" class="active">
											<a href="#productinfo" data-toggle="tab" aria-controls="productinfo" role="tab"
												aria-expanded="true">1<span class="round-tab">1 </span> <i>Step 1</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#addfeatures" data-toggle="tab" aria-controls="addfeatures" role="tab"
												aria-expanded="false">2<span class="round-tab">2</span> <i>Step 2</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#prodprice" data-toggle="tab" aria-controls="prodprice" role="tab"><span
												class="round-tab">3</span>
											<i>Step 3</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#sizevariants" data-toggle="tab" aria-controls="sizevariants" role="tab"><span
												class="round-tab">4</span>
											<i>Step 4</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#itemvariants" data-toggle="tab" aria-controls="itemvariants" role="tab"><span
												class="round-tab">5</span>
											<i>Step 5</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#photosvideo" data-toggle="tab" aria-controls="photosvideo" role="tab"><span
												class="round-tab">6</span>
											<i>Step 6</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#manageOrder" data-toggle="tab" aria-controls="manageOrder" role="tab"><span
												class="round-tab">7</span>
											<i>Step 7</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#uploadvideo" data-toggle="tab" aria-controls="uploadvideo" role="tab"><span
												class="round-tab">8</span>
											<i>Step 8</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#shipping" data-toggle="tab" aria-controls="shipping" role="tab"><span
												class="round-tab">9</span>
											<i>Shipping</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#withdrawalprice" data-toggle="tab" aria-controls="withdrawalprice"
												role="tab"><span class="round-tab">10</span>
											<i>Withdrawal</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#calculation" data-toggle="tab" aria-controls="calculation" role="tab"><span
												class="round-tab">11</span>
											<i>Calculation</i></a>
										</li>
										<li role="presentation" class="disabled">
											<a href="#shippingcost" data-toggle="tab" aria-controls="shippingcost" role="tab"><span
												class="round-tab">12</span>
											<i>shipping cost</i></a>
										</li>
									</ul>
								</div>
								<form role="form" action="index.html" class="login-box">
									<div class="tab-content" id="main_form" style="padding-top: 0;">
										<!---------START FIRST MODULE--------->
										<div class="tab-pane active" id="productinfo">
											<div class="row mb-5 mt-3 pb-3">
												<div class="col-12 col-lg-6 m-auto d-flex pl-2">
													<a class="menuhover align-self-start tooltip position-relative" href="vendor-dashboard.php" data-slide="next">
														<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
														<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
														<span class="tooltiptext right font-12">Back to Dashboard</span>
													</a>
													<div class="px-4 font-26 font-weight-500 desktop-view pt-2">List your Product
													</div>
												</div>
											</div>

											<div class="row">
												<div class="col-12 col-lg-6 m-auto">
												<div class="bg-white round-10 shop-wrap pt-3 mb-5 pb-5 aac-index">
														<div class="index">1</div>
														<div class="position-relative mobpx-remove px-5">
															<div class="head py-3">
																<span class="d-flex-center font-20 text-dark">
																	Add Article Category
																</span>
															</div>
															<div class="grey-panel p-5">
																<div class="row">
																	<div class="col-12">
																		<div class="row align-items-center mb-5 main-category-row">
																			<div class="col-12">
																			<label class="font-16">Add Main Category</label>
																				<div class="bg-white py-4 px-4">
																					<!--<a href="javascript:void(0);" class="font-16 font-weight-400 blue-text text-muted active" data-toggle="modal" data-target="#newcategory-modal">+ Add Category</a>-->
																					<div class="top-search physical_part">
																							<div class="physical_input_box_part">
																								<div class="physical_input_box bg-secondary radius-4 dropdown">
																									<input type="text" name="" class="form-control bg-transparent border physical_input pro-input search-product w-100 m-0 dropdown-toggle" placeholder="Search Customer" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																									
																									<div class="position-absolute dropdown-menu search-tab-big customer-search-list bg-white w-100" aria-labelledby="dropdownMenuButton">
																											<ul class="list-group list-groupul categories extras-add overflow-auto scroll-design">
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Grosserie</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Fashion Women</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Electronics & Computer</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Books</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Home & Garden</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Baby Products</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Jewelry</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Pets</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Antiques</div>
																																</label>
																												</li>
																												<li class="list-group-item">
																																<label for="Small" class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
																																		<div class="product-name font-16 font-weight-500 ml-4">Art</div>
																																</label>
																												</li>
																										</ul>
																									</div>
																								</div>
																							</div>
																						</div>
																				</div>
																			</div>
																		</div>

																		<div class="row align-items-center d-none sub-cat-choose mb-5">
																			<div class="col-12">
																				<label class="font-16">Sub Category</label>
																				<div class="bg-white py-4 px-4">
																				<select class="rating-star sub-category-select py-0" name="category">
																						<option>Choose</option>
																						<option value="1">Fruits</option>
																						<option value="2">Vegetable</option>
																						<option value="3">Purses</option>
																						<option value="4">Fresh Meat</option>
																						<option value="5">Frozen Meat</option>
																						<option value="6">Milk Products</option>
																						<option value="7">Baverages</option>
																						<option value="8">Eggs</option>
																				</select>
																				</div>
																			</div>
																		</div>

																		<div class="row align-items-center d-none sub-cat-choose mb-5">
																			<div class="col-12">
																				<label class="font-16">Sub Category</label>
																				<div class="bg-white py-4 px-4">
																				<select class="rating-star sub-category-select py-0" name="Count">
																						<option>Choose</option>
																						<option value="1">Fruits</option>
																						<option value="2">Vegetable</option>
																						<option value="3">Purses</option>
																						<option value="4">Fresh Meat</option>
																						<option value="5">Frozen Meat</option>
																						<option value="6">Milk Products</option>
																						<option value="7">Baverages</option>
																						<option value="8">Eggs</option>
																				</select>
																				</div>
																			</div>
																		</div>

																		<div class="row align-items-center d-none sub-cat-choose mb-5">
																			<div class="col-12">
																				<label class="font-16">Sub Category</label>
																				<div class="bg-white py-4 px-4">
																				<select class="rating-star sub-category-select py-0" name="Count">
																						<option>Choose</option>
																						<option value="1">Fruits</option>
																						<option value="2">Vegetable</option>
																						<option value="3">Purses</option>
																						<option value="4">Fresh Meat</option>
																						<option value="5">Frozen Meat</option>
																						<option value="6">Milk Products</option>
																						<option value="7">Baverages</option>
																						<option value="8">Eggs</option>
																				</select>
																				</div>
																			</div>
																		</div>

																	</div>
																</div>
															</div>
														</div>
														<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<a type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary" href="vendor-dashboard.php">Back</a>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="bg-white round-10 shop-wrap pt-3 mb-5 mt-5 pb-5 aac-index">
														<div class="index">2</div>
														<div class="position-relative px-5">
															<div class="head py-3">
																<div class="d-flex-center font-20 text-dark">
																	How you sell the Article
																</div>
															</div>
															<div class="grey-panel p-5">
																<div class="row">
																	<div class="col-12 col-lg-6">
																		<div class="btn-group btn-group-toggle" data-toggle="buttons">
																			<label class="btn btn-primary active btn1">
																			<input type="radio" name="options" autocomplete="off" checked="">
																			Physical Product
																			</label>
																			<label class="btn btn-primary btn2 border-right border-left">
																			<input type="radio" name="options" autocomplete="off"> Digital Product
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="bg-white round-10 shop-wrap pt-3 pb-5 mt-5 aac-index">
														<div class="index">3</div>
														<div class="position-relative px-5">
															<div class="head py-3">
																<div class="d-flex-center font-20 text-dark">
																	Article Condition
																</div>
															</div>
															<div class="grey-panel p-5">
																<div class="row">
																	<div class="col-12 col-lg-6">
																		<div class="btn-group btn-group-toggle" data-toggle="buttons">
																			<label class="btn btn-primary active btn1">
																			<input type="radio" name="options" autocomplete="off" checked="">
																			New
																			</label>
																			<label class="btn btn-primary btn2 border-right border-left">
																			<input type="radio" name="options" autocomplete="off"> Used
																			</label>
																			<label class="btn btn-primary btn3">
																			<input type="radio" name="options" autocomplete="off"> Sample or exhibition pieces
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="bg-white round-10 shop-wrap pt-3 pb-5 mt-5 aac-index">
														<div class="index">4</div>
														<div class="position-relative px-5">
															<div class="head py-3">
																<div class="d-flex-center font-20 text-dark">
																	Delivery
																</div>
																<p class="font-14">If this product is not available for delivery than the customer pickup it in your store</p>
															</div>
															<div class="grey-panel px-5 py-4">
															<div class="row">
																	<div class="col-12 col-lg-2">
																	<img src="img/grocery.svg" alt="" style="width: 60px;" />
																	</div>
																	<div class="col-12 col-lg-10 d-flex">
																		<div class="categories extras-add d-flex">
																			<label for="delivery" class="extras-add-label p-0 m-0" style="background: none !important">
																						<a href="#"><span class="extras-add-title font-16 font-weight-400">Product available for delivery</span></a>
																						<input type="radio" name="productAvailable" id="delivery" class="ml-3" checked="">
																			</label>
																			<label for="pickup" class="extras-add-label p-0 m-0 ml-5" style="background: none !important">
																						<a href="#"><span class="extras-add-title font-16 font-weight-400">Product available for pickup</span></a>
																						<input type="radio" name="productAvailable" class="ml-3" id="pickup">
																			</label>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END FIRST MODULE--------->
										<!---------START SECOND MODULE--------->
										<div class="tab-pane" role="tabpanel" id="addfeatures">
											<div class="d-flex">
												<div class="lefttab-part">
														<div class="d-flex align-items-start pt-3 mb-4">
															<div class="menuhover align-self-start tooltip position-relative" id="second-slide-btn">
																<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
																<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
																<span class="tooltiptext right font-12">Back to Dashboard</span>
															</div>
															<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Product Detail Page Grocery<span class="line-height1.5 font-14 d-block">Please fill in the informations they are required to sell your products on StayToEnjoy</span>
															</div>
														</div>
														<div class="position-relative bg-white shop-wrap round-10 shop-wrap pt-0 ">
															<div class="head px-4 pt-3 pb-1">
																<div class="d-flex-center font-24 text-dark">
																	Product Detail Informations
																</div>
															</div>
															<div class="py-5 px-4 form-font">
																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class="form-group font-16 tooltip position-relative">
																			Article Name&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Type Name</span>
																			</span>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group mb-4 mt-0">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="Type Name" />
																			</div>
																		</div>
																	</div>
																</div>

																<div class="position-relative grey-panel-dark px-4 pt-4 pb-4 mb-5">
																	<div class="row">
																		<div class="col-md-3 align-self-center font-16 font-blue tooltip position-relative">
																			<span class="tooltip position-relative" >
																			Product Tax Rate&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-3">
																			<div class="input-group w-100">
																				<input type="text" class="form-control mt-0" placeholder="20">
																				<span class="cmtxt font-weight-500 font-18" id="dimension1">%</span>
																			</div>
																		</div>
																	</div>
																</div>
																<!--Add New Field-->
																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative">
																			Producer&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-3">
																			<div class="form-group">
																				<input type="text" class="form-control product-sku bg-secondary default-placeholder" value="" placeholder="Adidas, Levis e.g.">
																			</div>
																		</div>
																		<div class="col-md-3">
																			<div class="form-group">
																				<input type="text" class="form-control product-sku bg-secondary default-placeholder" value="" placeholder="Manufacturer Number">
																			</div>
																		</div>
																	</div>
																	<!--End New Field-->
																	<!--Add New Field-->
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative">
																			Brandname&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-6">
																			<div class="form-group">
																				<input type="text" class="form-control product-sku bg-secondary default-placeholder" value="" placeholder="Apple, Sony e.g.">
																			</div>
																		</div>
																	</div>
																	<!--End New Field-->
																	<!--Add New Field-->
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative">
																			Material&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-4">
																			<div class="row">
																				<div class="col-6">
																					<div class="form-check radio-check">
																							<input class="form-check-input" type="radio" name="flexRadioDefault" id="organic">
																							<span class="form-check-label" for="organic">
																									Organic
																							</span>
																					</div>
																				</div>
																				<div class="col-6">
																					<div class="form-check radio-check">
																							<input class="form-check-input" type="radio" name="flexRadioDefault" id="inorganic" checked>
																							<span class="form-check-label" for="inorganic">
																									Inorganic
																							</span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!--End New Field-->

																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative">
																			Product SKU&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group">
																				<input type="text" class="form-control product-sku bg-secondary default-placeholder"
																					value="" placeholder="STAYIN9069796573" />
																			</div>
																		</div>
																		<span class="form-group col-md-1 text-right align-self-center font-16 font-blue" data-original-title="lorem ipsum" aria-describedby="tooltip459260">
																		Barcode:&nbsp;&nbsp;
																		</span>
																		<div class="col-md-4">
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder"
																					placeholder="Barcode, UPC, ISBN, GTIN" />
																			</div>
																		</div>
																	</div>	
																</div>	
																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class=" tooltip position-relative">
																			Short Description&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																			<p class="font-12 line-height-20 font-blue">Please write short keywords here that describe your product.</p>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group pt-4">
																				<div class="row m-0">
																					<div class="col-12">
																						<div class="form-group">
																							<textarea class="form-control default-placeholder font-16 font-weight-normal" placeholder="Type here...." spellcheck="false"></textarea>
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">1</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>

																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">2</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">3</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">4</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">5</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																					</div>
																					<div class="col-md-6">
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">6</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>

																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">7</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">8</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">9</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																						<div class="d-flex align-items-center">
																							<span class="font-16 w-15">10</span>
																							<input type="text" name="short-description[0]" class="form-control default-placeholder mb-3 font-blue ml-4" placeholder="Type Name" />
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>		

																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class=" tooltip position-relative">
																			Product Description&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group bg-white">
																				<textarea rows="10" class="form-control default-placeholder font-16 font-weight-normal"
																					placeholder="Type here a full description about your product"></textarea>
																				
																			</div>
																		</div>
																	</div>
																</div>	

																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class=" tooltip position-relative">
																			Ingredients&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group">
																				<textarea rows="6" class="form-control default-placeholder font-16 font-weight-normal"
																					placeholder="Type here a full description about your product"></textarea>
																			</div>
																		</div>
																	</div>
																</div>	

																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class=" tooltip position-relative">
																			Allergen&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group bg-white">
																				<!--<textarea class="form-control default-placeholder"
																					placeholder="Type here a full description about your product"></textarea>-->
																				<div id="snow-editor" style="height: 300px;"></div>
																				
																			</div>
																		</div>
																	</div>
																</div>		

																<div class="position-relative grey-panel-dark px-4 pt-4 mb-5">
																	<!--End New Attribute-->
																	<div class="row mb-4">
																		<div class="col-md-3 align-self-center font-16 font-blue">
																			<span class=" tooltip position-relative">
																			Tags&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group mb-0 ">
																				<ul class="tags bg-white rounded py-3 px-4 d-flex align-items-center">
																					<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-flex mr-3 position-relative">Ecommerce
																					<span onclick="$(this).parent().remove();" style="margin-left: 5px;">x</span><input type="hidden" name="tags[]" value="Web Deisgn">
																					</li>
																					<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-flex mr-3 position-relative">Computer
																					<span onclick="$(this).parent().remove();" style="margin-left: 5px;">x</span><input type="hidden" name="tags[]" value="Web Deisgn">
																					</li>
																					<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-flex mr-3 position-relative">Smartphones
																					<span onclick="$(this).parent().remove();" style="margin-left: 5px;">x</span><input type="hidden" name="tags[]" value="Web Deisgn">
																					</li>
																					<li class="tagAdd taglist radius-5 text-dark d-inline-block my-1">  
																							<input type="text" placeholder="Enter your own here" class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0" style="height: 30px;">
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>
																</div>
															
																<div class="border-top bg-white text-center py-4  fixed-bottom">
																	<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																		<div>
																		<button type="button" class="second-slide-btn-click bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																		</div>
																		<div class="clearfix d-inline-block">
																			<div class="row">
																				<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																					<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																					<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																					<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END SECOND MODULE--------->
										<!---------START THIRD MODULE--------->
										<div class="tab-pane" role="tabpanel" id="prodprice">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
															<img src="assets/image/roundback.svg" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 pt-2">Additional Features
															<span class="line-height1.5 font-14 d-block">Please add specifications to your Product. This can be - Brand, Color, Dimensoin, Weight e.g. <a href="javascript:void(0);" id="learn-more-specification" class="light-blue cursor-pointer" uk-toggle="target: #learn-more-popup"> Learn more </a> </span>
														</div>
													</div>	
													<div class="position-relative py-4 bg-white round-10 shop-wrap">
														<div class="specification-wrapper pl-4 pr-4 pt-0">
															<div class="text-dark font-24">
																Specifications
															</div>
															<div class="product-specification">
																<div class="table-responsive my-5">
																	<table class="table table-bordered ps-table ps-table--specification">
																		<tbody>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="odd">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																			<tr class="even">
																				<td>
																					<input type="text" name="specification" placeholder="Add Specification" style="height: 23px;color:#000" class="form-control default-placeholder p-0 font-15 font-weight-500 bg-none">
																				</td>
																				<td>
																					<input type="text" name="specification" placeholder="Add" style="height: 23px;" class="form-control default-placeholder p-0 font-15 font-weight-normal bg-none">
																				</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<button type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="show-new-right-offer bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END THIRD MODULE--------->
										<!---------START FOURTH MODULE--------->
										<div class="tab-pane" role="tabpanel" id="sizevariants">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="position-relative shop-wrap shadow-none">
														<div class="d-flex align-items-start pt-3 mb-4">
															<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
																<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
																<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
																<span class="tooltiptext right font-12">Back to Dashboard</span>
															</div>
															<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Manage Product Prices and Variants
																<span class="line-height1.5 font-14 d-block">Please fill in the informations they are required to sell your products on StayToEnjoy </span>
															</div>
														</div>

														<div class="ps-section--shopping w-100 d-inline-block p-0 ps-invoice-details">
															<div class="w-100">
																<div class="row ">
																	<div class="col-12 col-md-4">
																		<div class="card border-0 shadow w-100 h-100">
																			<div class="card-body p-0">
																				<div class="d-flex align-items-center">
																					<div class="background-grey p-3"><img src="img/image.svg" alt="" style="width: 60px;" /></div>
																					<div class="col-6"><p class="font-16 ml-4">Salami, piccante</p></div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-12 col-md-4">
																		<div class="card border-0 shadow w-100">
																			<div class="card-body p-4">
																				<div class="row align-items-center">
																					<div class="col-4"><p class="font-16">Price gross</p></div>
																					<div class="col-6">
																						<div class="input-group">
																															<input type="text" class="form-control border-left border-top border-bottom border-right-0 bg-secondary" id="inlineFormInputGroupUsername2" placeholder="0,00">
																															<div class="input-group-prepend">
																																			<div class="input-group-text border-left-0 border-right border-top border-bottom bg-secondary">€</div>
																															</div>
																											</div>
																							</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="col-12 col-md-4">
																		<div class="card border-0 shadow w-100 pt-1">
																			<div class="card-body p-4">
																				<div class="row align-items-center">
																					<div class="col-3"><p class="font-16">Unit</p></div>
																					<div class="col-7">
																						<div class="bg-secondary-pro">
																							<form>
																								<div class="our-custom-select w-100 custom-select-sale">
																									<div class="selected-value">
																										<div class="sel-value font-16 font-blue overflow-hidden" style="white-space:nowrap">Choose</div>
																										<input type="text" name="" readonly value="All" disabled id="mainCategory"/>
																									</div>
																									<ul class="options scroll-dropdown px-4 scroll-design scrollbox set-drpdn-big" style="height:132PX;">
																										<li>Kg</li>
																										<li>gramm</li>
																										<li>Liter</li>
																										<li>PC</li>
																									</ul>
																								</div>
																							</form>
																						</div>
																																							</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="ps-section--shopping w-100 d-inline-block p-0 ps-invoice-details">
															<div class="w-100">
																<div class="row ">
																	<div class="col-12">
																		<div class="card border-0 shadow w-100">
																			<div class="card-body p-0">
																				<div class="d-flex align-items-center">
																					<div class="background-grey p-3 mr-4"><img src="img/target-audience-3.svg" alt="" style="width: 67px;" /></div>
																					<div class="target-wrap">
																						<a href="javascript:void(0);" class="font-16 font-weight-400 blue-text text-muted active" data-toggle="modal" data-target="#target-modal">Select Target Group</a>
																						<ul class="tags bg-white rounded mb-0 px-0 d-flex align-items-center">
																							<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-1 mt-2 d-inline-block mr-3 position-relative">Vegeterian / Vegan or Non vegeterian
																							<span class="close-icon"></span>
																							</li>
																							<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-1 mt-2 d-inline-block mr-3 position-relative">Sport
																							<span class="close-icon"></span>
																							</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="py-4 mt-4">
															<div class="row">
																<div class="col-md-6 col-lg-6 col-12">
																<div class="form-group mb-0 ">
																	<span class="font-16 font-blue">Predefine which variants you want</span>
																		<div class="ex-tags-input">
																			<input type="text" id="variantWant" value=""  class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0" placeholder="Add +" data-role="tagsinput" />
																		</div>
																	</div>
																</div>
																<div class="col-md-6 col-lg-6 col-12">
																<div class="form-group mb-0 ">
																	<span class="font-16 font-blue">Predefine your subvariants</span>
																	<div class="ex-tags-input">
																			<input type="text" id="variantWant" value="Ecommerce"  class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0" placeholder="Add +" data-role="tagsinput" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="py-4">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group mb-0 ">
																	<span class="font-16 font-blue">Color</span>
																		<div class="ex-tags-input">
																			<input type="text" id="variantWant" value="Ecommerce"  class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0" placeholder="Please specify which variant values you want create" data-role="tagsinput" />
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="py-4">
															<div class="row">
																<div class="col-md-12">
																	<div class="form-group mb-0 ">
																	<span class="font-16 font-blue">Size</span>
																		<div class="ex-tags-input">
																			<input type="text" id="variantWant" value="Ecommerce"  class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0" placeholder="Please specify which sub variant values you want create" data-role="tagsinput" />
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="d-block">
															<div class="d-flex align-items-start pt-5 mb-4 pl-0">
																<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Add product and variant prices
																	<span class="line-height1.5 font-14 d-block">Add your pricing options related variants</span>
																</div>
															</div>
															<div class="ps-section--shopping w-100 d-inline-block pl-0 pr-4 py-0 ps-invoice-details">
																<div class="w-100">
																	<div class="row ">
																		<div class="col-12">
																			<div class="card border-0 shadow w-100" style="overflow:unset">
																				<div class="card-body p-4">
																					<div class="row align-items-center">
																						<div class="col-12">
																							<ul class="tags bg-white rounded mb-0 px-4 d-flex align-items-center">
																								<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">80
																								<span class="close-icon" onclick="$(this).parent().remove();"></span><input type="hidden" name="tags[]" value="Web Deisgn">
																								</li>
																								<li class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">100
																								<span class="close-icon" onclick="$(this).parent().remove();"></span><input type="hidden" name="tags[]" value="Web Deisgn">
																								</li>
																								<li class="tagAdd taglist radius-5 text-dark d-inline-block my-1 position-relative">  
																										<input type="text" id="search-field" class="border-0 bg-none shadow-none p-0 bluetext-placeholder blue-text font-16" style="height: 30px;">
																										<span class="search-field-pro value-text blue-text font-16" style="">+ add weight</span>
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="d-block">
															<div class="d-flex align-items-start pt-5 mb-4 pl-0">
																<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Item Variants and prices
																	<span class="line-height1.5 font-14 d-block">Add your pricing options related variants</span>
																</div>
															</div>
															<div class="ps-section--shopping w-100 d-inline-block p-0 ps-invoice-details">
																<div class="w-100">
																	<div class="row ">
																		<div class="col-12 mb-5">
																			<div class="card border-0 shadow w-100 index-wrap" style="overflow:unset">
																			<div class="index">1</div>
																			<div class=" tooltip position-relative">
																				
																				<button class="no-hover"><span class="tooltiptext custom p-2 px-3 font-14" style="width: 120px; top: -150%; right: -5%;">Delete Product</span></button>
																			</div>
																			
																				<div class="card-body px-5 py-4">
																					<div class="form-body">
																						<h3 class="font-24 mt-3 mb-4">Salami piccante 80g</h3>
																								<form action="/action_page.php">
																												<div class="pricing-option-wrapper pr-2">
																														<div class="d-flex pcol-flex mt-2 mb-2 align-self-center">
																															<div class="col-auto pl-0 mt-4 pr-0 align-self-center">
																																<span class="col-text font-16">80g</span>
																															</div>
																															<div class="col-1 pr-1">
																																<span class="field-title font-14">Stock</span>
																																<input type="text" class="form-control border-dark" placeholder="0" name="stock">
																															</div>
																															<div class="col pr-1 pl-1">
																																				<span class="field-title font-14 tooltip position-relative">Product SKU &nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																				<input type="text" class="form-control border-dark" name="stock" placeholder="STAYIN1234567888">
																																</div>
																																<div class="col pr-1 pl-1">
																																				<span class="field-title font-14 tooltip position-relative">Barcode, EAN, ISBN &nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																				<input type="text" class="form-control border-dark" name="stock" placeholder="Type Number">
																																</div>
																															<div class="col-lg-2 pl-1 pr-1">
																																				<span class="field-title font-14 tooltip position-relative">Price (gross) &nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																				<div class="input-group">
																																								<input type="text" class="form-control border-right-0" id="inlineFormInputGroupUsername2" placeholder="0,00">
																																								<div class="input-group-prepend">
																																												<div class="input-group-text">€</div>
																																								</div>
																																				</div>
																																</div>
																																<div class="col-lg-2 pl-1">
																																				<span class="field-title font-14 tooltip position-relative">Tax Rate &nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																				<div class="input-group">
																																								<input type="text" class="form-control border-right-0" id="inlineFormInputGroupUsername2" placeholder="0,00">
																																								<div class="input-group-prepend">
																																												<div class="input-group-text">%</div>
																																								</div>
																																				</div>
																																</div>
																														</div>
																												</div>
																								</form>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="col-12 mb-5">
																			<div class="card border-0 shadow w-100 index-wrap" style="overflow:unset">
																			<div class="index">2</div>
																			<div class=" tooltip position-relative">
																				
																				<button class="no-hover"><span class="tooltiptext custom p-2 px-3 font-14" style="width: 120px; top: -150%; right: -5%;">Delete Product</span></button>
																			</div>
																				<div class="card-body px-5 py-4">
																					<div class="form-body">
																						<h3 class="font-24 mt-3 mb-4">Salami piccante 100g</h3>
																									<form action="/action_page.php">
																													<div class="pricing-option-wrapper pr-2">
																															<div class="d-flex pcol-flex mt-2 mb-2 align-self-center">
																																<div class="col-auto pl-0 mt-4 pr-0 align-self-center">
																																	<span class="col-text font-16">100g</span>
																																</div>
																																<div class="col-1 pr-1">
																																	<span class="field-title font-14">Stock</span>
																																	<input type="text" class="form-control border-dark" placeholder="0" name="stock">
																																</div>
																																<div class="col pr-1 pl-1">
																																					<span class="field-title font-14 tooltip position-relative">Product SKU&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																					<input type="text" class="form-control border-dark" name="stock" placeholder="STAYIN1234567888">
																																	</div>
																																	<div class="col pr-1 pl-1">
																																					<span class="field-title font-14 tooltip position-relative">Barcode, EAN, ISBN&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																					<input type="text" class="form-control border-dark" name="stock" placeholder="Type Number">
																																	</div>
																																<div class="col-lg-2 pl-1 pr-1">
																																					<span class="field-title font-14 tooltip position-relative">Price <span class="lightGrey-text font-14">(gross)</span>&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																					<div class="input-group">
																																									<input type="text" class="form-control border-right-0" id="inlineFormInputGroupUsername2" placeholder="0,00">
																																									<div class="input-group-prepend">
																																													<div class="input-group-text">€</div>
																																									</div>
																																					</div>
																																	</div>
																																	<div class="col-lg-2 pl-1">
																																					<span class="field-title font-14 tooltip position-relative">Tax Rate &nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																																					<div class="input-group">
																																									<input type="text" class="form-control border-right-0" id="inlineFormInputGroupUsername2" placeholder="0,00">
																																									<div class="input-group-prepend">
																																													<div class="input-group-text">%</div>
																																									</div>
																																					</div>
																																	</div>
																															</div>
																													</div>
																									</form>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<button type="button" class="hide-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="hide-new-right-offer bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
											
										</div>
										<!---------END FOURTH MODULE--------->
										<!---------START FIFTH MODULE--------->
										<div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="itemvariants">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="image-back-old-right-offer menuhover align-self-start tooltip position-relative">
															<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Add Pictures<span class="line-height1.5 font-14 d-block">Please fill in the informations they are required to sell your products on StayToEnjoy </span>
														</div>
													</div>
													<div class="bg-white round-10 shop-wrap py-3 mb-5 ml-4">
														<div class="position-relative px-5 py-3 pricing-option-wrapper bg-white">
															<div class="index">1</div>
															<div class="image-upload-area">
																<div class="d-flex mobile-flex-column">
																	<div class="w-100">
																		<div class="border-box left-rounded-0 border-0">
																			<div class="row">
																				<div class="col-12">
																					<h4 class="font-18">Men T-Shirt</h4>
																					<div class="d-flex color-icon align-items-center">
																						<img src="img/chromatic.svg" class="mr-3" alt="" />
																						<p class="font-16">White</p>
																					</div>
																				</div>
																			</div>
																			<div class="row mt-4">
																				<div class="col-12 col-lg-2 pr-0">
																					<div id="product" class="carousel list-carousel" data-ride="carousel"
																						data-interval="false">
																						<div class="carousel-inner">
																							<div class="carousel-item active default-img" href="assets/img/demo_backgorun.png">
																								<img src="assets/img/demo_backgorun.png">
																							</div>
																						</div>
																						<div class="gallery-picture">Gallery Picture</div>
																					</div>
																				</div>
																				<div class="col-12 col-lg-10">
																					<div class="img-gallery-wrapper img-gallery-new-ui pt-0 pr-0 pl-0">
																						<div data-simplebar>
																							<ul id="upload_your_picture" class="cursor-pointer">
																								<li class="upload_image_div">
																									<div class="img-box"><img src="img/add-image.svg" /></div>
																									<div class="dropbtn">
																										<span class="dropdown">
																											<div class="dd-button">
																											</div>
																											<input type="checkbox" class="dd-input d-none">
																											<ul class="photo-dropdown dd-menu">
																												<li class="m-0 w-100 uploadImageTrigger hover-grey"><img src="assets/image/monitor.svg" class="mr-3 w-auto" alt="Upload from Computer" width="32"> Upload from Computer</li>
																												<li class="m-0 w-100 hover-grey"><img src="assets/image/album.svg" class="mr-3 w-auto" alt="Upload from Album" width="32"> Upload from Album</li>
																											</ul>
																										</span>
																									</div>
																									<input type="file" id="uploadPictureInput" name="upload_your_picture[]" multiple="true" class="d-none">
																								</li>
																							</ul>
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
													<div class="bg-white round-10 shop-wrap py-3 ml-4">
														<div class="position-relative px-5 py-3 pricing-option-wrapper bg-white">
															<div class="index">2</div>
															<div class="image-upload-area">
																<div class="d-flex mobile-flex-column">
																	<div class="w-100 mr-4">
																		<div class="border-box left-rounded-0 border-0">
																			<div class="row">
																				<div class="col-12">
																					<h4 class="font-18">Men T-Shirt</h4>
																					<div class="d-flex color-icon align-items-center">
																						<img src="img/chromatic.svg" class="mr-3" alt="" />
																						<p class="font-16">Black</p>
																					</div>
																				</div>
																			</div>
																			<div class="row mt-4">
																				<div class="col-12 col-lg-2 pr-0">
																					<div id="product" class="carousel list-carousel" data-ride="carousel"
																						data-interval="false">
																						<div class="carousel-inner">
																							<div class="carousel-item active default-img" href="assets/img/demo_backgorun.png">
																								<img src="assets/img/demo_backgorun.png">
																							</div>
																						</div>
																						<div class="gallery-picture">Gallery Picture</div>
																					</div>
																				</div>
																				<div class="col-12 col-lg-9">
																					<div class="img-gallery-wrapper img-gallery-new-ui pt-0 pl-0">
																						<div data-simplebar>
																							<ul id="upload_your_picture" class="cursor-pointer">
																								<li class="upload_image_div">
																									<div class="img-box"><img src="img/add-image.svg" /></div>
																									<div class="dropbtn">
																										<span class="dropdown">
																											<div class="dd-button">
																											</div>
																											<input type="checkbox" class="dd-input d-none">
																											<ul class="photo-dropdown dd-menu">
																												<li class="m-0 w-100 uploadImageTrigger hover-grey"><img src="assets/image/monitor.svg" class="mr-3 w-auto" alt="Upload from Computer" width="32"> Upload from Computer</li>
																												<li class="m-0 w-100 hover-grey"><img src="assets/image/album.svg" class="mr-3 w-auto" alt="Upload from Album" width="32"> Upload from Album</li>
																											</ul>
																										</span>
																									</div>
																									<input type="file" id="uploadPictureInput" name="upload_your_picture[]" multiple="true" class="d-none">
																								</li>
																							</ul>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<button type="button" class="image-back-old-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="image-back-old-right-offer bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END FIFTH MODULE--------->
										<!---------START SIXTH MODULE--------->
										<div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="photosvideo">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="image-new-right-offer menuhover align-self-start tooltip position-relative">
															<img src="assets/image/roundback.svg" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 pt-2">Add Video
															<span class="line-height1.5 font-14 d-block">Please fill in the informations they are required to sell your products on StayToEnjoy </span>
														</div>
													</div>
													<div class="position-relative bg-white round-10 shop-wrap">
														<div class="form-font">
															<div class="round-10 d-flex overflow-hidden for-mobile-wrap text-center m-auto">
																<div class="video-section lightBlue-bg py-3 w-25">
																	<div class="row mt-4">
																		<div class="col-12">
																			<h4 class="font-18">Men T-Shirt</h4>
																		</div>
																	</div>
																	<div class="img-gallery-wrapper img-gallery-new-ui pt-0 pr-0 pl-0">
																		<div>
																			<ul id="upload_your_picture" class="cursor-pointer justify-content-center">
																				<li class="upload_image_div w-75 p-4">
																					<div class="img-box pt-0">
																						<img class="position-relative border-0" src="img/Video-Icon.svg" style="width: 120px;" />

																						<p class="pt-4 uploadtxt blue-text font-16">+ Upload Video</p>
																					</div>
																					<div class="dropbtn" style="right: auto; top: 30px; left: -20px;">
																						<span class="dropdown">
																							<div class="dd-button">
																							</div>
																							<input type="checkbox" class="dd-input d-none">
																							<ul class="photo-dropdown dd-menu justify-content-start">
																								<li class="m-0 w-100 uploadImageTrigger hover-grey justify-content-start align-items-center d-flex"><img src="assets/image/monitor.svg" class="mr-3" alt="Upload from Computer" width="32"> Upload from Computer</li>
																								<li class="m-0 w-100 hover-grey justify-content-start align-items-center d-flex"><img src="assets/image/album.svg" class="mr-3" alt="Upload from Album" width="32"> Upload from Album</li>
																							</ul>
																						</span>
																					</div>
																					<input type="file" id="uploadPictureInput" name="upload_your_picture[]" multiple="true" class="d-none">
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>
																<div class="video-wrap my-5 w-75 text-center">
																	<div style="max-width: 550px; margin: 0px auto;">
																		<video width="100%" height="300" controls class="round-15">
																			<!--<source src="https://kafcreations.com/ste-shop/assets/media/" type="video/mp4">-->
																		</video>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="border-top bg-white text-center py-4  fixed-bottom">
														<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
															<div>
																<button type="button" class="image-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
															</div>
															<div class="clearfix d-inline-block">
																<div class="row">
																	<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																		<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																		<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																		<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END SIXTH MODULE--------->
										<!---------START SEVENTH MODULE--------->
										<div class="tab-pane round-10 shadow-none shop-wrap" role="tabpanel" id="manageOrder">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="hide-new-right-offer menuhover align-self-start tooltip position-relative">
															<img src="assets/image/roundback.svg" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 pt-2">Arrange the varient Order how it should be displayed on Frontend
															<span class="line-height1.5 font-14 d-block">Please fill in the informations they are required to sell your products on StayToEnjoy </span>
														</div>
													</div>										
													<ul class="connected-sortable droppable-area1 m-0">
														<li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between" style="cursor: grab;">
															<div class="info d-flex align-items-center">
																<div class="background-grey p-3"><img src="img/image.svg" alt="" style="width: 67px;"></div>
																<span class="font-16 ml-5">Men T-shirt white small</span>
															</div>
															<img src="assets/img/dots_grid.png" class="mr-4" width="25"/>
														</li>
														<li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between" style="cursor: grab;">
															<div class="info d-flex align-items-center">
																<div class="background-grey p-3"><img src="img/image.svg" alt="" style="width: 67px;"></div>
																<span class="font-16 ml-5">Men T-shirt white medium</span>
															</div>
															<img src="assets/img/dots_grid.png" class="mr-4" width="25"/>
														</li>
														<li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between" style="cursor: grab;">
															<div class="info d-flex align-items-center">
																<div class="background-grey p-3"><img src="img/image.svg" alt="" style="width: 67px;"></div>
																<span class="font-16 ml-5">Men T-shirt black medium</span>
															</div>
															<img src="assets/img/dots_grid.png" class="mr-4" width="25"/>
														</li>
														<li class="draggable-item shadow radius-5 bg-white p-0 mt-4 d-flex align-items-center justify-content-between" style="cursor: grab;">
															<div class="info d-flex align-items-center">
																<div class="background-grey p-3"><img src="img/image.svg" alt="" style="width: 67px;"></div>
																<span class="font-16 ml-5">Men T-shirt white large</span>
															</div>
															<img src="assets/img/dots_grid.png" class="mr-4" width="25"/>
														</li>
													</ul>
													<div class="border-top bg-white text-center py-4  fixed-bottom">
														<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
															<div>
																<button type="button" class="show-new-right-offer bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
															</div>
															<div class="clearfix d-inline-block">
																<div class="row">
																	<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																		<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																		<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																		<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END SEVENTH MODULE--------->
										<!---------START EIGHT MODULE--------->
										<div class="tab-pane round-10 shadow-none shop-wrap" role="tabpanel" id="uploadvideo">	
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="position-relative">
														<div class="d-flex align-items-start pt-3 mb-4">
															<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
																<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
																<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
																<span class="tooltiptext right font-12">Back to Dashboard</span>
															</div>
															<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Stock Overview<span class="line-height1.5 font-14 d-block">Lorem ipsum dolor dummy text here </span>
															</div>
														</div>

														<div class="bg-white round-10 shop-wrap py-3 mb-5 ml-4">
															<div class="position-relative p-5 pricing-option-wrapper bg-white">
															<div class="index">1</div>
															<div class="grey-panel p-5">
																<div class="row mb-5">
																		<div class="col-12">
																			<h4 class="font-18">Men T-Shirt</h4>
																			<div class="d-flex color-icon align-items-center">
																				<img src="img/chromatic.svg" class="mr-3" alt="">
																				<p class="font-16">White</p>
																			</div>
																		</div>
																	</div>
																<div class="row align-items-center">
																		<div class="col-12 col-lg-3 align-self-center font-blue">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Stock&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Stock</span>
																			</span>
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" readonly />
																			</div>
																		</div>
																		<div class="col-12 col-lg-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Min. order quantity&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Min. order quantity</span>
																			</span>
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" />
																			</div>
																		</div>
																		<div class="col-12 col-lg-3">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Max. order quantity&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Max. order quantity</span>
																			</span>
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" />
																			</div>
																		</div>
																	</div>

																	<div class="row align-items-center">
																		<div class="col-12 col-lg-3">
																			<div class="border-none bg-none form-control mt-3 d-flex align-self-center pl-0">
																					<div class="form-group d-flex align-items-center font-16 justify-content-between w-100 mt-2 mb-0">
																																																Free shipping
																																																<span class="switch mb-0">
																																																		<input type="checkbox" class="switchCheckbox">
																																																		<span class="slider round"></span>
																																																</span>
																																												</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
													</div>
													<div class="bg-white round-10 shop-wrap py-3 mb-5 ml-4">
															<div class="position-relative p-5 pricing-option-wrapper bg-white">
																<div class="index">2</div>
																<div class="grey-panel p-5">
																<div class="row mb-5">
																		<div class="col-12">
																			<h4 class="font-18">Men T-Shirt</h4>
																			<div class="d-flex color-icon align-items-center">
																				<img src="img/chromatic.svg" class="mr-3" alt="">
																				<p class="font-16">Black</p>
																			</div>
																		</div>
																	</div>
																<div class="row align-items-center">
																		<div class="col-12 col-lg-3 align-self-center font-blue">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Stock&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Stock</span>
																			</span>
																			<div class="form-group read-only">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" readonly />
																			</div>
																		</div>
																		<div class="col-12 col-lg-3 align-self-center font-16 font-blue">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Min. order quantity&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Min. order quantity</span>
																			</span>
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" />
																			</div>
																		</div>
																		<div class="col-12 col-lg-3">
																			<span class="form-group tooltip position-relative mb-3 font-16">
																			Max. order quantity&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">Max. order quantity</span>
																			</span>
																			<div class="form-group">
																				<input type="text" class="form-control default-placeholder" value=""
																					placeholder="0" />
																			</div>
																		</div>
																	</div>

																	<div class="row align-items-center">
																		<div class="col-12 col-lg-3">
																			<div class="border-none bg-none form-control mt-3 d-flex align-self-center pl-0">
																					<div class="form-group d-flex align-items-center font-16 justify-content-between w-100 mt-2 mb-0">
																																																Free shipping
																																																<span class="switch mb-0">
																																																		<input type="checkbox" class="switchCheckbox">
																																																		<span class="slider round"></span>
																																																</span>
																																												</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
													</div>
													<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<button type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="image-new-right-offer bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END EIGHT MODULE--------->
										<!---------START NINE MODULE--------->
										<div class="tab-pane" role="tabpanel" id="shipping" >
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
															<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Package Dimensions & Costs<span class="line-height1.5 font-14 d-block">Add the package dimensions</span>
														</div>
													</div>
													<div class="bg-white round-10 p-5 shop-wrap mb-5">
														<div class="position-relative grey-panel px-5 pt-4">
															<div class="head py-4">
																<div class="row">
																	<div class="col-md-8 text-dark font-18 d-flex-center">
																		Measures & Packaging
																	</div>
																</div>
															</div>
															<div class="form-font">
																<div class="row p-4">
																	<div class="finance  w-100 domestic-shipping">
																		<div class="row mb-4 packagewrap">
																			<div class="col-md-12">
																				<div class="form-group row mb-0 align-items-center">
																					<div class="col-md-2">
																						<span class="font-14 mt-4">Choose Dimension</span>
																					</div>
																					<div class="col-md-2 col mb-3">
																						<span class="font-14"></span>
																						<div class="our-custom-select w-100 custom-select-sale">
																							<div class="selected-value">
																								<div class="sel-value  font-16">Choose</div>
																								<input type="text" name="" readonly value="All" disabled id="select_weight" />
																							</div>
																							<ul class="options px-3 rounded">
																								<li>cm</li>
																								<li>inch</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-3 pl-0 col mb-3">
																						<span class="font-14">Width</span>
																						<div class="input-group w-100">
																							<input type="text" class="form-control mt-0" placeholder="500..." />
																							<span class="cmtxt" id="dimension1">cm</span>
																						</div>
																					</div>
																					<div class="col-md-3 pl-0 col mb-3">
																						<span class="font-14">Height</span>
																						<div class="input-group w-100">
																							<input type="text" class="form-control mt-0" placeholder="200..." />
																							<span class="cmtxt" id="dimension1">cm</span>
																						</div>
																					</div>
																					<div class="col-md-2 pl-0 col mb-3">
																						<span class="font-14">Length</span>
																						<div class="input-group w-100">
																							<input type="text" class="form-control mt-0" placeholder="100..." />
																							<span class="cmtxt" id="dimension1">cm</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

																		<div class="row mb-4 packagewrap">
																			<div class="col-md-12">
																				<div class="form-group row mb-0 align-items-center">
																					<div class="col-md-2">
																						<span class="font-14 mt-4">Choose Weight</span>
																					</div>
																					<div class="col-md-2 col mb-3">
																						<span class="font-14"></span>
																						<div class="our-custom-select w-100 custom-select-sale">
																							<div class="selected-value">
																								<div class="sel-value  font-16">Choose</div>
																								<input type="text" name="" readonly value="All" disabled id="select_weight" />
																							</div>
																							<ul class="options px-3 rounded">
																								<li>kg</li>
																								<li>lbs</li>
																							</ul>
																						</div>
																					</div>
																					<div class="col-md-3 col mb-3">
																						<span class="font-14">Weight</span>
																						<div class="input-group w-100">
																							<input type="text" class="form-control mt-0" placeholder="0.4..." />
																							<span class="cmtxt" id="dimension1">kg</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row mb-4 packagewrap">
																			<div class="col-md-12">	
																				<div class="form-group row mb-0">
																					<div class="col-md-2">
																						<span class="font-14 mt-4"></span>
																					</div>
																					<div class="col-md-2 col mb-3">
																						<span class="font-14 tooltip position-relative">Packaging unit&nbsp;&nbsp;<i
																					class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span></span>
																						<div class="input-group w-100">
																							<input type="text" class="form-control mt-0" placeholder="1" />
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-3 text-left pr-0">
																				<!-- <img src="assets/img/box.png" width="160px" /> -->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="bg-white round-10 p-5 shop-wrap">
														<div class="position-relative grey-panel px-5 pt-4">
															<div class="pl-5 pt-5 pr-5 pb-0 form-font">
																<div class="row p-3">
																	<div class="finance  w-100 domestic-shipping">
																		<div class="row mb-4 align-items-center">
																			<div class="col-md-3 align-self-center">
																				<span class="mt-2 tooltip position-relative">
																				Domestic Shipping&nbsp;&nbsp;<i
																					class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-5">
																				<div class="our-custom-select custom-select-sale">
																					<div class="selected-value">
																						<div class="sel-value font-16 overflow-hidden" style="white-space:nowrap">Flat-rate same cost for all buyers</div>
																						<input type="text" name="" readonly value="All" disabled  id="sel1"/>
																					</div>
																					<ul class="options">
																						<li>Flat-rate same cost for all buyers</li>
																						<li>No Shipping Pickup only</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-md-4">
																			</div>
																		</div>
																		<div class="row mb-4">
																			<div class="col-md-3">
																				<span class="mt-3 tooltip position-relative">
																				Package Type&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-5 form-group">
																				<div class="our-custom-select custom-select-sale">
																					<div class="selected-value">
																						<div class="sel-value font-16">Letter</div>
																						<input type="text" name="" readonly value="All" disabled  id="sel1" />
																					</div>
																					<ul class="options">
																						<li>Letter</li>
																						<li>Large Shipping Envelope</li>
																						<li>Small Package</li>
																						<li>Medium Package</li>
																						<li>Big Package</li>
																					</ul>
																				</div>
																			</div>
																			<div class="col-md-4 text-right form-group pr-0">
																			</div>
																		</div>
																		<div class="row mb-4">
																			<div class="col-md-3">
																			</div>
																			<div class="col-md-5 form-group">
																				<div class="row">
																					<div class="col-md-12 d-flex">
																						<div class="input-group">
																							<input type="text" class="form-control" placeholder="Add you own package description">
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row mb-4">
																			<div class="col-md-3">
																				<span class="mt-3  tooltip position-relative">
																				Shipping Costs&nbsp;&nbsp;<i
																					class="fa fa-info-circle text-dark font-16"></i><span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-5 form-group">
																				<div class="row">
																					<div class="col-md-12 d-flex">
																						<div class="input-group align-items-center d-flex position-relative">
																							<input type="text" class="form-control tab-font-12" placeholder=" 0,00">
																							<span class="cmtxt" id="dimension1">$</span>
																						</div>
																					</div>
																				</div>
																			</div>
																			<div class="col-md-4 text-right form-group pr-0">
																				<div class="input-group mt-3">
																					<div class="custom-control price-custom-control custom-radio">
																						<span class="radio-inline mb-0">
																						<input type="radio" name="domestic_shipping" class="d-inline-block mb-1">Free Shipping
																						</span>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row mb-4  align-items-center">
																			<div class="col-md-3 align-self-center">
																				<span class="form-group tooltip position-relative">
																				Item Location&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-5">
																				<div class="form-group">
																					<input type="text" class="form-control" value=""
																						placeholder="Item Location" />
																				</div>
																			</div>
																			<div class="col-md-4">
																				<div class="form-group">
																					<a href="#itemlocation" data-toggle="modal" data-target="#itemlocation"><button class="item-location">Change Item Location</button></a>
																				</div>
																			</div>
																		</div>
																		<!--popup-->
																		<!-- Modal -->
																		<div class="modal fade feedbackmodal" id="itemlocation" role="dialog">
																			<div class="modal-dialog modal-lg">
																				<div class="modal-content modal-content-delete">
																					<div class="modal-header">
																						<h4 class="modal-title" style="justify-content:flex-start;">         
																							Change Item Location
																						</h4>
																						<button type="button" class="close" data-dismiss="modal">&times;</button>
																					</div>
																					<div class="modal-body p-0 mb-3 mt-4 border-bottom">
																						<div class="pl-3 font-18 ">
																							<p style="padding:20px;">You want to change item location.</p>
																							<p></br>
																							<div class="row" style="padding-left:20PX;">
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="City" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Street" />
																									</div>
																								</div>
																								<div class="col-md-3">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Number" />
																									</div>
																								</div>
																							</div>
																							</p>
																							<p></br>
																							<div class="row" style="padding-left:20PX;">
																								<div class="col-md-3">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Postal Code" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Country" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="State" />
																									</div>
																								</div>
																							</div>
																							</p>
																						</div>
																					</div>
																					<div class="modal-footer border-0">
																						<button type="button" class="btn btn-primary mr-4 popdiscard" data-dismiss="modal"> Cancel</button>
																						<button type="button" class="btn btn-primary popbutton" data-dismiss="modal"> Submit</button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="modal fade feedbackmodal snooze" id="itemlocation1">
																			<div class="modal-dialog" style="border-radius: 5px !important;">
																				<div class="modal-content modal-content-delete">
																					<!-- Modal Header -->
																					<div class="modal-header">
																						<h4 class="modal-title" style="justify-content:  flex-start;">         
																							Change Item Location
																						</h4>
																						<button type="button" class="close" data-dismiss="modal">&times;</button>
																					</div>
																					<div class="modal-body p-0 mb-3 mt-4 border-bottom">
																						<div class="pl-3 font-18">
																							<p style="padding:20px;">You want to change item location.</p>
																							<p></br>
																							<div class="row" style="padding-left:20PX;">
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="City" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Street" />
																									</div>
																								</div>
																								<div class="col-md-3">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Number" />
																									</div>
																								</div>
																							</div>
																							</p>
																							<p></br>
																							<div class="row" style="padding-left:20PX;">
																								<div class="col-md-3">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Postal Code" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="Country" />
																									</div>
																								</div>
																								<div class="col-md-4">
																									<div class="form-group">
																										<input type="text" class="form-control" value=""
																											placeholder="State" />
																									</div>
																								</div>
																							</div>
																							</p>
																						</div>
																					</div>
																					<!-- Modal footer -->
																					<div class="modal-footer border-0">
																						<button type="button" class="btn btn-primary mr-4 popdiscard" data-dismiss="modal"> Cancel</button>
																						<button type="button" class="btn btn-primary popbutton" data-dismiss="modal"> Submit</button>
																					</div>
																				</div>
																			</div>
																		</div>
																		<!--popup-->
																		<div class="row mb-5">
																			<div class="col-md-3 align-self-center">
																				<span class="form-group  tooltip position-relative">
																				Delivery  Locations&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-9">
																				<div class="selectpicker-wrapper">
																						<select class="selectpicker" multiple data-live-search="true">
																								<option>Germany</option>
																								<option>Italy</option>
																								<option>European Union</option>
																						</select>
																					</div>
																			</div>
																		</div>
																		<div class="row mb-5">
																			<div class="col-md-3 align-self-center">
																				<span class="form-group  tooltip position-relative">
																				Processing Time&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-5">
																				<div class="form-group">
																					<div class="our-custom-select custom-select-sale">
																						<div class="selected-value">
																							<div class="sel-value  font-16">Select a period</div>
																							<input type="text" name="" readonly value="All" disabled id="sel1" />
																						</div>
																						<ul class="options">
																							<li>1 Week</li>
																							<li>2 Week</li>
																							<li>3 Week</li>
																							<li>4 Week</li>
																							<li>5 Week</li>
																							<li>6 Week</li>
																						</ul>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="row">
																			<div class="col-md-3 align-self-center">
																				<span class="form-group tooltip position-relative">
																				Manufacturing Country&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																				<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</span>
																			</div>
																			<div class="col-md-9">
																				<div class="selectpicker-wrapper">
																					<select class="selectpicker" multiple data-live-search="true">
																							<option>Germany</option>
																							<option>Italy</option>
																							<option>European Union</option>
																					</select>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!-- The Modal -->
																	<div class="modal form-modal" id="changeModal">
																		<div class="modal-dialog">
																			<div class="modal-content">
																				<!-- Modal Header -->
																				<div class="modal-header">
																					<h4 class="modal-title">Change Address</h4>
																					<button type="button" class="close" data-dismiss="modal"
																						style="opacity: 1;">×</button>
																				</div>
																				<!-- Modal body -->
																				<div class="modal-body">
																					<span class="mb-1">Street</span>
																					<div class="form-group">
																						<input type="text" class="form-control" placeholder="" />
																					</div>
																					<span class="mb-1">Suburb</span>
																					<div class="form-group">
																						<input type="text" class="form-control" placeholder="" />
																					</div>
																					<span class="mb-1">City</span>
																					<div class="form-group">
																						<input type="text" class="form-control" placeholder="" />
																					</div>
																					<span class="mb-1">State</span>
																					<div class="form-group">
																						<input type="text" class="form-control" placeholder="" />
																					</div>
																					<span class="mb-1">Zip Code</span>
																					<div class="form-group">
																						<input type="text" class="form-control" placeholder="" />
																					</div>
																					<span class="mb-1">Country</span>
																					<div class="form-group">
																						<Select class="form-control">
																							<option>Select Country</option>
																						</Select>
																					</div>
																				</div>
																				<div class="modal-footer">
																					<div class=" d-flex  flex-row-reverse text-right">
																						<button class="bttn bttn-primary ml-2 " style="width: 120px;">Add</button>
																						<button class="bttn btn-cancel" data-dismiss="modal">Cancel</button>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="border-top bg-white text-center py-4  fixed-bottom">
															<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
																<div>
																	<button type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
																</div>
																<div class="clearfix d-inline-block">
																	<div class="row">
																		<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																			<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																			<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																			<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END NINE MODULE--------->
										<!---------START TEN MODULE--------->
										<div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="withdrawalprice">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
															<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Withdrawal<span class="line-height1.5 font-14 d-block">
															Add your shipping details</span>
														</div>
													</div>
													<div class="position-relative bg-white round-10 p-5 shop-wrap">
														<div class="p-5 form-font grey-panel">
															<div class="row">
																<div class="finance withdrawal" style="width: 100%">
																	<div class="row p-3 align-items-center">
																		<div class="col-md-3 form-group">
																			<span class="form-group m-0 font-16 font-blue tooltip position-relative">
																			Withdrawal options <i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-4 form-group">
																			<div class="form-group">
																				<div class="col-md-12">
																					<div class="input-group ">
																						<div class="custom-control price-custom-control custom-radio" style="padding-left: 0;"
																							data-toggle="collapse" data-target="#return">
																							<label class="radio-inline">
																							<input type="radio" name="returns" class="d-inline-block mb-1">National Returns	Accepted
																							</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-4 form-group">
																			<div class="form-group">
																				<div class="col-md-12">
																					<div class="input-group ">
																						<div class="mrt-top-cust custom-control price-custom-control custom-radio" style="padding-left: 0;"
																							data-toggle="collapse" data-target="#return1">
																							<label class="radio-inline">
																							<input type="radio" name="returns" class="d-inline-block mb-1">International Returns Accepted
																							</label>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="row p-3">
																		<div class="col-md-3 form-group align-self-center">
																			<span class="font-16 font-blue tooltip position-relative">
																			Return Period&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group">
																				<div class="our-custom-select custom-select-sale">
																					<div class="selected-value">
																						<div class="sel-value font-16">Please Select</div>
																						<input type="text" name="" readonly value="All" disabled />
																					</div>
																					<ul class="options">
																						<li>Days1</li>
																						<li>Days1</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																		<div class="col-md-5">
																			<div class="form-group">
																				<input type="text" class="form-control"
																					placeholder="Add your own return period like 20 days e.g." />
																			</div>
																		</div>
																	</div>
																	<div class="row p-3">
																		<div class="col-md-3 form-group align-self-center">
																			<span class="font-16 font-blue tooltip position-relative">
																			Short Description&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																		</span>
																		</div>
																		<div class="col-md-9">
																			<div class="form-group">
																				<textarea class="form-control cust-select"
																					placeholder="Type here a short overview about your product"></textarea>
																				<!-- <div id="editor"></div> -->
																				<p class="text-right text-secondary"><small>0/55</small></p>
																			</div>
																		</div>
																	</div>
																	<div class="row p-3">
																		<div class="col-md-3 form-group align-self-center">
																			<span class="font-16 font-blue tooltip position-relative">
																			Who pays the costs&nbsp;&nbsp;<i
																				class="fa fa-info-circle text-dark font-16"></i>
																			<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																			</span>
																		</div>
																		<div class="col-md-4">
																			<div class="form-group">
																				<div class="our-custom-select custom-select-sale">
																					<div class="selected-value">
																						<div class="sel-value font-16">Please Select</div>
																						<input type="text" name="" readonly value="All" disabled />
																					</div>
																					<ul class="options">
																						<li>Customer</li>
																						<li>Vendor</li>
																					</ul>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="border-top bg-white text-center py-4  fixed-bottom">
														<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
															<div>
																<button type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
															</div>
															<div class="clearfix d-inline-block">
																<div class="row">
																	<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																		<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																		<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																		<button type="submit" class="bttn bttn-default  font-blue ml-3 sky-btn">Preview</button>
																		<button type="button" class="bttn bttn-primary ml-3 next-step">Next</button>
																	</div>
																</div>
															</div>
														</div>
													</div>	
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
										<!---------END TEM MODULE--------->
										<!---------START ELEVEN MODULE--------->
										<div class="tab-pane shadow-none shop-wrap" role="tabpanel" id="calculation">
											<div class="d-flex">
												<div class="lefttab-part">
													<div class="d-flex align-items-start pt-3 mb-4">
														<div class="menuhover align-self-start tooltip position-relative" href="#bubbleslider" data-slide="next">
															<img src="assets/image/roundback.svg" width="35" class="imgnone left_arrow prev-step"/>
															<img src="assets/image/roundback.svg" width="35" class="left_arrow prev-step imgblock"/>
															<span class="tooltiptext right font-12">Back to Dashboard</span>
														</div>
														<div class="px-4 font-26 font-weight-500 desktop-view pt-2">Calculation<span class="line-height1.5 font-14 d-block">
															Check your calculation</span>
														</div>
													</div>
													<div class="position-relative bg-white round-10 py-3 shop-wrap">
														<div class="p-5">
															<div class="row">
																<div class="col-md-12 round-10">
																	<table class="table calcu-table font-14">
																		<tbody>
																			<tr>
																				<th class=" tooltip position-relative" style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
																					Sales Price &nbsp;&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																					<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</th>
																				<th
																					style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px !important; text-align: right; border-bottom: 1px solid rgba(5, 34, 76, 0.15);"" align="right">
																					$ 530.00
																				</th>
																			</tr>
																			<tr>
																				<td class=" tooltip position-relative" style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
																					Sales fee &nbsp;&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																					<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</td>
																				<td style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);"" align="right">
																					$ 30.00
																				</td>
																			</tr>
																			<tr>
																				<td class=" tooltip position-relative" style="border: 0;background-color: #F0F2F5;padding: 15px 25px !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);">
																					Bank Transfer Costs &nbsp;&nbsp;&nbsp;<i class="fa fa-info-circle text-dark font-16"></i>
																					<span class="tooltiptext custom p-2 px-3 font-11">lorem ipsum</span>
																				</td>
																				<td style="border: 0;background-color: #F0F2F5;padding: 15px 40px 15px 15px  !important; border-bottom: 1px solid rgba(5, 34, 76, 0.15);" align="right">
																					$ 37.10
																				</td>
																			</tr>
																		</tbody>
																		<tfoot>
																			<tr>
																				<td style="background-color: #05224C; color: #fff; padding: 15px 20px !important;">The
																					The total amount credtited by sale to your account
																				</td>
																				<td
																					style="background-color: #05224C; color: #fff; padding: 15px 40px 15px 20px !important;font-size: 20px;font-weight: 600;"
																					align="right">$ 492,90</td>
																			</tr>
																		</tfoot>
																	</table>
																</div>
															</div>
														</div>
														<h4 class="btm-heading mb-0">By click on List your Product you accept the <a href="javascript:void(0);">Terms & Conditions</a> from StayToEnjoy. <a href="javascript:void(0);">Visit the
															business Center</a>
														</h4>
													</div>
													<div class="border-top bg-white text-center py-4  fixed-bottom">
														<div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
															<div>
																<button type="button" class="bttn bttn-default font-blue hover-grey  left_arrow prev-step bg-secondary">Back</button>
															</div>
															<div class="clearfix d-inline-block">
																<div class="row">
																	<div class="d-flex flex-wrap justify-content-end col-md-12 step-buttons">
																		<button type="button" name="button" class="bttn btn-default cancel  ml-3" value="Cancel" data-toggle="modal" data-target="#forcancle">Cancel</button>
																		<button type="submit" class="bttn bttn-default font-blue ml-3 gray-btn">Save as draft</button>
																		<button type="button" class="bttn bttn-primary ml-3 next-step">List your product</button>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<!-- right side summury box -->
												<div class="summary-box mobile-section text-left pb-0 bg-white radius-5">
													<div class="mobile-details text-left">
														<div class="pt-5 pl-5 pb-5 pr-2">
															<div>
																<h4 class="font-18 px-0 pt-2 pb-4">Standards for main product images</h4>
															</div>
															<div class="maxh-scroll">
															<div class="smart-mobile position-relative px-5">
																	<img src="img/glasses.png" width="100%">
																</div>
																<p class="text-justify mb-4">To sell a product on StayToEnjoy you need at least one product image. The most important image is the main image and is intended to give the buyer a first and good overview of the item. The main image appears in StayToEnjoy search results and when browsing.</p>
															
															<div class="row">
																<div class="col-12">
																	<h4 class="font-18 px-0 pt-2 pb-4">Standard sizes and background of main imgage</h4>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="50">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/phone-img.svg" width="100">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12 border-top pt-4">
																	<p class="text-justify mb-4">Main images must have a pure white background (pure white harmonizes with the search results and product detail pages on StayToEnjoy color values: (RGB: 255, 255, 255) or (Hex: FF FF FF). Product images must be at least 500 pixels wide and high, with a maximum of 3000 pixels. Also, no blurry or pixelated images with jagged edges are allowed.</p>

																		<p class="text-justify mb-4">The product must cover 85% of the entire image, measured along the longest side.</p>

																		<p class="text-justify mb-4">In addition, the product should be in the middle and in the focus of the photo. In this way you ensure that the product to be sold is the sole focus and that it is clear to the buyer which product it is.</p>

																		<p class="text-justify mb-4">Products in the main image must not be cropped by the frame edge, but must be fully featured so that the entire product is visible to the customer. The exception to this is jewelry, especially necklaces.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">2. Product images must not contain StayToEnjoy trademarks</h4>
																	<p class="text-justify">Product images on StayToEnjoy must not contain any logos, trademarks or variants of the StayToEnjoy brand or marks used by StayToEnjoy. It is also not allowed to use StayToEnjoy identifiers such as “StayToEnjoy Choice” , “Best Seller” or “Best Selling Product” on the image</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">3. Professional photographs are a must</h4>
																	<p class="text-justify">The product must have been professionally photographed for the main image. A graphic creation or an animation of the article is not permitted, as this can lead to falsification and not truthful representation.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">4. The main image may only depict the article once</h4>
																	<p class="text-justify">The main image must not show multiple versions of the item for sale. The main image must only show the product itself, with no other versions of the product.</p>
																</div>
															</div>
															<div class="row mb-5 pb-5">
																<div class="col-12 col-lg-6">
																	<div class="image-box failed-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-group.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
																<div class="col-12 col-lg-6">
																	<div class="image-box success-img radius-5 h-100 d-flex align-items-center justify-content-center">
																		<img src="img/girls-img-single.png" width="100%">
																	</div>
																	<p class="line-height-normal">Product image does not take up enough space</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">5. The main image must not contain any people</h4>
																	<p class="text-justify">In principle, people may not be shown on product images on StayToEnjoy. There are exceptions in the categories of clothing, clothing accessories, shoes, handbags, suitcases, backpacks & bags and jewelry. The requirement for these is that no models may be shown sitting, kneeling or leaning against anything. It is only permissible to depict the models standing while the focus is on the item for sale. In addition, it is not permitted in all categories to depict child models in pictures wearing swimwear or children's underwear.</p>
																</div>
															</div>
															<div class="row mb-4">
																<div class="col-12">
																<h4 class="font-18 px-0 pt-2 pb-4">6. Props are taboo in the main image</h4>
																	<p class="text-justify">The article should be in the foreground on the main image. For this reason, unnecessary props that can distract from the actual product are taboo there.</p>
																</div>
															</div>
															</div>
																
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</section>
						<!---------------------------------------END MULTIPLE STEPS------------------------------>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<!-- select size modal -->
<div class="modal selectCategory-modal fade" id="label-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header mb-4">
              <h4 class="modal-title font-24" id="myCenterModalLabel">Select Labels</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>
          <div class="modal-body pt-0 pl-4 pr-4">
          	<header class="border-bottom pb-4 mb-3">
                <div class="form-group has-search mb-3 px-4">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search Label ">
                </div>
             </header>
              <ul class="categories extras-add pr-0 w-scroll">
                <li>
                    <label for="Small" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Top Quality</span></a>
                        <input type="checkbox" id="Small" checked>
                    </label>
                </li>
                <li>
                    <label for="Medium" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Bio</span></a>
                        <input type="checkbox" id="Medium">
                    </label>
                </li>
                <li>
                    <label for="Large" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Vegan</span></a>
                        <input type="checkbox" id="Large">
                    </label>
                </li>
                <li>
                    <label for="Extra-Large" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Gluten Free</span></a>
                        <input type="checkbox" id="Extra-Large" checked>
                    </label>
                </li>
                <li>
                    <label for="X" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Vegetarian</span></a>
                        <input type="checkbox" id="X" checked>
                    </label>
                </li>
                <li>
                    <label for="XL" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Lorem Ipsum</span></a>
                        <input type="checkbox" id="XL" checked>
                    </label>
                </li>
                <li>
                    <label for="XXL" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Lorem Ipsum</span></a>
                        <input type="checkbox" id="XXL" checked>
                    </label>
                </li>
                <li>
                    <label for="XXL" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Lorem Ipsum</span></a>
                        <input type="checkbox" id="XXL" checked>
                    </label>
                </li>
                <li>
                    <label for="XXL" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Lorem Ipsum</span></a>
                        <input type="checkbox" id="XXL" checked>
                    </label>
                </li>
                <li>
                    <label for="XXL" class="extras-add-label">
                        <a class="d-block justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Lorem Ipsum</span></a>
                        <input type="checkbox" id="XXL" checked>
                    </label>
                </li>
              </ul>
          </div>  

          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- select size modal -->
<div class="modal selectCategory-modal fade" id="target-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header mb-4">
              <h4 class="modal-title font-24" id="myCenterModalLabel">Select Target Group</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>
          <div class="modal-body pt-0 pl-4 pr-4">
              <ul class="categories extras-add pr-0">
                <li>
                    <label for="Baby" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Baby</span></a>
                        <input type="checkbox" id="Baby" checked>
                    </label>
                </li>
                <li>
                    <label for="Infant" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Infant</span></a>
                        <input type="checkbox" id="Infant">
                    </label>
                </li>
                <li>
                    <label for="Kids" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Kids</span></a>
                        <input type="checkbox" id="Kids">
                    </label>
                </li>
                <li>
                    <label for="Men" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Men</span></a>
                        <input type="checkbox" id="Men" checked>
                    </label>
                </li>
                <li>
                    <label for="Women" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Women</span></a>
                        <input type="checkbox" id="Women" checked>
                    </label>
                </li>
                <li>
                    <label for="+60" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">+60</span></a>
                        <input type="checkbox" id="+60" checked>
                    </label>
                </li>
                <li>
                    <label for="All" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">All</span></a>
                        <input type="checkbox" id="All" checked>
                    </label>
                </li>
              </ul>
          </div>  

          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- select size modal -->
<div class="modal selectCategory-modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header mb-4">
              <h4 class="modal-title font-24" id="myCenterModalLabel">Select Product Sizes</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>
          <div class="modal-body pt-0 pl-4 pr-4">
              <ul class="categories extras-add pr-0">
                <li>
                    <label for="Small" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Small</span></a>
                        <input type="checkbox" id="Small" checked>
                    </label>
                </li>
                <li>
                    <label for="Medium" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Medium</span></a>
                        <input type="checkbox" id="Medium">
                    </label>
                </li>
                <li>
                    <label for="Large" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Large</span></a>
                        <input type="checkbox" id="Large">
                    </label>
                </li>
                <li>
                    <label for="Extra-Large" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Extra Large</span></a>
                        <input type="checkbox" id="Extra-Large" checked>
                    </label>
                </li>
                <li>
                    <label for="X" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">X</span></a>
                        <input type="checkbox" id="X" checked>
                    </label>
                </li>
                <li>
                    <label for="XL" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">XL</span></a>
                        <input type="checkbox" id="XL" checked>
                    </label>
                </li>
                <li>
                    <label for="XXL" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">XXL</span></a>
                        <input type="checkbox" id="XXL" checked>
                    </label>
                </li>
              </ul>
          </div>  

          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<!-- select color modal -->
<div class="modal selectCategory-modal fade" id="color-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header mb-4">
              <h4 class="modal-title font-24 font-weight-400" id="myCenterModalLabel"><img src="img/image.svg" alt="" style="width: 37px;" class="mr-4" />Add Men T-Shirt colors</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>
          <div class="modal-body pt-0 pl-4 pr-4">
              <div class="row">
              	<div class="col-12 mt-4">
					<div class="input-group add-color">
						<input type="text" class="form-control font-18" placeholder="Type color and click apply">
						<button class="btn btn-primary blue-btn blr-0">Apply</button>
					</div>
				</div>
              	<div class="col-12 mt-5">
					<span class="font-16 addedTag bg-secondary radius-5 text-dark px-5 py-2 d-inline-block mr-3 position-relative">White</span>
					<span class="font-16 addedTag bg-secondary radius-5 text-dark px-5 py-2 d-inline-block mr-3 position-relative">Black</span>
				</div>
              </div>
          </div>  

          <div class="modal-footer">
            <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Clear</button>
            <button type="button" class="btn btn-primary blue-btn">Apply all</button>
          </div>
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal selectCategory-modal selectitem-modal fade" id="newcategory-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content first-content">
          <div class="modal-header mb-4 px-4">
              <h4 class="modal-title" id="myCenterModalLabel">Main Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>
          <div class="modal-body pl-4 pt-3 pr-4">

              <header class="border-bottom pb-4 mb-3">
                <div class="form-group has-search mb-3 px-4">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search Category Name ">
                </div>
             </header>
              <ul class="categories extras-add pr-0 w-scroll">
                <li class="first-button">
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Grosserie</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Fashion Women</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Electronics & Computer</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Books</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Home & Garden</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Baby Products</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Jewelry</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Pets</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Antiques</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
                <li>
                    <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="pl-2">Art</span><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </li>
              </ul>
          </div>
      </div>
      <div class="modal-content second-content">
          <div class="modal-header mb-4 px-4">
              <h4 class="modal-title" id="myCenterModalLabel"><a href="javascript:void(0);" class="back-content mr-5 ml-3"><img src="img/next.svg" alt="" style="width: 30px;" /></a> Choose Sub Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          </div>

          <div class="modal-body pl-4 pt-3 pr-4">

              <header class="border-bottom pb-4 mb-3">
                <div class="form-group has-search mb-3 px-4">
                    <span class="fa fa-search form-control-feedback"></span>
                    <input type="text" class="form-control" placeholder="Search Category Name">
                </div>
             </header>
             <ul class="categories extras-add pr-0 w-scroll">
                <li>
                    <label for="Fruits" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Fruits</span></a>
                        <input type="checkbox" id="Fruits" checked>
                    </label>
                </li>
                <li>
                    <label for="Vegetable" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Vegetable</span></a>
                        <input type="checkbox" id="Vegetable">
                    </label>
                </li>
                <li>
                    <label for="Purses" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Purses</span></a>
                        <input type="checkbox" id="Purses">
                    </label>
                </li>
                <li>
                    <label for="Fresh-Meat" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Fresh Meat</span></a>
                        <input type="checkbox" id="Fresh-Meat" checked>
                    </label>
                </li>
                <li>
                    <label for="Frozen-Meat" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Frozen Meat</span></a>
                        <input type="checkbox" id="Frozen-Meat" checked>
                    </label>
                </li>
                <li>
                    <label for="Milk-Products" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Milk&nbsp;Products</span></a>
                        <input type="checkbox" id="Milk-Products" checked>
                    </label>
                </li>
                <li>
                    <label for="Baverages" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Baverages</span></a>
                        <input type="checkbox" id="Baverages" checked>
                    </label>
                </li>
                <li>
                    <label for="Eggs" class="extras-add-label">
                        <a class="d-flex justify-content-between align-items-center" href="javascript:void(0);"><span class="extras-add-title">Eggs</span></a>
                        <input type="checkbox" id="Eggs" checked>
                    </label>
                </li>
              </ul>
              <div class="modal-footer pt-5">
                <button type="button" class="btn btn-light btn-offWhite mr-4" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary blue-btn">Add</button>
              </div>
          </div>   
      </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade feedbackmodal snooze" id="fordelete">
	<div class="modal-dialog" style="border-radius: 5px !important;">
		<div class="modal-content modal-content-delete">
			<!-- Modal Header -->
			<div class="modal-header">
				<div class="d-flex align-items-center justify-content-between">
					<h4 class="modal-title" style="justify-content:  flex-start;">         
					Are you sure you want to delete?
					</h4>
					<button type="button" class="close" data-dismiss="modal" style="margin-top: -20px !important;">
					</button>
				</div>
			</div>
			<div class="modal-body p-0 px-4 mb-3 mt-4">
				<div class="pl-3 font-18">
					<p>If you leave this page your Product will be discarded.</p>
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer border-0">
				<button type="button" class="btn btn-save cancel-btn p-3 popdiscard trigger-close" data-dismiss="modal">Discard</button>
				<button type="button" class="btn btn-save popbutton ml-3 hover-effect blue-btn p-3" data-dismiss="modal">Delete</button>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="forcancle">
	<div class="modal-dialog modal-dialog-centered" style="border-radius: 5px !important;">
		<div class="modal-content modal-content-delete">
			<!-- Modal Header -->
			<div class="modal-header w-100">
				<div class="d-flex align-items-center justify-content-between w-100">
					<h4 class="modal-title" style="justify-content:  flex-start;">         
					Are you sure you want to delete?
					</h4>
					<button type="button" class="close" data-dismiss="modal">
					</button>
				</div>
			</div>
			<div class="modal-body p-0 px-4 mb-3 mt-4">
				<div class="pl-3 font-18">
					<p>If you leave this page your Product will be discarded.</p>
				</div>
			</div>
			<!-- Modal footer -->
			<div class="modal-footer border-0">
				<button type="button" class="btn btn-save cancel-btn p-3 popdiscard trigger-close" data-dismiss="modal">Discard</button>
				<button type="button" class="btn btn-save popbutton ml-3 hover-effect blue-btn p-3" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
<div id="learn-more-popup" class="uk-modal" uk-modal="">
	<div class="uk-modal-dialog uk-modal-body uk-margin-auto-vertical rounded p-0 relative uk-animation-slide-bottom-small">
		<div class="modal-content">
			<div class="modal-header position-relative" style="border-bottom: none;">
				<h3 class="font-24 font-semibold font-blue heading text-center" style="flex: 1;color:#000">iPhone12</h3>
				<div class="position-absolute right-0 top-0" style="padding:20px 25px;">
					<button class="menuhover position-relative uk-modal-close" type="button">					
						<img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" width="35">					
						<img src="assets/image/close_hover.svg" class="imgblock" alt="close" width="35">
					</button>	
				</div>
			</div>
			<!-- Modal body -->				
			<div class="modal-body" style="padding-top:0;">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th scope="row">Display</th>
							<td>6.1-inch Super Retina XDR display with True Tone</td>
						</tr>
						<tr class="even">
							<th scope="row">Capacity</th>
							<td>64GB, 128GB, 256GB</td>
						</tr>
						<tr>
							<th scope="row">Splash, Water, and Dust Resistant</th>
							<td>All-glass and surgical-grade stainless steel design, water and dust resistant (rated IP68)</td>
						</tr>
						<tr class="even">
							<th>Camera & Video</th>
							<td>Dual 12MP cameras with Portrait mode, Depth Control, Portrait Lighting, Smart HDR, and 4K Dolby Vision HDR video up to 60 fps</td>
						</tr>
						<tr>
							<th>Front Camera</th>
							<td>12MP TrueDepth front camera with Portrait mode, Depth Control, Portrait Lighting, and Smart HDR 3</td>
						</tr>
						<tr class="even">
							<th>Power and Battery</th>
							<td>Video playback: Up to 17 hours; Video playback (streamed): Up to 11 hours; Audio playback: Up to 65 hours, 20W adapter or higher (sold separatel); Fast-charge capable: Up to 50% charge in around 30 minutes with 20W adapter or higher</td>
						</tr>
						<tr>
							<th>In the Box</th>
							<td>iPhone with iOS 14, USB-C to Lightning Cable, Documentation</td>
						</tr>
						<tr class="even">
							<th>Height</th>
							<td>5.78 inches (146.7 mm)</td>
						</tr>
						<tr>
							<th>Width</th>
							<td>2.82 inches (71.5 mm)</td>
						</tr>
						<tr class="even">
							<th>Depth</th>
							<td>0.29 inch (7.4 mm)</td>
						</tr>
						<tr>
							<th>Weight</th>
							<td>5.78 ounces (164 grams)</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
	
<!-- / Content -->
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
