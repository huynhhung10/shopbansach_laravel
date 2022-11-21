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
                                            <th>Hình sản phẩm</th>
                                            <th>Số lượng</th>
                                            <th>Giá</th>
                                            <th>Hiển thị</th>
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
                                                <td>
                                                    <div class="avatar avatar-md"><img
                                                            src="{{ asset($product->product_img) }}"
                                                            class="avatar-img rounded mx-auto d-block"
                                                            alt="{{ $product->product_img }}"></div>
                                                </td>
                                                <td>{{ $product->product_quantity }}</td>
                                                <td>{{ $product->product_price }}</td>

                                                <td>
                                                    <div class="form-check form-switch">
                                                        <input class="form-check-input" type="checkbox" role="switch"
                                                            id="flexSwitchCheckChecked" checked>
                                                        <label class="form-check-label"
                                                            for="flexSwitchCheckChecked"></label>
                                                    </div>
                                                </td>
                                                <td>

                                                    <a href="{{URL::to('/admin/edit-product')}}/{{$product->product_id}}" class="btn btn-primary active" 
                                                         aria-pressed="true"
                                                        style="background-color: #5DADE2;border: black ">sửa</a>
                                                    |
                                                    <a href="{{URL::to('/admin/delete-product')}}/{{$product->product_id}}" class="btn btn-primary active" role="button"
                                                        data-toggle="tooltip" aria-pressed="true"
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
@endsection
