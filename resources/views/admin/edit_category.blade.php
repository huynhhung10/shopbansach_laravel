@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">danh mục</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{URL::to('/admin/posteditcategory')}}">
                            @csrf
                            <input type="hidden" value="{{$cate->category_id}}" name="category_id">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" value="{{$cate->category_name}}" name="category_name" id="inputAddress">
                            </div>
                            
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" @if($cate->status == 1) checked  @endif id="gridCheck" name="status">
                                    <label class="form-check-label" for="gridCheck">
                                        Hiển thị
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="themdanhmuc" class="btn btn-primary" style="background-color: green; float: right">Sửa danh mục</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection