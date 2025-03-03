<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/styles/base.css">
  <link rel="stylesheet" href="/assets/styles/main.css">
  <title>Автосфера</title>

  <script src="/assets/scripts/motion.min.js"></script>
</head>

<?
$imgFolder = '/assets/images';
$iconsFolder = "{$imgFolder}/icons/";
$brandFolder = "{$imgFolder}/brands";


$brands = [
  ['title' => 'BMW', 'link' => '#', 
    'img' => "{$brandFolder}/bmw.jpg"
  ],
  
  ['title' => 'Mercedes', 'link' => '#', 
    'img' => "{$brandFolder}/mercedes.jpg"
  ],
  
  ['title' => 'Audi', 'link' => '#', 
    'img' => "{$brandFolder}/audi.jpg"
  ],
  
  ['title' => 'Toyota', 'link' => '#', 
    'img' => "{$brandFolder}/toyota.jpg"
  ],
  
  ['title' => 'Hyundai', 'link' => '#', 
    'img' => "{$brandFolder}/hyundai.jpg"
  ],
  
  ['title' => 'Nissan', 'link' => '#', 
    'img' => "{$brandFolder}/nissan.jpg"
  ],
  
  ['title' => 'Porshe', 'link' => '#', 
    'img' => "{$brandFolder}/porshe.jpg"
  ],
  
  ['title' => 'KIA', 'link' => '#', 
    'img' => "{$brandFolder}/kia.jpg"
  ]  
];

$services = [
  [
    'title' => 'Всегда подберём то, что надо именно вам',
    'img'=> "{$imgFolder}/services/1.jpg",
    'cls' => 'services__listItem',
    'desc' => "
      Проконсультируем и поможем в выборе необходимых 
      для вашей машины продуктов. Сориентируем в ценовом 
      диапазоне и выберем лучший товар по качеству и цене.
    ",
  ],
  [
    'title' => 'Найдем всё что вам нужно',
    'img'=> "{$imgFolder}/services/2.jpg",
    'cls' => 'services__listItem services__listItem_reverse',
    'desc' => "
      Имея широчайшую базу продуктов, найдём даже самые редкие и
    ",
  ],
  [
    'title' => 'Доставим в любую точку России',
    'img'=> "{$imgFolder}/services/3.jpg",
    'cls' => 'services__listItem',
    'desc' => "
      Сотрудничаем с такими компаниями как 
      'СДЭК', 'Почта России', 'Boxberry' и т.д.
    ",
  ],
];

$advants = [
  [
    'title' => 'Качество',
    'desc' => 'Весь закупаемый товар мы проверяем при поступлении на склад сами',
    'icon' => " {$iconsFolder}/advantages/1.svg",
  ],
  [
    'title' => 'Скорость',
    'desc' => 'В кратчайшие сроки мы предоставим вам всё, что возможно',
    'icon' => " {$iconsFolder}/advantages/2.svg",
  ],
  [
    'title' => 'Цена',
    'desc' => 'Предоставляем самые лучшие цены',
    'icon' => " {$iconsFolder}/advantages/3.svg",
  ],
];

?>

<body>

@include('parts.header')

<section class="bullet">
	<img src="/assets/images/bullet.jpg" alt="" class="bullet__img">
	<div class="bullet__cover"></div>
	
  <img class="bullet__logo" src="{{ $imgFolder }}/logo.png">
	<h1 class="bullet__title">AutoSfera</h1>
	<p class="bullet__footNote">
		Онлайн-магазин автозапчастей и товаров для наших верных друзей.
	</p>

  <label class="bullet__search">
    <img class="bullet__searchIcon" src="{{ $iconsFolder }}/search.png">
    <input type="text" class="bullet__searchInput">
  </label>
</section>

@include('parts.brands')


<section class="about">
  <img class="about__logo" src="<?= $imgFolder ?>/logo__color.png">

  <div class="about__content">
    <h2 class="about__title">О нашей компании</h2>
    <p class="about__footnote">Скорость, честность, надежность - наш девиз.</p>
    <hr class="about__divider">
    <p class="about__desc">
      Мы на рынке уже 15 лет и за это время в сфере автобизнеса 
      обрели широчайшую базу клиентов, которые знают 
      что мы всё сделаем качественно, быстро и честно.
    </p>
  </div>
</section>

<section class="services">
  <h2 class="services__header">Наши услуги</h2>
  <p class="services__footNote">
    Помогите клиенту принять решение, рассказав о своих сильных сторонах <br>
    и причинах работать именно с вами.
  </p>


  <div class="services__list">
    @foreach ($services as $item)
      <div class="{{ $item['cls'] }}">
        <img class="services__image" src="{{ $item['img'] }}" alt="">
        
        <div class="services__content">
          <h4 class="services__title">{{ $item['title'] }}</h4>
          <p class="services__descript">{{ $item['desc'] }}</p>
        </div>
      </div>      
    @endforeach
  </div>
</section>


<section class="advant">
  <h2 class="advant__title">Почему же именно мы?</h2>
  <p class="advant__footNote">Ну тут всё просто, ведь наши отличительные черты.</p>

  <ul class="advant__list">
    @foreach ($advants as $item)
      <li class="advant__listItem">
        <img src="{{ $item['icon'] }}" class="advant__listImg">
        <p class="advant__listTitle">{{ $item['title'] }}</p>
        <p class="advant__listNote">{{ $item['desc'] }}</p>
      </li>      
    @endforeach
  </ul>
</section>


<section class="callBack">
  <h1 class="callBack__title">
    Специальные условия <br> для оптовых закупок!
  </h1>

  <p class="callBack__note">
    Укажите свои контактные данные и то, что вы ищите. <br>
    С вами свяжется наш сотрудник.
  </p>

  <form class="callBack__form">
    <label class="callBack__labelName">
      <input class="callBack__input callBack__name"
        type="text" placeholder="Имя"
      >
    </label>
    
    <label class="callBack__labelName">
      <input class="callBack__input callBack__phone"
        type="text" placeholder="Телефон"
      >
    </label>
    
    <label class="callBack__labelName">
      <input class="callBack__input callBack__message" 
        type="textarea" placeholder="Сообщение"
      >
    </label>    

    <button class="callback__action">Оставить заявку</button>
  </form>
</section>


<script>
  let duration = 1
  let delay = '-0.6'

  let animLine = [
    [
      '.bullet__title',
      { 
        translateX: [-100, 0],
        opacity: [0, 1]
      },
      {duration, at: delay}
    ],
    [
      '.bullet__footNote',
      { 
        translateY: [100, 0],
        opacity: [0, 1]
      },
      {duration, at: delay}
    ],
    [
      '.bullet__search',
      { 
        translateY: [100, 0],
        opacity: [0, 1]
      },
      {duration, at: delay}
    ],
  ]

  Motion.timeline(animLine)

  // Motion.animate(
  //   '.bullet__title',
  //   { 
  //     translateX: [-100, 0],
  //     opacity: [0, 1]
  //   },
  //   { duration: 1 }
  // )

  let logo = document.querySelector('.bullet__logo')
  Motion.scroll(
    ({y}) => { logo.style = `opacity: ${1 - y.progress*50}` }
  )

</script>


</body>
</html>