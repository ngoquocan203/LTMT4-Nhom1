<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>
	<div class="container text-center py-5">
    <h2 class="mb-0">Thông tin tài khoản</h2>
  </div>
  <main>
    <div class="container">
      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-md-6">

          <!--Section: Content-->
          <section class="mt-4 mb-5">

           @include('admin.errors.not')
              @if(session('thongbao'))
                <div class="alert alert-success">
                  {{session('thongbao')}}
                </div>
              @endif
            <form method="POST" action="{{ url('editacc') }}">
              
              <div class="form-row">
                <div class="col">
                  <div class="md-form md-outline mt-0">
                    <label for="materialRegisterFormLastName">Tên Khách Hàng:</label>
                    <input type="text" id="materialRegisterFormLastName" class="form-control" name="fullname" value="{{Auth::user()->fullname}}">
                  </div>
                </div>
              </div><br>
              <div class="md-form md-outline mt-0">
                <label data-error="wrong" data-success="right" for="defaultForm-email2">Email:</label>
                <input type="email" id="defaultForm-email2" class="form-control" name="email" value="{{Auth::user()->email}}" disabled>

              </div><br>
              <div class="md-form md-outline mt-0">
                <label data-error="wrong" data-success="right" for="defaultForm-pass2">Mật khẩu</label>
                <input type="password" id="defaultForm-pass2" class="form-control" name="password" value="{{Auth::user()->password}}">              
              </div><br>
              
              <div class="text-center mb-2">
                <button type="submit" class="btn btn-primary mb-4 waves-effect waves-light">Hoàn tất</button>

              </div>
             
              {{csrf_field()}}
            </form>
             <div>
                <a href="{{url('login')}}"><button class="btn btn-primary mb-4 waves-effect waves-light"><< Đăng nhập</button></a>
                <a href="{{url('/')}}"><button class="btn btn-primary mb-4 waves-effect waves-light"><< Trang chủ</button></a>
              </div>
          </section>
          <!--Section: Content-->
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </div>
  </main>
</body>
</html>