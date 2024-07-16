@php

$iconsFolder = '/assets/images/icons';

@endphp



<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="/assets/styles/base.css">
  <link rel="stylesheet" href="/assets/styles/shop.css">
  <script src="/assets/js/motion.js"></script>

  <title>Autosfera</title>
</head>

<body>
  @include('parts.header')

  <section class="market__bullet mBlt"
    style='background-image: url(/assets/images/shop.jpg)'
  >
    <div class="mBlt__filter"></div>
      <h1 class="mBlt__title">Магазин AutoSfera</h1>
      <p class="mBlt__desc">
        Просто укажите то, что вы ищите
      </p>
      <br><br>    
    </div>

    <label class="mBlt__search">
      <img class="mBlt__searchIcon" src="{{ $iconsFolder }}/search.png">
      <input type="text" class="mBlt__searchInput">
    </label>
   
  </section>

  @include('parts.brands')


  <section class="market__hotSells mHs">
    <h1 class="mHs__title">Специально для вас</h1>
  </section>
  
  <section class="market__callForm mcf">
    <h1 class="mcf__title">
      Узнайте об акциях и скидках первыми!
    </h1>
  
    <p class="mcf__desc">
      Один раз в месяц мы будем присылать вам информацию о <br>
      наших последних коллекциях, скидках и акциях. Обещаем быть полезными!
    </p>
  
    <div class="mcf__form">
      <input
        type="text" class="mcf__input"
        placeholder="Ваш email"
      >
  
      <button class="mcf__button">Подписаться</button>
    </div>
  </section>
  

  <script>
    document.addEventListener('DOMContentLoaded', async () => {
      Motion.animate(
        '.mBlt__title',
        {
          translateY: [200, 0],
          opacity: [0, 1]
        },
        { duration: 1},
      )
      Motion.animate(
        '.mBlt__desc',
        {
          translateY: [200, 0],
          opacity: [0, 1]
        },
        { duration: 1.4, delay: 0.2},
      )
      Motion.animate(
        '.mBlt__search',
        {
          translateY: [200, 0],
          opacity: [0, 1]
        },
        { duration: 1.2, delay: 0.6},
      )

      Motion.inView('.mBnd__brand', info => {
        Motion.animate(
          info.target,
          { opacity: 1 },
          { duration: 2 },
        )
      })
    })
  </script>
</body>
</html>