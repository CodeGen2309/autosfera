@php
  $hdPhone = '+7 985 087 62 43';

  $hdMenu = [
    ['text' => 'Главная',  'link' => '/' ],
    ['text' => 'Услуги',   'link' => 'services' ],
    ['text' => 'Контакты', 'link' => 'contacts' ],
    ['text' => 'Магазин',  'link' => 'shop' ],
  ];

@endphp



<header class="hd">
  <ul class="hd__menu">
    @foreach ($hdMenu as $item)
      <li class="hd__menuItem">
        <a href="{{ $item['link'] }}" class="hd__menuLink">
          {{ $item['text'] }}
        </a>
      </li>
    @endforeach
  </ul>

  <img class="hd__logo" src="/assets/images/logo.png">

  <p class="hd__phone">Телефон {{ $hdPhone }}</p>  
</header>



<style>
.hd {
	display: grid;
	grid-template-columns: 1fr 60px 1fr;
	height: 60px;

	background: black;
	color: white;
}

.hd__menu {
	display: flex;

	list-style: none;
	margin: 0; padding: 0;
	flex-grow: 1;
}

.hd__menuItem {
	margin: 0; padding: 0;
}

.hd__menuLink {
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 0px 20px;
	text-decoration: none;
	color: inherit;
	height: 100%;

	transition: .3s;
}

.hd__menuLink:hover {
	background: white;
	color: black;
	padding: 0px 60px;
}

.hd__logo {
	width: 100%;
	transition: .3s;
	transform: scale(5);
	transform-origin: top center;
	z-index: 999;
}

.hd__phone {
	display: flex;
	align-items: center;
	justify-content: flex-end;
	padding: 0 40px;
}
</style>