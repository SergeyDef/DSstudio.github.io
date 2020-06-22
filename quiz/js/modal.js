"use strict"

var form2_btn = document.getElementsByClassName('form2_btn')[0];

function modal() {
	var mod_form = document.getElementById('mod_form');
 	
	mod_form.style.display = "block";
}

form2_btn.addEventListener("click", modal);

function openForm() {
 	var mod_form = document.getElementById('mod_form');

 	mod_form.style.display = "none";
}
// закрыть и открыть статьи
var can_opener = document.getElementsByClassName('can_opener');

function articles() {
	var result_A = document.getElementById('result_A');
	var result_B = document.getElementById('result_B');
	var c = document.getElementsByClassName('c');
	var elem = this;
	
alert(elem.classList.contains('can_b'));
	function op() {
		for (var i = 0; i < c.length; i++) {
			if (elem.classList.contains('can_a')) {
				c[i].style.display = 'none';
				result_A.style.display = 'block';
			} else if (elem.classList.contains('can_b')) {
				c[i].style.display = 'none';
				result_B.style.display = 'block';
			}
		}
	}
	
	function clo() {
		for (var i = 0; i < c.length; i++) {
			var styles = getComputedStyle(can_opener[i]);
			
			c[i].style.display = 'block';
			result_A.style.display = 'none';
			result_B.style.display = 'none';
		}
	}

	var can_name = elem.innerHTML;

	if (can_name == "Показать статью"){
		op();
	} else if (can_name == "Скрыть статью"){
		clo();
	} else {
		console.log('Исправти имя кнопок');
	}
}

for (var i = 0; i < can_opener.length; i++) {
	can_opener[i].addEventListener("click", articles);
}

// закрыть и открыть статьи 2


function browse() {
	var elem = this;
	var result_C = document.getElementById("result_C");
	var result_D = document.getElementById("result_D");
	var result_E = document.getElementById("result_E");
	var can = document.getElementsByClassName('can');

	function look() {

		for (var i = 0; i < can.length; i++) {
			if (elem.classList.contains('can_c')){
				result_C.style.display = 'block';
				can[i].style.display = 'none';
			} else if (elem.classList.contains('can_d')){
				result_D.style.display = 'block';
				can[i].style.display = 'none';
			} else if (elem.classList.contains('can_e')){
				result_E.style.display = 'block';
				can[i].style.display = 'none';
			}
		}
	}
	function hide() {
			for (var i = 0; i < can.length; i++) {
			
			can[i].style.display = 'block';
			result_C.style.display = 'none';
			result_D.style.display = 'none';
			result_E.style.display = 'none';
		}
	}
	if (elem.innerHTML == 'Посмотреть'){
		look();
	} else if (elem.innerHTML == 'Скрыть'){
		hide();
	}
}

var view = document.getElementsByClassName('views');

for (var i = 0; i < view.length; i++) {
	view[i].addEventListener("click", browse);
}