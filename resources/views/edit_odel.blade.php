@extends('layout')
@section('edit_odel')
<form action="{{route('insert_odel')}}" method="get">

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h1>Редактирование отдела</h1>
                @csrf
                <div class="form-group">
                    Имя <input type="text"class="form-control" name="name_odela" value="{{$data->name_otdela}}">
                </div>

                <div class="form-group">
                    <button class="btn btn-success" type="submit">Отправить</button>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection