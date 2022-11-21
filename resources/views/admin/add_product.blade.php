@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">sản phẩm</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{route('admin.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tên sản phảm</label>
                                <input type="text" class="form-control" name="product_name" id="inputAddress">
                                {!! $errors->first('product_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Tên tác giả</label>
                                <input type="text" class="form-control" name="product_author" id="inputAddress">
                                {!! $errors->first('product_author', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="product_content" id="ckeditor1" placeholder="Mô tả sản phẩm"></textarea>
                                {!! $errors->first('product_content', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <label for="inputAddress" class="form-label">Hình ảnh</label>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control" name="product_img" id="avatar">
                            </div>
                        
                           
                        
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">NXB</label>
                                <select id="inputState" name="product_brand" class="form-select">
                               
                                @foreach ($brand as $key => $brand)                                    
                                
                                <option  value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                                </select>
                               
                            </div>
                            {!! $errors->first('product_brand', '<small class="text-danger">:message</small>') !!}
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Thể loại</label>
                                <select id="inputState" name="product_category" class="form-select">
                                
                                @foreach ($category as $key => $cate)                                    
                                
                                <option  value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                                
                                </select>
                               
                            </div>

                             {!! $errors->first('product_category', '<small class="text-danger">:message</small>') !!}

                            <div class="col-md-2">
                                <label for="inputCity" class="form-label">Số lượng</label>
                                <input type="number"  data-validation="number" name="product_quantity" class="form-control" id="inputCity">
                                {!! $errors->first('product_quantity', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Giá</label>
                                <input type="number" class="form-control" name="product_price" id="inputZip" placeholder="vnđ">
                                {!! $errors->first('product_price', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" name="product_featured" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Sản phẩm nổi bật
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" name="status" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Hiển thị
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="add_product" style="background-color: green; float:right">Thêm sản phẩm</button>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection