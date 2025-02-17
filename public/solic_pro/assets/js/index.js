"use strict";
/*-----WidgetChart1 CHARTJS-----*/
var ctx = document.getElementById("widgetChart1");
var myChart = new Chart(ctx, {
	type: 'line',
	data: {
		labels: ['Mon', 'Tues', 'Wed', 'Thurs', 'Fri', 'Sat', 'Sun'],
		type: 'area',
		datasets: [{
			label: "Cancel",
			backgroundColor: 'rgba(86, 78, 193, 0.07)',
			borderColor: 'rgba(86, 78, 193,0.75)',
			borderWidth: 2,
			pointStyle: 'circle',
			pointRadius: 3,
			pointBorderColor: 'transparent',
			pointBackgroundColor: 'rgba(86, 78, 193,0.75)',
			lineTension: 0.3,
			fill: true,
			data: [2, 7, 3, 9, 4, 5, 2, 8, 4, 6, 5, 2, 8, 4, 7, 2, 4, 6, 4, 8]
		},
		{
			label: "Expansion",
			backgroundColor: "rgb(255, 153, 0, 0.07) ",
			borderColor: 'rgba(255, 153, 0, 0.75)',
			borderWidth: 2,
			pointStyle: 'circle',
			pointRadius: 3,
			pointBorderColor: 'transparent',
			pointBackgroundColor: 'rgba(255, 153, 0, 0.75)',
			lineTension: 0.3,
			fill: true,
			data: [3, 8, 5, 7, 3, 7, 5, 8, 3, 7, 8, 6, 3, 5, 6, 5, 6, 5, 3, 4]
		}, {
			label: "Contraction",
			backgroundColor: "rgb(4, 202, 208, 0.07)",
			borderColor: 'rgba(4, 202, 208, 0.75)',
			borderWidth: 2,
			pointStyle: 'circle',
			pointRadius: 3,
			pointBorderColor: 'transparent',
			pointBackgroundColor: 'rgba(4, 202, 208, 0.75)',
			lineTension: 0.3,
			fill: true,
			data: [5, 3, 9, 6, 5, 9, 7, 3, 5, 2, 5, 3, 9, 6, 5, 9, 7, 3, 5, 2]
		}]
	},
	options: {
		maintainAspectRatio: false,
		plugins: {
			legend: true,
		},
		responsive: true,
		tooltips: {
			mode: 'index',
			titleFontSize: 12,
			titleFontColor: '#000',
			bodyFontColor: '#000',
			backgroundColor: '#fff',
			cornerRadius: 0,
			intersect: false,
		},
		scales: {
			x: {
				display: false,
				gridLines: {
					color: 'transparent',
					zeroLineColor: 'transparent'
				},
				ticks: {
					fontSize: 2,
					fontColor: 'transparent'
				}
			},
			y: {
				display: false,
				ticks: {
					display: false,
				}
			}
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
});

/* Circle-progress */
$('#circle').circleProgress({
	value: 0.85,
	size: 70,
	fill: {
		gradient: ["#564ec1", "#564ec1"]
	}
});
/* Circle-progress closed */

/* Circle-progress-1 */
$('#circle-1').circleProgress({
	value: 0.64,
	size: 70,
	fill: {
		gradient: ["#04cad0", "#04cad0"]
	}
});
/* Circle-progress-1 closed */

/* basic polar area chart */
var options = {
	series: [{
		name: 'MRR Revenue',
		data: [80, 50, 30, 40, 100, 20],
	}, {
		name: 'MRR Revenue',
		data: [20, 30, 40, 80, 20, 80],
	}, {
		name: 'Non-Recurring Revenue',
		data: [44, 76, 78, 13, 43, 10],
	}],
	chart: {
		height: 370,
		type: 'radar',
		dropShadow: {
			enabled: true,
			blur: 1,
			left: 1,
			top: 1
		},
		toolbar: {
			show: false
		}
	},
	plotOptions: {
		radar: {
		  size: undefined,
		  offsetX: 0,
		  offsetY: 0,
		  polygons: {
			strokeColors: 'rgba(119, 119, 142, 0.08)',
			strokeWidth: 1,
			connectorColors: 'rgba(119, 119, 142, 0.08)',
			fill: {
			  colors: undefined
			}
		  }
		}
	},
	title: {
		style: {
			fontSize: '13px',
			fontWeight: 'bold',
			color: '#8c9097'
		},
	},
	colors: ["#564ec1", "#04cad0", "#f7b731"],
	stroke: {
		width: 2
	},
	fill: {
		opacity: 0.1
	},
	markers: {
		size: 0
	},
	xaxis: {
		categories: ['2011', '2012', '2013', '2014', '2015', '2016']
	}
};
var chart = new ApexCharts(document.querySelector("#radar-multiple"), options);
chart.render();

/* Trials */

var ctx8 = document.getElementById('chartLine1');
new Chart(ctx8, {
	type: 'line',
	data: {
		label: "trials",
		labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
		datasets: [{
			data: [14, 12, 34, 25, 44, 36, 35, 25, 30, 32, 20, 25],
			backgroundColor: 'rgba(86, 78, 193,0.8)',
			borderColor: 'rgba(86, 78, 193,0.8)',
			borderWidth: 2,
			pointStyle: 'circle',
			pointRadius: 0,
			fill: true,
			lineTension: 0.3
		}]
	},
	options: {
		maintainAspectRatio: false,
		responsive: true,
		plugins: {
			legend: {
				display: false,
				labels: {
					display: false
				}
			},
			tooltip: {
				enabled: true
			}
		},
		scales: {
			x: {
				ticks: {
					beginAtZero: true,
					fontSize: 10,
					color: '#9493a9'
				},
				title: {
					display: false,
					text: 'Months',
				},
				grid: {
					display: true,
					color: 'rgba(119, 119, 142, 0.08)',
					drawBorder: false,
				},
			},
			y: {
				ticks: {
					beginAtZero: true,
					fontSize: 10,
					color: '#9493a9',
					stepSize: 10,
					min: 0,
					max: 80
				},
				title: {
					display: false,
					text: 'Revenue',
				},
				grid: {
					display: true,
					color: 'rgba(119, 119, 142, 0.08)',
					drawBorder: false,
				},
			}
		},
	}
});
/* Trials end */

function conversionChart() {
	var options = {
		series: [{
			name: 'Paying Conversion rate',
			type: 'line',
			data: [-15, 32, -11, 63, 16, 82, 292, 107, -18, 56, 200, 80],
		}, {
			name: 'Signup Conversion rate',
			type: 'column',
			data: [104, 102, 117, 146, 118, 115, 220, 103, 83, 114, 265, 174],
		}, {
			name: 'Churn rate',
			type: 'column',
			data: [-34, -42, -97, -56, -71, -175, -60, -34, -56, -78, -119, -53]
		}],
		chart: {
			height: 300,
			toolbar: {
				show: false
			}
		},
		stroke: {
			curve: 'smooth',
			lineCap: 'butt',
			colors: undefined,
			dashArray: [0, 0, 0],
			width: [2, 0, 0]
		},
		fill: {
			opacity: [1, 1, 1]
		},
		grid: {
			borderColor: 'rgba(119, 119, 142, 0.08)',
		},
		colors: ["#f7b731", "rgb(" + myVarVal + ")", "#04cad0"],
		plotOptions: {
			bar: {
				colors: {
					ranges: [{
						from: -100,
						to: -46,
						color: '#04cad0'
					}, {
						from: -45,
						to: 0,
						color: '#04cad0'
					}]
				},
				columnWidth: '40%',
				borderRadius: [2, 2]
			}
		},
		dataLabels: {
			enabled: false,
		},
		legend: {
			show: true,
			position: 'top',
			horizontalAlign: 'right',
			fontSize: '12px',
			fontWeight: 500,
			labels: {
				colors: '#74767c',
			},
			markers: {
				width: 8,
				height: 8,
				strokeWidth: 0,
				radius: 12,
				offsetX: 0,
				offsetY: 0
			},
		},
		yaxis: {
			title: {
				style: {
					color: '	#adb5be',
					fontSize: '14px',
					fontFamily: 'poppins, sans-serif',
					fontWeight: 600,
					cssClass: 'apexcharts-yaxis-label',
				},
			},
			labels: {
				formatter: function (y) {
					return y.toFixed(0) + "";
				}
			}
		},
		xaxis: {
			type: 'month',
			categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'sep', 'oct', 'nov', 'dec'],
			axisBorder: {
				show: false,
				color: 'rgba(119, 119, 142, 0.05)',
				offsetX: 0,
				offsetY: 0,
			},
			axisTicks: {
				show: true,
				borderType: 'solid',
				color: 'rgba(119, 119, 142, 0.05)',
				width: 6,
				offsetX: 0,
				offsetY: 0
			},
			labels: {
				rotate: -90
			}
		}

	};
	document.getElementById('conversion').innerHTML = ''; 
	var chart1 = new ApexCharts(document.querySelector("#conversion"), options);
	chart1.render();
}