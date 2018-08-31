@if(count($product->type)  == 1 )
    <p>{{$product->type_name}} ({{$product->price}} RSD)</p>
    <hr>
@elseif (count($product->type)  > 0)
    @foreach($product->type as $type)
        @php  $price = $type->price; @endphp
    <label class="ml-3">
        {{ Form::radio('type', $type->id, false, ['class' => 'radio', 'data-price'=>$product->$price, 'data-id'=>$product->id]) }}
        {{$type->type_name}} ({{$product->$price}} RSD)
    </label><br>
    @endforeach
    <hr>
@endif





