$(document).ready(function() {
	'use strict';

	/* ======= ChartJS ====== */
	/* Ref: http://www.chartjs.org/ */

	/* Line Chart */
	var lineChartData = {
		labels : ["Mar 16", "Mar 17", "Mar 18","Mar 19","Mar 20","Mar 21", "Mar 22"],
		datasets : [
		{
			label: "Total Sessions",
			backgroundColor : "rgba(64,186,189,0.3)",
			borderColor : "rgba(64,186,189,0.7)",
			borderWidth: 0,
			pointBackgroundColor : "rgba(64,186,189,0.4)",
			pointBorderColor : "rgba(256,256,256,0.5)",
			pointHoverBackgroundColor : "#fff",
			pointHoverBorderColor : "rgba(64,186,189,1)",
			data : [25145, 24583, 32456, 34890, 28763, 19234, 20016],

		},
		{
			label: "Unique Visitors",
			backgroundColor : "rgba(54,180,83, 0.3)",
			borderColor : "rgba(54,180,83, 0.7)",
			borderWidth: 0,
			pointBackgroundColor : "rgba(54,180,83, 0.4)",
			pointBorderColor : "rgba(256,256,256,0.5)",
			pointHoverBackgroundColor : "#fff",
			pointHoverBorderColor : "rgba(54,180,83, 1)",
			data : [12600, 13244, 16673, 16325, 17689, 16732, 15324]
		}
		]
	};

	/* Bar Chart 1*/
	var barChartData = {
		labels : ["18-24","25-34","35-44","45-54","65+"],
		datasets: [
		{
			label: "Female",
			backgroundColor: "rgba(234, 83, 149, 0.8)",
			borderColor: "rgba(234, 83, 149, 0.8)",
			borderWidth: 0,
			highlightFill: "rgba(234, 83, 149, 1)",
			highlightStroke: "rgba(234, 83, 149, 1)",
			data : [130000, 200000, 400000, 250000, 22000]
		},
		{
			label: "Male",
			backgroundColor: "rgba(88, 187, 238, 0.8)",
			borderColor: "rgba(88, 187, 238, 0.8)",
			borderWidth: 0,
			highlightFill : "rgba(88, 187, 238, 1)",
			highlightStroke : "rgba(88, 187, 238, 1)",
			data : [150000, 130000, 380000, 180000, 12000]
		}
		]
	};


	/* Pie Chart */
	var pieData = {
		labels: ["Returning Visitor", "New Visitor"],
		datasets: [{
			data: [65, 35],
			backgroundColor: [
				"rgba(88, 187, 238, 1)",
				"rgba(131, 193, 105, 1)"
			],
			hoverBackgroundColor: [
				"rgba(88, 187, 238,0.9)",
				"rgba(131, 193, 105, 0.9)"
			]
		}]
	};

	/* Doughnut Chart */
	var doughnutData = {
		labels: [ "Referral", "Direct", "Social", "Organic Search" ],
		datasets: [{
			data: [ 45, 15, 30, 10 ],
			backgroundColor: [
				"rgba(63, 183, 183, 0.9)",
				"rgba(107, 116, 125, 0.9)",
				"rgba(251, 134, 106, 0.9)",
				"rgba(248, 161, 63, 0.9)"
			],
			hoverBackgroundColor: [
				"rgba(63, 183, 183,1)",
				"rgba(107, 116, 125,1)",
				"rgba(251, 134, 106, 1)",
				"rgba(248, 161, 63, 1)"
			]
		}]
	};

	/* Line Chart */
	var ctx = document.getElementById("line-chart-canvas").getContext("2d");
	var myLine = new Chart(ctx, {
		type: 'line',
		data: lineChartData,
		options: {
			scales: {
				xAxes: [{
					gridLines: {
						display: false
					},
					ticks: {
						fontSize: 10,
						fontColor: "#b7bcc6"
					}
				}],
				yAxes: [{
					ticks: {
						fontSize: 10,
						fontColor: "#b7bcc6"
					}
				}]
			},
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: true,
				labels: {
					boxWidth: 14,
					lineWidth: 0
				},
			}
		}
	});

	/* Bar Chart 1*/
	var ctxBar = document.getElementById("bar-chart-canvas").getContext("2d");
	window.myBar= new Chart(ctxBar, {
		type: 'bar',
		data: barChartData,
		options: {
			scales: {
				xAxes: [{
					ticks: {
						fontColor: "#b7bcc6"
					}
				}],
				yAxes: [{
					ticks: {
						fontColor: "#b7bcc6"
					}
				}]
			},
			responsive: true,
			maintainAspectRatio: false,
			multiTooltipTemplate: function(chart) {
				return numeral(chart.value).format('0,0');
			},
			legend: {
				display: true,
				labels: {
					boxWidth: 14,
					lineWidth: 0
				},
			}
		}
	});

	/* Pie Chart */
	var ctxPie = document.getElementById("pie-chart-canvas").getContext("2d");
	window.myPie= new Chart(ctxPie, {
		type: 'pie',
		data: pieData,
		options: {
			responsive: true,
			maintainAspectRatio: false,
			animation: {
				animateRotate : false
			},
			tooltips: {
				bodyFontSize: 14,
				yPadding: 10,
				titleMarginBottom: 0,
				titleSpacing: 0,
				callbacks: {
					label: function(tooltipItem, data) {
						console.info(tooltipItem, data);
						return data.labels[tooltipItem.index] + ": " + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + "%";
					}
				}
			},
			legend: {
				display: true,
				labels: {
					boxWidth: 14,
					lineWidth: 0
				},
			}
		}
	});

	/* Doughnut Chart */
	var ctxDoughnut = document.getElementById("doughnut-chart-canvas").getContext("2d");
	window.myDoughnut= new Chart(ctxDoughnut, {
		type: 'doughnut',
		data: doughnutData,
		options: {
			responsive: true,
			maintainAspectRatio: false,
			animation: {
				animateRotate : false
			},
			tooltips: {
				bodyFontSize: 14,
				yPadding: 10,
				titleMarginBottom: 0,
				titleSpacing: 0,
				callbacks: {
					label: function(tooltipItem, data) {
						console.info(tooltipItem, data);
						return data.labels[tooltipItem.index] + ": " + data.datasets[tooltipItem.datasetIndex].data[tooltipItem.index] + "%";
					}
				}
			},
			legend: {
				display: true,
				labels: {
					boxWidth: 14,
					lineWidth: 0
				},
			}
		}
	});

	/* jQuery map */
	var visitorData = {AU:3e3,AT:36,AZ:51,BS:7,BH:21,BW:12,BN:11,BG:44,BF:8,BR:560,KH:11,CM:21,CA:15,CF:2,TD:7,CL:199,CN:5745,CO:283,CD:12,CG:11,CR:35,CI:22,HR:59,CY:22,CZ:195,DK:304,DO:50,EC:61,EG:216,SV:21,GQ:14,EE:19,FI:231,FR:12e3,GA:12,GE:11,DE:3305,GH:18,GR:305,GT:40,HN:15,HK:22,HU:132,IS:12,IN:1430,ID:69,IR:337,IQ:84,IE:600,IL:201,IT:2036,JM:13,JP:539,JO:27,KZ:12,KE:32,KR:986,UNDEFINED:0,KW:110,LA:6,LV:23,LB:39,LY:77,LT:35,LU:52,MK:9,MG:8,MW:5,MY:218,ML:9,MT:7,MR:3,MU:9,MX:1004,MD:5,MN:5,ME:3,MA:91,MZ:10,MM:35,NA:11,NP:15,NL:770,NZ:138,NG:206,NO:413,OM:53,PK:17,PA:27,PG:8,PY:17,PE:15,PH:189,PL:2e3,PT:223,QA:126,RO:158,RU:1476,RW:5,SA:43,SN:12,RS:3850,SI:460,ZA:3540,ES:5e3,LK:48,SZ:3,SE:7,CH:16,TW:5,TZ:20,TR:29,UG:23,UA:3,AE:300,GB:12e3,US:35e3};


	$('#world-map').vectorMap({
		map: 'world_mill_en',
		backgroundColor: "none",
		series: {
			regions: [{
				values: visitorData,
				scale: ["#B8E9EE", "#71D4CE"],
				normalizeFunction: 'polynomial'
			}]
		},
		regionStyle: {
			initial: {
				fill: '#F2F2F2',
				"fill-opacity": 1,
				stroke: 'none',
				"stroke-width": 0,
				"stroke-opacity": 1
			},
			hover: {
				"fill-opacity": 0.9,
				cursor: 'pointer'
			},
		},

		onRegionLabelShow: function(e, el, code) {
			el.html('<strong>' + el.html() + '<br/>Visitors:<br/>' + numeral(visitorData[code]).format('(0[,][000])') + '</strong>');
		}
	});
});
