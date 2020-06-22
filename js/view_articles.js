"use strict"

var type_site = document.getElementById('type_site');
var but = document.getElementsByClassName('but');
var imgMepFon = document.getElementById('imgMepFon');

var block_0 = document.getElementById('block_0');
var block_1 = document.getElementById('block_1');

var site = document.getElementsByClassName('site');

var whoWe_modal = document.getElementById('whoWe_modal');

function left_block(){
	
}

function right_block(){
	

	
}

function modal() {
	var elem = this;
	
	var cutaway = document.getElementById('cutaway');
	var business = document.getElementById('business');
	var corporate = document.getElementById('corporate');

	var informational = document.getElementById('informational');
	var shop = document.getElementById('shop');
	var blog = document.getElementById('blog');
	
	console.log (type_site);
	if (elem.classList.contains('but_left')) {
		block_0.style.display = 'none';
		block_1.style.display = 'none';

	if (elem.classList.contains('cutaway')) {
		cutaway.style.display = 'block';
	} else if (elem.classList.contains('business')) {
		business.style.display = 'block';
	} else if (elem.classList.contains('corporate')) {
		corporate.style.display = 'block';
	}

		whoWe_modal.classList.add("whoWe_right");
	} else if (elem.classList.contains('but_right')) {
		block_0.style.display = 'none';
		block_1.style.display = 'none';
		
		if (elem.classList.contains('informational')) {
		informational.style.display = 'block';
	} else if (elem.classList.contains('shop')) {
		shop.style.display = 'block';
	} else if (elem.classList.contains('blog')) {
		blog.style.display = 'block';
	}

		whoWe_modal.classList.add("whoWe_left");
	} else if (elem.classList.contains('backward')) {
		block_0.style.display = 'block';
		block_1.style.display = 'block';
		for (var i = 0; i < site.length; i++) {
			site[i].style.display = 'none';
		}

		if (whoWe_modal.classList.contains('whoWe_right')) {
			whoWe_modal.classList.remove('whoWe_right');
		} else if (whoWe_modal.classList.contains('whoWe_left')) {
			whoWe_modal.classList.remove('whoWe_left');
		}
		
	} else {
		alert('нет класса');
	}
}

for (var i = 0; i < but.length; i++) {
	but[i].addEventListener("click", modal);
}