$('.t-datepicker').tDatePicker({
	  formatDate  : 'yyyy-mm-dd',
	  iconDate: '',
	  titleCheckIn : 'From',
	  titleCheckOut : 'To',
	 
	});
	$("#customer-order-list").DataTable({
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
				return "display" === l && (e = '<div class="form-checkp-0"><input type="checkbox" class="form-check-input m-0 w-h-14px dt-checkboxes"></div>'), e
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
		}],
		select: {
			style: "multi"
		},
		order: [
			[1, "asc"]
		],
		drawCallback: function() {
			$(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#customer-order-list_length label").addClass("form-label")
		}
	});
	$("#gross-earning").DataTable({
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
				return "display" === l && (e = '<div class="form-checkp-0"><input type="checkbox" class="form-check-input m-0 w-h-14px dt-checkboxes"></div>'), e
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
		}],
		select: {
			style: "multi"
		},
		order: [
			[1, "asc"]
		],
		drawCallback: function() {
			$(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#gross-earning_length label").addClass("form-label")
		}
	});
	$("#customer-future-traction").DataTable({
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
				return "display" === l && (e = '<div class="form-checkp-0"><input type="checkbox" class="form-check-input m-0 w-h-14px dt-checkboxes"></div>'), e
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
		}],
		select: {
			style: "multi"
		},
		order: [
			[1, "asc"]
		],
		drawCallback: function() {
			$(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#customer-future-traction_length label").addClass("form-label")
		}
	});
	$('#leftside-menu-container a[data-target="vendor-payouts"]').addClass('active');
	$(document).on('click','.table-area .payout-tabs a',function(){
		$('.table-area .payout-tabs a').removeClass('active');
		var dataTarget = $(this).attr('data-target');
		$(this).addClass('active');
		$('.table-responsives > .dataTables_wrapper ').hide();
		$('.table-responsives > '+dataTarget).show();
	});
