<!-- Modal -->
<div class="modal fade" id="ModalCenter{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-width" role="document">
        <div class="modal-content">
            {!! Form::open(['action' => 'CartController@store', 'method' => 'POST']) !!}
            <div class="modal-header d-block">
                <div class="modal-category-name">
                    <p class="small float-left m-0 p-0" >{{$category->category_name}}</p>
                    <button type="button" class="close float-right mr-1" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-product-name">
                    <h5 class="modal-title m-0 p-0 " id="exampleModalLongTitle">{{$product->product_name}}</h5>
                    <p class="card-text ingredient">
                        @include('inc.ingredient')
                    </p>
                </div>
            </div>


            <div class="modal-body p-2">


                @include('inc.types')
                        {{--@switch($category->category_name)
                            @case('Sendviči')
                                @include('inc.options.sendvici')
                            @break
                            @case('Pice')
                                @include('inc.options.pice')
                            @break
                            @case('Pića')
                                @include('inc.options.pica')
                            @break
                        @endswitch--}}

                        <div id="price{{$product->id}}" class="modal-price">
                        @foreach ($prices as $price)
                            @if(count($product->type) < 2 )
                                    {{$price}} RSD
                                @endif
                          @break
                        @endforeach
                        </div>

                <label id="quantity" class="ml-5 mr-2">Količina:
                    <select name="quantity" id="quantity{{$product->id}}" data-quantity="1" data-id="{{$product->id}}">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>​
                </label>
                {{Form::submit('Dodaj u porudžbinu', ['class' => 'btn btn-add btn-large'])}}


                @if($category->category_name == 'Roštilj u lepinji' OR $category->category_name == 'Slatke palačinke')

                <hr>
                  <div class="additions-body">
                    <div class="float-left">
                      @foreach($additions as $addition)
                        <div class="additions">
                            <label class="ml-3">

                            {{ Form::checkbox('additions[]', $addition->addition_name, false,['id' => $addition->addition_name]) }}



                                {{$addition->addition_name}}</label></div>

                      @endforeach
                    </div>
                  </div>   {{--additions-body--}}
                @endif



            </div>
            <div class="modal-footer" style="justify-content: normal">
                <label>Napomena:

                    {{ Form::text('note', null ,['id' => 'note'.$product->id]) }}


                </label>
            </div>
            {{ Form::hidden('product_id', $product->id) }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
<!-- End Modal -->