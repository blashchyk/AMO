<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>AMO</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link href="http://allfont.ru/allfont.css?fonts=playfair-display-sc" rel="stylesheet" type="text/css" />
	   <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
      <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" type="image/png">
	  <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
	  <script src="{{asset('assets/js/index.js')}}" type="text/javascript"></script>     
	<style>
		 h1{
			font-size:{{$editing[0]->font_size.'px'}};
			color:{{$editing[0]->color}};
			text-transform:{{($editing[0]->uppercase == 'no')?'normal':'uppercase'}};
			margin-top: {{$editing[0]->margin_top}}px;
		}
		 h2{
			font-size:{{$editing[1]->font_size.'px'}};
			color:{{$editing[1]->color}};
			text-transform:{{($editing[1]->uppercase == 'no')?'normal':'uppercase'}};
		}
		h3{
			font-size:{{$editing[2]->font_size}}px;
			color:{{$editing[2]->color}};
			text-transform:{{($editing[2]->uppercase == 'no')?'normal':'uppercase'}};
		}
		.triggers_item p{
			font-size:{{$editing[3]->font_size}}px;
			color:{{$editing[3]->color}};
			text-transform:{{($editing[3]->uppercase == 'no')?'normal':'uppercase'}};
		}
		.product h3{
			font-size:{{$editing[4]->font_size}}px;
			color:{{$editing[4]->color}};
			text-transform:{{($editing[4]->uppercase == 'no')?'normal':'uppercase'}};
		}
		.product_item h3{
			font-size:{{$editing[5]->font_size}}px;
			color:{{$editing[5]->color}};
			text-transform:{{($editing[5]->uppercase == 'no')?'normal':'uppercase'}};
		}
		.sotr h3{
			font-size:{{$editing[6]->font_size}}px;
			color:{{$editing[6]->color}};
			text-transform:{{($editing[6]->uppercase == 'no')?'normal':'uppercase'}};
		}
		.wraper h3{
			font-size:{{$editing[7]->font_size}}px;
			color:{{$editing[7]->color}};
			text-transform:{{($editing[7]->uppercase == 'no')?'normal':'uppercase'}};
		}
		footer p{
			font-size:{{$editing[9]->font_size}}px;
			color:{{$editing[9]->color}};
			text-transform:{{($editing[9]->uppercase == 'no')?'normal':'uppercase'}};
		}
		footer p.un{
			font-size:{{$editing[8]->font_size}}px;
			color:{{$editing[8]->color}};
			text-transform:{{($editing[8]->uppercase == 'no')?'normal':'uppercase'}};
		}


	</style>
	<link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
	
</head>
<body>
	<header >
	  <div class="wraper flex-center">
		<p class="log"><a href="#tov">{{ trans('messages.header_1')}}</a></p>
		<a href="/" class="logo"><img src="{{asset('assets/img/logo.png')}}" alt="logo"></a>
		<p class="log"><a href="#sotr">{{trans('messages.cooperazione')}}</a></p>
		<div class="lang">
		<a href="/it" class=""><img src="{{asset('assets/img/it_it.gif')}}" alt="flag"></a>
		<a href="/en" class=""><img src="{{asset('assets/img/en.gif')}}" alt="flag"></a>
		<a href="/ua" class=""><img src="{{asset('assets/img/flag.png')}}" alt="flag"></a>
		<a href="/ru" class=""><img src="{{asset('assets/img/ru.gif')}}" alt="flag"></a>
		</div>
	  </div>
	</header>
	<main>
	
	 <div class="baner">
	 	<h1>{{ trans('messages.house') }}</h1>
	 	<h2>{{ trans('messages.open') }}</h2>
	 	<h3>{{ trans('messages.combine') }}</h3>
	 </div>
	
	 <div class="triggers">
	 	<div class="wraper flex-beetw">
         @if($unifications)
            @foreach($unifications as $unification)
                <div class="triggers_item"><img src="{{asset('assets/img/unifications/')}}/{{$unification->img}}"><p>{{ trans("messages.".$unification->title)}}</p></div>
            @endforeach
         @endif

	 	</div>
	 </div>
	 <div class="product">
	 	<h3><a name="tov">{{ trans('messages.products') }}</a></h3>
	 	<div class="wraper">
	 	<div class="product_item">
	 		<h3>{{ trans('messages.handbags') }}</h3>
			<div id="example">
			 @if($goods)
			 <carousel-3d :perspective="0" :space="400" :display="3">
				@foreach($goods as $k => $good)
				<slide  :index="{{$k}}">
                <img src="{{asset('assets/img/mujer/')}}/{{$good->img}}" alt="">
              </slide>
				@endforeach
				</carousel-3d>
			 @endif
               
            </div>
	 		<h3>{{ trans('messages.business') }}</h3>
            <div id="example1">
			@if($bisnes)
				<carousel-3d :perspective="0" :space="400" :display="3">
				@foreach($bisnes as $k=>$bisnes_good)
					<slide  :index="{{$k}}">
                <img src="{{asset('assets/img/maletas/')}}/{{$bisnes_good->img}}" alt="">
              </slide>
				@endforeach

				 </carousel-3d>
			@endif
            </div>

			<h3>{{ trans('messages.wallets') }}</h3>
            <div id="example2">
			@if($purses)
				 <carousel-3d :perspective="0" :space="400" :display="3">
					@foreach($purses as $k=>$purs)
						 <slide  :index="{{$k}}">
                			<img src="{{asset('assets/img/carteras/')}}/{{$purs->img}}" alt="">
             			 </slide>
					@endforeach
				 </carousel-3d>
			@endif
            </div>
			<h3>{{ trans('messages.umbrellas') }}</h3>
            <div id="example3">
			@if($umbrellas)
			<carousel-3d :perspective="0" :space="400" :display="3">
				@foreach($umbrellas as $k=>$umbrella)
					<slide  :index="{{$k}}">
                		<img src="{{asset('assets/img/par/')}}/{{$umbrella->img}}" alt="">
              		</slide>
				@endforeach
			</carousel-3d>
			@endif
            </div>

			<h3>{{ trans('messages.belts') }}</h3>
	 		<div id="example4">
			 @if($belts)
             <carousel-3d :perspective="0" :space="400" :display="3">
				@foreach($belts as $k=>$belt)
					<slide  :index="{{$k}}">
                		<img src="{{asset('assets/img/centurons/')}}/{{$belt->img}}" alt="">
              		</slide>
				@endforeach
			  </carousel-3d>
			 @endif
             
            </div>
			<h3>{{ trans('messages.scarves') }}</h3>
	 		<div id="example5">
			 @if($scarves)
 				<carousel-3d :perspective="0" :space="400" :display="3">
					@foreach($scarves as $k=>$scarv)
						<slide  :index="{{$k}}">
                			<img src="{{asset('assets/img/bufanda/')}}/{{$scarv->img}}" alt="">
              			</slide>
					@endforeach
				</carousel-3d>
			 @endif
            </div>
			<h3>{{ trans('messages.bijouterie') }}</h3>
	 		<div id="example6">
			 @if($decorations)
				<carousel-3d :perspective="0" :space="400" :display="3">
					@foreach($decorations as $k=>$decoration)
						<slide  :index="{{$k}}">
                			<img src="{{asset('assets/img/decoracion/')}}/{{$decoration->img}}" alt="">
              			</slide>
					@endforeach
				</carousel-3d>
			 @endif
            </div>
			<h3>{{ trans('messages.watches') }}</h3>
	 		<div id="example7">
			 @if($clocks)
				<carousel-3d :perspective="0" :space="400" :display="3">
					@foreach($clocks as $k=>$clock)
					<slide  :index="{{$k}}">
                		<img src="{{asset('assets/img/relojs/')}}/{{$clock->img}}" alt="">
              		</slide>
					@endforeach
				</carousel-3d>
			 @endif
            </div>

	 	</div>	

	 	</div>
	 </div>
	 <div class="sotr">
	 	<h3 class="coll"><a name="sotr">{{ trans('messages.collaboration') }}</a></h3>
	 	<div class="wraper flex-center">
         @if($cooperations)
            @foreach($cooperations as $cooperation)
                <div class="sotr_item"><img src="{{asset('assets/img/cooperations/')}}/{{$cooperation->img}}"></div>
            @endforeach
         @endif
	 	
	 	</div>
	 </div>
	</main>
	<footer>
		<div class="wraper">
			<h3>{{ trans('messages.contacts') }}</h3>
			<div class="flex-beetw">
			<div class="footer_item">
				<p class="un">{{ trans('messages.office') }}</p>
				<p>{{trans('messages.addres')}}</p>
			</div>
			<div class="footer_item">
				<p class="un">{{ trans('messages.phone') }}</p>
				<p>+39331 807 2232 Amanda</p>
			</div>
			</div>
		</div>
		<div class="linea">2017 © AMO acessori</div>
	</footer>
	<script src="{{asset('assets/js/vue.js')}}"></script>
    <script src="{{asset('assets/js/vue-carousel-3d.min.js')}}"></script>
</body>
</html>