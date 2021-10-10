@extends('layout')
@section('sotrudnik_spisok')
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-9">


                <a href="{{route('create')}}" class="btn btn-success"> Добавить сотрудника</a>
                <table class="table">
                    <thead>
                    <tr>
                        <th>№</th>
                        <th>Имя </th>
                        <th>Фамилия</th>
                        <th>Отчество</th>

                        <th>Пол</th>
                        <th>Зарплата</th>
                        <th>Действия</th>

                    </tr>
                    </thead>
                    @php $i=0 @endphp
                    @foreach($data as $item)
                        @php $i++ @endphp
                        <tr>
                            <th>{{$item['id']}}</th>
                            <th>{{$item['Nom']}} </th>
                            <th>{{$item['Familiya']}}</th>
                            <th>{{$item['Otchestvo']}}</th>

                            <th>{{$item['Jins']}}</th>
                            <th>{{$item['Z_Plata']}}</th>
                            <th> <a href="{{route('show',['id'=>$item['id']])}}" class="btn btn-danger">Показать</a> </th>
                            <th> <a href="{{route('edit',$item['id'])}}" class="btn btn-warning">Редактировать</a> </th>
                            <th> <a href="{{route('delete',['id'=>$item['id']])}}" class="btn btn-danger">Удалить</a> </th>
                        </tr>
                    @endforeach
                    <tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
