<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SachSy | Mua sách Online</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="{{('frontend/css/base.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/sell.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/detail.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/historyPayment.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/payment.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/cart.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/accountInfo.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/signInSignUp.css')}}">
    
    <link rel="stylesheet" href="{{('frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{('frontend/css/fontawesome.min.css')}}">
    <!-- <link rel="stylesheet" href="frontend/css/bootstrap-4.2.1-dist/css/bootstrap-grid.min.css"> -->
    <link rel="stylesheet" href="{{('frontend/css/bootstrap.min.css')}}">
    <!-- <link rel="stylesheet" href="frontend/css/bootstrap-4.2.1-dist/css/bootstrap.css"> -->
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

        <header class="header__pay">
            
            <div class="header__mid">
                <div class="grid">
                    <!-- logo -->
                    <a href="{{URL::to('/')}}" class="header-mid__logo-link">
                        <img src="{{('frontend/img/logo1.png')}}" alt="" class="header-mid__logo">
                    </a>

                    <!-- search -->
                    <div class="header-mid__search-box">
                        
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

           
            

        </header>


        <!-- END HEADER -->

        <!-- BODY -->

        
        @yield('client_content')
        

        <!-- END BODY -->

        <!-- FOOTER -->

    
    </div>

    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{URL::asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <link href= "{{asset('backend/css/toastr.css')}}" rel="stylesheet">
    <script src="{{asset('backend/js/toastr.min.js')}}"></script>
    

    <!-- <script src="./frontend/css/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
    {!! Toastr::message() !!}
    @include('sweetalert::alert')
   
</body>
</html>