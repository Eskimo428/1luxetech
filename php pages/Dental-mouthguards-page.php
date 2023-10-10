<?php
/*
Template Name: mouthguards
*/


get_template_part('header1'); 
?>
    <section class="main">
        <div class="container">
            <div class="pulpitis__link">
                <a href="/Services.html" class="pulpitis__services-link">
                    <svg class="pulpitis__arrow" width="56" height="16" viewBox="0 0 56 16" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0.292893 7.29289C-0.0976295 7.68341 -0.0976296 8.31658 0.292892 8.7071L6.65685 15.0711C7.04738 15.4616 7.68054 15.4616 8.07107 15.0711C8.46159 14.6805 8.46159 14.0474 8.07107 13.6568L2.41422 8L8.07107 2.34314C8.46159 1.95262 8.46159 1.31945 8.07107 0.928928C7.68054 0.538404 7.04738 0.538404 6.65685 0.928928L0.292893 7.29289ZM56 7L1 7L1 9L56 9L56 7Z"
                            fill="#0095DA" />
                    </svg>
                    вернуться к услугам</a>
            </div>
            <h1 class="pulpitis__title">КАПЫ ДЛЯ ДОМАШНЕГО ОТБЕЛИВАНИЯ</h1>

            <div class="pulpitis__content">
                <div class="left-block">
                    <img src="img/mouthguards-1.png">
                </div>
                <div class="pulpitis__right">
                    <h3 class="pulpitis__right-title">Что такое капы для домашнего отбеливания</h3>
                    <p class="text-Inter-20">
                        Изготовление индивидуальных кап высшего качества
                        для домашнего отбеливания зубов
                    </p>
                    <p class="text-Inter-20">
                        Ортодонтическая капа представляет собой прозрачную
                        герметичную накладку, повторяющую очертания зубных рядов.
                        Для достижения эффекта отбеливания слепок заполняют
                        вспомогательным составом на основе активных компонентов
                        (кислот, перекисей и пр.)
                    </p>
                    <p class="text-Inter-20">
                        Преимуществом изготовленной в нашей клинике индивидуальной
                        капы для домашнего отбеливания является контактирование геля
                        непосредственно с эмалью и, соответственно, лучший результат.
                    </p>
                </div>
            </div>
            <div class="tabs">
                <div class="tab" data-tab="mounth-tab">Принцип работы</div>
                <div class="tab" data-tab="guards-tab">Домашнее отбеливание с Opalescence</div>
            </div>

            <div class="tab-content" id="mounth-tab-content">
                <div class="left-block">
                    <img src="img/mouthguards-2.png">
                </div>
                <div class="pulpitis__right">
                    <h3 class="pulpitis__right-title"></h3>
                    <p class="text-Inter-20">
                        Особая анатомическая конструкция капы обеспечивает плотное,
                        удобное прилегание к зубам, благодаря чему происходит
                        равномерное распределение отбеливающегогеля по всей
                        поверхности. Процедура может длится от 30 минут до нескольких
                        часов – за это время активные компоненты способствуют удалению
                        налета и осветлению эмали зубов.
                    </p>
                </div>
            </div>
            <div class="tab-content" id="guards-tab-content">
                <div class="left-block">
                    <img src="img/Mounthguards-3.jpg">
                </div>
                <div class="pulpitis__right">
                    <h3 class="pulpitis__right-title"></h3>
                    <p class="text-Inter-20">
                        1. Самым распространённым является режим, когда каппу надевают на ночь;<br>
                        2. Режимы могут устанавливаться индивидуально от 1-2 часов ежедневно или 8 –10 часов каждую ночь или одну ночь каждые вторые или третьи сутки в зависимости от того, какое нужно отбеливание и какая у пациента чувствительность к препарату;<br> 
                        3. Приостановка отбеливания не ухудшает его конечный результат;<br> 
                        4. Одного шприца хватает на 2 процедуры.<br>
                    </p>
                </div>
            </div>
        </div>

            <div class="tab-contacts">
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
                                <input type="text" id="name" name="name" placeholder="Введите ваше имя"
                                    class="contact-form__input" required>
                            </div>
                            <div class="contact-form__input-group">
                                <label for="phone" class="contact-form__label"></label>
                                <input type="tel" id="phone" name="phone" placeholder="Введите ваш телефон"
                                    class="contact-form__input" required>
                            </div>
                            <div class="contact-form__checkbox-group">

                                <input type="checkbox" id="agree" name="agree" class="contact-form__checkbox" required>
                                <label for="agree" class="contact-form__checkbox-label">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1.5 11L7.5 17L17 1.5" stroke="#0095DA" stroke-width="2" />
                                    </svg>
                                    Даю согласие на обработку персональных данных</label>
                            </div>
                            <div class="contact-form__submit-button">
                                <button type="submit" class="contact-form__button">Отправить</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        get_template_part('footer1'); ?>