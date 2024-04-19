$("#products-datatable").DataTable({
	language: {
		paginate: {
			previous: "<i class='fa fa-chevron-left'>",
			next: "<i class='fa fa-chevron-right'>"
		},
		info: "Showing products _START_ to _END_ of _TOTAL_",
		lengthMenu: 'Display <select class=\'form-select border d-inline-block h-40 py-0 mx-3 form-select-sm w-auto\'><option value="10">10</option><option value="20">20</option><option value="-1">All</option></select> products'
	},
	pageLength: 10,
	columns: [{
		orderable: !1,
		targets: 0,
		render: function(e, l, a, o) {
			return "display" === l && (e = '<div class="form-check p-0"><input type="checkbox" class="form-check-input m-0 w-h-14px dt-checkboxes"></div>'), e
		},
		checkboxes: {
			selectRow: !0,
			selectAllRender: '<div class="form-check p-0"><input type="checkbox" class="form-check-input m-0 w-h-14px dt-checkboxes"></div>'
		}
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !0
	}, {
		orderable: !1
	}],
	select: {
		style: "multi"
	},
	order: [
		[1, "asc"]
	],
	drawCallback: function() {
		$(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#products-datatable_length label").addClass("form-label")
	}
});
$(document).on('click','.redeem-coupon',function(e){
	e.preventDefault();
	if($(this).hasClass('badge-info-lighten')){ 
		$(this).toggleClass('badge-info-lighten');
		$(this).toggleClass('badge-danger-lighten');
		$(this).text('Redeemed');
	}
	else if($(this).hasClass('badge-danger-lighten')){
		$(this).removeClass('badge-danger-lighten');
		$(this).addClass('badge-info-lighten');
		$(this).text('Redeem');
	}
});
$('#leftside-menu-container a[href="#sidebarVoucher"]').trigger('click');
$('#leftside-menu-container a[data-target="vendor-voucher-overview"]').addClass('active');
