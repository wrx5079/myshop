<div class="col-md-2">
    <div class="sidebar">
        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header p-0" id="headingOne">
                    <h2 class="mb-0 ">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <i class="fa fa-television" aria-hidden="true"></i> <span>Телевизоры </span>
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">

                    <div class="card-body">
                        <ul>
                        @foreach($tvsets as $tv)
                            <li><a href="{{route('brand.show', $tv->slug)}}">{{$tv->title}}</a></li>
                        @endforeach
                        </ul>
                    </div>

                </div>
            </div>
            <div class="card">
                <div class="card-header p-0" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <i class="fa fa-laptop" aria-hidden="true"></i> Ноутбуки
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">
                    <ul>
                        @foreach($notebooks as $notebook)
                            <li><a href="{{route('brand.show', $notebook->slug)}}">{{$notebook->title}}</a></li>
                        @endforeach
                    </ul>
                        </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header p-0" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <i class="fa fa-mobile fa-lg" aria-hidden="true"></i> <span>Телефоны </span>
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <ul>
                            @foreach($notepads as $notepad)
                                <li><a href="{{route('brand.show', $notepad->slug)}}">{{$notepad->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
