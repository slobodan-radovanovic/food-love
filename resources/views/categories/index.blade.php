@extends('layouts.app')

@section('content')

<div class="container menu">
    var_dump(session()->all());
    <nav id="nav2" class="col-lg-2">
        <ul><li><ul>
            @foreach($categories as $category)
                <li>
                    <a onclick="$('#{{$category->id}}').animatescroll({scrollSpeed:2000,padding:115});">
                        {{$category->category_name}}
                    </a>
                </li>
                    @endforeach
        </ul></li></ul>
    </nav>
    <div class="float-right col-lg-10 ">
        @foreach($categories as $category)
        <div class="card mt-2" id="{{$category->id}}">
            <div class="card-body">
                <h5 class="mt-0">{{$category->category_name}}</h5>
                @foreach($category->products as $product)
                    <div class="col-lg-6 float-left">
                        @if(count($product->Ingredient) > 0)
                            <div class="blade-product1">
                        @else
                            <div class="blade-product0">
                        @endif
                            <div class="modal-link">
                            <a href="" class="card-link text-left" data-toggle="modal" data-target="#ModalCenter{{$product->id}}">{{$product->product_name}}</a>



                            @php
                               $all_prices= array(
                               '1'=>$product->price,
                               '2'=>$product->price2,
                               '3'=>$product->price3,
                               '4'=>$product->price4,
                               '5'=>$product->price5,
                               ); /*array od all prices */

                               $prices = array_diff($all_prices, [null]); /*array of not null prces*/
                            @endphp

                            @include('inc.modal', ['additions' => $category->Addition])
                            </div>

                            @if(count($prices) == 1)
                              <div class="float-right price">{{min($prices)}} RSD</div>
                            @elseif  (count($prices) > 1)
                              <div class="float-right price">{{min($prices)}} RSD +</div>
                            @endif

                            <div class="w-100">
                               <p class="card-text ingredient">
                                  @include('inc.ingredient')
                               </p>
                            </div>


                           </div>
                    </div>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
<div class="clear"></div>
</div>

@endsection