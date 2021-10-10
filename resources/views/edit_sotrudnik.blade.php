@extends('layout')
@section('sotrudnik_section')
    @if($errors->any())
        <div class=" alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{route('update',['id' => $data->id])}}" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h1>Редактирование</h1>
                    @csrf
                    <div class="form-group">
                       Имя <input type="text"class="form-control" name="name" value="{{$data->Nom}}">
                    </div>
                    <div class="form-group">
                        Фамилия <input type="text"class="form-control" name="familiya"value="{{$data->Familiya}}">
                    </div>
                    <div class="form-group">
                        Отчество <input type="text"class="form-control"  name="otchestvo" value="{{$data->Otchestvo}}">
                    </div>
                    <div class="form-group">
                        Пол:  <select name="pol">
                           <option>Женский</option>
                          <option>Мужской</option>
                      </select><br><br>
                        Отделы: <br> <select name="otdel" size="3">
                            @php $i=0 @endphp
                            @foreach($odel as $items)
                                @php $i++ @endphp
                                <option>{{$items['name_otdela']}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">
                            Зарплата <input type="text"class="form-control"  name="oplata" value="{{$data->Z_Plata}}">
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
