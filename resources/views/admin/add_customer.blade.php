@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">khách hàng</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;">
                            <div class="col-md-4">
                                <label for="inputEmail4" class="form-label">Tên khách hàng</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">Email</label>
                                <input type="email" class="form-control" id="inputAddress">
                            </div>

                            <div class="col-md-4">
                                <label for="inputPassword4" class="form-label">SĐT</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>

                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Username</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Password</label>
                                <input type="password" class="form-control" id="inputAddress">
                            </div>
                            <label for="inputAddress" class="form-label">Avatar</label>
                            <div class="input-group mb-3">
                                
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
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