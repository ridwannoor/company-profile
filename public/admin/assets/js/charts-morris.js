$(document).ready(function() {
	'use strict';

	/* ===== Morris Charts ==== */
	/* Ref: http://morrisjs.github.io/morris.js/ */

	Morris.Area({
		element: 'morris-area-chart',
		data: [
		{x: '2010', y: 23450, z: 15670},
		{x: '2012', y: 31324, z: 32345},
		{x: '2013', y: 22356, z: 21234},
		{x: '2014', y: 25434, z: 23567},
		{x: '2015', y: 32566, z: 16784},
		],
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Y', 'Z'],
		lineColors: ['rgba(56, 203, 203, 0.9)', 'rgba(117, 193, 129, 0.9)'],
		fillOpacity: 0.3,
		resize: true
	}).on('click', function(i, row){
		console.log(i, row);
	});

	Morris.Line({
		element: 'morris-line-chart',
		behaveLikeLine: true,
		data: [
		{x: '2011', y: 23450, z: 15670},
		{x: '2012', y: 31324, z: 32345},
		{x: '2013', y: 22356, z: 21234},
		{x: '2014', y: 25434, z: 23567},
		{x: '2015', y: 32566, z: 16784},
		],
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Sales A', 'Sales B'],
		lineColors: ['#75c181', '#58bbee'],
		resize: true
	});

	Morris.Bar({
		element: 'morris-bar-chart',
		data: [
		{device: 'iPhone', geekbench: 136},
		{device: 'iPhone 4G', geekbench: 142},
		{device: 'iPhone 4GS', geekbench: 236},
		{device: 'iPhone 5G', geekbench: 342},
		{device: 'iPhone 5GS', geekbench: 475},
		{device: 'iPhone 6', geekbench: 680},
		{device: 'iPhone 6 Plus', geekbench: 755},
		],
		xkey: 'device',
		ykeys: ['geekbench'],
		labels: ['Geekbench'],
		barColors: ['#75c181'],
		barRatio: 0.4,
		xLabelAngle: 35,
		hideHover: 'auto',
		resize: true
	});

	Morris.Bar({
		element: 'morris-bar-chart-2',
		data: [
		{x: '2011', y: 23450, z: 15670},
		{x: '2012', y: 31324, z: 32345},
		{x: '2013', y: 22356, z: 21234},
		{x: '2014', y: 25434, z: 23567},
		{x: '2015', y: 32566, z: 16784},
		],
		xkey: 'x',
		ykeys: ['y', 'z'],
		labels: ['Sales A', 'Sales B'],
		barColors: ['#40babd', '#75c181'],
		barRatio: 0.2,
		resize: true
	});

	Morris.Bar({
		element: 'morris-bar-chart-3',
		data: [
		{x: '2011 Q1', y: 3, z: 2, a: 3},
		{x: '2011 Q2', y: 2, z: 3, a: 1},
		{x: '2011 Q3', y: 0, z: 2, a: 4},
		{x: '2011 Q4', y: 2, z: 4, a: 3}
		],
		xkey: 'x',
		ykeys: ['y', 'z', 'a'],
		labels: ['Y', 'Z', 'A'],
		barColors: ['#58bbee', '#75c181', '#F8A13F'],
		stacked: true,
		resize: true
	});

	Morris.Donut({
		element: 'morris-donut-chart',
		data: [
		{value: 70, label: 'US'},
		{value: 15, label: 'UK'},
		{value: 10, label: 'China'},
		{value: 5, label: 'Germany'}
		],
		backgroundColor: '#fff',
		labelColor: '#494d55',
		colors: [
		'#40babd',
		'#44CACE',
		'#45D9DE',
		'#43DFE8'
		],
		formatter: function (x) { return x + "%"},
		resize: true
	});
});
