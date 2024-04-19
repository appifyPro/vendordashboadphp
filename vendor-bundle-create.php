<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system shop-bundle">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Create Bundle</div>
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
         <!--<div class="px-4 font-26 pt-5 desktop-view">Create Bundle</div>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Create Bundle</div>
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
            <div class="tab-pane active  pb-3">
               <div class="row mx-0 mobile-m-0 shopBundle-section">
                  <div class="col-lg-7">
                     <div class="page_box p20 box-shodow bg-white radius-5" style="margin-bottom: 25px">
                        <label class="m-0 color-default font-weight-500 py-0">Basics</label>
                        <p class="font-14 mb-4">Give your Bundle a meaningful name and select a category</p>
                        <div class="form-group">
                           <label class="mb-2 color-default font-weight-500">Shop</label>
                           <input type="text" class="form-control" placeholder="Fashion Store" />
                        </div>
                        <div class="form-group">
                           <label class="mb-2 color-default font-weight-500">Bundle Name</label>
                           <input type="text" class="form-control" id="bundlename" placeholder="Type Name" />
                        </div>
                     </div>
                     <div class="page_box p20 box-shodow bg-white radius-5" style="margin-bottom: 25px">
                        <label class="m-0 color-default font-weight-500 py-0">Add Products</label>
                        <p class="font-14 mb-4">Add Items you want sell in a bundle. <a href="">Learn more</a> </p>
                        <div class="input-group my-3 ">
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
                                                         <p class="text-dark mb-0 font-14"><strong>Mobile Phone</strong>
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11 Pro</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11 Pro Max</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class=" text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone X</a>
                                                      </div>
                                                   </div>
                                                   <div class=" clearfix d-flex searchlist">
                                                      <div class=" text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone XR</a>
                                                      </div>
                                                   </div>
                                                   <div class="py-2 clearfix d-flex pl-3">
                                                      <div class="text-left">
                                                         <p class="text-dark mb-0 font-14"><strong>Mobile Phone</strong>
                                                         </p>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11 Pro</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class="text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone 11 Pro Max</a>
                                                      </div>
                                                   </div>
                                                   <div class="clearfix d-flex searchlist">
                                                      <div class=" text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
                                                            data-target="#sell">iPhone X</a>
                                                      </div>
                                                   </div>
                                                   <div class=" clearfix d-flex searchlist">
                                                      <div class=" text-left get">
                                                         <a class="text-dark mb-0 font-14" data-toggle="collapse"
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
                           <div class="d-flex justify-content-center align-items-center px-5 product-outter">
                              <div class="product-image product-image-section overflow-hidden">
                                 <a href="javascript: void(0);" class="text-center main-product-image d-block mb-4">
                                    <img src="assets/images/products/product-5.jpg" class="img-fluid"
                                       style="max-width: 200px;" alt="Product-img" />
                                 </a>
                                 <div class="owl-carousel horizontal-slider product-options-image">
                                    <a href="javascript: void(0);" data-price="$43.30" data-name="Amazing Modern Chair">
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
                                    <a href="javascript: void(0);" data-price="$149.30" data-name="Unpowered aircraft">
                                       <img src="assets/images/products/product-5.jpg"
                                          class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                          alt="Product-img" />
                                    </a>
                                    <a href="javascript: void(0);" data-price="$84.30" data-name="Amazing Modern Chair">
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
                                    <a href="javascript: void(0);" data-price="$879.30" data-name="Unpowered aircraft">
                                       <img src="assets/images/products/product-5.jpg"
                                          class="img-fluid img-thumbnail p-2" style="max-width: 50px;"
                                          alt="Product-img" />
                                    </a>
                                 </div>
                              </div>
                              <div class="product-price ml-5">
                                 <div class="font-14 font-nunito font-weight-600 text-muted">Retail Price:</div>
                                 <h3 class="font-24 font-nunito bundle-product-price text-muted font-weight-bold"
                                    data-price="$139.58"> $139.58</h3>
                                 <button type="button"
                                    class="btn bg-danger-new text-white add-this-bundle-product py-2 mt-3 font-14"
                                    data-name="Unpowered aircraft">+ Add to Bundle</button>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 box-shodow bg-white radius-5" style="margin-bottom: 25px">
                        <div class="">
                           <label class="color-default font-weight-500 py-0 m-0">Bundle Discount</label>
                           <p class="font-14 mb-4">What kind of Discount you want give </p>
                           <div class="row mb-5">
                              <div class="col-sm-12 mb-2 font-14 d-flex align-items-center">Bundle Price Total</div>
                              <div class="col-sm-5">
                                 <div class="input-group">
                                    <input type="text" class="form-control border-right-0"
                                       id="inlineFormInputGroupUsername2" placeholder="150,000">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">$</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row mb-5">
                              <div class="col-sm-12 mb-2 font-14 d-flex align-items-center">How much and what kind of
                                 discount do you want to give?</div>
                              <div class="col-sm-5">
                                 <div class="input-group">
                                    <input type="text" class="form-control border-right-0"
                                       id="inlineFormInputGroupUsername2" placeholder="Add price">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">$</div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-sm-2 font-18 h-50px d-flex justify-content-center align-items-center">
                                 <span>or</span>
                              </div>
                              <div class="col-sm-5">
                                 <div class="input-group">
                                    <input type="text" class="form-control border-right-0"
                                       id="inlineFormInputGroupUsername2" placeholder="Add percent">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">%</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="row mb-4">
                              <div class="col-sm-12 font-14 d-flex align-items-center">New Bundle Price</div>
                              <div class="col-sm-5 mt-2">
                                 <div class="input-group">
                                    <input type="text" class="form-control border-right-0"
                                       id="inlineFormInputGroupUsername2" placeholder="150,000">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">$</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 box-shodow bg-white radius-5" style="margin-bottom: 25px">
                        <label class="color-default font-weight-500 py-0 m-0">Detail Informations</label>
                        <p class="font-14 mb-4"> Add the type of Discount you want give</p>
                        <div class="pt-0">
                           <div class="row mb-3">
                              <div class="col-sm-4 font-14 d-flex align-items-center">Minimum Quantitiy</div>
                              <div class="col-sm-6"><input type="text" class="form-control" placeholder="Type Number" />
                              </div>
                           </div>
                           <div class="row mb-3">
                              <div class="col-sm-4 font-14 d-flex align-items-center">Maximum Quantitiy</div>
                              <div class="col-sm-6"><input type="text" class="form-control" placeholder="Type Number" />
                              </div>
                           </div>
                           <div class="row mb-3">
                              <div class="col-sm-4 font-14 d-flex align-items-center">Shipping Costs</div>
                              <div class="col-sm-6">
                                 <div class="input-group">
                                    <input type="text" class="form-control border-right-0"
                                       id="inlineFormInputGroupUsername2" placeholder="$50,00">
                                    <div class="input-group-prepend">
                                       <div class="input-group-text">$</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 box-shodow bg-white radius-5" style="margin-bottom: 25px">
                        <label class="color-default font-weight-500 py-0 m-0">Add Delivery Locations</label>
                        <p class="font-14 mb-4"> Add the common delivery locations</p>
                        <div class="form-group mb-0 ">
                           <ul class="tags bg-white border p-2 rounded d-flex align-items-center">
                              <li
                                 class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                 Ecommerce
                                 <span onclick="$(this).parent().remove();">x</span><input type="hidden" name="tags[]"
                                    value="Web Deisgn">
                              </li>
                              <li
                                 class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                 Computer
                                 <span onclick="$(this).parent().remove();">x</span><input type="hidden" name="tags[]"
                                    value="Web Deisgn">
                              </li>
                              <li
                                 class="addedTag font-16 addedTag bg-secondary radius-5 text-dark px-4 py-2 d-inline-block mr-3 position-relative">
                                 Smartphones
                                 <span onclick="$(this).parent().remove();">x</span><input type="hidden" name="tags[]"
                                    value="Web Deisgn">
                              </li>
                              <li class="tagAdd taglist radius-5 text-dark d-inline-block my-1">
                                 <input type="text" id="search-field" placeholder="Enter your own here"
                                    class="search-field-pro border-0 bg-none shadow-none default-placeholder p-0"
                                    style="height: 30px;">
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="page_box p20 box-shodow bg-white radius-5">
                        <label class="color-default font-weight-500 py-0 m-0">Availability</label>
                        <p class="font-14 mb-4"> How long should this bundle available?</p>
                        <div>
                           <div class="form-group mb-0 d-flex ">
                              <div>
                                 <div class="radio_btn_part pb-3 d-flex align-items-center font-16 mr-4">
                                    <input type="radio" id="ongoing" class="radio_input mr-2" href="#selectdate"
                                       data-toggle="collapse" name="date" />
                                    <span class="position-relative font-weight-500">Ongoing</span>
                                 </div>
                              </div>
                              <div class="ml-3">
                                 <div class="radio_btn_part pb-3 d-flex align-items-center font-16">
                                    <input type="radio" id="startdate" class="radio_input mr-2" href="#selectdate"
                                       data-toggle="collapse" name="date" />
                                    <span class="position-relative font-weight-500">Select Start Date and Time</span>
                                 </div>
                              </div>
                           </div>
                           <div class="collapse" id="selectdate">
                              <div class="hidemobile">
                                 <div class="row ">
                                    <div class="col-lg-6">
                                       <p class="font-14 mb-2">Set a start date</p>
                                       <div class="form-group position-relative">
                                          <input type="text" class="input-field h-50px fc-datepicker input-calendar"
                                             name="date" placeholder="Select start date" id="startDate">
                                          <div class="btn-static"><img src="assets/img/add_date.svg" class="custImgwdh">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-lg-6">
                                       <div class="form-group">
                                          <p class="font-14 mb-2">Set a start time</p>
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
                                 </div>
                              </div>
                              <div class="form-group d-flex">
                                 <div class="usage_limits_checkbox">
                                    <div class="radio_btn_part checkbox_btn_part">
                                       <input type="checkbox" name="enddate" class="checkbox_input d-none" id="enddate">
                                       <label for="enddate" class="d-flex align-items-center m-0" href="#endtime"
                                          data-toggle="collapse">
                                          <span
                                             class="checkbox_btn text-center d-flex justify-content-center align-items-center">
                                             <i class="fa fa-check font-12"></i>
                                          </span>
                                          <p class="ml-3">Set a end time</p>
                                       </label>
                                    </div>
                                 </div>
                              </div>
                              <div class="form-group position-relative collapse" id="endtime">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <p class="font-14 mb-2">Set a end date</p>
                                       <div class="form-group position-relative">
                                          <input type="text" class="input-field h-50px fc-datepicker input-calendar"
                                             name="date" placeholder="Select start date" id="end__Date">
                                          <div class="btn-static"><img src="assets/img/add_date.svg" class="custImgwdh">
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <p class="font-14 mb-2">Set a end timer</p>
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
                              </div>
                           </div>
                           <!--<div class="form-group ">
										<div class="bg-secondary text-center p-3 radius-5 font-16" style="border: 1px solid rgba(4, 93, 222, 0.27);">Your ad starts at 5PM and is running 4 days</div>
									</div>-->
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 ">
                     <div class="position-sticky zindex20 rightSideBar">
                        <div class="page_box p-0 mb-4 box-shodow bg-white radius-5">
                           <div class="border-bottom">
                              <label class="mb-2 color-default font-weight-500 p20 pb-2">
                                 Bundle Preview for Jens Store
                                 <span class="box2 shop2">Beauty & Spa</span>
                              </label>
                           </div>
                           <div class="p20 pb-0 bundle-product-list show-budlelist">
                              <div class="d-flex flex-wrap align-items-center pb-4">
                                 <p class="font-16 font-weight-500 pb-2 mr-4 px-2 summary_box1">
                                    <span class="sum_title1">My new Bundle</span>
                                 </p>
                                 <span class="badge avilable-type pb-2 mr-4 font-nunito px-3 py-2"
                                    style="display:none;background:#C6FFC1;color:#000">Ongoing</span>
                                 <!--<span class="badge font-nunito pb-2 px-3 py-2" style="display:none;background:#C6FFC1;color:#000">Ends on 20. July 2021</span>-->
                              </div>
                              <div class="d-flex added-bundle-product flex-wrap ps-carousel--nav owl-slider"
                                 data-owl-auto="false" data-owl-loop="false" data-owl-nav="true" data-owl-dots="false"
                                 data-owl-gap="10" data-owl-item="3" data-owl-item-xs="2" data-owl-item-sm="2"
                                 data-owl-item-md="5" data-owl-item-lg="3" data-owl-item-xl="3" data-owl-duration="1000"
                                 data-owl-mousedrag="on">
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-1.jpg" />
                                    <p class="mt-3 text-muted font-13 line-height-default">Modern Chari Orange</p>
                                    <p class="mt-3 text-muted font-18 font-weight-600 line-height-default">$139.58</p>
                                 </div>
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-2.jpg" />
                                    <p class="mt-3 text-muted font-13 line-height-default">Modern Chari Orange</p>
                                    <p class="mt-3 text-muted font-18 font-weight-600 line-height-default">$139.58</p>
                                 </div>
                                 <div class="productbox text-center w-100 m-0">
                                    <button class="close-red-text field-title tooltip position-change"><img
                                          src="img/close-new.svg" alt="" style="height: 10px;" /></button>
                                    <img class="mx-auto" src="assets/images/products/product-3.jpg" />
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
                                       <div class="font-16 font-weight-500mr-2 w-100">Bundle Discount</div>
                                       <div class="font-16 font-weight-500 ml-auto text-right" style="width:100px">-
                                          50,00</div>
                                    </div>
                                 </div>
                                 <div class="d-flex align-items-center line-height-default pt-3">
                                    <div class="font-16 font-weight-500 mr-2 w-100">Your Bundle Price</div>
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
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--<div class="sticky-footer">
	By clicking of List Bundle Button you agree to StayToEnjoy’s <a href="">Terms & Conditions</a>  <span class="text-primary">|</span>  <a href="">Help Center</a> <a href="" class="btn btn-primary ml-3 font-12">List Bundle</a>
</div>-->
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
