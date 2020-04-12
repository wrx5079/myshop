@extends('layout')

@section('content')
    <section class="main-content">
        <div class="container">
            <div class="row">
                @include('pages._sidebar')
                <div class="col-md-10">
                    <div class="content">
                        <div class="row">
                            <div class="col-lg-5 ">
                                <div class="show-img">
                                    <img src="{{$product->getImage()}}" alt="">
                                </div>
                            </div>

                            <div class="col-lg-7 ">
                                <div class="show-title">
                                    <h5>{{$product->title}}</h5>
                                    <p class="text-muted">product Code: ISRC2020</p>
                                    <img class="stars" src="/img/star.png" alt="">
                                    <p class="price">{{$product->price}}</p>
                                    <p class="text-secondary"><b>в наличии: </b><a class="text-muted" href="#">Да</a></p>
                                    <p class="text-secondary"><b>категория: </b><a class="text-muted" href="#">Телевизоры</a></p>
                                    <a href="#" type="button" class="btn btn-info btn-add "><i class="fa fa-shopping-cart" aria-hidden="true"></i> купить</a>
                                </div>
                            </div>
                        </div>




                        <ul class="nav nav-tabs " id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Описание</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Характеристики</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Отзывы</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                {!! $product->description !!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                        </div>
                    </div>

                    </div>
            </div>
        </div>
    </section>
@endsection
