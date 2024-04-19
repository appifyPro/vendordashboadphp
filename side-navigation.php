<div class="leftside-menu position-fixed">
   <div id="leftside-menu-container">
      <div class="side-nav-menu-top py-4 d-flex border-bottom  border-grey align-items-center">
         <button
            class="button-menu-mobile white-arrow hide-desktop mobile-view position-releative mr-4 font-24 open-left only-mobile disable-btn">
            <img src="img/next.svg" class="imgblock" alt="Back" width="40">
         </button>
         <div class="store-logo text-center" style="flex-shrink: 0;">
            <img src="img/header/addbusiness.png" class="radius-5" width="50" height="50">
         </div>
         <div class="store w-100 ml-4">
            <div class="dropdown store-change-dropdown">
               <button
                  class="btn btn-secondary bg-none p-0 text-left dropdown-toggle w-100 font-16 font-nunito shadow-none"
                  type="button" id="dropdownDasboard" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Fashion Store
               </button>
               <p class="subtext-white font-nunito">Pirolweg 5b, 26131 Oldenburg - DE</p>
               <div class="dropdown-menu shadow radius-5 mt-3" aria-labelledby="dropdownDasboard">
                  <div class="bg-black2 pl-4">
                     <div class="top-search physical_part">
                        <div class="physical_input_box_part">
                           <div class="physical_input_box bg-black2 radius-4">
                              <input type="text" name=""
                                 class="form-control bg-transparent border physical_input pro-input search-product w-100 m-0"
                                 placeholder="Search Store">
                           </div>
                        </div>
                     </div>
                  </div>

                  <ul class="list-group py-2">
                     <li class="list-group-item1 d-flex justify-content-between align-items-center p-3">
                        <a class="display-flex">
                           <div class="d-flex notificatinlist  explorelist align-items-center active">
                              <div class="position-relative" style="flex-shrink:0">
                                 <img src="img/header/addbusiness.png" class="radius-5" width="45" height="45">
                              </div>
                              <div class="ml-3 d-flex w-100">
                                 <div>
                                    <p class="font-18 color-black font-nunito mb-2 line-height-default store-name">
                                       <strong>Fashion Store</strong>
                                    </p>
                                    <p class="font-13 blue-text-light font-nunito line-height-default">Nürnberger Allee
                                       12, 48145 DE | 10002</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="list-group-item1 d-flex justify-content-between align-items-center p-3">
                        <a class="display-flex">
                           <div class="d-flex notificatinlist  explorelist align-items-center active">
                              <div class="position-relative" style="flex-shrink:0">
                                 <img src="img/header/addbusiness.png" class="radius-5" width="45" height="45">
                              </div>
                              <div class="ml-3 d-flex w-100">
                                 <div>
                                    <p class="font-18 color-black font-nunito mb-2 line-height-default store-name">
                                       <strong>Fashion Store 1</strong>
                                    </p>
                                    <p class="font-13 blue-text-light font-nunito line-height-default">Nürnberger Allee
                                       12, 48145 DE | 10002</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>
                     <li class="list-group-item1 d-flex justify-content-between align-items-center p-3">
                        <a class="display-flex">
                           <div class="d-flex notificatinlist  explorelist align-items-center active">
                              <div class="position-relative" style="flex-shrink:0">
                                 <img src="img/header/addbusiness.png" class="radius-5" width="45" height="45">
                              </div>
                              <div class="ml-3 d-flex w-100">
                                 <div>
                                    <p class="font-18 color-black font-nunito mb-2 line-height-default store-name">
                                       <strong>Fashion Store 2</strong>
                                    </p>
                                    <p class="font-13 blue-text-light font-nunito line-height-default">Nürnberger Allee
                                       12, 48145 DE | 10002</p>
                                 </div>
                              </div>
                           </div>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>

      <div class="scroll-wrapper">
         <ul class="side-nav m-0 scroll">
            <!--<li class="side-nav-title side-nav-item font-12 cyan-blue py-3 text-uppercase font-weight-bold font-nunito">
            Navigation</li>-->
            <li class="side-nav-item py-3">
               <a href=" vendor-dashboard.php" data-target="dashboard"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Dashboards </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarProduct" aria-expanded="true" aria-controls="sidebarProduct"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Product</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse-hover">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="add-product-regular-sale-ecommerce.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new E-commerce</a> </li>
                     <li class="py-2"><a href="add-product-regular-sale-grocery.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new Grossery Product</a> </li>
                     <li class="py-2"><a href="add-product-regular-sale-digital.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new Digital Product</a> </li>
                     <li class="py-2"><a href="#" data-target="" class="font-14 cyan-blue font-nunito">Upload CSV</a>
                     </li>
                     <li class="py-2"><a href="vendor-product-list.php" data-target="product-overview"
                           class="font-14 cyan-blue font-nunito">Product List</a> </li>
                     <li class="py-2"><a href="vendor-product-details-single.php" data-target="product-details"
                           class="font-14 cyan-blue font-nunito">Product Details</a> </li>
                  </ul>
               </div>
               <div class="collapse" id="sidebarProduct">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="add-product-regular-sale-ecommerce.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new E-commerce</a> </li>
                     <li class="py-2"><a href="add-product-regular-sale-grocery.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new Grossery Product</a> </li>
                     <li class="py-2"><a href="add-product-regular-sale-digital.php" data-target="listing"
                           class="font-14 cyan-blue font-nunito">+ Add new Digital Product</a> </li>
                     <li class="py-2"><a href="#" data-target="" class="font-14 cyan-blue font-nunito">Upload CSV</a>
                     </li>
                     <li class="py-2"><a href="vendor-product-list.php" data-target="product-overview"
                           class="font-14 cyan-blue font-nunito">Product List</a> </li>
                     <li class="py-2"><a href="vendor-product-details-single.php" data-target="product-details"
                           class="font-14 cyan-blue font-nunito">Product Details</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarOrders" aria-expanded="false" aria-controls="sidebarOrders"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito"> Orders
                     <!--<span class="badge bg-primary text-white ml-3">5 new</span>-->
                  </span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse-hover">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-order-details.php" data-target="order-details"
                           class="font-14 cyan-blue font-nunito">Order Details</a> </li>
                     <li class="py-2"><a href="vendor-order-overview.php" data-target="order"
                           class="font-14 cyan-blue font-nunito">Order Overview</a> </li>
                  </ul>
               </div>
               <div class="collapse" id="sidebarOrders">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-order-details.php" data-target="order-details"
                           class="font-14 cyan-blue font-nunito">Order Details</a> </li>
                     <li class="py-2"><a href="vendor-order-overview.php" data-target="order"
                           class="font-14 cyan-blue font-nunito">Order Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarBundles" aria-expanded="false" aria-controls="sidebarBundles"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Bundles</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarBundles">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-bundle-new.php" data-target="shop-bundle"
                           class="font-14 cyan-blue font-nunito">+ Create Bundle</a> </li>
                     <li class="py-2"><a href="vendor-bundle-overview.php" data-target="shop-bundle-overview"
                           class="font-14 cyan-blue font-nunito">Bundle Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarDiscounts" aria-expanded="false" aria-controls="sidebarDiscounts"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Discounts</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarDiscounts">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-automatic-discount.php" data-target="automatic-discount"
                           class="font-14 cyan-blue font-nunito">+ Add Discount</a> </li>
                     <li class="py-2"><a href="vendor-discount-new.php" data-target="automatic-discount"
                           class="font-14 cyan-blue font-nunito">+ Add Discount New</a> </li>
                     <li class="py-2"><a href="vendor-discount-generate-code.php" data-target="discount"
                           class="font-14 cyan-blue font-nunito">+ Add Discount Code</a> </li>
                     <li class="py-2"><a href="vendor-discount-overview.php" data-target="discount-code"
                           class="font-14 cyan-blue font-nunito">Discount Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarflash" aria-expanded="false" aria-controls="sidebarflash"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Flash Offers</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarflash">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-flash-offer.php" data-target="shop-flash"
                           class="font-14 cyan-blue font-nunito">+ Create Flash Offer</a> </li>
                     <li class="py-2"><a href="vendor-flashoffer-overview.php" data-target="shop-flash-overview"
                           class="font-14 cyan-blue font-nunito">Flash Offer Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarVoucher" aria-expanded="false" aria-controls="sidebarVoucher"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Voucher</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarVoucher">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-voucher-create.php" data-target="create-voucher"
                           class="font-14 cyan-blue font-nunito">+ Create Vocher</a> </li>
                     <li class="py-2"><a href="vendor-voucher-overview.php" data-target="vendor-voucher-overview"
                           class="font-14 cyan-blue font-nunito">Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarLoyaltyCards" aria-expanded="false"
                  aria-controls="sidebarLoyaltyCards"
                  class="side-nav-link  d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Loyalty Cards</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarLoyaltyCards">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-loyalty-card-create.php" data-target="create-loyalty-card"
                           class="font-14 cyan-blue font-nunito">+ Add new Card</a> </li>
                     <li class="py-2"><a href="vendor-loyalty-card-overview.php" data-target="loyalty-card-overview"
                           class="font-14 cyan-blue font-nunito">Overview</a> </li>
                     <li class="py-2"><a href="" data-target="" class="font-14 cyan-blue font-nunito">Redeem Card</a>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a href="opening-hours.php"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Opening Hours</span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="delivery-settings.php"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Delivery Settings</span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarShipping" aria-expanded="false" aria-controls="sidebarShipping"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito"> Shipping
                     <!--<span class="badge bg-primary text-white ml-3">5 new</span>-->
                  </span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarShipping">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-shipping-overview.php" data-target="shipping-overview"
                           class="font-14 cyan-blue font-nunito">Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarInvoices" aria-expanded="false" aria-controls="sidebarInvoices"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Invoices</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarInvoices">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-create-new-invoice.php" data-target="create-new-invoice"
                           class="font-14 cyan-blue font-nunito">+ Create new Invoice</a> </li>
                     <li class="py-2"><a href="vendor-invoice-overview-customer.php"
                           data-target="customer-invoice-overview" class="font-14 cyan-blue font-nunito">Overview</a>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarCreditNote" aria-expanded="false"
                  aria-controls="sidebarCreditNote"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Credit Note</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarCreditNote">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-credit-note.php" data-target="credit-note"
                           class="font-14 cyan-blue font-nunito">+ Create new Note</a> </li>
                     <li class="py-2"><a href="vendor-credit-note-overview.php"
                           data-target="vendor-credit-note-overview" class="font-14 cyan-blue font-nunito">Overview</a>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-return-invoice.php" data-target="vendor-return-invoice"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito"> Return Invoice
                  </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarRefunds" aria-expanded="false" aria-controls="sidebarRefunds"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Refunds</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarRefunds">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="single-return-overview.php" data-target="single-return-overview"
                           class="font-14 cyan-blue font-nunito">+ Create new Refund</a> </li>
                     <li class="py-2"><a href="vendor-refund-overview.php" data-target=""
                           class="font-14 cyan-blue font-nunito">Refund Overview</a> </li>
                     <li class="py-2"><a href="vendor-refund-note.php" data-target="vendor-refund-note"
                           class="font-14 cyan-blue font-nunito">Create Refund Note</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarReturns" aria-expanded="false" aria-controls="sidebarReturns"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Returns</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarReturns">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-create-return.php" data-target="vandor-create-return"
                           class="font-14 cyan-blue font-nunito">Create Return Note</a> </li>
                     <li class="py-2"><a href="vendor-return-overview.php" data-target="return-overview"
                           class="font-14 cyan-blue font-nunito">Return Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarCustomers" aria-expanded="false" aria-controls="sidebarCustomers"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Customers</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarCustomers">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="vendor-customer-add-new.php" data-target="new-client"
                           class="font-14 cyan-blue font-nunito">+ Add new Customer</a> </li>
                     <li class="py-2"><a href="vendor-customer-list.php" data-target="customer"
                           class="font-14 cyan-blue font-nunito">Customer Overview</a> </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-customer-transactions.php" data-target="vendor-customer-transactions"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito"> Customer Transactions
                  </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-payouts.php" data-target="vendor-payouts"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Payouts </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="#" data-target="vendor-product-tax-setting"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Terms & Conditions
                  </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-business-support.php" data-target="vendor-business-support"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Business Support
                     Inbox</span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="#" data-target="" class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Advertising </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a data-toggle="collapse" href="#sidebarEvents" aria-expanded="false" aria-controls="sidebarEvents"
                  class="side-nav-link d-flex justify-content-between align-items-center collapsed">
                  <span class="line-height-default font-16 font-nunito">Events</span>
                  <i class="fa cyan-blue fa-angle-right menu-arrow" aria-hidden="true"></i>
               </a>
               <div class="collapse" id="sidebarEvents">
                  <ul class="side-nav-second-level pl-5">
                     <li class="py-2"><a href="#" data-target="" class="font-14 cyan-blue font-nunito">+ Add new
                           Event</a>
                     </li>
                     <li class="py-2"><a href="#" data-target="" class="font-14 cyan-blue font-nunito">Event
                           Overview</a>
                     </li>
                  </ul>
               </div>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-shop-opening-hours.php" data-target="shop-opening-hours"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Shop Opening
                     Hours</span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="vendor-currency-settings.php"
                  class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Currency Settings
                  </span>
               </a>
            </li>
            <li class="side-nav-item py-3">
               <a href="#" data-target="" class="side-nav-link d-flex justify-content-between align-items-center">
                  <span class="line-height-default font-16 d-flex align-items-center font-nunito">Analytics </span>
               </a>
            </li>
         </ul>
      </div>
   </div>
   <!-- Sidebar -left -->
</div>

<div class="modal fade support-pin fade feedbackmodal fix-bottom p-0" id="currency">
   <div class="modal-dialog" style="max-width: 40%;">
      <div class="modal-content modal-content">
         <div class="modal-header" style="text-align: center;">
            <h3 class="modal-title change-model-text" style="font-size:21px !important; font-weight: 600 !important;
					color: #666; padding-left: 10px;">
               Currency Settings
            </h3>
            <button class="close menuhover position-relative bg-gray-100 rounded-full p-2.5 right-2"
               data-dismiss="modal" type="button">
               <img src="assets/image/close.svg" class="imgnone cursor-pointer" alt="close" width="35">
               <img src="assets/image/close_hover.svg" class="imgblock" alt="close" width="35">
            </button>
         </div>
         <!-- Modal body -->
         <div class="modal-body" style="padding: 0;">
            <!--<h3 class="title">Your Support PIN</h3>-->
            <div class="px-5 mb-4">
               <p class="font-16 font-weight-blod font-blue">Select Currency</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey" data-value="Euro"
                  data-symbol="€">€ - EUR - Euro</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey" data-value="Dollar"
                  data-symbol="$">US - $ - Dollar - U.S. Dollar</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                  data-value="Danish Krone" data-symbol="DKK">DKK - Danish Krone</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey" data-value="Pounds"
                  data-symbol="£">£ - GBP - Pounds</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                  data-value="Swiss Franc" data-symbol="CHF">CHF - Swiss Franc</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                  data-value="Swedish Krona" data-symbol="SEK">SEK - Swedish Krona</p>
               <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                  data-value="Polish Zloty" data-symbol="PLN">PLN - Polish Zloty</p>
            </div>
            <div style=" border-bottom: 1px solid #bcbebf;"></div>
            <div class="px-5 my-4 other-currency" data-simplebar="init">
               <div class="simplebar-wrapper" style="margin: 0px -30px;">
                  <div class="simplebar-height-auto-observer-wrapper">
                     <div class="simplebar-height-auto-observer"></div>
                  </div>
                  <div class="simplebar-mask">
                     <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content" style="padding: 0px 30px; height: auto; overflow: hidden;">
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Euro" data-symbol="€">€ - EUR - Euro</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Dollar" data-symbol="$">US - $ - Dollar - U.S. Dollar</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Danish Krone" data-symbol="DKK">DKK - Danish Krone</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Pounds" data-symbol="£">£ - GBP - Pounds</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Swiss Franc" data-symbol="CHF">CHF - Swiss Franc</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Swedish Krona" data-symbol="SEK">SEK - Swedish Krona</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Polish Zloty" data-symbol="PLN">PLN - Polish Zloty</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Euro" data-symbol="€">€ - EUR - Euro</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Dollar" data-symbol="$">US - $ - Dollar - U.S. Dollar</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Danish Krone" data-symbol="DKK">DKK - Danish Krone</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Pounds" data-symbol="£">£ - GBP - Pounds</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Swiss Franc" data-symbol="CHF">CHF - Swiss Franc</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Swedish Krona" data-symbol="SEK">SEK - Swedish Krona</p>
                           <p class="currency-setting-model-text py-1 px-3 rounded cursor-pointer hover-grey"
                              data-value="Polish Zloty" data-symbol="PLN">PLN - Polish Zloty</p>
                        </div>
                     </div>
                  </div>
                  <div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div>
               </div>
               <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                  <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;">
                  </div>
               </div>
               <div class="simplebar-track simplebar-vertical" style="visibility: hidden;">
                  <div class="simplebar-scrollbar" style="transform: translate3d(0px, 0px, 0px); visibility: hidden;">
                  </div>
               </div>
            </div>
            <div class="d-xl-inline d-none" style=" border-bottom: 1px solid #bcbebf;"></div>
            <div class="modal-footer border-0">
               <button type="button" class="btn btn-save cancel-btn p-3 hover-effect"
                  data-dismiss="modal">Cancel</button>
               <button type="button" class="btn btn-primary save-btn hover-effect" onclick="switchCurrency()"
                  data-dismiss="modal">Save</button>
            </div>
         </div>
      </div>
   </div>
</div>
