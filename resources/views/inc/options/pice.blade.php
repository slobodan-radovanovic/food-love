@foreach ($prices as $key => $price)
    @switch($key)
        @case('1')
        <label class="ml-3">
            {{ Form::radio('type', '28cm', true, ['class' => 'radio', 'data-price'=>$product->price, 'data-id'=>$product->id]) }}

            {{--<input type="radio" value="1" name="type{{$product->id}}" checked data-price="{{$product->price}}" data-id="{{$product->id}}" class="radio">--}} 28cm ({{$product->price}} RSD)</label>
        @break

        @case('2')
        <br><label class="ml-3">

            {{ Form::radio('type', '32cm', false, ['class' => 'radio', 'data-price'=>$product->price2, 'data-id'=>$product->id]) }}
            32cm ({{$product->price2}} RSD)</label>
        @break

    @endswitch
@endforeach
    <hr>