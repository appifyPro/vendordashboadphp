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
         <div class="text-center position-relative mx-3 py-4">
            <!--<div class="menuhover align-self-center tooltip position-relative" href="#bubbleslider" data-slide="next">
					<img src="assets/image/roundback.svg" class="imgnone left_arrow prev-step" width="35">
					<img src="assets/image/roundback_hover.svg" class="left_arrow prev-step imgblock" width="35">
					<span class="tooltiptext right font-12">Back to Dashboard</span>
				</div>-->
            <button class="button-menu-mobile mobile-view position-absolute left-0 font-24 open-left disable-btn"
               style="top:50%;transform: translateY(-50%);">
               <img src="img/next.svg" class="imgblock" alt="Back" width="25">
            </button>
            <div class="midtitle custom-mid align-self-center">Discount Overview</div>
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

      <div class="border-top bg-white text-center py-4 fixed-bottom fixed-inner">
         <div class="verification_right_part w-100 m-0 d-flex py-0 justify-content-between shop-listing">
            <div>
               <a type="button" class="cursor-pointer font-14 edit-company-info" href="vendor-dashboard.php">Back to
                  Dashboard</a>
            </div>
            <div class="d-flex align-items-center">
               <div class="tooltip position-relative center d-flex align-items-center">
                  <!--<i class="fa fa-info-circle text-dark font-16"></i>-->
                  <div class="px-3 font-26 font-weight-500 desktop-view">Discount Overview</div>
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
                  <div class="d-flex flex-wrap justify-content-end col-md-12">
                     <div class="absolute calender-range">
                        <div class="input-group-wb calender-icon">
                           <input type="text" id="range-date-select" autocomplete="off" class="text-right form-control"
                              placeholder="dd/mm/yyyy">
                        </div>
                        <div id="calendar" class="calendar">
                           <div class="mt-4 mb-4 date-range">
                              <div class="mb-2 font-medium">
                                 <h5>Date Range</h5>
                              </div>
                              <select class="selectpicker" multiple title="Custom">
                                 <option>Today</option>
                                 <option>Yesterday</option>
                                 <option>Last 7 days</option>
                                 <option>Last 30 days</option>
                                 <option>Last 90 days</option>
                                 <option>Last month</option>
                                 <option>Last year</option>
                                 <option>Week to date</option>
                                 <option>Month to date</option>
                                 <option>Quarter to date</option>
                                 <option>Year to date</option>
                                 <option>All time</option>
                              </select>
                           </div>
                           <div class="mb-4 date-form row">
                              <div class="pr-0 start-date col-12 col-md-6">
                                 <div class="mb-2 font-medium">
                                    <h5>Starting</h5>
                                 </div>
                                 <input type="text" placeholder="2022-06-14" class="with-border">
                              </div>
                              <div class="end-date col-12 col-md-6">
                                 <div class="mb-2 font-medium">
                                    <h5>Ending</h5>
                                 </div>
                                 <input type="text" placeholder="2022-06-17" class="with-border">
                              </div>
                           </div>
                           <div class="row calender-apart">
                              <div class="chev-left-arrow">
                                 <img src="assets/images/icons/chevron-left.svg" width="15" alt="">
                              </div>
                              <div class="calender-post col-6">
                                 <div class="calendar_header">
                                    <h2>June</h2>
                                 </div>
                                 <div class="calendar_weekdays">
                                    <div class="weekdays">Su</div>
                                    <div class="weekdays">Mo</div>
                                    <div class="weekdays">Tu</div>
                                    <div class="weekdays">We</div>
                                    <div class="weekdays">Th</div>
                                    <div class="weekdays">Fr</div>
                                    <div class="weekdays">Sa</div>
                                 </div>
                                 <div class="calendar_content">
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="days-div">1</div>
                                    <div class="days-div">2</div>
                                    <div class="days-div">3</div>
                                    <div class="days-div">4</div>
                                    <div class="days-div">5</div>
                                    <div class="days-div">6</div>
                                    <div class="days-div">7</div>
                                    <div class="days-div">8</div>
                                    <div class="days-div">9</div>
                                    <div class="days-div">10</div>
                                    <div class="days-div">11</div>
                                    <div class="days-div">12</div>
                                    <div class="days-div">13</div>
                                    <div class="days-div">14</div>
                                    <div class="days-div">15</div>
                                    <div class="today days-div">16</div>
                                    <div class="days-div">17</div>
                                    <div class="days-div">18</div>
                                    <div class="days-div">19</div>
                                    <div class="days-div">20</div>
                                    <div class="days-div">21</div>
                                    <div class="days-div">22</div>
                                    <div class="days-div">23</div>
                                    <div class="days-div">24</div>
                                    <div class="days-div">25</div>
                                    <div class="days-div">26</div>
                                    <div class="days-div">27</div>
                                    <div class="days-div">28</div>
                                    <div class="days-div">29</div>
                                    <div class="days-div">30</div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                 </div>
                              </div>
                              <div class="calender-post col-6">
                                 <div class="calendar_header">
                                    <h2>July</h2>
                                 </div>
                                 <div class="calendar_weekdays">
                                    <div class="weekdays">Su</div>
                                    <div class="weekdays">Mo</div>
                                    <div class="weekdays">Tu</div>
                                    <div class="weekdays">We</div>
                                    <div class="weekdays">Th</div>
                                    <div class="weekdays">Fr</div>
                                    <div class="weekdays">Sa</div>
                                 </div>
                                 <div class="calendar_content">
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="days-div">1</div>
                                    <div class="days-div">2</div>
                                    <div class="days-div">3</div>
                                    <div class="days-div">4</div>
                                    <div class="days-div">5</div>
                                    <div class="days-div">6</div>
                                    <div class="days-div">7</div>
                                    <div class="days-div">8</div>
                                    <div class="days-div">9</div>
                                    <div class="days-div">10</div>
                                    <div class="days-div">11</div>
                                    <div class="days-div">12</div>
                                    <div class="days-div">13</div>
                                    <div class="days-div">14</div>
                                    <div class="days-div">15</div>
                                    <div class="days-div full-blue">16</div>
                                    <div class="hover-range start-range days-div">17</div>
                                    <div class="hover-range days-div">18</div>
                                    <div class="hover-range days-div">19</div>
                                    <div class="hover-range days-div">20</div>
                                    <div class="hover-range days-div">21</div>
                                    <div class="hover-range days-div">22</div>
                                    <div class="hover-range days-div">23</div>
                                    <div class="hover-range days-div">24</div>
                                    <div class="hover-range days-div">25</div>
                                    <div class="hover-range days-div">26</div>
                                    <div class="hover-range end-range days-div">27</div>
                                    <div class="full-blue days-div">28</div>
                                    <div class="days-div">29</div>
                                    <div class="days-div">30</div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                    <div class="blank days-div"></div>
                                 </div>
                              </div>
                              <div class="chev-right-arrow">
                                 <img src="assets/images/icons/chevron-right.svg" width="15" alt="">
                              </div>
                           </div>
                           <div class="calender-button w-100">
                              <div class="row align-items-center">
                                 <div class="col-12 d-flex justify-content-end">
                                    <button type="button" class="bttn btn-default cancel"
                                       id="cancel-select">Cancel</button>
                                    <button type="button" class="bttn bttn-primary ml-3 next-step"
                                       id="apply-select">Apply</button>
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
      <div class="margin-0-auto exmt-10">
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Discount Overview
				<p class="d-block font-16 greyText-color">Find all Products you list </p>
			</div>-->
         <div class="dataTable-wrapper px-4 pb-5 pt-3 mb-5">
            <table id="vendor-discount-overview" class="display table table-responsive" style="width:100%">
               <thead>
                  <tr>
                     <th class="text-capitalize font-nunito font-15 total">Discount Type</th>
                     <th class="text-capitalize font-nunito font-15 paymentStatus">Status</th>
                     <th class="text-capitalize font-nunito font-15 paymentMethod">Total Used</th>
                     <th class="text-capitalize font-nunito font-15 orderStatus">Date Created</th>
                     <th class="text-capitalize font-nunito font-15 action text-center" style="width: 125px;">Action
                     </th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="vertical-middle">
                        <b class="w-100 d-block">26R06RVYYRMD</b>
                        Free Shipping on entire order For all countries One use per customer
                     </td>
                     <td class="vertical-middle">
                        <span style="background-color: #BDE3B2;color: #375636;"
                           class="status  d-inline radius-5 px-3 py-2 line-height-default">Active</span>
                     </td>
                     <td class="vertical-middle">0 used</td>
                     <td class="vertical-middle">From 20 Dec</td>
                     <td class="text-center elipsis-click">
                        <button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
                           <button class="dropdown-item" type="button">View</button>
                           <button class="dropdown-item" type="button">Edit</button>
                           <button class="dropdown-item red-text" type="button">Delete</button>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="vertical-middle">
                        <b class="w-100 d-block">26R06RVYYRMD</b>
                        Free Shipping on entire order For all countries One use per customer
                     </td>
                     <td class="vertical-middle">
                        <span style="background-color: #BDE3B2; color: #375636;"
                           class="status d-inline radius-5 px-3 py-2 line-height-default">Active</span>
                     </td>
                     <td class="vertical-middle">0 used</td>
                     <td class="vertical-middle">From 20 Dec</td>
                     <td class="text-center elipsis-click">
                        <button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
                           <button class="dropdown-item" type="button">View</button>
                           <button class="dropdown-item" type="button">Edit</button>
                           <button class="dropdown-item red-text" type="button">Delete</button>
                        </div>
                     </td>
                  </tr>
                  <tr>
                     <td class="vertical-middle">
                        <b class="w-100 d-block">26R06RVYYRMD</b>
                        Free Shipping on entire order For all countries One use per customer
                     </td>
                     <td class="vertical-middle">
                        <span style="background-color: #BDE3B2;color: #375636;"
                           class="status  d-inline radius-5 px-3 py-2 line-height-default">Active</span>
                     </td>
                     <td class="vertical-middle">0 used</td>
                     <td class="vertical-middle">From 20 Dec</td>
                     <td class="text-center elipsis-click">
                        <button class="elipsis-click-icon dropdown-toggle" type="button" id="dropdownMenu2"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </button>
                        <div class="dropdown-menu pr-3" aria-labelledby="dropdownMenu2">
                           <button class="dropdown-item" type="button">View</button>
                           <button class="dropdown-item" type="button">Edit</button>
                           <button class="dropdown-item red-text" type="button">Delete</button>
                        </div>
                     </td>
                  </tr>
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
<?php include("html/popups/popup.php");?>
<?php include("html/footer/footer.php");?>
