@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">sản phẩm</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;" method="POST" action="{{URL::to('/admin/posteditproduct')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{$product->product_id}}" name="product_id">
                            <div class="col-md-6">
                                <label for="inputEmail4" class="form-label">Tên sản phảm</label>
                                <input type="text" class="form-control" value="{{$product->product_name}}" name="product_name" id="inputAddress">
                                {!! $errors->first('product_name', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                            <div class="col-md-6">
                                <label for="inputPassword4" class="form-label">Tên tác giả</label>
                                <input type="text" class="form-control" name="product_author" value="{{$product->product_author}}" id="inputAddress">
                                {!! $errors->first('product_author', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="product_content" value="" id="ckeditor1" placeholder="Mô tả sản phẩm">{{$product->product_content}}</textarea>
                                {!! $errors->first('product_content', '<small class="text-danger">:message</small>') !!}
                            </div>

                            <label for="inputAddress" class="form-label">Hình ảnh</label>
                            <div class="history-item__imgbox">
                                <img src="{{asset('/frontend/img/products')}}/{{$product->product_img}}" alt="{{$product->product_img}}" class="img-fluid img-thumbnail" style="width: 70px">
                            </div>
                            <div class="input-group mb-3">

                                <input type="file" class="form-control" name="product_img" value="{{$product->product_img}}" id="avatar">
                            </div>
                        
                           
                        
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">NXB</label>
                                <select id="inputState" name="product_brand" class="form-select">
                                    <option  value="{{$product->brand->brand_id}}" selected>{{$product->brand->brand_name}}</option>
                                @foreach ($brand as $key => $brand)                                    
                                
                                    <option  value="{{$brand->brand_id}}">{{$brand->brand_name}}</option>
                                @endforeach
                                </select>
                               
                            </div>
                            {!! $errors->first('product_brand', '<small class="text-danger">:message</small>') !!}
                            <div class="col-md-4">
                                <label for="inputState" class="form-label">Thể loại</label>
                                <select id="inputState" name="product_category" class="form-select">
                                    <option  value="{{$product->category->category_id}}" selected>{{$product->category->category_name}}</option>
                                @foreach ($category as $key => $cate)                                    
                                
                                    <option  value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                @endforeach
                          
                                </select>
                               
                            </div>

                             {!! $errors->first('product_category', '<small class="text-danger">:message</small>') !!}

                            <div class="col-md-2">
                                <label for="inputCity" class="form-label">Số lượng</label>
                                <input type="number"  data-validation="number" name="product_quantity" value="{{$product->product_quantity}}" class="form-control" id="inputCity">
                                {!! $errors->first('product_quantity', '<small class="text-danger">:message</small>') !!}
                            </div>
                            
                            <div class="col-md-2">
                                <label for="inputZip" class="form-label">Giá</label>
                                <input type="number" class="form-control" name="product_price" value="{{$product->product_price}}" id="inputZip" placeholder="vnđ">
                                {!! $errors->first('product_price', '<small class="text-danger">:message</small>') !!}
                            </div>
                            <div class="col-12">
                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" @if($product->product_featured == 1) checked id="gridCheck" @endif name="product_featured"  >
                                <label class="form-check-label" for="gridCheck">
                                    Sản phẩm nổi bật
                                </label>
                                </div>

                                <div class="form-check">
                                <input class="form-check-input" type="checkbox" @if($product->status == 1) checked @endif id="gridCheck" name="status"  >
                                <label class="form-check-label" for="gridCheck">
                                    Hiển thị
                                </label>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary" name="add_product" style="background-color: green; float:right">Sửa sản phẩm</button>
                                </div>
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection