@extends('layout')
@section('create')
@if($errors->any())
    <div class=" alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
<form action="{{route('store')}}" method="get">
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <h1>Добавить</h1>
                @csrf
                <div class="form-group">
                    Имя <input type="text"class="form-control" name="name">
                </div>
                <div class="form-group">
                    Фамилия <input type="text"class="form-control" name="familiya">
                </div>
                <div class="form-group">
                    Отчество <input type="text"class="form-control"  name="otchestvo">
                </div>
                <div class="form-group">
                    Пол:  <select name="pol" style="width: 100%;">
                        <option disabled selected>Выберите пол </option>
                        <option>Женский</option>
                        <option>Мужской</option>
                    </select><br><br>

                    Отделы: <br> <select name="otdel[]" selected size="2" multiple style="width: 100%;">
                        <option></option>
                        @php $i=0 @endphp
                        @foreach($odel as $items)
                            @php $i++ @endphp
                        <option  value={{$items['id']}}>{{$items['name_otdela']}}</option>
                        @endforeach
                    </select>

                    <div class="form-group">
                        Зарплата <input type="text"class="form-control"  name="oplata">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-success" type="submit">Отправить</button>
                </div>
            </div>
        </div>
    </div>

</form>
@endsection