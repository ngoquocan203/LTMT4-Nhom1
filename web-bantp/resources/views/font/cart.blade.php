<!DOCTYPE html>
<html>
  @include('layout.head')
<body>
    <!-- navbar-->
 @include('layout.header')
      </div>
    </nav>
  <div id="content">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <!-- breadcrumb-->
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li aria-current="page" class="breadcrumb-item active">Shopping cart</li>
            </ol>
          </nav>
        </div>
        <div id="basket" class="col-lg-9">
          <div class="box">
            <form method="post" action="checkout1.html">
              <h1>Shopping cart</h1>
              <p class="text-muted">Bạn có 2 món trong giỏ hàng.</p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th colspan="2">Sản Phẩm</th>
                      <th>Số lượng</th>
                      <th>Giá tiền</th>
                      <th>Discount</th>
                      <th colspan="2">Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(Session::has('cart'))
                    @foreach($products as $pd)
                    <tr>
                      <td><a href="#"><img src="{{asset('admin_asset/img/'.$pd->feature_image)}}" alt="Sample"></a></td>
                      <td><a href="detail1.html">Cafe Chuli</a></td>
                      <td>
                        <input type="number" value="2" class="form-control">
                      </td>
                      <td>180.000vnd</td>
                      <td>0.00</td>
                      <td>360.000vnd</td>
                      <td><a href="#"><i class="fa fa-trash-o"></i></a></td>
                    </tr>
                   @endforeach 
                   @endif 
                  </tbody>
                  <tfoot>
                    <tr>
                      <th colspan="5">Thành tiền</th>
                      <th colspan="2">509.000vnd</th>
                    </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.table-responsive-->
              <div class="box-footer d-flex justify-content-between flex-column flex-lg-row">
                <div class="left"><a href="category.html" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i> Continue shopping</a></div>
                <div class="right">
                  <button class="btn btn-outline-secondary"><i class="fa fa-refresh"></i> Update cart</button>
                  <button type="submit" class="btn btn-primary">Proceed to checkout <i class="fa fa-chevron-right"></i></button>
                </div>
              </div>
            </form>
          </div>
          <!-- /.box-->      
        </div>
            
        <!-- /.col-lg-9-->
        <div class="col-lg-3">
          <div id="order-summary" class="box">
            <div class="box-header">
              <h3 class="mb-0">Phiếu Hàng</h3>
            </div>
            <p class="text-muted">Phí vận chuyển & bổ sung dựa theo đơn hàng</p>
            <div class="table-responsive">
              <table class="table">
                <tbody>
                  <tr>
                    <td>Tổng Tiền</td>
                    <th>509.000vnd</th>
                  </tr>
                  <tr>
                    <td>Phí Vận Chuyển</td>
                    <th>0.00vnd</th>
                  </tr>
                  <tr>
                    <td>Thuế</td>
                    <th>10.000vnd</th>
                  </tr>
                  <tr class="total">
                    <td>Tổng</td>
                    <th>519.000vnd</th>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <!-- /.col-md-3-->
      </div>
    </div>
  </div>
      @include('layout.bottommain')
    </div>
    <!-- JavaScript files-->
    @include('layout.footer')
  </body>
</html>