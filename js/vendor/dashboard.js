


! function(o) {
	"use strict";

	function e() {
		this.$body = o("body"), this.charts = []
	}
	e.prototype.initCharts = function() {
		window.Apex = {
			chart: {
				parentHeightOffset: 0,
				toolbar: {
					show: !1
				}
			},
			grid: {
				padding: {
					left: 0,
					right: 0
				}
			},
			colors: ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"]
		};
		var e = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"],
			t = o("#revenue-chart").data("colors");
		t && (e = t.split(","));
		var r = {
			chart: {
				height: 364,
				type: "line",
				dropShadow: {
					enabled: !0,
					opacity: .2,
					blur: 7,
					left: -7,
					top: 7
				}
			},
			dataLabels: {
				enabled: !1
			},
			stroke: {
				curve: "smooth",
				width: 4
			},
			series: [{
				name: "Current Week",
				data: [10, 20, 15, 25, 20, 30, 20]
			}, {
				name: "Previous Week",
				data: [0, 15, 10, 30, 15, 35, 25]
			}],
			colors: e,
			zoom: {
				enabled: !1
			},
			legend: {
				show: !1
			},
			xaxis: {
				type: "string",
				categories: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
				tooltip: {
					enabled: !1
				},
				axisBorder: {
					show: !1
				}
			},
			yaxis: {
				labels: {
					formatter: function(e) {
						return e + "k"
					},
					offsetX: -15
				}
			}
		};
		new ApexCharts(document.querySelector("#revenue-chart"), r).render();
		e = ["#727cf5", "#e3eaef"];
		(t = o("#high-performing-product").data("colors")) && (e = t.split(","));
		r = {
			chart: {
				height: 257,
				type: "bar",
				stacked: !0
			},
			plotOptions: {
				bar: {
					horizontal: !1,
					columnWidth: "20%"
				}
			},
			dataLabels: {
				enabled: !1
			},
			stroke: {
				show: !0,
				width: 2,
				colors: ["transparent"]
			},
			series: [{
				name: "Actual",
				data: [65, 59, 80, 81, 56, 89, 40, 32, 65, 59, 80, 81]
			}, {
				name: "Projection",
				data: [89, 40, 32, 65, 59, 80, 81, 56, 89, 40, 65, 59]
			}],
			zoom: {
				enabled: !1
			},
			legend: {
				show: !1
			},
			colors: e,
			xaxis: {
				categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				axisBorder: {
					show: !1
				}
			},
			yaxis: {
				labels: {
					formatter: function(e) {
						return e + "k"
					},
					offsetX: -15
				}
			},
			fill: {
				opacity: 1,
				colors: ['#05224c', '#e3eaef']
			},
			tooltip: {
				y: {
					formatter: function(e) {
						return "$" + e + "k"
					}
				}
			}
		};
		new ApexCharts(document.querySelector("#high-performing-product"), r).render();
		e = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];
		(t = o("#average-sales").data("colors")) && (e = t.split(","));
		r = {
			chart: {
				height: 208,
				type: "donut"
			},
			legend: {
				show: !1
			},
			stroke: {
				colors: ["transparent"]
			},
			series: [44, 55, 41, 17],
			labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
			colors: e,
			responsive: [{
				breakpoint: 480,
				options: {
					chart: {
						width: 200
					},
					legend: {
						position: "bottom"
					}
				}
			}]
		};
		new ApexCharts(document.querySelector("#average-sales"), r).render()
	}, e.prototype.initMaps = function() {
		0 < o("#world-map-markers").length && o("#world-map-markers").vectorMap({
			map: "world_mill_en",
			normalizeFunction: "polynomial",
			hoverOpacity: .7,
			hoverColor: !1,
			regionStyle: {
				initial: {
					fill: "#e3eaef"
				}
			},
			markerStyle: {
				initial: {
					r: 9,
					fill: "#727cf5",
					"fill-opacity": .9,
					stroke: "#fff",
					"stroke-width": 7,
					"stroke-opacity": .4
				},
				hover: {
					stroke: "#fff",
					"fill-opacity": 1,
					"stroke-width": 1.5
				}
			},
			backgroundColor: "transparent",
			markers: [{
				latLng: [40.71, -74],
				name: "New York"
			}, {
				latLng: [37.77, -122.41],
				name: "San Francisco"
			}, {
				latLng: [-33.86, 151.2],
				name: "Sydney"
			}, {
				latLng: [1.3, 103.8],
				name: "Singapore"
			}],
			zoomOnScroll: !1
		})
	}, e.prototype.init = function() {
		o("#dash-daterange").daterangepicker({
			singleDatePicker: !0
		}), this.initCharts(), this.initMaps()
	}, o.Dashboard = new e, o.Dashboard.Constructor = e
}(window.jQuery),
function(t) {
	"use strict";
	t(document).ready(function(e) {
		t.Dashboard.init()
	})
}(window.jQuery);
var randomizeArray = function (r) {
	for (var t, o, e = r.slice(), a = e.length; 0 !== a;) o = Math.floor(Math.random() * a), t = e[--a], e[a] = e[o], e[o] = t;
	return e
}
var sparklineData = [47, 45, 54, 38, 56, 24, 65, 31, 37, 39, 62, 51, 35, 41, 35, 27, 93, 53, 61, 27, 54, 43, 19, 46]
colors = ["#0acf97"];
(dataColors = $("#spark3").data("colors")) && (colors = dataColors.split(","));
var spark3 = {
	chart: {
		type: "area",
		height: 160,
		sparkline: {
			enabled: !0
		}
	},
	stroke: {
		width: 2,
		curve: "straight"
	},
	fill: {
		opacity: .2
	},
	series: [{
		name: "Net Profits ",
		data: randomizeArray(sparklineData)
	}],
	xaxis: {
		crosshairs: {
			width: 1
		}
	},
	yaxis: {
		min: 0
	},
	colors: colors,
	title: {
		text: "$135,965",
		offsetX: 20,
		style: {
			fontSize: "24px"
		}
	},
	subtitle: {
		text: "Profits",
		offsetX: 20,
		style: {
			fontSize: "14px"
		}
	}
};
new ApexCharts(document.querySelector("#spark3"), spark3).render();
! function (d) {
	"use strict";

	function a() {
		this.$body = d("body"), this.charts = []
	}
	a.prototype.initCharts = function () {
		var o, n = [], i = ["#727cf5", "#0acf97", "#fa5c7c", "#ffbc00"];
		var a = new Chart(d("#donut-chart-example").get(0).getContext("2d"), {
					type: "doughnut",
					data: {
							labels: ["Direct", "Affilliate", "Sponsored", "E-mail"],
							datasets: [{
								data: [300, 135, 48, 154],
								backgroundColor: n = (o = d("#donut-chart-example").data("colors")) ? o.split(",") : i.concat(),
								borderColor: "transparent",
								borderWidth: "3"
							}]
						},
					options: {
								maintainAspectRatio: !1,
								cutoutPercentage: 60,
								legend: {
									display: !1
								}
							}
				});
		return a
	}, a.prototype.init = function () {
		var r = this;
		Chart.defaults.global.defaultFontFamily = '-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif', r.charts = this.initCharts(), d(window).on("resize", function (a) {
			d.each(r.charts, function (a, r) {
				try {
					r.destroy()
				} catch (a) {}
			}), r.charts = r.initCharts()
		})
	}, d.ChartJs = new a, d.ChartJs.Constructor = a
}(window.jQuery),
function () {
	"use strict";
	window.jQuery.ChartJs.init()
}();
$('#leftside-menu-container a[data-target="dashboard"]').addClass('active');

! function (t) {
	"use strict";

	function o() {
		this.$body = t("body"), this.$todoContainer = t("#todo-container"), this.$todoMessage = t("#todo-message"), this.$todoRemaining = t("#todo-remaining"), this.$todoTotal = t("#todo-total"), this.$archiveBtn = t("#btn-archive"), this.$todoList = t("#todo-list"), this.$todoDonechk = ".todo-done", this.$todoForm = t("#todo-form"), this.$todoInput = t("#todo-input-text"), this.$todoBtn = t("#todo-btn-submit"), this.$todoData = [{
			id: "1",
			text: "Design One page theme",
			done: !1
		}, {
			id: "2",
			text: "Build a js based app",
			done: !0
		}, {
			id: "3",
			text: "Creating component page",
			done: !0
		}, {
			id: "4",
			text: "Testing??",
			done: !0
		}, {
			id: "5",
			text: "Hehe!! This looks cool!",
			done: !1
		}, {
			id: "6",
			text: "Create new version 3.0",
			done: !1
		}, {
			id: "7",
			text: "Build an angular app",
			done: !0
		}], this.$todoCompletedData = [], this.$todoUnCompletedData = []
	}
	o.prototype.markTodo = function (t, o) {
		for (var e = 0; e < this.$todoData.length; e++) this.$todoData[e].id == t && (this.$todoData[e].done = o)
	}, o.prototype.addTodo = function (t) {
		this.$todoData.push({
			id: this.$todoData.length,
			text: t,
			done: !1
		}), this.generate()
	}, o.prototype.archives = function () {
		this.$todoUnCompletedData = [];
		for (var t = 0; t < this.$todoData.length; t++) {
			var o = this.$todoData[t];
			1 == o.done ? this.$todoCompletedData.push(o) : this.$todoUnCompletedData.push(o)
		}
		this.$todoData = [], this.$todoData = [].concat(this.$todoUnCompletedData), this.generate()
	}, o.prototype.generate = function () {
		this.$todoList.html("");
		for (var t = 0, o = 0; o < this.$todoData.length; o++) {
			var e = this.$todoData[o];
			1 == e.done ? this.$todoList.prepend('<li class="list-group-item border-0 hover-grey px-3 ps-0"><div class="form-check mb-0"><input type="checkbox" class="form-check-input todo-done" id="' + e.id + '" checked><label class="form-check-label" for="' + e.id + '"><s>' + e.text + "</s></label><span class='font-12 font-weight-600 detele-todo' style='float: right;margin-top: 1px;'>Delete</span></div></li>") : (t += 1, this.$todoList.prepend('<li class="list-group-item hover-grey px-3 border-0 ps-0"><div class="form-check mb-0"><input type="checkbox" class="form-check-input todo-done" id="' + e.id + '"><label class="form-check-label" for="' + e.id + '">' + e.text + "</label><span class='font-12 font-weight-600 detele-todo' style='float: right;margin-top: 1px;'>Delete</span></div></li>"))
		}
		this.$todoTotal.text(this.$todoData.length), this.$todoRemaining.text(t)
	}, o.prototype.init = function () {
		var o = this;
		this.generate(), this.$archiveBtn.on("click", function (t) {
			return t.preventDefault(), o.archives(), !1
		}), t(document).on("change", this.$todoDonechk, function () {
			this.checked ? o.markTodo(t(this).attr("id"), !0) : o.markTodo(t(this).attr("id"), !1), o.generate()
		}), this.$todoForm.on("submit", function (t) {
			return t.preventDefault(), "" == o.$todoInput.val() || void 0 === o.$todoInput.val() || null == o.$todoInput.val() ? (o.$todoInput.focus(), !1) : (o.addTodo(o.$todoInput.val()), o.$todoForm.removeClass("was-validated"), o.$todoInput.val(""), !0)
		})
	}, t.TodoApp = new o, t.TodoApp.Constructor = o
}(window.jQuery),
function () {
	"use strict";
	window.jQuery.TodoApp.init()
}();

var colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"],dataColors=$("#campaign-sent-chart").data("colors");dataColors&&(colors=dataColors.split(","));var options1={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:colors,series:[{data:[25,66,41,89,63,25,44,12,36,9,54]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#campaign-sent-chart"),options1).render();colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"];(dataColors=$("#new-leads-chart").data("colors"))&&(colors=dataColors.split(","));var options2={chart:{type:"line",height:60,sparkline:{enabled:!0}},series:[{data:[25,66,41,89,63,25,44,12,36,9,54]}],stroke:{width:2,curve:"smooth"},markers:{size:0},colors:colors,tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#new-leads-chart"),options2).render();colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"];(dataColors=$("#deals-chart").data("colors"))&&(colors=dataColors.split(","));var options3={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:colors,series:[{data:[12,14,2,47,42,15,47,75,65,19,14]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#deals-chart"),options3).render();colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"];(dataColors=$("#booked-revenue-chart").data("colors"))&&(colors=dataColors.split(","));var options4={chart:{type:"bar",height:60,sparkline:{enabled:!0}},plotOptions:{bar:{columnWidth:"60%"}},colors:colors,series:[{data:[47,45,74,14,56,74,14,11,7,39,82]}],labels:[1,2,3,4,5,6,7,8,9,10,11],xaxis:{crosshairs:{width:1}},tooltip:{fixed:{enabled:!1},x:{show:!1},y:{title:{formatter:function(o){return""}}},marker:{show:!1}}};new ApexCharts(document.querySelector("#booked-revenue-chart"),options4).render();colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"];(dataColors=$("#dash-campaigns-chart").data("colors"))&&(colors=dataColors.split(","));var options={chart:{height:304,type:"radialBar"},colors:colors,series:[86,36,50],labels:["Total Sent","Reached","Opened"],plotOptions:{radialBar:{track:{margin:8}}}},chart=new ApexCharts(document.querySelector("#dash-campaigns-chart"),options);chart.render();colors=["#727cf5","#0acf97","#fa5c7c","#ffbc00"];(dataColors=$("#dash-revenue-chart").data("colors"))&&(colors=dataColors.split(","));options={chart:{height:321,type:"line",toolbar:{show:!1}},stroke:{curve:"smooth",width:2},series:[{name:"Total Revenue",type:"area",data:[44,55,31,47,31,43,26,41,31,47,33,43]},{name:"Total Pipeline",type:"line",data:[55,69,45,61,43,54,37,52,44,61,43,56]}],fill:{type:"solid",opacity:[.35,1]},labels:["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],markers:{size:0},colors:colors,yaxis:[{title:{text:"Revenue (USD)"},min:0}],tooltip:{shared:!0,intersect:!1,y:{formatter:function(o){return void 0!==o?o.toFixed(0)+"k":o}}},grid:{borderColor:"#f1f3fa",padding:{bottom:5}},legend:{fontSize:"14px",fontFamily:"14px",offsetY:5},responsive:[{breakpoint:600,options:{yaxis:{show:!1},legend:{show:!1}}}]};(chart=new ApexCharts(document.querySelector("#dash-revenue-chart"),options)).render();

$('.J-datepicker-range-day').datePicker({
	hasShortcut: false,
	language: 'en',
	format: 'YYYY-MM-DD',
	isRange: true
});
$(document).on('click', '.campaigns-sent.dropdown-menu', function (e) {
	if($(this).find('.nav-link').is(e.target)){
		e.stopPropagation();
	}
});
$(document).on('click','.campaigns-sent.dropdown-menu #presets a', function (e) {
	var text = $(this).text();
	$(this).parents('.dropdown.float-end').find('a.dropdown-toggle span').html(text);
});