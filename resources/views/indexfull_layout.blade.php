<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookGarden | Mua sách Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/sell.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/detail.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/historyPayment.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/payment.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/signInSignUp.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/accountInfo.css')}}">
    
    <link rel="stylesheet" href="{{ asset('frontend/css/all.css') }}">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />   --}}
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <!-- thẻ để chứa nguyên cái page -->
    <div class="app">

        <!-- 
            HEADER 
            Được chia làm 3 phần chính nav, mid, bottom 
            theo thứ tự là trên, giữa, dưới
        -->

        <header class="header">
            <!-- Phần trên header -->
            <nav class="navbar">
                <!-- Grid để nội dung nằm giữa page | width = 1200px -->
                <div class="grid"> 
                    <ul class="navbar__list">
                        <li class="navbar__item"><a href="#" class="navbar__link"><i class="navbar__link-icon fa-regular fa-circle-info"></i>Trợ giúp</a></li>
                        <li class="navbar__item"><a href="#" class="navbar__link">Tin tức</a></li>
                        <li class="navbar__item"><a href="#" class="navbar__link">Khuyến mãi</a></li>
                    </ul>
    
                    <ul class="navbar__list">
                        <li class="navbar__item"><a href="{{URL::to('/historyPayment')}}" class="navbar__link">Kiểm tra đơn hàng</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/accountInfo')}}" class="navbar__link">HoangLong</a></li>
                        <li class="navbar__item"><a href="#" class="navbar__link">Đăng xuất</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/signInSignUp')}}" class="navbar__link">Đăng nhập</a></li>
                        <li class="navbar__item"><a href="{{URL::to('/signInSignUp')}}" class="navbar__link">Đăng ký</a></li>
                    </ul>
                </div>
            </nav>

            <!-- Phần giữa header -->
            <div class="header__mid">
                <div class="grid">
                    <!-- logo -->
                    <a href="{{URL::to('/')}}" class="header-mid__logo-link">
                        <img src="{{('frontend/img/logo1.png')}}" alt="" class="header-mid__logo">
                    </a>

                    <!-- search -->
                    <div class="header-mid__search-box">
                        
                        <select class="header-mid__select header-mid__search-box__input" name="searchSelect" id="searchSelect">
                            <option value="1" class="header-mid__option">Tất cả</option>
                            <option value="2" class="header-mid__option">Sách - Truyện tranh</option>
                            <option value="3" class="header-mid__option">CD - DVD</option>
                            <option value="4" class="header-mid__option">Quà tặng</option>
                            <option value="5" class="header-mid__option">Dụng cụ vẽ - VPP</option>
                            <option value="6" class="header-mid__option">Vật dụng gia đình</option>
                        </select>
                        <div class="header-mid__search-group">
                            <input type="text" class="header-mid__search header-mid__search-box__input" placeholder="Bạn cần tìm gì?">
                            <button class="header-mid__button header-mid__search-box__input"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <ul class="header-mid-search__drop">
                                <li class="header-mid-drop__item">Login Form in HTML & CSS</li>
                                <li class="header-mid-drop__item">Login Form in HTML & CSS</li>
                                <li class="header-mid-drop__item">Login Form in HTML & CSS</li>
                                <li class="header-mid-drop__item">Login Form in HTML & CSS</li>
                                <li class="header-mid-drop__item">Login Form in HTML & CSS</li>
                            </ul>
                        </div>
                    </div>

                    <!-- Div chứa thông tin, nút -->
                    <div class="header-mid__functions">
                        <div class="header-mid__info">
                            <i class="fa-regular fa-headset"></i>
                            <div class="header-mid-info__title">
                                <h2>012 345 698</h2>
                                <span>Hot line</span>
                            </div>
                        </div>

                        <a href="{{URL::to('/cart')}}" class="header-mid__cartlink">
                            <div class="header-mid__cart">
                                <i class="header-mid__cart-logo fa-regular fa-cart-shopping"></i>
                                <span class="header-mid__cart-title">Giỏ hàng</span>
                                <span class="header-mid__cart-quantity">(0)</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Phần dưới header -->
            <div class="header__bottom">
                <div class="grid">
                    <!-- Xài bootstrap chắc biết =)) -->
                    <div class="row">
                        <div class="col-3">
                            <!-- danh mục header -->
                            <div class="header__category">
                                <i class="header-category__icon fa-solid fa-bars"></i>
                                <span class="header-category__title">
                                    Danh mục sản phẩm
                                </span>
                                <i class="header-category__icon fa-sharp fa-solid fa-caret-down"></i>
                                <!-- phần drop xuống của danh mục (level 1: dọc) -->
                                <div class="header-category__dropdown">
                                    <ul class="header-dropdown__list">
                                        <!-- 1 loại danh mục nằm trong thẻ li -->
                                        <li class="header-dropdown__item">
                                            <a href="{{URL::to('/selling')}}" class="header-dropdown__link">
                                                <div class="header-dropdown__link-box">
                                                    <i class="header-dropdown__link-box__icon fa-solid fa-bars"></i>
                                                    <span class="header-dropdown__link-box__title">
                                                        Sách nè
                                                    </span>
                                                </div>
                                                <i class="header-dropdown__link-icon fa-solid fa-caret-right"></i>
                                            </a>
                                            <!-- dropdown (level 2: ngang) -->
                                            <div class="header-category__dropdown second">
                                                <div class="header-drop__second">
                                                    <ul class="header-drop-second__list">
                                                        <!-- 1 loại của mỗi loại danh mục nằm trong thẻ li -->
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo 123123123213123alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
    
                                                    </ul>
                                                    <ul class="header-drop-second__list">
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        
                                                    </ul>
                                                    <ul class="header-drop-second__list">
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo 123123123213123alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
    
                                                    </ul>
                                                    <ul class="header-drop-second__list">
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        
                                                    </ul>
                                                    <ul class="header-drop-second__list">
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                            </div>
                                            <!-- end dropdown level 2 -->
                                        </li>    
                                        <li class="header-dropdown__item">
                                            <a href="productDetail.html" class="header-dropdown__link">
                                                <div class="header-dropdown__link-box">
                                                    <i class="header-dropdown__link-box__icon fa-solid fa-bars"></i>
                                                    <span class="header-dropdown__link-box__title">
                                                        Truyện nè
                                                    </span>
                                                </div>
                                                <i class="header-dropdown__link-icon fa-solid fa-caret-right"></i>
                                            </a>
                                        </li>   
                                        <li class="header-dropdown__item">
                                            <a href="" class="header-dropdown__link">
                                                <div class="header-dropdown__link-box">
                                                    <i class="header-dropdown__link-box__icon fa-solid fa-bars"></i>
                                                    <span class="header-dropdown__link-box__title">
                                                        Cái gì đó nè
                                                    </span>
                                                </div>
                                                <i class="header-dropdown__link-icon fa-solid fa-caret-right"></i>
                                            </a>
                                            <!-- dropdown level 2 -->
                                            <div class="header-category__dropdown second">
                                                <div class="header-drop__second">
                                                    <ul class="header-drop-second__list">
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo 123123123213123alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
                                                        <li class="header-drop-second__item">
                                                            <a href="#" class="header-drop-second__link">alo alo</a>
                                                        </li>
    
                                                    </ul>
                                                    
                                                </div>
                                                
                                            </div>
                                            <!-- end dropdown level 2 -->
                                        </li> 
                                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <!-- cần thì mới xài, nó nằm kế bên cái danh mục sản phẩm -->
                            <div class="empty">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>

        <!-- END HEADER -->


        <!-- BODY -->

        @yield('client_content')
    
        <!-- END BODY -->


        <!-- FOOTER -->

        <footer class="app__footer">
            <div class="grid">
                <div class="row">
                    <div class="footer__intro">
                        <h2 class="footer-intro__title">NHÀ SÁCH TRỰC TUYẾN SACHSY.COM</h2>
                        <p class="footer-intro__content">Mua sách online tại nhà sách trực tuyến Bookbuy.vn để được cập nhật nhanh nhất các tựa sách đủ thể loại với mức giảm 15 – 35% cùng nhiều ưu đãi, quà tặng kèm. Qua nhiều năm, không chỉ là địa chỉ tin cậy để bạn mua sách trực tuyến, Bookbuy còn có quà tặng, văn phòng phẩm, vật dụng gia đình,…với chất lượng đảm bảo, chủng loại đa dạng, chế độ bảo hành đầy đủ và giá cả hợp lý từ hàng trăm thương hiệu uy tín trong và ngoài nước. Đặc biệt, bạn có thể chọn những mẫu sổ tay handmade hay nhiều món quà tặng sinh nhật độc đáo chỉ có tại Bookbuy.vn.</p>
                        <p class="footer-intro__content">Mua sách online tại nhà sách trực tuyến Bookbuy.vn để được cập nhật nhanh nhất các tựa sách đủ thể loại với mức giảm 15 – 35% cùng nhiều ưu đãi, quà tặng kèm. Qua nhiều năm, không chỉ là địa chỉ tin cậy để bạn mua sách trực tuyến, Bookbuy còn có quà tặng, văn phòng phẩm, vật dụng gia đình,…với chất lượng đảm bảo, chủng loại đa dạng, chế độ bảo hành đầy đủ và giá cả hợp lý từ hàng trăm thương hiệu uy tín trong và ngoài nước. Đặc biệt, bạn có thể chọn những mẫu sổ tay handmade hay nhiều món quà tặng sinh nhật độc đáo chỉ có tại Bookbuy.vn.</p>
                        <p class="footer-intro__content">Mua sách online tại nhà sách trực tuyến Bookbuy.vn để được cập nhật nhanh nhất các tựa sách đủ thể loại với mức giảm 15 – 35% cùng nhiều ưu đãi, quà tặng kèm. Qua nhiều năm, không chỉ là địa chỉ tin cậy để bạn mua sách trực tuyến, Bookbuy còn có quà tặng, văn phòng phẩm, vật dụng gia đình,…với chất lượng đảm bảo, chủng loại đa dạng, chế độ bảo hành đầy đủ và giá cả hợp lý từ hàng trăm thương hiệu uy tín trong và ngoài nước. Đặc biệt, bạn có thể chọn những mẫu sổ tay handmade hay nhiều món quà tặng sinh nhật độc đáo chỉ có tại Bookbuy.vn.</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col">

                        <div class="footer__container">  
                            <div class="row">   
                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">HỖ TRỢ KHÁCH HÀNG</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">HỖ TRỢ KHÁCH HÀNG</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">HỖ TRỢ KHÁCH HÀNG</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="col-3">
                                    <div class="footer__box">
                                        <h2 class="footer-box__title">HỖ TRỢ KHÁCH HÀNG</h2>
                                        <ul class="footer-box__list">
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Sản phẩm & Đơn hàng: 0933 109 009</a>
                                            </li>
                                            <li class="footer-box__item">
                                                <a href="" class="footer-box__link">Kỹ thuật & Bảo hành: 0909 8394 923</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </div> 
                            
                            
                        </div>
                    </div>
                </div>
                
            </div>
        </footer>
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/view.js')}}"></script>
    <script src="{{asset('frontend/js/form.js')}}"></script>

    <!-- <script src="./frontend/css/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
   
</body>
</html>