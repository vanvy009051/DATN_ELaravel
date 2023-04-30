@extends('layout')
@section('title', 'Chi tiết sản phẩm')
@section('home_page')

<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                @foreach($category as $key => $value)
                <li><a href="{{URL::to('/category/' . $value->category_id )}}">{{ $value->category_name }}</a></li>
                @endforeach
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>

<div class="section">
    <div class="container">
        <div class="row">
            <div class="product-detail">
                <div class="col-md-5 col-lg-5 col-12">
                    <div class="product-image">
                        <img src="{{asset('public/uploads/products/' . $product->thumbnail)}}" alt="">
                    </div>
                </div>
                <div class="col-md-7 col-lg-7 col-12">
                    <div class="product-infomation">
                        <h2>Anne Klein Sleeveless Colorblock Scuba</h2>
                        <span>
                            <span>US $59</span>
                            <label>Quantity:</label>
                            <input type="text" value="3" />
                            <button type="button" class="btn btn-fefault cart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                        </span>
                        <p><b>Availability:</b> In Stock</p>
                        <p><b>Condition:</b> New</p>
                        <p><b>Brand:</b> Electro</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="product-tabs">

            </div>
        </div>
    </div>
</div>

@endsection