$(function() {
	'use strict';
	/*----AreaChart----*/
 	var Area = new Morris.Area({
 		element: 'Area-chart',
 		resize: true,
 		data: [{
 			y: '2011 Q1',
 			item1: 2666,
 			item2: 2666
 		}, {
 			y: '2011 Q2',
 			item1: 2778,
 			item2: 2294
 		}, {
 			y: '2011 Q3',
 			item1: 4912,
 			item2: 1969
 		}, {
 			y: '2011 Q4',
 			item1: 3767,
 			item2: 13597
 		}, {
 			y: '2012 Q1',
 			item1: 6810,
 			item2: 1914
 		}, {
 			y: '2012 Q2',
 			item1: 15670,
 			item2: 4293
 		}, {
 			y: '2012 Q3',
 			item1: 4820,
 			item2: 3795
 		}, {
 			y: '2012 Q4',
 			item1: 15073,
 			item2: 5967
 		}, {
 			y: '2013 Q1',
 			item1: 10687,
 			item2: 4460
 		}, {
 			y: '2013 Q2',
 			item1: 8432,
 			item2: 5713
 		}],
 		xkey: 'y',
 		ykeys: ['item1', 'item2'],
 		labels: ['Item 1', 'Item 2'],
 		lineColors: ['#f47b25', '#5d61bf'],
 		hideHover: 'auto',
		behaveLikeLine: true,
		pointSize: 0,
        lineWidth: 0,
        resize: true,
        gridLineColor: '#fff',
        hideHover: 'auto'
 	});
	
	/*----BarChart----*/
	var bar = new Morris.Bar({
 		element: 'bar-chart',
 		resize: true,
 		data: [{
 			y: 'Jan',
 			a: 50,
 			b: 90
 		}, {
 			y: 'Feb',
 			a: 95,
 			b: 65
 		}, {
 			y: 'Mar',
 			a: 50,
 			b: 40
 		}, {
 			y: 'Apr',
 			a: 75,
 			b: 65
 		}, {
 			y: 'May',
 			a: 50,
 			b: 40
 		}, {
 			y: 'Jun',
 			a: 75,
 			b: 65
 		}, {
 			y: 'Jul',
 			a: 100,
 			b: 90
 		}],
 		barColors: ['#f47b25', '#5d61bf'],
 		xkey: 'y',
 		ykeys: ['a', 'b'],
 		labels: ['Front end projects', 'Backend projects'],
 		hideHover: 'auto'
 	});
	
	/*----DonutChart----*/
	var donut = new Morris.Donut({
		element: 'sales-chart',
		resize: true,
		colors: ['#f47b25', '#5d61bf', '#3ebaef'],
		data: [{
			label: "2018",
			value: 5522
		}, {
			label: "2017",
			value: 3310
		}, {
			label: "2016",
			value: 2250
		}],
		hideHover: 'auto'
	});
	
});


