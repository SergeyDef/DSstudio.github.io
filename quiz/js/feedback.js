"use strict"

// feedback
$(function () {
	$('#mod_form').submit(function (e) {
		e.preventDefault();
		var data = $(this).serialize();
		console.log(data);
	});
});

// main form

$(function () {
	$('#main_form').submit(function (e) {
		e.preventDefault();
		var data = $(this).serialize();
		console.log(data);
	});
});