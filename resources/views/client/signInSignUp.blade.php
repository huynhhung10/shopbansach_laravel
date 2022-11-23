@extends('index_small_layout')
@section('client_content')
<script src="{{asset('frontend/js/Validator.js')}}"></script>

        <div class="app__container">  
            <div class="form__container">
                

                <div class="form__header">
                    <h3 id="header_signup" class="sign__heading">Đăng nhập</h3>
                    <h3 id="header_signin" class="sign__heading">Đăng ký</h3> 
                    <div class="form-header__underline"></div>   
                </div>  
                @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                        @php
                            Session::forget('success');
                        @endphp
                    </div>
                @endif
                <div class="form__group">
                    
                    <form id="form_signin" action="{{URL::to('/login-customer')}}" method="POST" class="form__sign" enctype="multipart/form-data">
                        @csrf
                        <div class="sign__group">
                          
                            <label for="username" class="sign-group__label">Tên tài khoản</label>
                            <input id="username" name="email" type="text" class="sign-group__input" placeholder="VD: hoanglong1234">
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                                        
                        <div class="sign__group">
                            <label for="password" class="sign-group__label">Mật khẩu</label>
                            <input id="password" name="password" type="password" class="sign-group__input" placeholder="VD: Long1234">
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
                        
                        <div class="sign__box">
                            <input id="remember_password" name="remember_password" class="sign-group__checkbox" type="checkbox">
                            <span class="sign-group__message sign-box__message">Ghi nhớ mật khẩu</span>
                        </div>
        
                        <button class="sign__button">Đăng nhập</button>
        
                    </form>

                    <form id="form_signup" action="{{ route('checkregis') }}" method="POST" class="form__sign" enctype="multipart/form-data">          
                        @csrf
                        <div class="sign__group">
                            <label for="fullname" class="sign-group__label"></label>
                            <input id="fullname" name="customer_avatar" type="hidden" class="sign-group__input" value="{{asset('/backend/assets/img/avatars/1.jpg')}}">
                        
                            <span class="sign-group__message"></span>
                        </div>
                        <div class="sign__group">
                            <label for="fullname" class="sign-group__label">Tên đầy đủ</label>
                            <input id="fullname" name="customer_name" type="text" class="sign-group__input" placeholder="VD: Hoàng Long">
                            {!! $errors->first('customer_name', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                        <div class="sign__group">
                            <label for="username" class="sign-group__label">Tên tài khoản</label>
                            <input id="username" name="customer_username" type="text" class="sign-group__input" placeholder="VD: hoanglong1234">
                            {!! $errors->first('customer_username', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                        <div class="sign__group">
                            <label for="email" class="sign-group__label">Email</label>
                            <input id="email" name="email" type="email" class="sign-group__input" placeholder="VD: hoanglong@gmail.com">
                            {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                        <div class="sign__group">
                            <label for="phone" class="sign-group__label">Số điện thoại</label>
                            <input id="phone" name="customer_phone" type="number" class="sign-group__input" placeholder="VD: 09081234567">
                            {!! $errors->first('customer_phone', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
                        
                        <div class="sign__group">
                            <label for="password" class="sign-group__label">Mật khẩu</label>
                            <input id="password" name="password" type="password" class="sign-group__input" placeholder="VD: Long1234">
                            {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                        <div class="sign__group">
                            <label for="password_confirm" class="sign-group__label">Nhập lại mật khẩu</label>
                            <input id="password_confirm" name="confirm_password" type="password" class="sign-group__input" placeholder="Nhập lại mật khẩu">
                            {!! $errors->first('confirm_password', '<small class="text-danger">:message</small>') !!}
                            <span class="sign-group__message"></span>
                        </div>
        
                        <button class="sign__button">Đăng ký</button>
        
                    </form>
                </div>        
            </div>
        </div>

        {{-- <script>
            Validator({
                form: '#form_signup',
                errorMes: '.sign-group__message',
                rules: [
                    Validator.isRequired('#fullname', 'Trường này không được để trống'),  
                    Validator.isRequired('#username'),
                    Validator.isRequired('#email'),
                    Validator.isEmail('#email'),
                    Validator.isRequired('#phone'),
                    Validator.isPhone('#phone'),
                    Validator.isRequired('#password'),
                    Validator.minLength('#password', 8, 'Phải là 8 ký tự nhoa'),
                    Validator.isRequired('#password_confirm'),
                    Validator.isConfirmed('#password_confirm', function(){
                        return document.querySelector('#form_signup #password').value;
                    }),
                ]
            })

            Validator({
                form: '#form_signin',
                errorMes: '.sign-group__message',
                rules: [
                    Validator.isRequired('#username'),
                    Validator.isRequired('#password'),
                ]
            })
        </script> --}}
    <script src="{{asset('frontend/js/viewForm.js')}}"></script>

        
@endsection
