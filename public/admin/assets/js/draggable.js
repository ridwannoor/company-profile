$(function() {
	'use strict';

	$('.draggable-column').sortable({
		connectWith: '.draggable-column',
		handle: '.module-heading',
		cancel: '.portlet-toggle',
		placeholder: 'module module-placeholder',
		forcePlaceholderSize: true
	});
});
