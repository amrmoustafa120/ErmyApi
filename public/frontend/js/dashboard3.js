$(function() {
	'use strict';
	
	/*----LineChart----*/
	var line = new Morris.Line({
		element: 'line-chart',
		resize: true,
		data: [{
 			y: '2011 Q1',
 			item1: 2666,
 			item2: 2666,
			item3: 1338
 		}, {
 			y: '2011 Q2',
 			item1: 2778,
 			item2: 2294,
			item3: 7468
 		}, {
 			y: '2011 Q3',
 			item1: 4912,
 			item2: 1969,
			item3: 3664
 		}, {
 			y: '2011 Q4',
 			item1: 3767,
 			item2: 13597,
			item3: 2354
 		}, {
 			y: '2012 Q1',
 			item1: 6810,
 			item2: 1914,
			item3: 9688
 		}, {
 			y: '2012 Q2',
 			item1: 15670,
 			item2: 4293,
			item3: 3748
 		}, {
 			y: '2012 Q3',
 			item1: 4820,
 			item2: 3795,
			item3: 9583
 		}, {
 			y: '2012 Q4',
 			item1: 15073,
 			item2: 5967,
			item3: 5367
 		}, {
 			y: '2013 Q1',
 			item1: 10687,
 			item2: 4460,
			item3: 4757
 		}, {
 			y: '2013 Q2',
 			item1: 8432,
 			item2: 5713,
			item3: 8374
 		}],
		xkey: 'y',
 		ykeys: ['item1', 'item2', 'item3'],
 		labels: ['Item 1', 'Item 2', 'Item 3'],
 		lineColors: ['#f47b25', '#5d61bf', '#01b8ff'],
		pointRadius: 0,
 		hideHover: 'auto'
	});
	
	/*----DonutChart----*/
	var donut = new Morris.Donut({
		element: 'sales-chart',
		resize: true,
		colors: ['#f47b25', '#5d61bf', '#3ebaef'],
		data: [{
			label: "Product A",
			value: 12
		}, {
			label: "Product B",
			value: 30
		}, {
			label: "Product C",
			value: 20
		}],
		hideHover: 'auto'
	});
	
	/*----BarChart----*/
	var options = {
		chart: {
			height: 350,
			type: 'bar',
		},
		plotOptions: {
			bar: {
				horizontal: false,
				endingShape: 'rounded',
				columnWidth: '55%',
			},
		},
		dataLabels: {
			enabled: false
		},
		stroke: {
			show: true,
			width: 2,
			colors: ['transparent']
		},
		colors: ['#f47b25', '#5d61bf', '#3ebaef'],
		series: [{
			name: 'Net Profit',
			data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
		}, {
			name: 'Revenue',
			data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
		}, {
			name: 'Free Cash Flow',
			data: [35, 41, 36, 26, 45, 48, 52, 53, 41]
		}],
		xaxis: {
			categories: ['Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		},
		yaxis: {
			title: {
				text: '$ (thousands)'
			}
		},
		fill: {
			opacity: 1
		},
		tooltip: {
			y: {
				formatter: function(val) {
					return "$ " + val + " thousands"
				}
			}
		}
	}
	var chart = new ApexCharts(document.querySelector("#barchart"), options);
	chart.render();
});