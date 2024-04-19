<?php include("html/header/head.php");?>
<?php include("html/header/headerTop.php");?>
<?php include("html/header/mobileHeader.php");?>
<?php include("html/header/footerNotification.php");?>
<?php include("html/header/footerMessage.php");?>
<?php include("html/header/footerSales.php");?>
<?php include("html/header/footerAccount.php");?>

<div class="main_body_content ml-0  bg-secondary create-ad-section return-management-system loyalty-card-section">
   <?php include("side-navigation.php");?>
   <div class="right-side-section">
      <div class="bg-white second_header body_content p-0 border-bottom mobile-view" style="z-index: 4500;">
         <div class="text-center position-relative mx-3">
            <a class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               href="vendor-dashboard.php" style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="35">
            </a>
            <div class="midtitle custom-mid align-self-center font-26">Creare one offer Voucher</div>
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
         <!--<div class="px-4 pt-5 mx-0 font-26 font-weight-500 pb-0 desktop-view">Creare one offer Voucher</div>
		<p class="d-block font-16 greyText-color px-4 lh-1 mt-2">Creating a lightning deal on StayToEnjoy can be very lucrative. In this way, the visibility of the products can be increased immensely without much effort, which means that sales, profit and ranking can skyrocket without any effort.</p>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Creare one offer Voucher</div>
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
                  <div class="col-lg-7 col-md-12">
                     <div class="page_box mb-4 box-shodow w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box pb-4">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Add customer name</h4>
                                 <p class="mb-4 font-14">Personalize the card to a custumer. If the customer is
                                    not in the list add the cusotmer to your Customer list.</p>
                              </div>
                              <div class="col-md-12">
                                 <div class="top-search physical_part">
                                    <div class="physical_input_box_part">
                                       <div
                                          class="physical_input_box bg-secondary radius-4 dropdown search-return-note">
                                          <input type="text" name=""
                                             class="form-control bg-transparent border physical_input pro-input search-product search-product-input w-100 m-0 dropdown-toggle"
                                             placeholder="Search Customer" id="dropdownMenuButton"
                                             data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                          <div
                                             class="position-absolute dropdown-menu search-tab-big customer-search-list bg-white w-100"
                                             aria-labelledby="dropdownMenuButton">
                                             <ul
                                                class="list-group list-groupul categories extras-add overflow-auto scroll-design">
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
                                                   </label>
                                                </li>
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
                                                   </label>
                                                </li>
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
                                                   </label>
                                                </li>
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
                                                   </label>
                                                </li>
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
                                                   </label>
                                                </li>
                                                <li class="list-group-item">
                                                   <label for="Small"
                                                      class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                      <div class="product-img rounded-50 overflow-hidden"><img
                                                            src="assets/image/2.png" alt="" width="50"></div>
                                                      <div class="product-name font-16 font-weight-500 ml-4">Erica Jones
                                                      </div>
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
                     </div>
                     <div class="page_box mb-4 box-shodow automated_dis_part bg-white radius-5 p20">
                        <div class="automated_dis_content">
                           <div class="automated_dis_box pb-0">
                              <h4 class="m-0 color-default font-weight-500 py-0">Generate Voucher Card ID</h4>
                              <p class="mb-4 font-14">Your Loyalty Card must have a unique ID</p>
                              <div class="grey-panel p-5 bg-grey-light">
                                 <input class="form-control color-default"
                                    placeholder="Type your own or generate code by system" id="unique_id">
                                 <p class="text-right mt-2"><a
                                       class=" font-14 cursor-pointer text-primary text-underline generat_btn">Generate
                                       code by system</a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 mb-4 box-shodow bg-white radius-5">
                        <h4 class="m-0 color-default font-weight-500 py-0">Choose Voucher Category</h4>
                        <p class="mb-4 font-14">This category is important that user can find your voucher</p>
                        <div class="grey-panel p-5 bg-grey-light">
                           <div class="form-group mb-4">
                              <p class="mb-1 ">Main category </p>
                              <div class="our-custom-select dropdown w-100 custom-select-sale pl-0">
                                 <div class="selected-value dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="font-16 overflow-hidden exlightGrey-text">Choose</div>
                                    <input type="text" name="" readonly="" value="All" disabled="" id="mainCategory">
                                 </div>
                                 <div
                                    class="options scroll-dropdown dropdown-menu px-3 scroll-design scrollbox set-drpdn-big mh-scroll">
                                    <ul class="categories extras-add pr-0">
                                       <li class="pc-radio">
                                          <input type="radio" name="main-cat" id="pv" checked="">
                                          <label for="pv" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="main-cat" id="sv">
                                          <label for="sv" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Service
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="main-cat" id="psv">
                                          <label for="psv" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                & Service Voucher</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                           <div class="form-group mb-0">
                              <p class="mb-1 ">Sub category </p>
                              <div class="our-custom-select w-100 custom-select-sale dropdown pl-0">
                                 <div class="selected-value dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="font-16 overflow-hidden exlightGrey-text">Choose</div>
                                    <input type="text" name="" readonly="" value="All" disabled="" id="mainCategory">
                                 </div>
                                 <div
                                    class="options scroll-dropdown dropdown-menu px-3 scroll-design scrollbox set-drpdn-big mh-scroll">
                                    <ul class="categories extras-add pr-0">
                                       <li class="pc-radio">
                                          <input type="radio" name="sub-cat" id="pv2" checked="">
                                          <label for="pv2" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="sub-cat" id="sv2">
                                          <label for="sv2" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Service
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="sub-cat" id="psv2">
                                          <label for="psv2" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                & Service Voucher</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 mb-4 box-shodow bg-white radius-5">
                        <h4 class="m-0 color-default font-weight-500 py-0">To what the voucher should apply?
                        </h4>
                        <p class="mb-4 font-14">Define to what products or services this voucher should apply
                        </p>
                        <div class="grey-panel p-5 bg-grey-light">
                           <div class="form-group mb-0">
                              <div class="our-custom-select w-100 custom-select-sale dropdown pl-0">
                                 <div class="selected-value dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <div class="font-16 overflow-hidden exlightGrey-text">Choose</div>
                                    <input type="text" name="" readonly="" value="All" disabled="" id="mainCategory">
                                 </div>
                                 <div
                                    class="options scroll-dropdown dropdown-menu px-3 scroll-design scrollbox set-drpdn-big mh-scroll">
                                    <ul class="categories extras-add pr-0">
                                       <li class="pc-radio">
                                          <input type="radio" name="voucher-apply" id="pv3" checked="">
                                          <label for="pv3" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="voucher-apply" id="sv3">
                                          <label for="sv3" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Service
                                                Voucher</span>
                                          </label>
                                       </li>
                                       <li class="pc-radio">
                                          <input type="radio" name="voucher-apply" id="psv3">
                                          <label for="psv3" class="extras-add-label px-4 mb-0">
                                             <span
                                                class="d-flex justify-content-between align-items-center font-16 font-blue">Product
                                                & Service Voucher</span>
                                          </label>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>

                     <div class="page_box p20 mb-4 box-shodow bg-white radius-5">
                        <h4 class="m-0 color-default font-weight-500 py-0">Voucher Description</h4>
                        <p class="mb-4 font-14">Add a clear and short decription what people can expect</p>
                        <div class="form-group grey-panel p-5 bg-grey-light">
                           <textarea class="form-control color-default" rows="3" maxlength="1075"
                              placeholder="Describe excactly for what this voucher is" id="terms"></textarea>
                        </div>
                     </div>
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Add Voucher picture</h4>
                                 <p class="mb-4 font-14">This is the picture customers we see at first on the
                                    page. Follow our picture standard. Learn more</p>
                              </div>
                              <div class="col-12">
                                 <div class="pricing-option-wrapper bg-white px-0 py-3">
                                    <div class="row">
                                       <div class="col-12 col-lg-10">
                                          <div class="img-gallery-wrapper img-gallery-new-ui pt-0 pr-0 pl-0">
                                             <div data-simplebar>
                                                <ul id="upload_your_picture" class="cursor-pointer budle-image">
                                                   <li class="upload_image_div">
                                                      <div class="img-box"><img src="img/add-image.svg" />
                                                      </div>
                                                      <div class="dropbtn">
                                                         <label class="dropdown">
                                                            <div class="dd-button">
                                                            </div>
                                                            <input type="checkbox" class="dd-input d-none">
                                                            <ul class="photo-dropdown dd-menu">
                                                               <li class="m-0 w-100 uploadImageTrigger hover-grey">
                                                                  <img src="assets/image/monitor.svg" class="mr-3"
                                                                     alt="Upload from Computer" width="32"> Upload from
                                                                  Computer
                                                               </li>
                                                               <li class="m-0 w-100 hover-grey"><img
                                                                     src="assets/image/album.svg" class="mr-3"
                                                                     alt="Upload from Album" width="32"> Upload
                                                                  from Album</li>
                                                            </ul>
                                                         </label>
                                                      </div>
                                                      <input type="file" id="uploadPictureInput"
                                                         name="upload_your_picture[]" multiple="true" class="d-none">
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
                     <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                        <div class="automated_dis_box border-0 pb-0">
                           <div class="row align-items-center">
                              <div class="col-md-12 mb-0">
                                 <h4 class="m-0 color-default font-weight-500 py-0">Voucher value</h4>
                                 <p class="mb-4 font-14">How much is the value of this voucher?</p>
                              </div>
                              <div class="col-12 p-0">
                                 <div class="pricing-option-wrapper p-0">
                                    <div class="d-flex pcol-flex align-items-center">
                                       <div class="col-12 col-lg-5">
                                          <label class="field-title font-14 tooltip position-relative">Value</label>
                                          <div class="input-group">
                                             <input type="text" class="form-control border-right-0"
                                                id="inlineFormInputGroupUsername2" placeholder="0,00">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text">€</div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="col-1 pl-0 pr-0 text-center mt-5"></div>
                                       <div class="col-12 col-lg-5">
                                          <label class="field-title font-14 tooltip position-relative">Retail
                                             Price</label>
                                          <div class="input-group">
                                             <input type="text" class="form-control border-right-0"
                                                id="inlineFormInputGroupUsername2" placeholder="0,00">
                                             <div class="input-group-prepend">
                                                <div class="input-group-text">€</div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="page_box p20 mb-4 box-shodow bg-white radius-5">
                        <h4 class="m-0 color-default font-weight-500 py-0">How long is this voucher valid?</h4>
                        <p class="mb-4 font-14">Please define a expiratioln date of this voucher</p>
                        <div class="form-group grey-panel p-5 bg-grey-light">
                           <div class="our-custom-select w-100 custom-select-sale dropdown pl-0">
                              <div class="selected-value dropdown-toggle" data-toggle="dropdown" aria-haspopup="true"
                                 aria-expanded="false">
                                 <div class="font-16 overflow-hidden exlightGrey-text">Choose</div>
                                 <input type="text" name="" readonly="" value="All" disabled="" id="mainCategory">
                              </div>
                              <div class="options scroll-dropdown dropdown-menu px-3 scroll-design scrollbox w-scroll">
                                 <ul class="categories extras-add pr-0">
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">1
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">2
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">3
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">4
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">5
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">6
                                             month</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">1
                                             Year</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">2
                                             Years</span>
                                       </label>
                                    </li>
                                    <li>
                                       <label class="extras-add-label px-4 mb-0">
                                          <span
                                             class="d-flex justify-content-between align-items-center font-16 font-blue">1Forever</span>
                                       </label>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="row submit-btn">
                        <div class="col-lg-3 col-12 ml-auto">
                           <button type="button" class="btn btn-save btn-primary hover-effect save-btn p-3 w-100"
                              data-dismiss="modal">Submit</button>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-5 ">
                     <div class="sticky-top tz-9 single-right-fix">
                        <div class="store-wrap mb-4 pr-0">
                           <div class="store store-grid store-wcfm">
                              <div class="store-header">
                                 <figure class="store-banner">
                                    <img src="assets/images/vendor/dokan/1.jpg" alt="Vendor" width="400" height="194"
                                       style="background-color: #40475E">
                                 </figure>
                                 <div class="termsVoucher">
                                    <a class="p-0" href="javascript:void(0)">
                                       <div class="menuhover tooltip header-option position-relative">
                                          <img src="assets/images/icons/terms-and-conditions-black.svg" class="imgnone"
                                             alt="">
                                          <img src="assets/images/icons/terms-and-conditions-blue.svg" class="imgblock"
                                             alt="">
                                          <span class="tooltiptext center">Terms</span>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                              <!-- End of Store Header -->
                              <div class="store-content">
                                 <h3 class="voucher-title">
                                    <a href="vendor-dokan-store.html"> <span class="unq-title-discount">Special
                                          Coupon</span></a>
                                 </h3>
                                 <h4 class="store-title mb-2">
                                    <a href="vendor-dokan-store.html">Lisa's beatuy store</a>
                                 </h4>
                                 <ul class="mt-4 seller-info-list list-style-none pl-0">
                                    <li class="store-email">
                                       Date: 12Aug.22 - 30Aug.22
                                    </li>
                                    <li class="store-phone">
                                       <h4 class="unq-box product-title mb-1 font-weight-400 text-white">
                                          Voucher Code: <span class="unq-title">EQOKWYMBRBQ</span>
                                       </h4>
                                    </li>
                                 </ul>
                                 <div
                                    class="side-nav-menu-top pb-0 px-0 mt-4 pt-3 d-flex  border-grey align-items-center">
                                    <div class="store-logo text-center" style="flex-shrink: 0;">
                                       <img src="img/header/addbusiness.png" class="radius-5" width="40" height="40">
                                    </div>
                                    <div class="store w-100 ml-4">
                                       <div class="store-change-dropdown">
                                          <button
                                             class="btn btn-secondary bg-none p-0 text-left w-100 font-weight-500 font-16 font-nunito shadow-none"
                                             type="button">
                                             Jens Behrmann
                                          </button>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End of Store Content -->
                              <div class="store-footer px-0 pb-0">
                                 <figure class="seller-brand">
                                    <div class="sb-img-wrap">
                                       <img src="assets/images/coupon-gift-card.svg" alt="Brand">
                                    </div>
                                 </figure>
                                 <div class="py-1">
                                    <div class="d-block ent-order px-5 pt-1 border-bottom pb-3">
                                       <span class="bg-secondary rounded-5 font-13 font-blue mr-1 px-4 py-2">Entire
                                          Order</span>
                                       <span class="bg-secondary rounded-5 font-13 font-blue mr-1 px-4 py-2">20
                                          %
                                          Discount</span>
                                       <span
                                          class="bg-secondary rounded-5 font-13 font-blue mr-1 px-4 py-2">Product</span>
                                       <span class="bg-secondary rounded-5 font-13 font-blue mr-1 px-4 py-2">Quantity:
                                          10</span>
                                    </div>
                                    <div class="blue-light-sky-sec">
                                       <div class="px-5 pt-4 pb-1 scroll scroll-product">
                                          <div class="row mb-3 align-items-center">
                                             <div class="col-8 col-lg-6 d-flex align-items-center">
                                                <div class="cart_avatar product-img">
                                                   <div class="cart_avatar_img"><img src="img/header/product-1.jpg"
                                                         alt="">
                                                   </div>
                                                   <button class="close-icon-cart"><i class="fa fa-times"></i></button>
                                                </div>
                                                <div class="product-name font-14 font-weight-500 font-blue-text">
                                                   Pullover
                                                   blue /
                                                   L
                                                </div>
                                             </div>
                                             <div class="col-4 col-lg-6 text-right">
                                                <div class="product-price font-14 font-weight-500 font-blue-text">
                                                   $20.00
                                                </div>
                                             </div>
                                          </div>
                                          <div class="row mb-2 align-items-center">
                                             <div class="col-8 col-lg-6 d-flex align-items-center">
                                                <div class="cart_avatar product-img">
                                                   <div class="cart_avatar_img"><img src="img/header/product-1.jpg"
                                                         alt="">
                                                   </div>
                                                   <button class="close-icon-cart"><i class="fa fa-times"></i></button>
                                                </div>
                                                <div class="product-name font-14 font-weight-500 font-blue-text">
                                                   Pullover
                                                   blue /
                                                   L
                                                </div>
                                             </div>
                                             <div class="col-4 col-lg-6 text-right">
                                                <div class="product-price font-14 font-weight-500 font-blue-text">
                                                   $20.00
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="d-flex border-top-blue mt-2 px-5 py-1 justify-content-between">
                                          <span class="font-14 font-weight-500 font-blue-text">Regular sales
                                             pirce</span>
                                          <span class="font-14 font-weight-500 font-blue-text">$40.00</span>
                                       </div>
                                       <div class="d-flex py-1 px-5 justify-content-between">
                                          <span class="font-14 font-weight-500 red-danger-text">-20%
                                             Discount</span>
                                          <span class="font-14 font-weight-500 red-danger-text">-$8,00</span>
                                       </div>
                                       <div class="d-flex py-2 px-5 dark-blue-bg justify-content-between">
                                          <span class="font-14 font-weight-500 text-white">New sales
                                             price</span>
                                          <span class="font-14 font-weight-500 text-white">$32.00</span>
                                       </div>
                                       <div class="d-flex py-3 px-5 bg-white justify-content-center">
                                          <div
                                             class="d-flex py-2 px-5 bg-gray-200 hover-secondary radius-5 justify-content-start">
                                             <img src="assets/images/advertising-new-icon.svg" width="18" class="mr-4"
                                                alt="">
                                             <a class="font-14 font-weight-500 font-blue-text" href="#">Make
                                                Advertising</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <!-- End of Store Footer -->
                           </div>
                           <!-- End of Store -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
