
<?php
/*
Template Name: whitening
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
            <h1 class="pulpitis__title">КЛИНИЧЕСКОЕ ОТБЕЛИВАНИЕ ЗУБОВ</h1>

            <div class="pulpitis__content">
                <div class="left-block">
                    <img src="img/Whitening-page.jpg">
                </div>
                <div class="pulpitis__right">
                    <h3 class="pulpitis__right-title">Как это работает?</h3>
                    <p class="text-Inter-20">
                        При отбеливании в стоматологии на зубы наносится разновидность 
                        геля на основе перекись водорода. При активации геля возникает 
                        химическая реакция, вызывающая распад молекул водорода 
                        на кислород и воду. Кислород проникает в верхние слои 
                        зубной эмали, фрагментируя пигмент и красители, закрепившиеся 
                        на зубах. Весь налет, осевший на эмали, разрушается и удаляется.
                    </p>
                </div>
            </div>
            <div class="tabs">
                <div class="tab active" data-tab="whiteningTeeth-tab">Отбеливание зубов Opalescence</div>
            </div>

            <p class="text-Inter-20 crowns__descr">
                Профессиональные системы отбеливания Opalescence Boost для потрясающего результата
            </p>
            <p class="text-Inter-20">
                Opalescence – система отбеливания зубов, которая сочетает в себе эффективность 
                (эмаль становится светлее до 12 тонов) и бережное отношение к зубной эмали. 
                Разработана «Опалесценс» американскими специалистами в 2013 году. 
                Процедура завоевала популярность,  благодаря тому, что подходит для людей 
                с чувствительной эмалью: при проведении операции не используются механическое 
                и тепловое воздействие
            </p>
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
                    <div class="contact-container__right-block">
                        <!-- фоновый контент для правого блока -->
                    </div>
                </div>
            </div>

            get_template_part('footer1'); ?>