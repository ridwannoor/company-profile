<header id="header" class="header-effect-shrink"
    data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
    @foreach ($gens as $gen)
    <div class="header-body border-color-primary header-body-bottom-border">
        <div class="header-top header-top-default border-bottom-0">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    {{-- <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link pl-0"
                                            href="#"><i class="fas fa-angle-right"></i> About Us</a> </li> --}}
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link"
                                            href="#"><i class="fas fa-angle-right"></i> Contact Us</a>
                                    </li>
                                    <li class="nav-item nav-item-anim-icon d-none d-md-block"> <a class="nav-link"
                                        href="/testimoni"><i class="fas fa-angle-right"></i> Testimonial</a>
                                </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills">
                                    <li class="nav-item">
                                        <a href="mailto:mail@domain.com"><i
                                                class="far fa-envelope text-4 text-color-primary" style="top: 1px;"></i>
                                                
                                                {{ $gen->email }}
                                                
                                           </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tel:123-456-7890"><i class="fab fa-whatsapp text-4 text-color-primary"
                                                style="top: 0;"></i> {{ $gen->phone }}</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-row">
                        <div class="header-logo">
                            <a href="/">
                                <img alt="Porto" width="100" height="48" src="{{ asset('/storage/admin/general/'.$gen->image)}}">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row">
                        <div class="header-nav header-nav-links order-2 order-lg-1">
                            <div
                                class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                <nav class="collapse">
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li> <a href="/"> Home </a></li>
                                        <li> <a href="/blog"> Blog </a></li>
                                        <li> <a href="/shop"> Shop </a></li>
                                    </ul>
                                </nav>
                            </div>
                            <ul class="header-social-icons social-icons d-none d-sm-block">
                                <li class="social-icons-facebook"><a href="{{ $gen->facebook }}" target="_blank"
                                        title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="{{ $gen->twitter }}" target="_blank"
                                        title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-instagram"><a href="{{ $gen->instagram }}" target="_blank"
                                        title="Instagram"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse"
                                data-target=".header-nav-main nav">
                                <i class="fas fa-bars"></i>
                            </button>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border header-nav-features-lg-show-border order-1 order-lg-2">
                            <div class="header-nav-feature header-nav-features-search d-inline-flex"> <a href="#"
                                    class="header-nav-features-toggle" data-focus="headerSearch"><i
                                        class="fas fa-search header-nav-top-icon"></i></a>
                                <div class="header-nav-features-dropdown" id="headerTopSearchDropdown">
                                    <form role="search"
                                        action="https://portotheme.com/html/porto/7.5.0/page-search-results.html"
                                        method="get">
                                        <div class="simple-search input-group"> <input class="form-control text-1"
                                                id="headerSearch" name="q" type="search" value=""
                                                placeholder="Search..."> <span class="input-group-append"> <button
                                                    class="btn" type="submit"> <i
                                                        class="fa fa-search header-nav-top-icon"></i> </button> </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="header-nav-feature header-nav-features-cart d-inline-flex ml-2"> <a href="#"
                                    class="header-nav-features-toggle"> <img src="img/icons/icon-cart.svg" width="14"
                                        alt="" class="header-nav-top-icon-img"> <span class="cart-info d-none"> <span
                                            class="cart-qty">1</span> </span> </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <ol class="mini-products-list">
                                        <li class="item"> <a href="#" title="Camera X1000" class="product-image"><img
                                                    src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                            <div class="product-details">
                                                <p class="product-name"> <a href="#">Camera X1000 </a> </p>
                                                <p class="qty-price"> 1X <span class="price">$890</span> </p> <a
                                                    href="#" title="Remove This Item" class="btn-remove"><i
                                                        class="fas fa-times"></i></a>
                                            </div>
                                        </li>
                                    </ol>
                                    <div class="totals"> <span class="label">Total:</span> <span
                                            class="price-total"><span class="price">$890</span></span> </div>
                                    <div class="actions"> <a class="btn btn-dark" href="#">View Cart</a> <a
                                            class="btn btn-primary" href="#">Checkout</a> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</header>
