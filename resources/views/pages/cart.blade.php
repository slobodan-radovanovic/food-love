@extends('layouts.app')

@section('content')
    <div class="container menu">

    <h3>Porudžbina</h3>
    <br>
    @if(count($items)>0)

    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Cena</th>
            <th scope="col">Kolicina</th>
            <th scope="col">Ukupno</th>
            <th scope="col">Napomena</th>
            <th scope="col">Prilozi/Dodaci</th>

        </tr>
        </thead>
        @foreach($items as $item)
            <tr>
                <td>{{$item->product_name}} {{$item->type}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->sum}}</td>
                <td>{{$item->note}}</td>

                {{--<td>{{var_dump($item->additions)}}</td>--}}
                <td>
                @if(count($item->additions)>0)
                        @include('inc.addition')
                @endif
                    </td>

            </tr>
        @endforeach
    </table>
            {!! Form::open(['action' => ['CartController@destroy', 0], 'method' => 'DELETE']) !!}
            {{Form::submit('Isprazni korpu', ['class' => 'btn danger btn-large'])}}
            {!! Form::close() !!}
    @else
        <p>Niste ubacili nijedan proizvod u porudžbinu</p>
    @endif


        <br>
        <br>
        <br>
    </div>

@endsection