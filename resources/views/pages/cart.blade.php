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
            {{--<th scope="col">Prilozi/Dodaci</th>--}}

        </tr>
        </thead>
        @foreach($items as $item)
            <tr>
                <td>{{$item->product_name}} {{$item->type}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->quantity}}</td>
                <td>{{$item->sum}}</td>
                <td>{{$item->note}}</td>

                {{--<td>{{$items->additions}}</td>--}}

                {{--@if(count($items->additions)>0)
                    <td>
                    @foreach($items->additions as $addition)
                    {{ $addition }},
                    @endforeach
                    </td>
                @endif--}}

            </tr>
        @endforeach
    </table>
    @else
        <p>Niste ubacili nijedan proizvod u porudžbinu</p>
    @endif
        <br>
        <br>
        <br>
    </div>

@endsection