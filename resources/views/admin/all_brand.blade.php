@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">sản phẩm</span></div>
            <div class="card-body">
              <a href="{{URL::to('/admin/add-brand')}}" class="btn btn-primary active"  aria-pressed="true" style="background-color: green; float:right; border:black">Thêm NXB</a>
                {{-- <div class="col-md-4">  
                  <input type="text" class="form-control" id="inputZip" placeholder="Tìm kiếm">
                </div> --}}
                <form action="{{ route('admin.web.findbrand') }}" method="GET">
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
                          <th>Tên NXB</th>
                          {{-- <th>Logo</th> --}}
                          <th>Mô tả</th>
                      
                          <th>Hiển thị</th>
                          <th style="float: center;padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                          $id = 1;
                        @endphp
                        @foreach ($brands as $key => $brand)
                        <tr>
                          <th scope="row">{{$id++}}</th>
                          <td>{{ $brand->brand_name }}</td>
                          {{-- <td><div class="avatar avatar-md"><img class="avatar-img" src="{{asset('/frontend/img/products')}}/{{ $brand->brand_logo }}" class="rounded mx-auto d-block" alt="{{$brand->brand_logo}}"></div></td>
                          --}}
                          <td>{{ $brand->brand_content }}</td>
                          
                          <td>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="changeStatus" onclick="changeStatus({{$brand->brand_id}},{{$brand->brand_status}})" value="{{$brand->brand_status}}" id="flexSwitchCheckChecked" @if($brand->brand_status == 1) checked  @endif>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          
                          <td>
                            <a href="{{URL::to('/admin/edit-brand')}}/{{$brand->brand_id}}" class="btn btn-primary active"  aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/admin/delete-brand')}}/{{$brand->brand_id}}" class="btn btn-danger" role="button"  aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
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
                {{$brands->links()}}
            </div>
        </nav>
          
        </div>
        
    </div>
    <script>

      function changeStatus(brand_id){
          console.log(brand_id);
          var brand_status = 0;
          if(document.getElementById('flexSwitchCheckChecked').checked){
            brand_status = 1;
          }
          else{
            brand_status = 0;
          }
          var myurl = "/admin/change-status-brand/brand_id="+brand_id+"&brand_status="+brand_status+"/";
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