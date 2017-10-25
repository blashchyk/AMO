<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>AMO</title>
	 <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	  <link rel="stylesheet" href="{{asset('assets/css/animate.css')}}">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	  <link href="http://allfont.ru/allfont.css?fonts=playfair-display-sc" rel="stylesheet" type="text/css" />
	   <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
      <link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
      <link rel="shortcut icon" href="{{asset('assets/img/fav.png')}}" type="image/png">
       <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	  <script type="text/javascript" src="{{asset('assets/js/jquery.js')}}"></script>
	  <script src="{{asset('assets/js/index.js')}}" type="text/javascript"></script>
	  
              
</head>
<body>
	<a href="{{route('admin')}}"><h1>Панель администратора</h1></a>
    <a href="{{route('editor')}}"><h2>Управление дизайном сайта</h2></a>

    <div class="add_unifications">
        <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <p>Добавление Баннеры 1</p>
        <h3>Добавление заголовка</h3>
        <input type="text" name="title" required>
        <h3>Добавление картинки</h3>
        <input type="file" name="img">

        <button type="submit" name="unifications" value="1">Добавить</button>
        </form>
    </div>
    <div class="del_unifications">
        
        @if($unifications)
        <form action="{{route('admin')}}" method="post">
        {{ csrf_field() }}
            @foreach($unifications as $unification)
                <div>
                <p>{{$unification->title}}</p>
                <img src="{{asset('assets/img/unifications/')}}/{{$unification->img}}">
                
                </div>
                <div class="clear"></div>
                <button name="del_uni" value="{{$unification->id}}">Удалить</button>
            @endforeach
            </form>  
            <div class="clear"></div>
            <div class="link">
                {{$unifications->links()}}
            </div>

            <div>
        @endif

    </div>
    </div>
<div class="clear"></div>
<div class="add_goods">
    <h3>Добавление товаров(Женские сумки)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="goods" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($goods)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($goods as $good)
        <div>
            <img src="{{asset('assets/img/mujer/')}}/{{$good->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good" value="{{$good->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$goods->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>
<div class="add_goods">
    <h3>Добавление товаров(Деловые сумки)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="goods_bisnes" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($goods_bisnes)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($goods_bisnes as $good_bisnes)
        <div>
            <img src="{{asset('assets/img/maletas/')}}/{{$good_bisnes->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_bisnes" value="{{$good_bisnes->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$goods_bisnes->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>


<div class="add_goods">
    <h3>Добавление товаров(Кошельки)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="purses" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($purses)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($purses as $good_purses)
        <div>
            <img src="{{asset('assets/img/carteras/')}}/{{$good_purses->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_purses" value="{{$good_purses->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$purses->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>

<div class="add_goods">
    <h3>Добавление товаров(Зонты)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="umbrellas" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($umbrellas)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($umbrellas as $good_umbrellas)
        <div>
            <img src="{{asset('assets/img/par/')}}/{{$good_umbrellas->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_umbrellas" value="{{$good_umbrellas->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$umbrellas->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>

<div class="add_goods">
    <h3>Добавление товаров(Ремни)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="belts" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($belts)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($belts as $good_belts)
        <div>
            <img src="{{asset('assets/img/centurons/')}}/{{$good_belts->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_belts" value="{{$good_belts->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$belts->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>

<div class="add_goods">
    <h3>Добавление товаров(Шарфы)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="scarves" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($scarves)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($scarves as $good_scarves)
        <div>
            <img src="{{asset('assets/img/bufanda/')}}/{{$good_scarves->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_scarves" value="{{$good_scarves->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$scarves->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>


<div class="add_goods">
    <h3>Добавление товаров(Украшения)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="decorations" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($decorations)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($decorations as $good_decorations)
        <div>
            <img src="{{asset('assets/img/decoracion/')}}/{{$good_decorations->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_decorations" value="{{$good_decorations->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$decorations->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>

<div class="add_goods">
    <h3>Добавление товаров(Часы)</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="clocks" value="1">Довавить</button>

    </form>
</div>

<div class="del_goods">
    @if($clocks)
    <form action="{{route('admin')}}" method="post">
    {{csrf_field()}}
    @foreach($clocks as $good_clocks)
        <div>
            <img src="{{asset('assets/img/relojs/')}}/{{$good_clocks->img}}">
                
        </div>
        <div class="clear"></div>
        <button name="del_good_clocks" value="{{$good_clocks->id}}">Удалить</button>

    @endforeach
    <div class="clear"></div>
            <div class="link">
    {{$clocks->links()}}
    </div>
    </form>
    @endif
</div>
<div class="clear"></div>




<div class="add_cooperations">
    <h3>Добавление сотрудничества</h3>

    <form action="{{route('admin')}}" method="post" enctype="multipart/form-data">
     {{csrf_field()}}
    <p>Добавление картинки</p>
    <input type="file" name="img">
    <button type="submit" name="cooperations" value="1">Довавить</button>
    </form>
</div>

<div class="del_cooperations">
    @if($cooperations)
    <form action="{{route('admin')}}" method="post">
     {{csrf_field()}}
     @foreach($cooperations as $cooper)
        <div>
            <img src="{{asset('assets/img/cooperations/')}}/{{$cooper->img}}">
        </div>
        <button name="del_coop" value="{{$cooper->id}}">Удалить</button>
    @endforeach
    <div class="clear"></div>
    <div class="link">
        {{$cooperations->links()}}
    </div>
    </form>
    @endif
</div>

    
    

	<script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}" ></script>
</body>
</html>