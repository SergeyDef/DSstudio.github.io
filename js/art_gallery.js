"use strict"

const site_photo = document.getElementsByClassName('site_photo');


// включения галереи

// function swit(){
// 	var switches = document.getElementsByClassName('switches');
// 	var slide_modal = document.getElementsByClassName('slide_modal');
	
// 	for (var i = 0; i < slide_modal.length; i++) {
// 		var displayBlock = getComputedStyle(slide_modal[i]);
// 		var dis = displayBlock.display;

// 		if (dis == 'block') {
// 			for (var i = 0; i < switches.length; i++) {
// 				console.log(switches[i]);
// 				var swit = document.createElement('div');
// 				swit.className = 'switch';
// 		  		switches[i].appendChild(swit);
// 			}
// 		}
// 	}
// }




// var slide_modal = document.getElementsByClassName('slide_modal');
// var closing = document.getElementsByClassName('closing');

// for (var i =0; i < closing.length; i++) {
// 	var closing_img = closing[i].getElementsByTagName('img');
// }
// // переключение слайдов
// function urge(value_button) {

// 	if (this.classList.contains('right_arrow')) {
// 		value_button = true;

// 		} else if (this.classList.contains('left_arrow')) {
// 			value_button = false;
				
// 		} else {
// 			value_button = null;
				
// 		}
// 	console.log(value_button);

// 	var slide_container = document.getElementsByClassName('slide_container');

// 		console.log(slide_container);
// 		for (var i = 0; i < slide_container.length; i++) {
// 			var arrow_li = slide_container[i].getElementsByTagName("li");
// 			var number_pictures = arrow_li.length;

// 			for (var i = 0; i < arrow_li.length; i++) {
// 				console.log(arrow_li[i]);
// 				var style = getComputedStyle(arrow_li[i]);
// 				var order = style.order;

// 				console.log(number_pictures);

// 				if (value_button == true) {
// 					arrow_li[i].style.order = +order - 1;

// 					if (order == 0) {
// 						arrow_li[i].style.order = number_pictures;
// 					} else if (order > number_pictures) {
// 						arrow_li[i].style.order = +order - 1;
// 					} else if (order < 0) {
// 						arrow_li[i].style.order = +order+1;
// 					}
// 				} else if (value_button == false) {
// 					arrow_li[i].style.order = +order + 1;

// 					if (order == 0) {
// 						arrow_li[i].style.order = number_pictures;
// 					} else if (order > number_pictures) {
// 						arrow_li[i].style.order = +order - 1;
// 					} else if (order < 0) {
// 						arrow_li[i].style.order = +order+1;
// 					}
// 				} else {
// 					alert("Erro: что-то пошло не туда!");
// 				}
// 			}
			
// 		}
// }

// var arrow = document.getElementsByClassName('arrow');

// for (var i = 0; i < arrow.length; i++) {
// 	arrow[i].addEventListener("click", urge);
// }
// function (event) {
// 	var slide_img = document.getElementsByClassName('slide_img');
// 	// получаем эммит, проверяем на наличия класса "лево-право"
// 	// в зависимости от результата меняем орнунг элементов в нужном порядке
// }