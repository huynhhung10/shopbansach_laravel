@extends('indexfull_layout')
@section('client_content')

        <div class="app__container">
            <?php
                        $customer_id = Session::get('customer_id');
                        $customer_name = Session::get('customer_name');
                        $customer_username = Session::get('customer_username');
                        
                      ?>
            <div class="grid">
                <div class="row">
                    <div class="col-3">
                        <div class="profile__sidebar">
                            
                            <ul class="profile-sidebar__list">
                                <li class="profile-sidebar__item">
                                    <i class="profile-sidebar__icon fa-solid fa-user"></i>
                                    <a href="{{URL::to('/accountInfo')}}/{{ auth('customer')->user()->customer_id }}" class="profile-sidebar__link">
                                        Thông tin tài khoản
                                    </a>
                                </li>
                                <li class="profile-sidebar__item">
                                    <i class="profile-sidebar__icon fa-sharp fa-solid fa-rectangle-vertical-history"></i>
                                    <a href="{{URL::to('/historyOrder')}}/{{ auth('customer')->user()->customer_id }}" class="profile-sidebar__link">
                                        Lịch sử mua hàng
                                    </a>
                                </li>
                            </ul>
           
                        </div>
                    </div>
                    <div class="col-9">
                        <div class="container__account">
                            <h2 class="account__title">Hồ sơ của tôi</h2>
                            

                            <form action="{{URL::to('/savechange')}}" class="account__form">
                                @csrf
                                <div class="account__info">
                                    <input type="hidden" value="{{$customer->customer_id}}" name="customer_id">
                                    <div class="account-info__group">
                                        <label for="username" class="account-info__label">Tên đăng nhập</label>
                                        <input id="username" name="customer_username" type="text" class="account-info__input" value="{{$customer->customer_username}}">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="fullname" class="account-info__label">Tên</label>
                                        <input id="fullname" name="customer_name" type="text" class="account-info__input" value="{{$customer->customer_name}}">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="email" class="account-info__label">Email</label>
                                        <input id="email" name="email" type="email" class="account-info__input" value="{{$customer->email}}">
                                    </div>
                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label">Số điện thoại</label>
                                        <input id="phone" name="customer_phone" type="text" class="account-info__input" value="{{$customer->customer_phone}}">
                                    </div>

                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label"><a href="{{URL::to('/accountPasswordChange')}}/{{ auth('customer')->user()->customer_id }}" class="account-info__link">Đổi mật khẩu</a></label>
                                        
                                    </div>
                                    <div class="account-info__group">
                                        <label for="phone" class="account-info__label"></label>
                                        <button class="account-info__button">Lưu</button>
                                    </div>
                                    
                                    
                                </div>
                                <div class="account__avatar">
                                    <div class="account-avatar__avtbox">
                                        <img class = "avatar" style="vertical-align: middle;width: 160px;height: 160px; border-radius: 50%;"src="{{asset('/backend/assets/img/avatars/')}}/{{$customer->customer_avatar}}" alt="{{$customer->customer_avatar}}">
                                        
                                        <input type="file" name="avatar" value="{{$customer->customer_avatar}}" aria-label="File browser example" class="account-avatar__input" >   

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>

  $('.btn-danger').on('click', function (event) {
    event.preventDefault();
    const url = $(this).attr('href');
    swal({
        title: 'Bạn có muốn lưu thay đổi?',
        text: 'This record and it`s details will be permanantly deleted!',
        icon: 'warning',
        buttons: ["Cancel", "Yes!"],
    }).then(function(value) {
        if (value) {
            window.location.href = url;
        }
    });
});
  
</script>