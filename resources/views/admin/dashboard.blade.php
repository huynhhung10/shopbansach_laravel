@extends('admin_layout')
@section('admin_content')
    <div class="tab-content rounded-bottom">
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
                            {{-- @php
                                $c1 = 0;
                                $c2 = 0;
                                $c3 = 0;
                            @endphp
                            @foreach ($customer as $key => $cus)
                                $c1++;
                            @endforeach
                            @foreach ($order as $key => $or)
                                $c2++;
                            @endforeach
                            @foreach ($product as $key => $pro)
                                $c3++;
                            @endforeach --}}


                            <div>
                                <div class="fs-6 fw-semibold text-primary">@php{{ $c1++ }}@endphp 111</div>
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
                                <div class="fs-6 fw-semibold text-warning">$1.999,50</div>
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
            <!-- /.row-->
        </div>
    </div>
    </div>

    <!-- footer của bảng thống kê -->

    </div>
    </div>
@endsection
