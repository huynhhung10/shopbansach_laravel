@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">Nhà xuất bản</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{route('admin.brand.store')}}">
                            @csrf
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Tên NXB</label>
                                <input type="text" name="brand_name" class="form-control" id="inputAddress">
                                {!! $errors->first('brand_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="brand_content" id="ckeditor1" placeholder="Mô tả NXB"></textarea>
                            </div>
                            {{-- <label for="inputAddress" class="form-label">Logo</label>
                            <div class="input-group mb-3">
                                <input type="file" name="brand_logo" class="form-control" id="avatar">
                               
                            </div>
                            {!! $errors->first('brand_logo', '<small class="text-danger">:message</small>') !!} --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="brand_status" id="gridCheck">
                                  
                                    <label class="form-check-label" for="gridCheck">
                                        Hiển thị
                                     </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green; float: right">Thêm nhà xuất bản</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection