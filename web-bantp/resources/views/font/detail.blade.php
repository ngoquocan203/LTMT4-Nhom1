<!DOCTYPE html>
<html lang="en">
@include('layout.head')
<body>

  @include('layout.header')

	<div class="container ">
    <div class="row">
      <div class="col-lg-12 my-4">
        <nav aria-label="breadcrumb">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{asset('font/home')}}" class="text-success">Home</a></li>
            <li class="breadcrumb-item">Sản phẩm</li>
            <li aria-current="page" class="breadcrumb-item active">{{$products->name}}</li>
          </ul>
        </nav>
      </div>

      @include('layout.menuver')

      <div class="col-lg-9">
      	<div class="row">
      		<div class="col-md-6">
      			<img class="d-block w-100" src="{{asset('admin_asset/img/'.$products->feature_image)}}" alt="Sample">
      		</div>
      		<div class="col-md-6">
      		  <div class="box">
              <h1 >{{$products->name}}</h1>

              @if($products->promotion_price == 0)
                <h3>Giá bán </h3>
                <h4 class="price">{{$products->price}}</h4>
              @else
                <h3>Giá bán </h3>
                <h4 class="price"><b><strike> {{$products->price}}</strike> </b></h4>
                <h3>Giá khuyến mãi </h3>
                <h4 class="price"><b style="color: orange;">{{$products->promotion_price}}</b></h4>
              @endif  

              <h3>Tình trạng</h3>
              <p>Còn hàng</p>
              <p class="text-center buttons"><a href="{{asset('font/cart/'.$products->id)}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a></p>
            </div>
          </div>
          <div class="box col-md-8" >
            <p></p>
            <h4 style="font-weight: bold;">Thông tin sản phẩm:</h4>
            {{$products->content}}
          </div>
          <div class="box col-md-4">
           	<h3 class="text-success">Thông Số</h3>
           	<h4 class="text-danger" >Định Lượng :<span style="font-weight: bold;">{{$products->quantity}}</span> </h4>
          </div>
        </div>
      </div>
    </div>
  </div>
     @include('layout.bottommain')

     @include('layout.footer')
</body>
</html>