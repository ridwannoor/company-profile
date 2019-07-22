$(document).ready(function() {
	'use strict';

	//Base Style
	$('#notify-default-trigger').on('click', function(){

		$.notify('<i class="fa fa-send"></i> Default example with icon - auto hide...', {
			style: 'appkit',
			className: 'base',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn'
		});

	});

	//Success Style
	$('#notify-success-trigger').on('click', function(){

		$.notify('<i class="fa fa-check"></i>  Success example with icon - auto hide...', {
			style: 'appkit',
			className: 'success',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn'
		});

	});

	//Info Style
	$('#notify-info-trigger').on('click', function(){

		$.notify('<i class="fa fa-info-circle"></i> Information example with icon - auto hide...', {
			style: 'appkit',
			className: 'info',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn'
		});

	});

	//Warn Style
	$('#notify-warn-trigger').on('click', function(){

		$.notify('<i class="fa fa-warning"></i> Warning example with icon - auto hide...', {
			style: 'appkit',
			className: 'warn',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn'
		});

	});

	//Error Style
	$('#notify-error-trigger').on('click', function(){

		$.notify('<i class="fa fa-frown-o"></i> Error example with icon - auto hide...', {
			style: 'appkit',
			className: 'error',
			//autoHide: false,
			//clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn'
		});

	});

	//Top left
	$('#notify-topleft-trigger').on('click', function(){

		$.notify('Top left example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'top left'
		});

	});

	//Top center
	$('#notify-topcenter-trigger').on('click', function(){

		$.notify('Top center example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'top center'
		});

	});

	//Top right
	$('#notify-topright-trigger').on('click', function(){

		$.notify('Top right example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'top right'
		});

	});

	//Bottom left
	$('#notify-bottomleft-trigger').on('click', function(){

		$.notify('Bottom left example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'bottom left'
		});

	});

	//Bottom center
	$('#notify-bottomcenter-trigger').on('click', function(){

		$.notify('Bottom center example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'bottom center'
		});

	});

	//Bottom right
	$('#notify-bottomright-trigger').on('click', function(){

		$.notify('Bottom right example - click to hide...', {
			style: 'appkit',
			className: 'base',
			autoHide: false,
			clickToHide: true,
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			globalPosition: 'bottom right'
		});

	});

	//On element 1
	$('#notify-element1-trigger').on('click', function(){

		$("#side-panel-toggle").notify('Check this out! Bottom center example...', {
			style: 'appkit',
			className: 'warn',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			showDuration: 200,
			elementPosition: 'bottom center'
		});

	});

	//On element 2
	$('#notify-element2-trigger').on('click', function(){

		$("#dropdownMenu-more").notify('Check this out! Bottom right example...', {
			style: 'appkit',
			className: 'success',
			hideAnimation: 'fadeOut',
			showAnimation: 'fadeIn',
			showDuration: 200,
			elementPosition: 'bottom right'
		});

	});
});
