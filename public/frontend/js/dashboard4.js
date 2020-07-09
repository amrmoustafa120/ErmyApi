
$(function() {
	'use strict';
	/*----AreaChart----*/
 	var Area = new Morris.Area({
 		element: 'Area-chart',
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
 		lineColors: ['#f47b25',  '#01b8ff','#5d61bf',],
		behaveLikeLine: true,
		pointSize: 0,
        lineWidth: 0,
        resize: true,
        gridLineColor: '#',
        hideHover: 'auto',
		labelscolor: '#fff'
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
	var ctx = document.getElementById("Chart3").getContext('2d');
	var myChart = new Chart(ctx, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [
					80,
					70,
					30,
					40,
				],
				backgroundColor: ['#f47b25', '#5d61bf', '#3ebaef', '#31c92e'],
				label: 'Dataset 1'
			}],
			labels: ['Chrome', 'Firefox', 'Opera', 'Safari'],
		},
		options: {
			responsive: true,
			legend: {
				position: 'bottom',
			},
		}
	});
	
});