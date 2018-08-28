@if(count($prices) > 1)
    @foreach ($prices as $key => $price)
    @switch($key)
        @case('1')
        <label class="ml-3">
        {{ Form::radio('type', 'Kifla', true, ['class' => 'radio', 'data-price'=>$product->price, 'data-id'=>$product->id]) }}
            Kifla 290+g ({{$product->price}} RSD)
        </label>

        @break

        @case('2')
        <br><label class="ml-3">
        {{ Form::radio('type', 'Tortilja', false, ['class' => 'radio', 'data-price'=>$product->price2, 'data-id'=>$product->id]) }}
            Tortilja 270+g ({{$product->price2}} RSD)
        </label>

        @break

        @case('3')
        <br><label class="ml-3">
        {{ Form::radio('type', 'Wrap', false, ['class' => 'radio', 'data-price'=>$product->price3, 'data-id'=>$product->id]) }}
        Wrap 280+g ({{$product->price3}} RSD)</label>

        @break

    @endswitch
    @endforeach
    <hr>
@else
    @foreach ($prices as $key => $price)
        @switch($key)
            @case('1')
            <div class="text-center">Kifla 290+g</div>
            @break

            @case('2')
            <div class="text-center">Tortilja 270+g</div>
            @break

            @case('3')
            <div class="text-center">Wrap 280+g</div>
            @break

        @endswitch
    @endforeach
    <hr>
@endif





