<?php
/*
Template Name: contacts
*/


get_template_part('header1'); 
?>


    <section class="main">
        <div class="contacts">
          <div class="container">
            <h1 class="contact__title">КОНТАКТЫ</h1>
          </div>
         <div class="contact-container">
          <div class="contact-container__left-block">
              <div class="contact-form">
                 <h3 class="contact__info">Если у Вас остались вопросы, мы <br>
                   с радостью ответим на них!</h3>
                   <p class="contact__descr">Оставьте Ваш телефон и мы Вам перезвоним</p>
                  <div class="contact-form__input-group">
                      <label for="name" class="contact-form__label"></label>
                      <input type="text" id="name" name="name" placeholder="Введите ваше имя" class="contact-form__input" required >
                  </div>
                  <div class="contact-form__input-group">
                      <label for="phone" class="contact-form__label"></label>
                      <input type="tel" id="phone" name="phone" placeholder="Введите ваш телефон" class="contact-form__input" required>
                  </div>
                  <div class="contact-form__checkbox-group">
                    
                      <input type="checkbox" id="agree" name="agree" class="contact-form__checkbox" required>
                      <label for="agree" class="contact-form__checkbox-label">
                        <svg width="18" height="19" viewBox="0 0 18 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M1.5 11L7.5 17L17 1.5" stroke="#0095DA" stroke-width="2"/>
                        </svg>
                    Даю согласие на обработку персональных данных</label>
                  </div>
                  <div class="contact-form__submit-button">
                      <button type="submit" class="contact-form__button">Отправить</button>
                  </div>
              </div>
          </div>
          <div class="map" id="map"></div>
      </div>
    </div>

 get_template_part('footer1'); ?>