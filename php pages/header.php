<?php
/**
 * The Header for our theme.
 *
 * @package main-1luxe WordPress theme
 */

?>


<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DRLuxe стоматологическая клиника</title>
  <link rel="stylesheet" href="css/normalize.css">
  <script src="https://api-maps.yandex.ru/2.1/?apikey=d162b36a-69ee-4f86-b9f5-c2956e8f45f7&lang=ru_RU"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header class="header">
    <div class="main__conntainer">
      <div class="header__logo">
        <img class="header__logo-img" src="img/logo.svg" alt="Логотип">
      </div>
      <nav class="header__nav">
        <ul class="header__nav-list">
          <li class="header__nav-item"><a href="/index.html" class="header__nav-link">Главная</a></li>
          <li class="header__nav-item"><a href="/Services.html" class="header__nav-link">Услуги</a></li>
          <li class="header__nav-item"><a href="/About-us.html" class="header__nav-link">О нас</a></li>
          <li class="header__nav-item"><a href="/Contacts.html" class="header__nav-link">Контакты</a></li>
        </ul>
      </nav>

      <div class="header__nav-item header__location">
        <a href="#" class="header__nav-link">
          <span class="header__nav-city">Санкт-Петербург,</span><br>
          <span class="header__nav-location">метро Петроградская</span>
        </a>
      </div>

      <div class="header__nav-item header__phone">
        <a href="tel:+78124158800" class="header__nav-link header__tel">
          <strong>+7(812) 415-88-00</strong>
          <span class="header__phone-label">Заказать звонок</span>
        </a>
      </div>

      <div class="burger" id="burger">
        <svg class="burger-icon" width="20" height="14" viewbox="0 0 20 14" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path d="M19 5H1M19 1H1M19 9H1M19 13H1" stroke="#292929" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
        <span class="close">

        </span>
      </div>
    </div>
    <div class="mobileMenu" id="mobileMenu">
      <ul class="mobile__menu-list">
        <li class=" header__mobile-location">
          <a href="#">
            <span>Санкт-Петербург,</span>
            <br>
            <span>метро Петроградская</span>
          </a>
        </li>
        <li class="header__burger-link"><a href="/index.html">Главная</a></li>
        <li class="header__burger-link"><a href="/Services.html">Услуги</a></li>
        <li class="header__burger-link"><a href="/About-us.html">О нас</a></li>
        <li class="header__burger-link"><a href="/Contacts.html">Контакты</a></li>
      </ul>
      <div class="header__burger-phone">
        <a href="tel:+78124158800" class="header__nav-link">
          <strong>+7(812) 415-88-00</strong><br>
          <span class="header__mobile-label">Заказать звонок</span>
        </a>
      </div>
    </div>
  </header>