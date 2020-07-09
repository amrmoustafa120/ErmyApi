$(function() {
	
	'use strict';
	var options = {
		chart: {
			type: "area",
			height: 300,
			foreColor: "#838ab6",
			scroller: {
				enabled: false,
				track: {
					height: 7,
					background: '#838ab6'
				},
				thumb: {
					height: 10,
					background: '#838ab6'
				},
				scrollButtons: {
					enabled: false,
					size: 9,
					borderWidth: 1,
					borderColor: '#838ab6',
					fillColor: '#838ab6'
				},
				padding: {
					left: 30,
					right: 20
				}
			},
			stacked: true,
			dropShadow: {
				enabled: false,
				enabledSeries: [0],
				top: -2,
				left: 2,
				blur: 5,
				opacity: 0.06
			}
		},
		colors: ['#f47b25', '#5d61bf' ],
		stroke: {
			curve: "smooth",
			width: 3
		},
		dataLabels: {
			enabled: false
		},
		series: [{
			name: 'Total Views',
			data: generateDayWiseTimeSeries(0, 18)
		}, {
			name: 'Unique Views',
			data: generateDayWiseTimeSeries(1, 18)
		}],
		markers: {
			size: 0,
			strokeColor: "#838ab6",
			strokeWidth: 3,
			strokeOpacity: 1,
			fillOpacity: 1,
			hover: {
				size: 6
			}
		},
		xaxis: {
			type: "datetime",
			axisBorder: {
				show: false
			},
			axisTicks: {
				show: false
			}
		},
		yaxis: {
			tickAmount: 4,
			min: 0,
			labels: {
				offsetX: 24,
				offsetY: -5
			},
			tooltip: {
				enabled: false
			}
		},
		grid: {
			padding: {
				left: -5,
				right: 5
			}
		},
		tooltip: {
			x: {
				format: "dd MMM yyyy"
			},
		},
		legend: {
			position: 'top',
			horizontalAlign: 'left'
		},
		fill: {
			type: "solid",
			fillOpacity: 0.7
		}
	};
	
	/*----Chartjs----*/
	var ctx = document.getElementById( "widgetChart1" );
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
            type: 'line',
            datasets: [ {
                data: [1, 30, 20, 28, 39, 22, 11],
                label: 'Dataset',
                backgroundColor: 'rgba(84, 88, 179,0.6)',
                borderColor: '#5458b3',
				pointBackgroundColor: '#1f27d0',
				pointRadius: 3
            }, ]
        },
        options: {

            maintainAspectRatio: false,
            legend: {
                display: false
            },
            responsive: true,
            tooltips: {
                mode: 'index',
                titleFontSize: 8,
                titleFontColor: '#000',
                bodyFontColor: '#000',
                backgroundColor: '#fff',
                cornerRadius: 0,
                intersect: false,
            },
            scales: {
                xAxes: [ {
                    gridLines: {
                        color: 'transparent',
                        zeroLineColor: 'transparent'
                    },
                    ticks: {
                        fontSize: 2,
                        fontColor: 'transparent'
                    }
                } ],
                yAxes: [ {
                    display:false,
                    ticks: {
                        display: false,
                    }
                } ]
            },
            title: {
                display: false,
            },
            elements: {
                line: {
                    borderWidth: 2
                },
                point: {
                    radius: 0,
                    hitRadius: 10,
                    hoverRadius: 4
                }
            }
        }
    } );
	
	
	
	
	/*----ApexCharts----*/
	var chart = new ApexCharts(document.querySelector("#timeline-chart"), options);
	chart.render();

	function generateDayWiseTimeSeries(s, count) {
		var values = [
			[
				4, 3, 10, 9, 29, 19, 25, 9, 12, 7, 19, 5, 13, 9, 17, 2, 7, 5
			],
			[
				2, 3, 8, 7, 22, 16, 23, 7, 11, 5, 12, 5, 10, 4, 15, 2, 6, 2
			]
		];
		var i = 0;
		var series = [];
		var x = new Date("20 Oct 2018").getTime();
		while (i < count) {
			series.push([x, values[s][i]]);
			x += 86400000;
			i++;
		}
		return series;
	}
	
	/*----DonutChart----*/
	var donut = new Morris.Donut({
		element: 'sales-chart',
		resize: true,
		colors: ['#f47b25', '#5d61bf', '#3ebaef'],
		data: [{
			label: "2018",
			value: 22
		}, {
			label: "2017",
			value: 30
		}, {
			label: "2016",
			value: 20
		}],
		hideHover: 'auto'
	});
	
});
