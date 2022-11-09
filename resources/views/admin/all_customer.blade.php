@extends('admin_layout')
@section('admin_content')

  
            @if (Session::has('edit-success'))
            <div class="alert alert-success">
                    {!! Session::get('edit-success') !!}         
            </div>
            @elseif (Session::has('delete-success'))
            <div class="alert alert-success">  
                    {!! Session::get('delete-success') !!}
            </div>
            @endif

            <div class="toast" data-autohide="false">
              <div class="toast-header">
                  <strong class="mr-auto text-primary">Success</strong>
                  <small class="text-muted">Just Now</small>
                  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
              </div>
              <div class="toast-body">
                  Thay đổi trạng thái thành công!!!
              </div>
            </div>


    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Khách hàng</span></div>
            <div class="card-body">
            <a href="{{URL::to('/admin/add-customer')}}" class="btn btn-primary active" aria-pressed="true" style="background-color: green; float:right; border: black">Thêm khách hàng</a>
            <div class="col-md-4">  
                <input type="search" name="search"  class="form-control" id="inputZip" placeholder="Tìm kiếm">
            </div>
            {{-- value="{{$search}}" --}}
              <div class="example">
             
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                  <table class="table">
                      <thead style="background-color: #C9C4C3 ">
                        <tr>
                          <th>#</th>
                          <th>Avatar</th>
                          <th>Username</th>
                          <th>Email</th>
                          <th>SĐT</th>            
                          <th>Khóa tài khoản</th>
                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        @php
                          $id = 1;
                        @endphp
                        @foreach ($customers as $key => $customer)
                        <tr>
                         
                          <th scope="row">{{$id++}}</th>
                         
                          <td><div class="avatar avatar-md"><img class="avatar-img" src="{{asset('/backend/assets/img/avatars/')}}/{{$customer->customer_avatar}}" alt="{{$customer->customer_avatar}}"></div></td>
                          
                          <td>{{ $customer->customer_username }}</td>
                          <td>{{ $customer->email }}</td>
                          <td>{{ $customer->customer_phone }}</td>
                          
                          <td style="float: center">
                            <div class="form-check form-switch">
                              <input class="form-check-input" type="checkbox" role="switch" name="changeStatus" onclick="changeStatus({{$customer->customer_id}},{{$customer->status}})" value="{{$customer->status}}" id="flexSwitchCheckChecked" @if($customer->status == 1) checked  @endif>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          <td>
                            <a href="{{URL::to('/admin/edit-customer')}}/{{$customer->customer_id}}" class="btn btn-primary active"  aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/admin/delete-customer')}}/{{$customer->customer_id}}" class="btn btn-primary active" role="button"  aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
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
                {{$customers->links('pagination::bootstrap-4')}}
            </div>
        </nav>
          
        </div>
        
    </div>
    <script>

      function changeStatus(customer_id){
          console.log(customer_id);
          var status = 0;
          if(document.getElementById('flexSwitchCheckChecked').checked){
              status = 1;
          }
          else{
              status = 0;
          }
          var myurl = "/admin/change-status-customer/customer_id="+customer_id+"&status="+status+"/";
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
  </script>
    
@endsection