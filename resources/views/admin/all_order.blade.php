@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Đơn hàng</span></div>
            <div class="card-body">

              <div class="example">
                <form action="{{ route('admin.web.findorder') }}" method="GET">
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
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                  <table class="table table-striped">
                      <thead>
                        <tr>
                          
                          <th>#</th>
                          <th>Tên khách hàng</th>
                          <th>Thành tiền</th>
                          <th>Ngày đặt</th>
                          <th>Tình trạng</th>
                          <th></th>
                          <th></th>                       
                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        {{-- <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                         
                       
                         
                          <td>Otto</td>
                          <td>@mdo</td>
                          
                          <td>
                         
                          </td>
                          <td>
                          <div class="col-md-8">
                                  <select id="inputState" class="form-select">
                                    <option selected>tình trạng</option>
                                    <option>...</option>
                                  </select>
                                  
                          </div>
                          
                          </td>
                          <td>
                            <button type="button" class="btn btn-success">Cập nhật</button>
                            |
                      
                            <a href="#" class="btn btn-primary active" role="button" data-coreui-toggle="button" aria-pressed="true" style="background-color: #5DADE2;border: black ">chi tiet</a>
                            |
                            <a href="#" class="btn btn-primary active" role="button" data-coreui-toggle="button" aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
                          </td>
                        </tr> --}}
                            @php 
                            $i = 0;
                            @endphp
                            @foreach($order as $key => $ord)
                              @php 
                              $i++;
                              @endphp
                            <tr>
                              <td>{{ $ord->order_id }}</td>
                              <td>{{ $ord->customer_name }}</td>
                              <td>{{ $ord->order_total }}</td>
                              <td>{{ $ord->created_at }}</td>
                              <td>@if($ord->order_status==1)
                                <span class="badge rounded-pill text-bg-info">Đơn hàng mới</span>
                                @elseif ($ord->order_status==2)
                                  
                                  <span class="badge rounded-pill text-bg-warning">Chờ xử lý</span>
                                  
                                  @else 
                                  <span class="badge rounded-pill text-bg-success">Đã xử lý</span>
                                  @endif
                              </td>
                            
                            
                              <td>
                                <form method="POST" action="{{ URL::to('admin/change-status-order') }}/{{ $ord->order_id }}">
                                  @csrf
                                  <input type="hidden" name="order_id" value="{{ $ord->order_id }}"/>
                                  <div class="col-md-4">
                                   
                              <td>       <select id="inputState" name="order_status" class="form-select">
                                          <option value= '3'>chosse....</option>
                                          <option value = '1'>đơn hàng mới</option>
                                          <option value = '2'>Chờ xử lý</option>
                                          <option value = '3'>Đã xử lý</option>
                                        </select>
                               </td>           
                                       
                                </div>
                                <td><button type="submit" class="btn btn-success">Cập nhật</button></td>
                              </form>
                                </td>
                                <td>
                            
                                  <a href="{{URL::to('/admin/detail-order')}}/{{$ord->order_id}}" class="btn btn-primary active" aria-pressed="true" style="background-color: #5DADE2;border: black ">chi tiết</a>
                                 
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
                {{$order->links()}}
            </div>
        </nav>
          
        </div>
        
    </div>

    
@endsection