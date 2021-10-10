@extends('layout')

@section('content')
    <h1>Все запись</h1>

    <div class="alert alert-success">
        <h3>№ : {{$data['id'] }}</h3>
        <p>Имя : {{ $data['Nom']}}</p>
        <p>Фамилия : {{ $data['Familiya']}}</p>
        <p>Отчество : {{ $data['Otchestvo']}}</p>
        <p>Пол : {{ $data['Jins']}}</p>
        <p>Зарплата : {{ $data['Z_Plata']}}</p>
        <p>Отдел : {{ $data['Otdeli']}}</p>
        <a href="{{route('sotrudniki')}}"><button class="btn btn-warning">Назад</button></a>
    </div>
@endsection