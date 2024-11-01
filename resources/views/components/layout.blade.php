<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <li> <a href="/">Главная</a></li>
        @if (!Auth::check())
        <li> <a href="{{route('logshow')}}">Войти</a></li>
        <li> <a href="{{route('regshow')}}"> Регистрация</a></li>
        @else
        <li> <a href="{{route('create')}}"> Добавить питомца</a></li>
        <li> <a href="{{route( 'show')}}"> Мои питомцы</a></li>
        <li> <a href="{{route('logout')}}">Выйти</a></li>
        @endif
    </header>

    {{$slot}}
</body>
</html>