@extends('admin_layout')
@section('admin_content')

    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
          <div class="car"></div>
          <div class="card mb-4">
            <div class="card-header"><strong>Danh sách</strong><span class="small ms-1">Đơn hàng</span></div>
            <div class="card-body">
          
            <div class="col-md-4">  
                <input type="text" class="form-control" id="inputZip" placeholder="Tìm kiếm">
            </div>

          
                
              <div class="example">
             
                <div class="tab-content rounded-bottom">
                  <div class="tab-pane p-3 active preview" role="tabpanel" id="preview-387">
                  <table class="table">
                      <thead style="background-color: #C9C4C3 ">
                        <tr>
                          <th>Stt</th>
                          <th>Mã đơn hàng</th>
                          <th>Tên khách hàng</th>
                          <th>Thành tiền</th>
                          <th>Ngày đặt</th>
                          <th>Tình trạng</th>
                          

                          <th style="float: center; padding: 7px 35px">Thao tác</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td></td>
                       
                         
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
                        </tr>
                        
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