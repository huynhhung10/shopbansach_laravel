@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Danh mục</span></div>
            <div class="card-body">
            <a href="{{URL::to('/admin/add-category')}}" class="btn btn-primary active"  style="background-color: green; float:right">Thêm danh mục</a>
            
            
            {{-- <div class="col-md-4">  
                <input type="text" class="form-control" id="inputZip" placeholder="Tìm kiếm">
            </div> --}}

            <form action="{{ route('admin.web.findcategory') }}" method="GET">
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
                          <th>Tên danh mục</th>
                          
                          <th>Hiển thị</th>
                          <th style="float: center;padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>
                      <tbody>
                        @php
                        $id = 1;
                      @endphp
                      @foreach ($category as $key => $cate)
                        <tr>
                          <th scope="row">{{$id++}}</th>
                          <td>{{ $cate->category_name }}</td>
                          
                          
                          <td>
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="changeStatus" onclick="changeStatus({{$cate->category_id}},{{$cate->status}})" value="{{$cate->status}}" id="flexSwitchCheckChecked" @if($cate->status == 1) checked  @endif>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          <td>
                            <a href="{{URL::to('/admin/edit-category')}}/{{$cate->category_id}}" class="btn btn-primary active"   aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/admin/delete-category')}}/{{$cate->category_id}}" class="btn btn-danger" role="button" aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
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
                {{$category->links()}}
            </div>
        </nav>
          
        </div>
        
    </div>

    <script>

      function changeStatus(category_id){
          console.log(category_id);
          var status = 0;
          if(document.getElementById('flexSwitchCheckChecked').checked){
              status = 1;
          }
          else{
              status = 0;
          }
          var myurl = "/admin/change-status-category/category_id="+category_id+"&status="+status+"/";
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