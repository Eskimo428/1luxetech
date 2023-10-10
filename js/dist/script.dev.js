"use strict";

//БУРГЕР-МЕНЮ
document.addEventListener('DOMContentLoaded', function () {
  var burger = document.getElementById('burger');
  var mobileMenu = document.getElementById('mobileMenu');
  var burgerIcon = document.querySelector('.burger-icon');
  var closeIcon = document.querySelector('.close-icon');
  burger.addEventListener('click', function () {
    mobileMenu.classList.toggle('open');

    if (mobileMenu.classList.contains('open')) {
      burgerIcon.style.display = 'none';
      closeIcon.style.display = 'block';
    } else {
      burgerIcon.style.display = 'block';
      closeIcon.style.display = 'none';
    }
  });
}); //ACCORDEON JS

document.addEventListener('DOMContentLoaded', function () {
  var questions = document.querySelectorAll('.question');
  questions.forEach(function (question) {
    var header = question.querySelector('.question__header');
    var content = question.querySelector('.question__content');
    header.addEventListener('click', function (event) {
      // Проверяем, был ли клик на элементе внутри вопроса
      if (event.target.closest('.question') === question) {
        if (question.classList.contains('open')) {
          question.classList.remove('open');
          content.style.height = '0';
        } else {
          questions.forEach(function (q) {
            q.classList.remove('open');
            q.querySelector('.question__content').style.height = '0';
          });
          question.classList.add('open');
          content.style.height = content.scrollHeight + 'px';
        }
      }
    });
  });
}); //Inputmask

$(document).ready(function () {
  // Используйте селектор для вашего инпута с телефонным номером
  $('#phone').inputmask('+7 (999) 999-99-99'); // Задайте желаемую маску
}); //ACCORDEON-SERVICE-PAGE

document.addEventListener('DOMContentLoaded', function () {
  var accordionItems = document.querySelectorAll('.services-item');
  accordionItems.forEach(function (item) {
    var header = item.querySelector('h2');
    var content = item.querySelector('.services-content');
    header.addEventListener('click', function (event) {
      if (event.target.closest('.services-item') === item) {
        if (item.classList.contains('open')) {
          item.classList.remove('open');
          header.classList.remove('rotate'); // Удалите класс при закрытии

          content.style.display = 'none';
        } else {
          accordionItems.forEach(function (accItem) {
            accItem.classList.remove('open');
            accItem.querySelector('.services-content').style.display = 'none';
            accItem.querySelector('h2').classList.remove('rotate'); // Удалите класс при закрытии других элементов
          });
          item.classList.add('open');
          header.classList.add('rotate'); // Добавьте класс при открытии

          content.style.display = 'flex';
        }
      }
    });
  });
}); //ВСЕ ТАБЫ В ПРОЕКТЕ

document.addEventListener('DOMContentLoaded', function () {
  // Определите массивы tabs и tabContents с правильными ссылками на элементы страницы.
  var tabs = document.querySelectorAll('.tab');
  var tabContents = document.querySelectorAll('.tab-content'); // Добавьте класс 'active' к первому табу и его содержимому по умолчанию.

  tabs[0].classList.add('active');
  tabContents[0].classList.add('active'); // Добавьте обработчик события клика для табов.

  tabs.forEach(function (tab) {
    tab.addEventListener('click', function () {
      // Убираем активный класс со всех табов и их содержимого
      tabs.forEach(function (t) {
        t.classList.remove('active');
      });
      tabContents.forEach(function (content) {
        content.classList.remove('active');
      }); // Добавляем активный класс только к выбранному табу и его содержимому

      tab.classList.add('active');
      var tabId = tab.getAttribute('data-tab');
      document.getElementById(tabId + '-content').classList.add('active');
    });
  });
}); // Аккореон в табах в блоке

var accordionItems = document.querySelectorAll('.tab-accordion'); // Добавляем обработчик события для каждого элемента

accordionItems.forEach(function (item) {
  var toggle = item.querySelector('.accordion-toggle');
  var content = item.querySelector('.accordion-content');
  toggle.addEventListener('click', function () {
    // Переключаем состояние открытия/закрытия аккордеона
    item.classList.toggle('open'); // Переключаем отображение содержимого аккордеона

    if (item.classList.contains('open')) {
      content.style.display = 'block';
    } else {
      content.style.display = 'none';
    }
  });
}); //Яндекс карты 

ymaps.ready(init);

function init() {
  var myMap = new ymaps.Map("map", {
    center: [59.939095, 30.315868],
    // Координаты Санкт-Петербурга
    zoom: 15 // Масштаб карты

  });
  var myPlacemark = new ymaps.Placemark([59.939095, 30.315868], {
    hintContent: "Ул. Большая Монетная, 19А"
  });
  myMap.geoObjects.add(myPlacemark);
}
//# sourceMappingURL=script.dev.js.map
