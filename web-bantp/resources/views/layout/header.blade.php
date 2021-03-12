 <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{asset('font/home')}}">
        <strong>
          <span class="text-success">Eco</span>
          <span>Love</span>
          <span class="text-success"></span>
        </strong>
      </a>

      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{asset('font/home')}}">Trang chủ <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Sản phẩm
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              @foreach($category as $cate)
                 <a class="dropdown-item" href="{{asset('font/product/'.$cate->id)}}" >{{$cate->name}}</a>
                @endforeach
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Hỗ Trợ</a>
          </li>
          <li class="nav-item">
           <a class="nav-link" href="#">About</a>
         </li>
       </ul>
     </div>

     <div class="collapse navbar-collapse left-content-end" id="navbarNavDropdown"> 
      <form class="form-inline" method="get" action="{{'font/search/'}}" style="margin-right: 100px">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="result">
        <button class="btn btn-outline-success my-1 my-sm-0" type="submit">Tìm kiếm</button>
      </form>
    </div>
    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li >
          <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block" style="margin-right: 100px"><a href="{{url('font/showcart')}}" class="btn btn-primary navbar-btn bg-success my-4" ><i class="fa fa-shopping-cart"></i><span> Giỏ hàng</span></a></div>
        </li>
        @if(Auth::check()) 
          <li class="nav-item nav-item dropdown" style="font-size: 13px;">
          <a class="nav-link" href="" style="">Xin chào <p style="font-size: 12px">{{Auth::user()->email}}</p></a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item nav-link" href="{{url('editacc')}}" >Chỉnh sửa thông tin</a>
            <a class="dropdown-item nav-link" href="{{url('admin/logout')}}" >Logout</a>

          </div>
          </li>
         @else
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
              Tài Khoản
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item nav-link" href="{{url('login')}}" >Đăng nhập</a>
              <a class="dropdown-item nav-link" href="{{url('register')}}" >Đăng kí</a>
            </div>
          </li>
          
        @endif
      </ul>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>