@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/shop">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row" style="align-items:flex-start">
                <div class="col-12 col-sm-3" style="position: sticky; top: 5rem;">
                    <div class="card bg-light mb-3">
                        <div class="card-header bg-success text-white"><i class="fa fa-list"></i> Sort by Categories</div>
                        <ul class="list-group category_block">
                            <li class="list-group-item"><a href="#lightbites">Light Bites</a></li>
                            <li class="list-group-item"><a href="#appetizer">Appetizer</a></li>
                            <li class="list-group-item"><a href="#maincourse">Main Course</a></li>
                            <li class="list-group-item"><a href="#desserts">Desserts</a></li>
                            <li class="list-group-item"><a href="#drinks">Drinks</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <div id="lightbites">
                        <h2>Light Bites</h2>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach ($dataMenu1 as $pro)
                        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px">
                            <div class="card">
                                {{-- <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap"> --}}
                                <div class="card-body">
                                    <h4 class="card-title">{{ Str::ucfirst(Str::replace('_', ' ', $pro -> name)) }}</h4>
                                    <p>{{ Str::ucfirst(Str::replace('_', ' ', $pro -> desc)) }}</p>
                                    <p>₫ {{ $pro -> price }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->desc }}" id="desc" name="desc">
                                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                      <div class="row">
                                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div id="appetizer">
                    <h2>Appetizer</h2>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach ($dataMenu2 as $pro)
                        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px">
                            <div class="card">
                                {{-- <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap"> --}}
                                <div class="card-body">
                                    <h4 class="card-title">{{ Str::ucfirst(Str::replace('_', ' ', $pro -> name)) }}</h4>
                                    <p>{{ Str::ucfirst(Str::replace('_', ' ', $pro -> desc)) }}</p>
                                    <p>₫ {{ $pro -> price }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->desc }}" id="desc" name="desc">
                                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                      <div class="row">
                                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div id="maincourse">
                    <h2>Main Course</h2>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach ($dataMenu3 as $pro)
                        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px">
                            <div class="card">
                                {{-- <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap"> --}}
                                <div class="card-body">
                                    <h4 class="card-title">{{ Str::ucfirst(Str::replace('_', ' ', $pro -> name)) }}</h4>
                                    <p>{{ Str::ucfirst(Str::replace('_', ' ', $pro -> desc)) }}</p>
                                    <p>₫ {{ $pro -> price }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->desc }}" id="desc" name="desc">
                                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                      <div class="row">
                                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div id="desserts">
                    <h2>Desserts</h2>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach ($dataMenu4 as $pro)
                        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px">
                            <div class="card">
                                {{-- <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap"> --}}
                                <div class="card-body">
                                    <h4 class="card-title">{{ Str::ucfirst(Str::replace('_', ' ', $pro -> name)) }}</h4>
                                    <p>{{ Str::ucfirst(Str::replace('_', ' ', $pro -> desc)) }}</p>
                                    <p>₫ {{ $pro -> price }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->desc }}" id="desc" name="desc">
                                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                      <div class="row">
                                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div id="drinks">
                    <h2>Drinks</h2>
                    </div>
                    <hr>
                    <div class="row">
                        @foreach ($dataMenu5 as $pro)
                        <div class="col-12 col-md-6 col-lg-4" style="margin-bottom: 20px">
                            <div class="card">
                                {{-- <img class="card-img-top" src="https://dummyimage.com/600x400/55595c/fff" alt="Card image cap"> --}}
                                <div class="card-body">
                                    <h4 class="card-title">{{ Str::ucfirst(Str::replace('_', ' ', $pro -> name)) }}</h4>
                                    <p>{{ Str::ucfirst(Str::replace('_', ' ', $pro -> desc)) }}</p>
                                    <p>₫ {{ $pro -> price }}</p>
                                    <div class="row">
                                        <div class="col">
                                            <form action="{{ route('cart.store') }}" method="POST">
                                                {{ csrf_field() }}
                                                <input type="hidden" value="{{ $pro->id }}" id="id" name="id">
                                                <input type="hidden" value="{{ $pro->name }}" id="name" name="name">
                                                <input type="hidden" value="{{ $pro->price }}" id="price" name="price">
                                                <input type="hidden" value="{{ $pro->desc }}" id="desc" name="desc">
                                                <input type="hidden" value="{{ $pro->image_path }}" id="img" name="img">
                                                <input type="hidden" value="1" id="quantity" name="quantity">
                                                <div class="card-footer" style="background-color: white;">
                                                      <div class="row">
                                                        <button class="btn btn-success btn-sm" class="tooltip-test" title="add to cart">
                                                            <i class="fa fa-shopping-cart"></i> Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection