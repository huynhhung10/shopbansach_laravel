@extends('index_small_layout')
@section('client_content')
<script src="{{asset('frontend/js/Validator.js')}}"></script>

        <div class="app__container">            
        
            <form id="form_payment" action="{{ URL::to('/save-checkout-customer') }}" method="POST" class="form__pay">
                @csrf
                <h3 class="pay__heading">Thông tin giao hàng</h3>

                <div class="pay__group">
                    <label for="fullname" class="pay-group__label">Họ tên</label>
                    <input id="fullname" name="shipping_name" type="text" class="pay-group__input" placeholder="VD: hoanglong1234">
                    <span class="pay-group__message">{!! $errors->first('shipping_name', '<small class="text-danger">:message</small>') !!}</span>
                </div>

                                
                <div class="pay__group">
                    <label for="email" class="pay-group__label">Email nhận hàng</label>
                    <input id="email" name="shipping_email" type="text" class="pay-group__input" placeholder="VD: hoanglong@gmail.com">
                    <span class="pay-group__message">{!! $errors->first('shipping_email', '<small class="text-danger">:message</small>') !!}</span>
                </div>

                <div class="pay__group">
                    <label for="address" class="pay-group__label">Địa chỉ</label>
                    <input id="address" name="shipping_address" type="text" class="pay-group__input" placeholder="VD: 1 đường số 1 phường 1 quận 1 tp hcm">
                    <span class="pay-group__message">{!! $errors->first('shipping_address', '<small class="text-danger">:message</small>') !!}</span>
                </div>

                <div class="pay__group">
                    <label for="phone" class="pay-group__label">Số điện thoại</label>
                    <input id="phone" name="shipping_phone" type="number" class="pay-group__input" placeholder="VD: 09012345678">
                    <span class="pay-group__message">{!! $errors->first('shipping_phone', '<small class="text-danger">:message</small>') !!}</span>
                </div>

                {{-- <a href="{{URL::to('/successpayment')}}" class="pay__buttonlink"> --}}
                    <button type="submit" class="pay__button">Giao đến địa chỉ này</button>
                {{-- </a> --}}

            </form>
        </div>
        {{-- <script>
            Validator({
                form: '#form_payment',
                errorMes: '.pay-group__message',
                rules: [
                    Validator.isRequired('#fullname', 'Trường này không được để trống'),  
                    Validator.isRequired('#email'),
                    Validator.isRequired('#address'),
                    Validator.isEmail('#email'),
                    Validator.isRequired('#phone'),
                    Validator.isPhone('#phone'),
                ]
            })
        </script> --}}
@endsection