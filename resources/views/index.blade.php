@extends('layout')

@section('setka')
    <br>
    <style type="text/css">
        table {
            border-collapse: collapse;
        }
        table th,
        table td {
            padding: 0 3px;
        }
        table.brd th,
        table.brd td {
            border: 1px solid #002752;
        }
    </style>
<table>
    <tr class="table-primary">
        <th>Имя сотрудника</th>
        @foreach($task as $tasks)
            <td>{{$tasks['name_otdela']}}</td>
        @endforeach
    </tr>
    @foreach($data as $item)
        <tr>
            <td class="text-center">{{$item['Nom']}}</td>
            @foreach($task as $it)
                @if($item->odeli->contains("id",$it->id))

                    <td>{{'+'}}</td>
                @else
                    <td></td>
                @endif
            @endforeach
        </tr>
    @endforeach
</table>

@endsection




