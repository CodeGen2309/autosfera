@php
  $hdPhone = '+7-985-087-62-43';

  $hdMenu = [
    ['text' => 'Главная',  'link' => '/' ],
    ['text' => 'Услуги',   'link' => 'services' ],
    ['text' => 'Контакты', 'link' => 'contacts' ],
    ['text' => 'Магазин',  'link' => 'shop' ],
  ];

	$iconsFolder = "/assets/images/icons";

@endphp



<header class="hd">
	<div class="hd__menuHolder">
		<img class="hd__menuIcon" src="{{$iconsFolder}}/menu.svg">
		<ul class="hd__menu">
			@foreach ($hdMenu as $item)
				<li class="hd__menuItem">
					<a href="{{ $item['link'] }}" class="hd__menuLink">
						{{ $item['text'] }}
					</a>
				</li>
			@endforeach
		</ul>
	</div>

		<a href="tel:{{ $hdPhone }}" class="hd__phone">
			<p class="hd__phoneText">Телефон {{ $hdPhone }}</p>
			<img class="hd__phoneIcon" src="/assets/images/icons/phone.svg">
		</a>
	</div>

</header>



<style>
.hd {
	position: fixed;
	box-sizing: border-box;

	display:flex;
	justify-content: space-between;
	height: 60px;
	width: 100%;

	background: black;
	color: white;
	padding: 0 20px;
	z-index: 999;
}

.hd__menuHolder {
	display:flex;
}

.hd__menuIcon {
	width: 20px;
	display: none;
}

.hd__menu {
	display: flex;
	margin: 0; padding: 0;
	flex-grow: 1;
}

.hd__menuItem {
	list-style: none;
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


.hd__phone {
	display: flex;
	align-items: center;
	justify-content: flex-end;

	margin: 0; padding: 0;
	text-decoration: none;
	color: inherit;
}

.hd__phoneText {

}

.hd__phoneIcon {
	display: none;
	width: 30px;
}

@media (max-width: 700px) {
	.hd__phoneText { display: none; }
	.hd__phoneIcon { display: block; }
}

@media (max-width: 500px) {
	.hd__menu { display: none; }
	.hd__menuIcon { display: block; }
}

</style>