@extends('layout')
@section('insert_odel')
@if($errors->any())
    <div class=" alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('insert_odel')}}" method="get">

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Добавление отдела</h1>
                @csrf
                <div class="form-group">
                    Название нового отдела <input type="text"class="form-control" name="name_odela">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection