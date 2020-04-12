@extends('layout')

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                @include('pages._sidebar')
                <div class="col-md-10">
                    <div class="content">
                        <div class="row wow fadeIn">
                            @foreach($products as $product)
                                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                                    <div class="card product-card "  >
                                        <div class="product-img view overlay">
                                            <a href="{{route('product.show', $product->slug)}}">
                                                <img  class="img-fluid" src="{{$product->getImage()}}" alt="disk"></a>
                                        </div>
                                        <div class="card-body text-center">
                                            <a href="#" class="grey-text">
                                                <a href="{{route('product.show', $product->slug)}}">{{$product->title}}</a>
                                            </a>
                                            <p class="price">12 700 сом</p>

                                            <a href="#" type="button" class="btn btn-info btn-product"><i class="fa fa-shopping-cart" aria-hidden="true"></i> купить</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="pagination">
                            {{$products->links()}}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
