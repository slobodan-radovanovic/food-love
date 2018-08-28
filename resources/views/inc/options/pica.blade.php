@foreach ($prices as $key => $price)
    @switch($key)
        @case('1')
        <label class="ml-3">
            {{ Form::radio('type', 'Limenka 0,33l', true, ['class' => 'radio', 'data-price'=>$product->price, 'data-id'=>$product->id]) }}
Limenka 0,33l ({{$product->price}} RSD)</label>
        @break

        @case('2')
        <br><label class="ml-3">
            {{ Form::radio('type', '0,5l', false, ['class' => 'radio', 'data-price'=>$product->price2, 'data-id'=>$product->id]) }}

             0,5l ({{$product->price2}} RSD)</label>
        @break

        @case('3')
        <br><label class="ml-3">
            {{ Form::radio('type', '1l', false, ['class' => 'radio', 'data-price'=>$product->price3, 'data-id'=>$product->id]) }}

             1l ({{$product->price3}} RSD)</label>
        @break

        @case('4')
        <br><label class="ml-3">
            {{ Form::radio('type', '1,5l', false, ['class' => 'radio', 'data-price'=>$product->price4, 'data-id'=>$product->id]) }}

             1,5l ({{$product->price4}} RSD)</label>
        @break

        @case('5')
        <br><label class="ml-3">
            {{ Form::radio('type', '2l', false, ['class' => 'radio', 'data-price'=>$product->price5, 'data-id'=>$product->id]) }}

             2l ({{$product->price5}} RSD)</label>
        @break

    @endswitch
@endforeach
<hr>