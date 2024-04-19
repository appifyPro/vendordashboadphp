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
            <div class="midtitle custom-mid align-self-center font-26">Add Loyalty Card</div>
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
         <!--<div class="px-4 pt-5 mx-3 font-26 font-weight-500 pb-0 desktop-view">Add Loyalty Card</div>
		<p class="d-block font-16 mx-3 greyText-color px-4 lh-1 mt-2">Creating a lightning deal on StayToEnjoy can be very lucrative. In this way, the visibility of the products can be increased immensely without much effort, which means that sales, profit and ranking can skyrocket without any effort.</p>-->
         <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
            <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
               <div>
                  <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                     Dashboard</a>
               </div>
               <div class="d-flex align-items-center">
                  <div class="tooltip position-relative center d-flex align-items-center">
                     <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                     <div class="px-3 font-26 font-weight-500 desktop-view">Add Loyalty Card</div>
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
               <div class="d-flex align-items-start mx-0">
                  <div class="pb-5 w-100">
                     <div class="card bg-none shadow-none border-0 w-100" style="overflow: unset;">
                        <div class="card-body py-0">
                           <div id="createad" class="tab-pane active  pb-3 row align-items-start m-0">
                              <div class="col-lg-7 col-12">
                                 <div class="page_box mb-4 box-shodow w-100 bg-white radius-5 p20">
                                    <div class="automated_dis_box pb-4">
                                       <div class="row align-items-center">
                                          <div class="col-md-12">
                                             <h4 class="m-0 color-default font-weight-500 py-0">Add customer name</h4>
                                             <p class="mb-4 font-14">Personalize the card to a custumer. If the customer
                                                is not in the list add the cusotmer to your Customer list.</p>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="top-search physical_part">
                                                <div class="physical_input_box_part">
                                                   <div class="physical_input_box bg-secondary radius-4 dropdown">
                                                      <input type="text" name=""
                                                         class="form-control bg-transparent border physical_input pro-input search-product w-100 m-0 dropdown-toggle"
                                                         placeholder="Search Customer" id="dropdownMenuButton"
                                                         data-toggle="dropdown" aria-haspopup="true"
                                                         aria-expanded="false">

                                                      <div
                                                         class="position-absolute dropdown-menu search-tab-big customer-search-list bg-white w-100"
                                                         aria-labelledby="dropdownMenuButton">
                                                         <ul
                                                            class="list-group list-groupul categories extras-add overflow-auto scroll-design">
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
                                                               </label>
                                                            </li>
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
                                                               </label>
                                                            </li>
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
                                                               </label>
                                                            </li>
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
                                                               </label>
                                                            </li>
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
                                                               </label>
                                                            </li>
                                                            <li class="list-group-item">
                                                               <label for="Small"
                                                                  class="extras-add-label pt-0 pb-0 mb-0 justify-content-start">
                                                                  <div class="product-img rounded-50 overflow-hidden">
                                                                     <img src="assets/image/2.png" alt="" width="50">
                                                                  </div>
                                                                  <div
                                                                     class="product-name font-16 font-weight-500 ml-4">
                                                                     Erica Jones</div>
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

                                 <div
                                    class="page_box mb-4 box-shodow radius-5 bg-white automated_dis_part w-100  p20 automated_dis_content">
                                    <div class="automated_dis_box">
                                       <h4 class="m-0 color-default font-weight-500 py-0">Generate Loyalty Card ID</h4>
                                       <p class="mb-4 font-14">Your Loyalty Card must have a unique ID</p>
                                       <div class="grey-panel p-5 bg-grey-light">
                                          <div class="input_box">
                                             <input type="text" name="code"
                                                placeholder="Type your own or generate code by system"
                                                id="discount_code" class="form-control">
                                          </div>
                                          <p class="text-right mt-2"><a href="javascript:void(0);"
                                                class="generat_btn ml-2 font-16">Generate code by system</a></p>
                                       </div>
                                    </div>
                                 </div>
                                 <div
                                    class="page_box mb-4 box-shodow radius-5 bg-white automated_dis_part w-100  p20 automated_dis_content">
                                    <div class="automated_dis_box">
                                       <h4 class="m-0 color-default font-weight-500 py-0">Choose the number of fields
                                          your card should have</h4>
                                       <p class="mb-4 font-14">This fields will be reflected on the customers card, Max.
                                          fields you can add are 20</p>
                                       <div class="grey-panel p-5 d-flex bg-grey-light select-rating-star">
                                          <div class="border-0 col-12 m-0 p-0">
                                             <div class="list-group ">
                                                <select class="rating-star py-0" name="Count">
                                                   <option>Choose Rating</option>
                                                   <option value="1">1</option>
                                                   <option value="2">2</option>
                                                   <option value="3">3</option>
                                                   <option value="4">4</option>
                                                   <option value="5">5</option>
                                                   <option value="6">6</option>
                                                   <option value="7">7</option>
                                                   <option value="8">8</option>
                                                   <option value="9">9</option>
                                                   <option value="10">10</option>
                                                   <option value="11">11</option>
                                                   <option value="12">12</option>
                                                   <option value="13">13</option>
                                                   <option value="14">14</option>
                                                   <option value="15">15</option>
                                                   <option value="16">16</option>
                                                   <option value="17">17</option>
                                                   <option value="18">18</option>
                                                   <option value="19">19</option>
                                                   <option value="20">20</option>
                                                </select>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="page_box mb-4 box-shodow w-100 bg-white radius-5 p20">
                                    <div class="automated_dis_box pb-0">
                                       <div class="row align-items-center">
                                          <div class="col-md-12">
                                             <h4 class="m-0 color-default font-weight-500 py-0">Raffle</h4>
                                             <p class="mb-4 font-14">If you make a raffle let your customer enjoy it</p>
                                          </div>
                                          <div class="col-md-12">
                                             <div class="p-0 row mx-0 list-unstyled d-flex align-items-center py-3">
                                                <div class="px-0 col-md-10">
                                                   <div class="radio_btn_part">
                                                      <label for="makeRaffle" class="d-flex align-items-center">
                                                         <input type="checkbox" name="makeRaffle"
                                                            class="radio_input mr-3"> <span class="pl-4 ml-2 mt-1">Yes I
                                                            make a raffle</span></label>
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
                                             <h4 class="m-0 color-default font-weight-500 py-0">Minimum purchase amount
                                                and the points</h4>
                                             <p class="mb-4 font-14">What is the minimum purchase amount and how many
                                                points you give?</p>
                                          </div>
                                          <div class="col-12 p-0">
                                             <div class="pricing-option-wrapper p-0">
                                                <div class="d-flex pcol-flex align-items-center">
                                                   <div class="col-12 col-lg-5">
                                                      <label
                                                         class="field-title font-14 tooltip position-relative">Amount</label>
                                                      <div class="input-group">
                                                         <input type="text" class="form-control border-right-0"
                                                            id="inlineFormInputGroupUsername2"
                                                            placeholder="Add purchase amount">
                                                         <div class="input-group-prepend">
                                                            <div class="input-group-text">€</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                   <div class="col-1 pl-0 pr-0 text-center mt-5">=</div>
                                                   <div class="col-12 col-lg-5">
                                                      <label
                                                         class="field-title font-14 tooltip position-relative">Earning
                                                         Points</label>
                                                      <div class="input-group">
                                                         <input type="text" class="form-control border-right-0"
                                                            id="inlineFormInputGroupUsername2" placeholder="Add points">
                                                         <div class="input-group-prepend">
                                                            <div class="input-group-text">P</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="page_box p20 paymentbox color-default box-shodow bg-white radius-5 mb-4">
                                    <div>
                                       <h4 class="mb-0 color-default font-weight-500 py-0">What the customer will earn
                                       </h4>
                                       <p class="mb-4 font-14">Please add the value the customer receives for redeeming
                                          the Card</p>
                                       <div class="grey-panel p-5 pricing-option-wrapper">
                                          <div class="form-group">
                                             <select class="form-control px-4 w-100 DropdownClass" id="previewimg">
                                                <option value="cat1">Credit</option>
                                                <option value="cat2">Gift</option>
                                                <option value="cat3">Vaction</option>
                                             </select>
                                          </div>
                                          <div class="box cat1">
                                             <div class="row form-group mb-2 ">
                                                <div class="col-sm-6">
                                                   <label class="field-title font-14 tooltip position-relative">Point
                                                      Total</label>
                                                   <div class="input-group">
                                                      <input type="text" class="form-control border-right-0"
                                                         placeholder="Number of points">
                                                      <div class="input-group-prepend">
                                                         <div class="input-group-text bg-white">p</div>
                                                      </div>
                                                   </div>
                                                </div>
                                                <div class="col-sm-6">
                                                   <label
                                                      class="field-title font-14 tooltip position-relative">Credit</label>
                                                   <div class="input-group">
                                                      <input type="text" class="form-control border-right-0"
                                                         placeholder="Amount">
                                                      <div class="input-group-prepend">
                                                         <div class="input-group-text bg-white">$</div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="box cat2">
                                             <div class="form-group">
                                                <label class="field-title font-14 tooltip position-relative">Gift
                                                   Detail</label>
                                                <textarea class="form-control" id="gift"
                                                   placeholder="Explain in detail what your customer will get"></textarea>
                                             </div>
                                          </div>
                                          <div class="box cat3">
                                             <div class="form-group">
                                                <label class="field-title font-14 tooltip position-relative">Vaction
                                                   Detail</label>
                                                <textarea class="form-control" id="vacation"
                                                   placeholder="Explain in detail what your customer will get"></textarea>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=" bg-secondary p-2 collapse" style="margin: 15px 0px 0;">
                                          <div class="d-flex align-items-center px-2">

                                             <p class="pl-2">Please enter the value the customer receives for redeeming
                                                the Loyalty Card</p>
                                          </div>
                                       </div>
                                       <div class="p20 collapse">
                                          <div class="box1 points">
                                             <label class="font-weight-500 mb-2">How much points for purchase</label>
                                             <div class="row form-group mb-2 ">
                                                <div class="col-sm-5">
                                                   <div class="input-group mb-2">
                                                      <div class="input-group-prepend ">
                                                         <div class="input-group-text bg-secondary"
                                                            style="border-top-left-radius:5PX; border-bottom-left-radius:5PX;">
                                                            <span
                                                               class="font-weight-600 color-default font-20 px-1 line-height-0">$</span>
                                                         </div>
                                                      </div>
                                                      <input type="text" class="form-control" placeholder="Amount">
                                                   </div>
                                                </div>
                                                <div class="col-sm-5">
                                                   <div class="input-group mb-2">
                                                      <div class="input-group-text bg-secondary"
                                                         style="border-top-left-radius:5PX; border-bottom-left-radius:5PX;">
                                                         <img src="assets/img/points.svg" class="w-h-22px" />
                                                      </div>
                                                      <input type="text" class="form-control"
                                                         placeholder="Number of points">
                                                   </div>
                                                </div>
                                             </div>
                                             <div class="list-group pt-0 collapse">
                                                <div href="#" class="list-group-item ">
                                                   <p class="font-weight-600 my-2 font-18 text-center">Points</p>
                                                   <div class="range_slider driver_age my-5">
                                                      <div id="html5" class="driver-age"></div>
                                                   </div>
                                                </div>
                                                <div
                                                   class="list-group-item bg-secondary text-center text-primary  py-3 "
                                                   style="font-size: 48px;">
                                                   <span class="priceinput text-center" id="budget" value="1"></span>
                                                   <p class="font-13">Points on the next purchase</p>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="list-group pt-0 box1 money collapse">
                                             <div href="#" class="list-group-item">
                                                <p class="font-weight-600 my-2 font-18 text-center">Money</p>
                                                <div class="range_slider driver_age my-5">
                                                   <div id="money" class="driver-age"></div>
                                                </div>
                                             </div>
                                             <div class="list-group-item bg-secondary text-center text-primary  py-3 "
                                                style="font-size: 48px;">
                                                <sup class="font-16 position-relative" style="top:-20px">$</sup><span
                                                   class="priceinput text-center" type="number" min="0" max="100"
                                                   step="1" id="budget2"></span><span>.00</span>
                                                <p class="font-13">Money on the next purchase</p>
                                             </div>
                                          </div>
                                          <div class="list-group pt-0 box1 credits collapse">
                                             <div href="#" class="list-group-item">
                                                <p class="font-weight-600 my-2 font-18 text-center">Credit</p>
                                                <div class="range_slider driver_age my-5">
                                                   <div id="credit" class="driver-age"></div>
                                                </div>
                                             </div>
                                             <div class="list-group-item bg-secondary text-center text-primary  py-3 "
                                                style="font-size: 48px;">
                                                <sup class="font-16 position-relative" style="top:-20px">$</sup><span
                                                   class="priceinput text-center" type="number" min="0" max="100"
                                                   step="1" id="budget1"></span><span>.00</span>
                                                <p class="font-13">Credit on the next purchase</p>
                                             </div>
                                          </div>
                                          <div class="list-group pt-0 box1 bit collapse">
                                             <div href="#" class="list-group-item">
                                                <p class="font-weight-600 my-2 font-18 text-center">Bit Coin</p>
                                                <div class="range_slider driver_age my-5">
                                                   <div id="bit" class="driver-age"></div>
                                                </div>
                                             </div>
                                             <div class="list-group-item bg-secondary text-center text-primary  py-3 "
                                                style="font-size: 48px;">
                                                <sup class="font-16 position-relative" style="top:-20px">$</sup><span
                                                   class="priceinput text-center" type="number" min="0" max="100"
                                                   step="1" id="budget3"></span><span>.00</span>
                                                <p class="font-13">Bit Coin on the next purchase</p>
                                             </div>
                                          </div>
                                          <!--End-->
                                       </div>
                                    </div>
                                 </div>
                                 <div class="page_box p20 mb-4 paymentbox color-default box-shodow bg-white radius-5">
                                    <label class="mb-0 color-default font-weight-500 py-0">Reward Expiration</label>
                                    <p class="mb-4 font-14">Define the numbe of days the expiration of your rewards
                                       (g.g. credits, points, money or any virtual currency).</p>
                                    <div class="pl-0 usage_limits_checkbox">
                                       <div class="form-group grey-panel mb-0 p-5 bg-grey-light">
                                          <div class="our-custom-select w-100 custom-select-sale dropdown pl-0">
                                             <div class="selected-value dropdown-toggle" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <div class="font-16 overflow-hidden exlightGrey-text">Choose</div>
                                                <input type="text" name="" readonly="" value="All" disabled=""
                                                   id="mainCategory">
                                             </div>
                                             <div
                                                class="options scroll-dropdown dropdown-menu px-3 scroll-design scrollbox w-scroll">
                                                <ul class="categories extras-add pr-0">
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">1 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">2 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">3 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">4 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">5 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">6 month</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">1 year</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">2 years</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span class="font-16 font-blue">3 years</span></a>
                                                      </label>
                                                   </li>
                                                   <li>
                                                      <label class="extras-add-label px-4 mb-0">
                                                         <a class="d-flex justify-content-between align-items-center"
                                                            href="#"><span
                                                               class="font-16 font-blue">Unlimited</span></a>
                                                      </label>
                                                   </li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="page_box mb-4 box-shodow  w-100 bg-white radius-5 p20">
                                    <div class="automated_dis_box border-0 pb-0">
                                       <div class="row align-items-center">
                                          <div class="col-md-12 mb-0">
                                             <h4 class="m-0 color-default font-weight-500 py-0">Refferles</h4>
                                             <p class="mb-4 font-14">How many point you will give when a customer
                                                refferles a friend?</p>
                                          </div>
                                          <div class="col-12 p-0">
                                             <div class="pricing-option-wrapper p-0">
                                                <div class="d-flex pcol-flex align-items-center">
                                                   <div class="col-12 col-lg-5">
                                                      <label
                                                         class="field-title font-14 tooltip position-relative">Earning
                                                         Points</label>
                                                      <div class="input-group">
                                                         <input type="text" class="form-control border-right-0"
                                                            placeholder="Add points">
                                                         <div class="input-group-prepend">
                                                            <div class="input-group-text">P</div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="row submit-btn">
                                    <div class="col-lg-3 col-12 ml-auto">
                                       <button type="button"
                                          class="btn btn-save btn-primary hover-effect save-btn p-3 w-100"
                                          data-dismiss="modal">Submit</button>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-5 position-sticky pad-right-5 tz-9">
                                 <div
                                    class="page_box p-0 vendor-pay-box paymentbox color-default box-shodow mb-4 bg-white radius-5">
                                    <div class="list-group">
                                       <div href="#" class="list-group-item loyaltyCard p-0" id="Valuebg">
                                          <div class="form-group mb-0 rating-ability-wrapper">
                                             <div class="text-center">
                                                <div class="profiles_content px-5 pt-5 pb-3 loyalty-card-banner">
                                                   <div class="user-placeholder-image">
                                                      <img src="img/user-placeholder-image.svg" width="70" alt="" />
                                                   </div>
                                                </div>
                                                <div class="card-member-apart p-5">
                                                   <h4 class="unq-box font-14 font-weight-400 line-height1.5">Julys
                                                      Beauty Shop, 26231 oldenburg.</h4>
                                                   <h4 class="unq-box font-14 font-weight-400 line-height1.5">Tel:
                                                      0000-0000</h4>
                                                   <h4>Card Member: Name ID</h4>
                                                   <button type="button" class="btn blue-btn">20 Points / $
                                                      5.00</button>
                                                </div>
                                             </div>
                                             <!--<div class="seprator my-4"></div>-->
                                             <div class="lowwe-div px-3">
                                                <div class="ratingStar-wrap">
                                                   <div class="CommonAttribute DivElement1"><img
                                                         src="img/star-yellow.svg" width="16" alt="" /></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                   <div class="CommonAttribute DivElement1"></div>
                                                </div>
                                                <!--<div class="grey-panel mt-5">
																		<textarea class="form-control border font-blue shadow-none bg-white" rows="3" maxlength="1075" placeholder="Type your Terms & Conditions " id="terms" spellcheck="false"></textarea>
																	</div>-->
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="page_box p-0 mb-4 box-shodow bg-white radius-5">
                                    <div class="mobile-section text-left pb-0 bg-white radius-5" id="new-offerbox"
                                       style="">
                                       <div class="mobile-details text-left">
                                          <div class="smart-mobile position-relative">
                                             <img src="img/image-3474.png" width="100%">
                                          </div>
                                          <div class="px-4">
                                             <div>
                                                <h4 class="font-18 px-0 py-2">You offer special sale or special
                                                   discounts?</h4>
                                                <p class="line-height1.5">On the Discount page of StayToEnjoy you can
                                                   give discounts on all products and set discounts for a certain period
                                                   of time. Simply enter the product, select the discount, set the time
                                                   period and done.</p>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="mobile-performance py-3 mx-4 ">
                                          <div
                                             class="py-3 bottom-bar bg-secondary cursor-pointer hover-light-blue justify-content-center d-flex">
                                             <p
                                                class="font-16 font-weight-500 font-blue hover-light-blue align-self-center">
                                                Explore Discounts</p>
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
         </div>
      </div>
   </div>

</div>
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
