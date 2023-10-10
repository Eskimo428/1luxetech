<?php
/*
Template Name: caries
*/


get_template_part('header1'); 
?>


      <section class="main">
        <div class="container">
          <div class="pulpitis__link">
            <a href="/Services.html" class="pulpitis__services-link">
              <svg class="pulpitis__arrow" width="56" height="16" viewBox="0 0 56 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6568L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM56 7L1 7L1 9L56 9L56 7Z" fill="#0095DA"/>
              </svg>
              вернуться к услугам</a>
          </div>
          
            <h1 class="pulpitis__title">ЛЕЧЕНИЕ КАРИЕСА</h1>
          <div class="caries__content">
            <div class="left-block">
              <img src="img/Caries.jpg">
            </div>
            <div class="caries__right">
              <h3 class="caries__right-title">Показания к лечению</h3>
              <ul class="caries__list text-Inter-20">
                <li class="caries__list-item" >Изменение цвета, пигментация эмали; </li>
                <li class="caries__list-item" >Потемнение пришеечного сегмента;</li> 
                <li class="caries__list-item" >Откол эмали;</li> 
                <li class="caries__list-item" >Темная щель, расположенная по границе пломбы (зуб, кариес в котором возник вторично);</li> 
                <li class="caries__list-item" >Кариозная полость. </li>
                <li class="caries__list-item" >Болезненная реакция на горячее, холодное, сладкое, соленое.</li>
              </ul>
              <br>
              <h3 class="caries__right-title">Противопоказания</h3>
                <ul class="caries__list text-Inter-20">
                  <li class="caries__list-item" >Первый и третий триместры беременности; </li>
                  <li class="caries__list-item" >Острые респираторные заболевания, герпес в стадии обострения; </li>
                  <li class="caries__list-item" >Острая стадия пародонтоза, сопровождающаяся сильной кровоточивостью десен.</li>
                </ul>   
          </div>
        </div>

        <div class="pulpitis__stage">
          <h1 class="pulpitis__stage-title">СТАДИИ КАРИЕСА</h1>
          <p class="pulpitis__stage-descr">По глубине поражения кариес различают на 4 стадии</p>
          <div class="pulpitis__blocks">
            <div class="caries__block-item">
              <div class="item-number">1</div>
              <div class="item-text">Потемнение эмали</div>
              
              <div class="item-description">
                На поверхности зуба появляются матовые пятна Со временем пигментация усиливается, но видимых разрушений не отмечается
              </div>
               
            </div>
            <div class="caries__block-item">
              <div class="item-number">2</div>
                <div class="item-text">Поверхностный</div>
             
                <div  class="item-description">
                  Из-за процесса деминерализации на поверхностном слое эмали появляются дефекты, но поражения дентинане происходит
                </div>
              </div>
           
            <div class="caries__block-item">
              <div class="item-number">3</div>
              <div class="item-text">Средний</div>
            
              <div class="item-description">
                Разрушение эмали зубов, частичное размягчение дентина с последующей утратой выполняемых функций
              </div>
            </div>
            <div class="caries__block-item">
              <div class="item-number">4</div>
              <div class="item-text">Глубокий</div>
              
              <div class="item-description">
                Поражение затрагивает весь слой дентина, начинается воспаление пульпы
              </div>
            </div>
          </div>
        </div>
        </div>

        <div class="pulpitis__contacts">
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