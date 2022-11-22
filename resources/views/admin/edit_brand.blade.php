@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">Nhà xuất bản</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{URL::to('/admin/posteditbrand')}}">
                            @csrf
                            <input type="hidden" value="{{$brand->brand_id}}" name="brand_id">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Tên NXB</label>
                                <input type="text" name="brand_name" value="{{ $brand->brand_name }}" class="form-control" id="inputAddress">
                            </div>
                            
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="brand_content" id="ckeditor1" placeholder="Mô tả NXB">{{ $brand->brand_content }}</textarea>
                            </div>
                            {{-- <label for="inputAddress" class="form-label">Logo</label>
                            <div class="history-item__imgbox">
                                <img src="{{asset('/frontend/img/products')}}/{{ $brand->brand_logo }}" alt="{{ $brand->brand_logo }}" class="img-fluid img-thumbnail" style="width: 70px">
                            </div>
                            <div class="input-group mb-3">
                                
                               
                                <input type="file" value="{{ $brand->brand_logo }}" name="brand_logo" class="form-control" id="inputGroupFile01">
                            </div>
                         --}}
                            
                            
                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="status" id="gridCheck">
                                    <input class="form-check-input" type="checkbox" @if($brand->brand_status == 1) checked  @endif id="gridCheck" name="brand_status">
                                    <label class="form-check-label" for="gridCheck">
                                        Hiển thị
                                     </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" style="background-color: green; float: right">Sửa nhà xuất bản</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection