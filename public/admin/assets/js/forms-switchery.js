$(document).ready(function() {
	'use strict';

	/* ===== Bootstrap Slider ==== */
	/* Ref: http://abpetkov.github.io/switchery/ */

	new Switchery(
		document.querySelector('.switchery'), { color: '#40babd' }
	);
	new Switchery(
		document.querySelector('.switchery-info'), { color: '#58bbee' }
	);
	new Switchery(
		document.querySelector('.switchery-success'), { color: '#75c181' }
	);
	new Switchery(
		document.querySelector('.switchery-warning'), { color: '#F8A13F' }
	);
	new Switchery(
		document.querySelector('.switchery-danger'), { color: '#f77b6b' }
	);
});
