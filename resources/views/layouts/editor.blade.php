<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>AMO</title>

       <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
	
	  
              
</head>
<body>
<div class="editor">
	<a href="{{route('admin')}}"><h1>Панель администратора</h1></a>
    <a href="{{route('editor')}}"><h2>Управление дизайном сайта</h2></a>

<div class="add_edditor_header">
    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Заголовка H1 Header</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Смещение вниз</p>
        <input type='number' name="margin_top" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="h1_header" value="1">Изменить</button>
        </form>
    </div>
    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Заголовка H2 Header</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="h2_header" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Заголовка H3 Header</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="h3_header" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Bannera</h3>
       
        <input type='file' name="foto" required>


        <button type="submit" name="header_banner" value="1">Изменить</button>
        </form>
    </div>

</div>
<div class="add_editor_banner">
    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста в Баннерах</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="banners" value="1">Изменить</button>
        </form>
    </div>
    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Наши Товары</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="tovary" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Товаров</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="goods" value="1">Изменить</button>
        </form>
    </div>

</div>

<div class="add_editor_footer">
    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Сотрудничество</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="cooperation" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Footer H1</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="footer_h1" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Заголовков Информации</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="footer_info_title" value="1">Изменить</button>
        </form>
    </div>

    <div>
        <form action="{{route('editor')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <h3>Изменение Текста Контактов</h3>
        <p>Изменение размера текста(px)</p>
        <input type='number' name="font_size" required>
        <p>Изменение цвета текста</p>
        <input type="color" name="color">
        <p>Все буквы большие или нет</p>
        <select name="text_transform">
            <option value="yes">все большие</option>
            <option value="no">обычные</option>
        </select>

        <button type="submit" name="footer_contact" value="1">Изменить</button>
        </form>
    </div>
</div>
    
    
</div>
	<script type="text/javascript" src="{{asset('assets/js/slick.min.js')}}" ></script>
</body>
</html>