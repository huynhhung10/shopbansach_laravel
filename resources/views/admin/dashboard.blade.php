@extends('admin_layout')
@section('admin_content')
    {{-- <div class="tab-content rounded-bottom">
        <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-691">
            <div class="row">
                <div class="col-6 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-primary text-white py-4 px-5 me-3">
                                <svg class="icon icon-xl">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                                </svg>
                            </div>
                           


                            <div>
                                <div class="fs-6 fw-semibold text-primary"> 111</div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Customer</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-info text-white py-4 px-5 me-3">
                                <svg class="icon icon-xl">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-laptop"></use>
                                </svg>
                            </div>
                            <div>

                                <div class="fs-6 fw-semibold text-info">$1.999,50</div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Order</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-warning text-white py-4 px-5 me-3">
                                <svg class="icon icon-xl">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-moon"></use>
                                </svg>
                            </div>
                            <div>
                               
                                <div class="fs-6 fw-semibold text-warning">@php echo $product @endphp</div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Products</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
                <div class="col-6 col-lg-3">
                    <div class="card overflow-hidden">
                        <div class="card-body p-0 d-flex align-items-center">
                            <div class="bg-danger text-white py-4 px-5 me-3">
                                <svg class="icon icon-xl">
                                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                                </svg>
                            </div>
                            <div>
                                <div class="fs-6 fw-semibold text-danger">$1.999,50</div>
                                <div class="text-medium-emphasis text-uppercase fw-semibold small">Widget title</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col-->
            </div>
        </div>
    </div> --}}



    <div class="tab-content rounded-bottom">
      <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-691">
          <div class="row">
              <div class="col-6 col-lg-3">
                  <div class="card overflow-hidden">
                      <div class="card-body p-0 d-flex align-items-center">
                          <div class="bg-primary text-white py-4 px-5 me-3">
                              <svg class="icon icon-xl">
                                  <use
                                      xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg#cil-people') }}">
                                  </use>
                              </svg>
                          </div>
                          <!-- /.row-->
                          <div>
                            <div class="fs-6 fw-semibold text-primary"> <?php echo $customers ?> </div>
                            <div class="text-medium-emphasis text-uppercase fw-semibold small">Customer</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-6 col-lg-3">
                      <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                              <div class="bg-info text-white py-4 px-5 me-3">
                                  <svg class="icon icon-xl">
                                      <use
                                          xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg#cil-basket') }}">
                                      </use>
                                  </svg>
                              </div>
                              <div>
                                  <div class="fs-6 fw-semibold text-info">@php echo $order @endphp</div>
                                  <div class="text-medium-emphasis text-uppercase fw-semibold small">Order
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-6 col-lg-3">
                      <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                              <div class="bg-warning text-white py-4 px-5 me-3">
                                  <svg class="icon icon-xl">
                                      <use
                                          xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg#cil-inbox') }}">
                                      </use>
                                  </svg>
                              </div>
                              <div>
                                  <div class="fs-6 fw-semibold text-warning">@php echo $product @endphp</div>
                                  <div class="text-medium-emphasis text-uppercase fw-semibold small">Products
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-->
                  <div class="col-6 col-lg-3">
                      <div class="card overflow-hidden">
                          <div class="card-body p-0 d-flex align-items-center">
                              <div class="bg-danger text-white py-4 px-5 me-3">
                                  <svg class="icon icon-xl">
                                      <use
                                          xlink:href="{{ asset('backend/vendors/@coreui/icons/svg/free.svg#cil-book') }}">
                                      </use>
                                  </svg>
                              </div>
                              <div>
                                  <div class="fs-6 fw-semibold text-danger">@php echo $brand @endphp</div>
                                  <div class="text-medium-emphasis text-uppercase fw-semibold small">Brand</div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- /.col-->
              </div>
          </div>

          <!-- footer của bảng thống kê -->

      </div>
  </div>
        

            @endsection
