$(document).ready(function() {
	'use strict';

	Morris.Area({
		element: 'overview-chart',
		data: [
		{x: '2015-06-01', y: 54},
		{x: '2015-06-02', y: 62},
		{x: '2015-06-03', y: 112},
		{x: '2015-06-04', y: 231},
		{x: '2015-06-05', y: 154},
		{x: '2015-06-06', y: 232},
		{x: '2015-06-07', y: 250},
		],
		xkey: 'x',
		ykeys: ['y'],
		labels: ['Overall Calories Burned'],
		xLabelAngle: 30,
		postUnits: ' Cal',
		lineColors: ['#FC754B'],
		lineWidth: 2,
		fillOpacity: 0.8,
		resize: true,
			//smooth: false,
			hideHover: "auto",
			dateFormat: function (x) { return moment(x).format('DD MMM YYYY'); }
	}).on('click', function(i, row){
		console.log(i, row);
	});

	Morris.Line({
		element: 'activities-chart',
		data: [
		{x: '2015-06-01', a: 12, b:0, c:42 },
		{x: '2015-06-02', a: 10, b:32, c:20},
		{x: '2015-06-03', a: 30, b:45, c:37},
		{x: '2015-06-04', a: 20, b:29, c:182},
		{x: '2015-06-05', a: 15, b:28, c:111},
		{x: '2015-06-06', a: 16, b:87, c:188},
		{x: '2015-06-07', a: 20, b:132, c:98},
		],
		xkey: 'x',
		ykeys: ['a', 'b', 'c'],
		xLabelAngle: 30,
		labels: ['Walking', 'Swimming', 'Running'],
		postUnits: ' Cal',
		lineColors: ['rgba(70, 176, 61, 0.7)', 'rgba(27, 171, 229, 0.7)', 'rgba(223, 99, 130, 0.7)'],
		lineWidth: 2,
		resize: true,
		fillOpacity: 0.3,
		hideHover: "auto",
		dateFormat: function (x) { return moment(x).format('DD MMM YYYY'); }
	});
});
