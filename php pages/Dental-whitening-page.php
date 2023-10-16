
<?php
/*
Template Name: whitening
*/


get_template_part('header'); 
?>


<div class="container">
    <section class="main__sub main__caries">
      <div class="sub__link-up">
        <a href="/Services.html" class="pulpitis__services-link">
          <svg class="sub__arrow-up" width="56" height="16" viewbox="0 0 56 16" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6568L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM56 7L1 7L1 9L56 9L56 7Z"
              fill="#0095DA" />
          </svg>
          Вернуться к услугам</a>
      </div>
      <h2 class="sub__header">
        Клиническое отбеливание зубов
      </h2>
      <div class="sub__main__content">
        <div class="sub__main-left">
          <img src="https://1luxe.ru/wp-content/uploads/2021/09/2020-03-06__190140.png" alt="whitetening"
            class="sub__main-img">
        </div>
        <div class="sub__main-right">
          <h3 class="sub__subtitle whitetening__subtitle">Как это работает?</h3>
          <p class="sub__text-li whitetening__list-item">Периодонтит – это воспаление тканей, окружающих корень зуба.
            При отбеливании в стоматологии на зубы наносится разновидность геля на основе перекись водорода.
            При активации геля возникает химическая реакция, вызывающая распад молекул водорода на кислород и воду.
            Кислород проникает в верхние слои зубной эмали, фрагментируя пигмент
            и красители, закрепившиеся на зубах. Весь налет, осевший
            на эмали, разрушается и удаляется.
          </p>
        </div>
      </div>
    </section>

    <div class="tabs">
      <div class="tab active" data-tab="whiteningTeeth-tab">Отбеливание зубов Opalescence</div>
    </div>
    <div class="whitetening__content">
      <p class="sub__text-li whitetening__list-item">
        Профессиональные системы отбеливания Opalescence Boost для потрясающего результата
      </p>
      <p class="sub__text-li whitetening__list-item">
        Opalescence – система отбеливания зубов, которая сочетает в себе эффективность
        (эмаль становится светлее до 12 тонов) и бережное отношение к зубной эмали.
        Разработана «Опалесценс» американскими специалистами в 2013 году.
        Процедура завоевала популярность, благодаря тому, что подходит для людей
        с чувствительной эмалью: при проведении операции не используются механическое
        и тепловое воздействие
      </p>
    </div>
  </div>

  <section class="contacts">
    <div class="container">
      <h2 class="contact__title header__main">Контакты</h2>
    </div>
    <div class="contact-container">
      <div class="contact-container__left-block">
        <div class="contact-form">
          <h3 class="contact__info">Если у Вас остались вопросы, мы <br>
            с радостью ответим на них!</h3>
          <p class="contact__descr">Оставьте Ваш телефон и мы Вам перезвоним</p>
          <form action="#" class="contact-form__input-group" method="post" id="feedback-form-1"
            enctype="multipart/form-data">
            <input type="text" name="name" class="contact-form__input" placeholder="Имя" minlength="3" required
              pattern="^[А-Яа-яЁёA-Za-z]+$" title="Пожалуйста, введите правильное имя">
            <input type="tel" name="phone" class="contact-form__input" placeholder="+7(___) ___-__-__" minlength="11"
              maxlength="30" required>
            <div class="checkbox__container">
              <input class="checkbox" type="checkbox" id="checkbox" name="checkbox" required
                title="Пожалуйста, отметьте это поле" />
              <label class="contact-form__checkbox-label" for="checkbox">Даю согласие на обработку персональных
                данных</label>
            </div>
            <button type="submit" class="btn contact-form__button" name="submit"
              id="submit-feedback-1">Отправить</button>
            <div class="delivered-1"></div>
          </form>
        </div>
      </div>
      <div class="map" id="map"></div>
    </div>
  </section>

            get_template_part('footer'); ?>