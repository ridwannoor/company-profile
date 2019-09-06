@extends('layouts.app3')

@section('main')
<div class="container shop py-4">

    <div class="masonry-loader masonry-loader-showing">
        <div class="row products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
            @foreach ($shops as $s)
            <div class="col-12 col-sm-6 col-lg-3 product">
                <a href="shop-product-sidebar-left.html">
                    {{-- <span class="onsale">Sale!</span> --}}
                </a>
                <span class="product-thumb-info border-0">
                    <a href="shop-cart.html" class="add-to-cart-product bg-color-primary">
                        <span class="text-uppercase text-1">Add to Cart</span>
                    </a>
                    <a href="shop-product-sidebar-left.html">
                        <span class="product-thumb-info-image">
                            <img alt="" class="img-fluid" src="{{ asset('/storage/admin/shop/'.$s->image)}}">
                        </span>
                    </a>
                    <span class="product-thumb-info-content product-thumb-info-content pl-0 bg-color-light">
                        <a href="shop-product-sidebar-left.html">
                            <h4 class="text-4 text-primary">{{ $s->name }}</h4>
                            <span class="price">
                                {{-- <del><span class="amount">Rp{{ $s->harga }}</span></del> --}}
                                <ins><span class="amount text-dark font-weight-semibold">Rp{{ $s->harga }}</span></ins>
                            </span>
                        </a>
                    </span>
                </span>
            </div>                
            @endforeach
            
        </div>
        <div class="row">
            <div class="col">
                <ul class="pagination float-right">
                    <li class="page-item">{{ $shops->links() }}</li>
                    
                </ul>
            </div>
        </div>
    </div>

</div>

@endsection