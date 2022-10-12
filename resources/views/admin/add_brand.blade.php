@extends('admin_layout')
@section('admin_content')
<div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Thêm</strong><span class="small ms-1">Nhà xuất bản</span></div>
                    <div class="card-body">
                        <form class="row g-3" style="padding:20px 20px;">
                            <div class="col-md-12">
                                <label for="inputEmail4" class="form-label">Tên NXB</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            
                            <div class="col-12">
                                <label for="inputAddress" class="form-label">Mô tả</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="product_desc" id="ckeditor1" placeholder="Mô tả NXB"></textarea>
                            </div>
                            <label for="inputAddress" class="form-label">Logo</label>
                            <div class="input-group mb-3">
                                
                                <label class="input-group-text" for="inputGroupFile01">Upload</label>
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        
                            
                            
                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
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