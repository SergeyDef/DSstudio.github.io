"use strict"

// Twilight Of The Thunder God

function callback(event) {
	var mod_form = document.getElementById('mod_form');
	var essence = event.currentTarget;
	var elem_p = document.getElementsByClassName('elem_p');

	mod_form.style.display = 'block';

	for (var i = 0; i < elem_p.length; i++) {
		if (essence.innerHTML = "<span>Бесплатная консультация</span>") {
			elem_p[i].innerHTML = "Оставить заявление на консультацию";
		}
	}
}
function openForm() {
	var mod_form = document.getElementById('mod_form');
	mod_form.style.display = 'none';
}
document.getElementById('menu_sandwich').onclick = function() {
	var menu_show = document.getElementsByClassName('point');
	var menu_hide = document.getElementById('hidden_menu_close');

	menu_hide.style.display = "block";

	for (var i = 0; menu_show.length; i++) {
		menu_show[i].style.display = "block";
	}
}
document.getElementById('hidden_menu_close').onclick = function() {
	var menu_show = document.getElementsByClassName('point');
	var menu_hide = document.getElementById('hidden_menu_close');
	
	menu_hide.style.display = 'none';

	for (var i = 0; menu_show.length; i++) {
		menu_show[i].style.display = 'none';
	}
}
function valid(form) {
	var feil = false;
	var name = form.name.value;
	var mail = form.name.value;
	var phone = form.name.value;
	var message_me = form.name.value;
	
	if (name == "" || name == " ") {
		feil = "Ведите имя";
	} else if (mail == "" || name == " ") {
		feil = "Ведите почту";
	} else if (phone == "" || name == " ") {
		feil = "Ведите телефон";
	}

	if (feil) {
		alert(feil);
	} 
}







// прошение на регистрацию


	var right_register = document.getElementById('right_register');

	right_register.onclick = function (event) {
		var essence = event.currentTarget.innerHTML;
		var name_button = document.getElementsByClassName('span');

		for (var i = 0; i < name_button.length; i++) {
			if (name_button[i].innerHTML  == "Подать прошение на регистрацию"){
				name_button[i].innerHTML = "В доступе отказанно - мордой не вышел(а)!";
				
				console.log("равно");
			} else {
				console.log(name_button[0]);
			}
		}
		console.log(essence);
		essence = '<span> В доступе отказанно - мордой не вышел(а) </span>';
		var result = setTimeout(function (){
			console.log(essence);
		}, 2000);
	}

	




// function (event) {
// 	var slide_img = document.getElementsByClassName('slide_img');
// 	// лучаем эммит, проверяем на наличия класса "лево-право"
// 	// в зависимости от результата меняем орнунг элементов в нужном порядке
// }