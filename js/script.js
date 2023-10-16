document.addEventListener("DOMContentLoaded", function () {
  //БУРГЕР-МЕНЮ

  const burger = document.getElementById("burger");
  const mobileMenu = document.getElementById("mobileMenu");
  const burgerIcon = document.querySelector(".burger-icon");
  const closeIcon = document.querySelector(".close-icon");

  burger.addEventListener("click", function () {
    mobileMenu.classList.toggle("open");

    if (mobileMenu.classList.contains("open")) {
      burgerIcon.style.display = "none";
      closeIcon.style.display = "block";
    } else {
      burgerIcon.style.display = "block";
      closeIcon.style.display = "none";
    }
  });

  //ACCORDEON JS
  let questions = document.querySelectorAll(".question");

  questions.forEach(function (question) {
    let header = question.querySelector(".question__header");
    let content = question.querySelector(".question__content");

    header.addEventListener("click", function (event) {
      // Проверяем, был ли клик на элементе внутри вопроса
      if (event.target.closest(".question") === question) {
        if (question.classList.contains("open")) {
          question.classList.remove("open");
          content.style.height = "0";
        } else {
          questions.forEach(function (q) {
            q.classList.remove("open");
            q.querySelector(".question__content").style.height = "0";
          });

          question.classList.add("open");
          content.style.height = content.scrollHeight + "px";
        }
      }
    });
  });

  // //Inputmask
  // $(document).ready(function () {
  //     // Используйте селектор для вашего инпута с телефонным номером
  //     $('#phone').inputmask('+7 (999) 999-99-99'); // Задайте желаемую маску
  // });

  //ACCORDEON-SERVICE-PAGE
  let accordionItemsServices = document.querySelectorAll(".services-item");

  accordionItemsServices.forEach(function (item) {
    let header = item.querySelector("h2");
    let content = item.querySelector(".services-content");

    header.addEventListener("click", function (event) {
      if (event.target.closest(".services-item") === item) {
        if (item.classList.contains("open")) {
          item.classList.remove("open");
          header.classList.remove("rotate"); // Удалите класс при закрытии
          content.style.display = "none";
        } else {
          accordionItemsServices.forEach(function (accItem) {
            accItem.classList.remove("open");
            accItem.querySelector("h2").classList.remove("rotate"); // Удалите класс при закрытии других элементов
          });

          item.classList.add("open");
          header.classList.add("rotate"); // Добавьте класс при открытии
          content.style.display = "flex";
        }
      }
    });
  });

  //ВСЕ ТАБЫ В ПРОЕКТЕ
  document.addEventListener("DOMContentLoaded", function () {
    // Определите массивы tabs и tabContents с правильными ссылками на элементы страницы.
    let tabs = document.querySelectorAll(".tab");
    let tabContents = document.querySelectorAll(".tab-content");

    // Добавьте класс 'active' к первому табу и его содержимому по умолчанию.
    tabs[0].classList.add("active");
    tabContents[0].classList.add("active");

    // Добавьте обработчик события клика для табов.
    tabs.forEach(function (tab) {
      tab.addEventListener("click", function () {
        // Убираем активный класс со всех табов и их содержимого
        tabs.forEach(function (t) {
          t.classList.remove("active");
        });
        tabContents.forEach(function (content) {
          content.classList.remove("active");
        });

        // Добавляем активный класс только к выбранному табу и его содержимому
        tab.classList.add("active");
        let tabId = tab.getAttribute("data-tab");
        document.getElementById(tabId + "-content").classList.add("active");
      });
    });
  });

  //слайдер главная страница
  const slideContainer = document.querySelector(".specialist__list");
  const slides = document.querySelectorAll(".specialists__item");
  const slideWidth = 260;
  let isDragging = false;
  let startPosition = 0;
  let currentIndex = 0;

  slideContainer.style.width = `${slideWidth * slides.length}px`;

  slides.forEach((slide, index) => {
    slide.style.left = `${index * slideWidth}px`;
  });

  slideContainer.addEventListener("mousedown", (e) => {
    isDragging = true;
    startPosition = e.clientX - slideContainer.offsetLeft;
    slideContainer.style.transition = "none";
  });

  document.addEventListener("mousemove", (e) => {
    if (!isDragging) return;

    const currentX = e.clientX - slideContainer.offsetLeft;
    const diff = startPosition - currentX;
    slideContainer.style.transform = `translateX(${
      -currentIndex * slideWidth - diff
    }px)`;
  });

  document.addEventListener("mouseup", () => {
    if (!isDragging) return;

    const movement =
      startPosition - (event.clientX - slideContainer.offsetLeft);
    if (movement > slideWidth / 2 && currentIndex < slides.length - 3) {
      currentIndex++;
    } else if (movement < -slideWidth / 2 && currentIndex > 0) {
      currentIndex--;
    }

    isDragging = false;
    slideContainer.style.transition = "transform 0.3s ease-in-out";
    slideContainer.style.transform = `translateX(${
      -currentIndex * slideWidth
    }px)`;
  });

  // Аккореон в табах в блоке
  const accordionItems = document.querySelectorAll(".tab-accordion");

  // Добавляем обработчик события для каждого элемента
  accordionItems.forEach((item) => {
    const toggle = item.querySelector(".accordion-toggle");
    const content = item.querySelector(".accordion-content");

    toggle.addEventListener("click", () => {
      // Переключаем состояние открытия/закрытия аккордеона
      item.classList.toggle("open");

      // Переключаем отображение содержимого аккордеона
      if (item.classList.contains("open")) {
        content.style.display = "block";
      } else {
        content.style.display = "none";
      }
    });
  });

  //Яндекс карты
  ymaps.ready(init);
  function init() {
    let myMap = new ymaps.Map("map", {
      center: [59.939095, 30.315868], // Координаты Санкт-Петербурга
      zoom: 15, // Масштаб карты
    });

    let myPlacemark = new ymaps.Placemark([59.939095, 30.315868], {
      hintContent: "Ул. Большая Монетная, 19А",
    });

    myMap.geoObjects.add(myPlacemark);
  }
});
