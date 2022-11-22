@extends('admin_layout')
@section('admin_content')
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="car"></div>
            <div class="card mb-4">
                <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Sản phẩm</span></div>
                <div class="card-body">
                    <a href="{{ URL::to('/admin/add-product') }}" class="btn btn-primary active" aria-pressed="true"
                        style="background-color: green; float:right">Thêm sản phẩm</a>
                    {{-- <div class="col-md-4">
                        <input type="text" class="form-control" id="inputZip" placeholder="Tìm kiếm">
                    </div> --}}

                    <form action="{{ route('admin.web.findproduct') }}" method="GET">
                        {{ csrf_field() }}
                      {{-- <div class="col-md-4">   --}}
                          {{-- <input type="search" name="search_query"  class="form-control" id="inputZip" placeholder="Tìm kiếm" value="{{ request()->input('search_query') }}"><button type="submit" class="btn btn-primary">Search</button> --}}
                      {{-- </div> --}}
                      <div class="input-group mb-3" style="width: 450px">
                        <input type="search" name="search_query" class="form-control" placeholder="Tìm kiếm" >
                        <button class="btn btn-outline-secondary" type = "submit" style="background-color:#5DADE2;color:black" id="button-addon2">Search</button>
                      </div>
                      {{-- value="{{$search}}" --}}
                      
                      </form>

                    <div class="example">

                        <div class="tab-content rounded-bottom">
                            <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                                <table class="table">
                                    <thead style="background-color: #C9C4C3 ">
                                        <tr>
                                            <th>Stt</th>
                                            <th>Tên sản phẩm</th>
                                            <th>Tác giả</th>
                                            <th>Hình sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                           
                                            <th style="float: center; padding: 7px 35px">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $id = 1;
                                        @endphp
                                        @foreach ($products as $key => $product)
                                            <tr>
                                                <th scope="row">{{ $id++ }}</th>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->product_author }}</td>
                                                <td>
                                                    <div class="history-item__imgbox"><img src="{{asset('/frontend/img/products')}}/{{$product->product_img}}"class="history-item__img"alt="{{ $product->product_img }}"></div>
           
                                                </td>
                                                <td>{{ $product->product_quantity }}</td>
                                                <td>{{ $product->product_price }}</td>

                                                <td>

                                                    <a href="{{URL::to('/admin/edit-product')}}/{{$product->product_id}}" class="btn btn-primary active" 
                                                         aria-pressed="true"
                                                        style="background-color: #5DADE2;border: black ">sửa</a>
                                                    |
                                                    <a href="{{URL::to('/admin/delete-product')}}/{{$product->product_id}}" class="btn btn-danger" role="button"
                                                         aria-pressed="true"
                                                        style="background-color: #E74C3C; border: black">xóa</a>
                                                </td>
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>


                </div>

            </div>
            <nav aria-label="Page navigation example" style="float:right">
                <div>
                    {{$products->links()}}
                </div>
            </nav>

        </div>

    </div>
    <script>

        function changeStatus(product_id){
            console.log(product_id);
            var status = 0;
            if(document.getElementById('flexSwitchCheckChecked').checked){
                status = 1;
            }
            else{
                status = 0;
            }
            var myurl = "/admin/change-status-product/product_id="+product_id+"&status="+status+"/";
            $.ajax({
                url :myurl ,
                type: "GET",
                dataType: "json",
                success: function(data)
                {
                    if(data.status == "success") {
                        toastr.success('Thay đổi trạng thái thành công!', "success");
                    }
                    else{
                        toastr.warning("Xảy ra lỗi!!!","Fail");
                    }
                    
                }
            });
        }
    
    
    
    $('.btn-danger').on('click', function (event) {
      event.preventDefault();
      const url = $(this).attr('href');
      swal({
          title: 'Bạn có chắc?',
          text: 'Dữ liệu sẽ bị xóa vĩnh viễn và không thể phục hồi!!!!',
          icon: 'warning',
          buttons: ["Không", "Có!"],
      }).then(function(value) {
          if (value) {
              window.location.href = url;
          }
      });
    });
    
    </script>
@endsection
