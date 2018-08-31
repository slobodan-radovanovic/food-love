@foreach($item->additions as $addition)
    @if($loop->last)
        {{$addition}}
    @else
        {{$addition}},
    @endif
@endforeach