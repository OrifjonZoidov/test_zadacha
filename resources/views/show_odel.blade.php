@extends('layout')
@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
    <a href="{{route('form_odel')}}" class="btn btn-success"> Добавить отдела</a>

    <table class="table">
        <thead>
        <tr>
            <th>№</th>
            <th>Название отдела </th>
            <th>Количество сотрудники</th>
            <th>Максимальная заработная плата среди сотрудников отдела</th>

        </tr>
        </thead>

            @php $i=0 @endphp
            @foreach($data as $item)
            {{--{{$item->Sotrudniki->count().' '.$item->id}}--}}

        @php $i++ @endphp
            <tr>
                    <th>{{$item['id']}}</th>
                    <th>{{$item['name_otdela']}} </th>
                <th>{{$item->Sotrudniki->count()}}</th>
                <th>{{$item->Sotrudniki->max('Z_Plata')}}</th>
{{--         <th> <a href="{{route('show',['id'=>$item['id']])}}" class="btn btn-danger">Показать</a> </th>--}}
        <th> <a href="{{route('edit_odel',$item['id'])}}" class="btn btn-warning">Редактировать</a> </th>
        <th> <a href="{{route('delete_odel',['id'=>$item['id']])}}" class="btn btn-danger">Удалить</a> </th>
        </tr>
        </tr>

        @endforeach
    </table>
        </div>
    </div>
</div>
@endsection
