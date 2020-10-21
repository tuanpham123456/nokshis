<div class="col-lg-4 col-md-6 col-12">
    <div class="product-wrapper mb-35">
        <div class="product-img">
            <a href="{{ route('get.product.detail', $product->pro_slug .'-'.$product->id) }}">
                <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" alt="">
            </a>
            <div class="product-wishlist">
                <a href="#"><i class="ti-heart"></i></a>
            </div>
            <div class="product-action-2">
                <a class="action-plus-2" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                    <i class="ti-plus"></i>
                </a>
                <a class="action-cart-2" title="Add To Cart" href="#">
                    <i class="ti-shopping-cart"></i>
                </a>
                <a class="action-reload" title="Compare" data-toggle="modal" data-target="#exampleCompare" href="#">
                    <i class="ti-reload"></i>
                </a>
            </div>
        </div>
        <div class="product-content text-center">
            <h4><a href="product-details.html">{{ $product->pro_name }}</a></h4>
            <div class="product-price-2">
                <span>{{ $product->pro_price }}</span>
            </div>
        </div>
    </div>
</div>  