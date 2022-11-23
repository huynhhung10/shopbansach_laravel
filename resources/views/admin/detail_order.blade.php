@extends('admin_layout')
@section('admin_content')
{{-- <input type="number" min="1" {{$order_status==2 ? 'disabled' : ''}} class="order_qty_{{$details->product_id}}" value="{{$details->product_sales_quantity}}" name="product_sales_quantity">

<input type="hidden" name="order_qty_storage" class="order_qty_storage_{{$details->product_id}}" value="{{$details->product->product_quantity}}">

<input type="hidden" name="order_code" class="order_code" value="{{$details->order_code}}"> --}}
{{-- 
<input type="hidden" name="order_product_id" class="order_product_id" value="{{$details->product_id}}"> --}}
<div class="body flex-grow-1 px-3">
    <div class="container-lg">
         
      <div class="card mb-4">
                <div class="card-header"><strong>Chi tiết</strong><span class="small ms-1">đơn hàng</span></div>
               
                {{-- table --}}
                <div class="example">
                  
                    <div class="tab-content rounded-bottom">
                      
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                      <table class="table">
                          <thead>
                            <tr>
                              
                              <th>Tên người đặt</th>
                              <th>Email nhận hàng</th>
                              <th>Địa chỉ</th>
                              <th>SĐT</th>
                              <th></th>            
                              
                            </tr>
                          </thead>
                          
                          <tbody>
                            {{-- @php
                              $id = 1;
                            @endphp
                            @foreach ($customers as $key => $customer) --}}
                            <tr>
                             
                             
                             
                              {{-- <td><div class="avatar avatar-md"><img class="avatar-img" src="{{asset('/backend/assets/img/avatars/')}}/{{$customer->customer_avatar}}" alt="{{$customer->customer_avatar}}"></div></td> --}}
                              
                              <td>{{ $shipping->shipping_name}}</td>
                              <td>{{ $shipping->shipping_email}}</td>
                              <td>{{ $shipping->shipping_address}}</td>
                              <td>{{ $shipping->shipping_phone}}</td>
                              <td>{{ $shipping->shipping_method}}</td>
                              
                             
                            </tr>
                            {{-- @endforeach --}}
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
    
                    
                </div>
                {{-- table --}}
                <div class="example">
             
                    <div class="tab-content rounded-bottom">
                      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                      <table class="table">
                          <thead>
                            <tr>
                              
                              <th></th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>SĐT</th>            
                              
                            </tr>
                          </thead>
                          
                          <tbody>
                            {{-- @php
                              $id = 1;
                            @endphp
                            @foreach ($customers as $key => $customer) --}}
                            <tr>
                             
                              
                             
                              {{-- <td><div class="avatar avatar-md"><img class="avatar-img" src="{{asset('/backend/assets/img/avatars/')}}/{{$customer->customer_avatar}}" alt="{{$customer->customer_avatar}}"></div></td> --}}
                              <td><div class="avatar avatar-md"><img class="avatar-img" src="{{asset('/backend/assets/img/avatars/')}}/{{$customer->customer_avatar}}" alt="{{$customer->customer_avatar}}"></div></td>
                              <td>{{$customer->customer_name}}</td>
                              
                              <td>{{$customer->email}}</td>
                              <td>{{$customer->customer_phone}}</td>
                             
                            </tr>
                            {{-- @endforeach --}}
                            
                          </tbody>
                        </table>
                      </div>
                    </div>
    
                    
                </div>
                @foreach($order as $key => $details)
                
              @endforeach
                {{--  --}}
           
                  <div class="card-body">
                      <div class="history__order">
                          @foreach($order_details as $key => $details)
                            <div class="history__item history__showing "> 
                               
                                <div class="history-item__product history--flex4">
                                  
                                 
                                  <div class="history-item__imgbox">
                             
                                        <img class="history-item__img" src="{{asset('/frontend/img/products')}}/{{$details->product->product_img}}" alt="">
                                  </div>

                                    <div class="history-item__info">
                                        <h2 class="history-item__title">{{$details->product_name}}</h2>
                                        <div class="history-item__box">
                                          <span>ID sản phẩm</span>
                                          <p class="history-item__type">{{$details->product->product_id}}</p>
                                      </div>
                                        <div class="history-item__box">
                                            <span>Tác giả:</span>
                                            <p class="history-item__type">{{$details->product->product_author}}</p>
                                        </div>
                                        <div class="history-item__box">
                                            <span>Số lượng:</span>
                                            <p class="history-item__type">{{$details->product_sales_quantity}}</p>
                                        </div>
                                    </div>
                                    <p class="history-item__total">{{number_format($details->product_price*$details->product_sales_quantity ,0,',','.')}} đ</p>
                                     
                                </div>
                                
                                
                            </div>
                            @endforeach
                      </div>
                      @foreach($order as $key => $or)
                                                  <div class="history-order__totalbox">
                                                    <div class="history-order__total">
                                                        <span>Tổng số tiền:</span>
                                                        <p class="history-total__total">{{$or->order_total }}đ</p>
                                                      </div>
                                                  </div>
                                                  @endforeach
                      </div>
                
      </div>
    </div>
</div>
@endsection