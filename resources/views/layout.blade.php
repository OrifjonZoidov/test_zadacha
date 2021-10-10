<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-4.5.3-dist/css/bootstrap.min.css')}}">
    <title>Zadacha_Laravel</title>
</head>
<body>

<br>
    <a href="{{route('home')}}" class="btn btn-success"> Главная </a>
    <a href="{{route('sotrudniki')}}" class="btn btn-success"> Сотрудники </a>
    <a href="{{route('otdeli')}}" class="btn btn-success"> Отделы </a>
<br>


@yield('setka')
@yield('sotrudnik_spisok')

@yield('insert_odel')
@yield('content')
@yield('create')
@yield('edit_odel')
@yield('sotrudnik_section')

</body>
</html>
