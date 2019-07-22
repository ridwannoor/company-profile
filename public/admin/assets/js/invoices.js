$(document).ready(function() {
	'use strict';

	Morris.Line({
		element: 'income-chart',
		data: [
			{x: '2015-06-01', a:4200, b:1000, c:1200 },
			{x: '2015-06-03', a:5400, b:800, c:600 },
			{x: '2015-06-08', a:3100, b:1100, c:1200 },
			{x: '2015-06-11', a:2500, b:800, c:1200 },
			{x: '2015-06-12', a:4200, b:1400, c:5670 },
			{x: '2015-06-13', a:5600, b:1250, c:4200 },
			{x: '2015-06-16', a:5200, b:1320, c:3760 },
			{x: '2015-06-18', a:5700, b:1578, c:3669 },
			{x: '2015-06-20', a:6250, b:924, c:3550 },
			{x: '2015-06-23', a:6100, b:866, c:3980 },
			{x: '2015-06-30', a:6340, b:790, c:3800 }
		],
		xkey: 'x',
		ykeys: ['a', 'b', 'c'],
		xLabelAngle: 30,
		labels: ['Invoiced', 'Recurring', 'Uninvoiced'],
		lineColors: ['rgba(58, 175, 234, 0.7)', 'rgba(232, 131, 44, 0.7)', 'rgba(253, 99, 86, 0.7)'],
		lineWidth: 2,
		resize: true,
		fillOpacity: 0.3,
		hideHover: "auto",
		parseTime: false,
		preUnits: "$",
		dateFormat: function (x) { return moment(x).format('DD MMM YYYY'); }
	});
});
