
<div class="header_bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-12">
                <div class="menu d-none d-lg-block ">
                    <nav>
                        <ul>
                            <li><a href="{{route('home')}}">HOME</a>
                            </li>
                            <li><a href="{{route('shop.index')}}">Shop</a>
                            </li>
                            <li><a href="about-us.html">About</a></li>
                            <li class="mega_item"><a href="#">Categories<i class="zmdi zmdi-chevron-down"></i></a>
                                @if(\App\Helpers\Helper::getCategories())
                                <ul class="mega_menu">
                                    @foreach(\App\Helpers\Helper::getCategories() as $category)
                                    <li><a href="#">{{$category->name}}</a>
                                        @foreach($category->subCategories as $subCategory)
                                        <ul class="mega_dropdown">
                                            <li><a href="shop.html">{{$subCategory->name}}</a></li>
                                        </ul>
                                        @endforeach
                                    </li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="header_right_info">
                    <ul>
                        <li><a href="{{route('wishList.index')}}">Wishlist<span><i class="zmdi zmdi-favorite-outline"></i> {{\App\Helpers\Helper::getWishListsCount()}}</span></a></li>
                        @if(\App\Helpers\Helper::current_user())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    My Account
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{route('userDash.index')}}">Account Dashboard</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="{{route('logout')}}">Logout</a>
                                </div>
                            </li>
                        @else
                            <li> <a href="#">Login</a></li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="col-12 d-lg-none">
                <!--Mobile menu murkup start-->
                <div class="mobile-menu-area d-lg-none">
                    <div class="mobile-menu clearfix">
                        <nav>
                            <ul>
                                <li><a href="{{route('home')}}">HOME</a>
                                </li>
                                <li><a href="{{route('shop.index')}}">Shop</a>
                                </li>
                                <li><a href="about-us.html">About</a></li>
                                <li class="mega_item"><a href="#">Categories<i class="zmdi zmdi-chevron-down"></i></a>
                                    @if(\App\Helpers\Helper::getCategories())
                                        <ul class="mega_menu">
                                            @foreach(\App\Helpers\Helper::getCategories() as $category)
                                                <li><a href="#">{{$category->name}}</a>
                                                    @foreach($category->subCategories as $subCategory)
                                                        <ul class="mega_dropdown">
                                                            <li><a href="shop.html">{{$subCategory->name}}</a></li>
                                                        </ul>
                                                    @endforeach
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <!--Mobile menu murkup End-->
            </div>
        </div>
    </div>
</div>
