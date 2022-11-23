@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">khách hàng</span></div>
                    <div class="card-body">
                        {{-- @if(Session::has('success'))
                                <div class="alert alert-success">
                                    {{ Session::get('success') }}
                                    @php
                                        Session::forget('success');
                                    @endphp
                                </div>
                            @endif --}}
                        <form class="row g-3" action='{{ route('admin.checkaddcustomer') }}'style="padding:20px 20px;" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên khách hàng</label>
                                <input type="text" class="form-control" name="customer_name" id="inputAddress">
                                {!! $errors->first('customer_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" class="form-control"name="email" id="inputAddress">
                                {!! $errors->first('email', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="number" class="form-control" name="customer_phone" id="inputAddress">
                                {!! $errors->first('customer_phone', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input type="text" class="form-control" name="customer_username" id="inputAddress">
                                {!! $errors->first('customer_username', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="inputAddress">
                                {!! $errors->first('password', '<small class="text-danger">:message</small>') !!}
                            </div>
                           
                            <label for="inputAddress" class="form-label">Avatar</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control" name="avatar" id="avatar">
                            </div>
                        
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck"  name="status">
                                <label class="form-check-label" for="gridCheck">
                                    Khóa
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green">Thêm khách hàng</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection