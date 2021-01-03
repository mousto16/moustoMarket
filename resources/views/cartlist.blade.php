@extends('master')
@section("content")
   <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h4>Result for products</h4>
                @foreach($products as $item)
                    <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
                    <div class="row searched-item cart-list-devider">
                        <div class="col-sm-3">
                            <a href="detail/{{$item->id}}">
                                <img src="{{$item->gallery}}" class="trending-image">
                            </a>
                        </div>
                        <div class="col-sm-4">
                                <div class="">
                                    <h2>{{$item->name}}</h2>
                                    <h5>{{$item->description}}</h5>
                                </div>
                        </div>
                        <div class="col-sm-3">
                            <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                        </div>
                    </div>    
                @endforeach
            </div>
            <a class="btn btn-success" href="ordernow">Order Now</a> <br> <br>
        </div>
   </div>
@endsection