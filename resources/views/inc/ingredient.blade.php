@foreach ($product->Ingredient as $ingredient)
    @if($loop->last)
        {{$ingredient->ingredient_name}}
    @else
        {{$ingredient->ingredient_name}},
    @endif
@endforeach