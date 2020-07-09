$(function() {
	/*-----echartdonut-----*/
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
	
	/*----Echart----*/
	var ctx = document.getElementById( "lineChart1" );
    ctx.height = 150;
	
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [ "2008", "2009", "2010", "2011", "2012", "2013", "2014"],
            datasets: [
                {
                    label: "males",
                    borderWidth: "1",
					hideHover: 'auto',
					behaveLikeLine: true,
					pointSize: 0,
					lineWidth: 0,
					resize: true,
					pointRadius: 0,
                    backgroundColor: "rgba(84, 88, 179,0.8)",
                    data: [0, 30, 60, 25, 60, 25, 50]
                            },
                {
                    label: "females",
                    borderWidth: "1",
					hideHover: 'auto',
					behaveLikeLine: true,
					pointSize: 0,
					pointRadius: 0,
					lineWidth: 0,
					resize: true,
                    backgroundColor: "rgb(244, 123, 37,0.8)",
                    data: [0, 60, 25, 100, 20, 75, 30],
                            }
                        ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false,
				
            },
			tooltips: {
				  
				},
            hover: {
                mode: 'nearest',
                intersect: true
            }

        }
    } );
	
});
