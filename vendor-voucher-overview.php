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
            <div class="midtitle custom-mid align-self-center font-26">Voucher Overview</div>
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
                  <div class="px-3 font-26 font-weight-500 desktop-view">Voucher Overview</div>
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
         <!--<div class="px-4 font-26 font-weight-500 pt-5 desktop-view">Voucher Overview
				<p class="d-block font-16 greyText-color">Find all Products you list </p>
			</div>-->
         <div class="dataTable-wrapper px-4 pb-5 pt-3 mb-5">
            <table id="vendor-voucher-overview" class="display table table-responsive" style="width:100%">
               <thead>
                  <tr>
                     <th class="font-nunito font-15 text-dark text-capitalize customer" style="min-width: 170px;">
                        Customer</th>
                     <th class="font-nunito font-15 text-dark text-capitalize phone">Phone</th>
                     <th class="font-nunito font-15 text-dark text-capitalize createDate">Sold Date</th>
                     <th class="font-nunito font-15 text-dark text-capitalize amount">Amount</th>
                     <th class="font-nunito font-15 text-dark text-capitalize cardID">Voucher ID</th>
                     <th class="font-nunito font-15 text-dark text-capitalize overviewStatus">Status</th>
                     <th class="font-nunito font-15 text-dark text-capitalize redeemCard">Redeem card</th>
                     <th class="font-nunito font-15 text-dark text-capitalize text-center action" style="width: 75px;">
                        Action</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td class="table-user">
                        <img src="assets/images/users/avatar-4.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Paul J. Friend</a>
                     </td>
                     <td class="text-body font-nunito" style="width: 2%;">
                        937-330-1634
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $120
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Bryan J. Luellen</a>
                     </td>
                     <td class="text-body font-nunito">
                        215-302-3376
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $150
                     </td>
                     <td class="text-body font-nunito" style="width: 2%;">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-3.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Kathryn S.
                           Collier</a>
                     </td>
                     <td class="text-body font-nunito">
                        828-216-2190
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $45
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-1.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Timothy Kauper</a>
                     </td>
                     <td class="text-body font-nunito">
                        (216) 75 612 706
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $58
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-5.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Zara Raws</a>
                     </td>
                     <td class="text-body font-nunito">
                        (02) 75 150 655
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $186
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-6.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Annette P.
                           Kelsch</a>
                     </td>
                     <td class="text-body font-nunito">
                        (+15) 73 483 758
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $98
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-7.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Jenny C. Gero</a>
                     </td>
                     <td class="text-body font-nunito">
                        078 7173 9261
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $101
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-8.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Edward Roseby</a>
                     </td>
                     <td class="text-body font-nunito">
                        078 6013 3854
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $20
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-9.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Anna Ciantar</a>
                     </td>
                     <td class="text-body font-nunito">
                        (216) 76 298 896
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $19
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-10.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Dean Smithies</a>
                     </td>
                     <td class="text-body font-nunito">
                        077 6157 4248
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $74
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-1.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Labeeb Ghali</a>
                     </td>
                     <td class="text-body font-nunito">
                        050 414 8778
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $22
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
                     <td class="table-user">
                        <img src="assets/images/users/avatar-2.jpg" alt="table-user" width="30"
                           class="mr-2 rounded-circle">
                        <a href="javascript:void(0);" class="text-body font-nunito font-weight-600">Rory Seekamp</a>
                     </td>
                     <td class="text-body font-nunito">
                        078 5054 8877
                     </td>
                     <td class="text-body font-nunito">
                        07/07/2018
                     </td>
                     <td class="text-body font-nunito">
                        $144
                     </td>
                     <td class="text-body font-nunito">
                        888-888-999-22
                     </td>
                     <td>
                        <span class="badge font-12 badge-success-lighten py-2">Active</span>
                     </td>
                     <td><a href="javascript:void(0);"
                           class="badge badge-info-lighten redeem-coupon font-12 py-2 radius-5">Redeem</a></td>
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
      <div>
      </div>
      <?php include("html/popups/popup.php");?>
      <?php include("html/footer/footer.php");?>
