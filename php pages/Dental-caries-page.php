<?php
/*
Template Name: caries
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
      <h2 class="sub__header">ЛЕЧЕНИЕ КАРИЕСА</h2>
      <div class="sub__main__content">
        <div class="sub__main-left">
          <img src="https://1luxe.ru/wp-content/uploads/2023/10/caries-img.webp" alt="caries" class="sub__main-img">
        </div>
        <div class="sub__main-right">
          <h3 class="sub__subtitle caries__subtitle">Показания к лечению</h3>
          <ul class="caries__list sub__list-up">
            <li class="sub__text-li caries__list-item">Изменение цвета, пигментация эмали; </li>
            <li class="sub__text-li caries__list-item">Потемнение пришеечного сегмента;</li>
            <li class="sub__text-li caries__list-item">Откол эмали;</li>
            <li class="sub__text-li caries__list-item">Темная щель, расположенная по границе пломбы
              <br>
              (зуб, кариес в котором возник вторично);
            </li>
            <li class="sub__text-li caries__list-item">Кариозная полость. </li>
            <li class="sub__text-li caries__list-item">Болезненная реакция на горячее, холодное, сладкое, соленое.</li>
          </ul>

          <h3 class="sub__subtitle caries__subtitle">Противопоказания</h3>
          <ul class="caries__list sub__list-up">
            <li class="sub__text-li caries__list-item">Первый и третий триместры беременности; </li>
            <li class="sub__text-li caries__list-item">Острые респираторные заболевания, герпес в стадии обострения;
            </li>
            <li class="sub__text-li caries__list-item">Острая стадия пародонтоза, сопровождающаяся сильной
              кровоточивостью десен.</li>
          </ul>
        </div>
      </div>
    </section>

    <section class="stage">
      <h2 class="sub__header">Стадии кариеса</h2>

      <p class="stage__descr">По глубине поражения кариес различают на 4 стадии</p>
      <ul class="stage__block">

        <li class="stage__block-item">
          <p class="item-number">1</p>
          <h5 class="item-text">Потемнение эмали</h5>
          <p class="item-description">
            На поверхности зуба появляются матовые пятна Со временем пигментация усиливается, но видимых разрушений не
            отмечается
          </p>
        </li>
        <li class="stage__block-item">
          <p class="item-number">2</p>
          <h5 class="item-text">Поверхностный</h5>
          <p class="item-description">
            Из-за процесса
            деминерализации
            на поверхностном слое эмали
            появляются дефекты,
            но поражения
            дентинане происходит
          </p>
        </li>
        <li class="stage__block-item">
          <p class="item-number">3</p>
          <h5 class="item-text">Средний</h5>
          <p class="item-description">
            Разрушение эмали зубов,
            частичное размягчение
            дентина с последующей
            утратой выполняемых функций
          </p>
        </li>
        <li class="stage__block-item">
          <p class="item-number">4</p>
          <h5 class="item-text">Глубокий</h5>
          <p class="item-description">
            Поражение затрагивает весь
            слой дентина, начинается
            воспаление пульпы
          </p>
        </li>
      </ul>
    </section>
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