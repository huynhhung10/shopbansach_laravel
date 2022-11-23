@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">danh mục</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{route('admin.category.store')}}">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tên danh mục</label>
                                <input type="text" class="form-control" name="category_name" id="inputAddress">
                                {!! $errors->first('category_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                                <div class="form-check">
                                    
                                    <input name="status" class="form-check-input" type="checkbox" id="gridCheck">
                                    
                                    <label class="form-check-label" for="gridCheck">
                                        Hiển thị
                                    </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="themdanhmuc" class="btn btn-primary" style="background-color: green; float: right">Thêm danh mục</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection