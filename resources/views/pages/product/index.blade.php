@extends('layouts.master')

@section('content')
    {{--start sidebar and content--}}

    <div class="container margin-top-20">
        <div class="row">
            <div class="col-md-4">
                @include('partials.sidebar-default')
            </div>

            <div class="col-md-8">
                <div class="widget">
                    <h3>Products</h3>
                    <div class="row">

                        @foreach($products as $product)
                            <div class="col-md-3">
                                <div class="card">
                                    @php $i = 1; @endphp
                                @foreach($product->images as $image)
                                    @if($i > 0)
                                            <img src="{{ asset('images/products/' . $image->image) }}" class="card-img-top img-product"
                                                 alt="...">
                                        @endif
                                        @php $i--; @endphp
                                    @endforeach
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $product->title }}</h5>
                                        <p class="card-text">Price - {{ $product->price }}/-</p>
                                        <a href="#" class="btn btn-outline-warning">Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{--end sidebar and content--}}
@endsection
