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
		$(".dataTables_paginate > .pagination").addClass("pagination-rounded"), $("#customer-order-list_length label").addClass("form-label")
	}
});
$(document).on('mouseover','.product-info-details',function(){ 
	var link = $(this);
	var offset = link.offset();

	var top = offset.top;
	var bottom = document.body.clientHeight  - top - link.outerHeight(); 
	//alert('top '+top+'       '+'bottom '+bottom+'          '+document.body.clientHeight);
	if(bottom < top){
		$(this).find('.product-info').css({'top':'unset','bottom':'calc(100% - 30px)'});
	}
	if(bottom > top){
		$(this).find('.product-info').css({'top':'50px','bottom':'unset'});
	}
});
$('#leftside-menu-container a[href="#sidebarOrders"]').trigger('click');
$('#leftside-menu-container a[data-target="order"]').addClass('active');
