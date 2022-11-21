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
                              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                              <label class="form-check-label" for="flexSwitchCheckChecked"></label>
                            </div>
                          </td>
                          <td>
                          <a href="{{URL::to('/admin/edit-category')}}/{{$cate->category_id}}" class="btn btn-primary active"   aria-pressed="true" style="background-color: #5DADE2;border: black ">sửa</a>
                            |
                            <a href="{{URL::to('/admin/delete-category')}}/{{$cate->category_id}}" class="btn btn-primary active" role="button" aria-pressed="true" style="background-color: #E74C3C; border: black">xóa</a>
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
            <ul class="pagination">
               <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
            </ul>
          </nav>
          
        </div>
        
    </div>

    
@endsection